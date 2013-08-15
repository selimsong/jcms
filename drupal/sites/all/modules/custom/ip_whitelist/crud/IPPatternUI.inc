<?php

class IPPatternUI extends CrudItemUI {

  /**
   * Implements CrudItemUI::getForm().
   */
  public function getForm($form, &$form_state) {
    $pattern = $this->item;
    if (empty($pattern->id)) {
      drupal_set_title(t('Add new pattern'));
    }
    else {
      drupal_set_title(t('Edit @title', array('@title' => $pattern->name)));
    }

    $form['#attached']['js'] = array(
      drupal_get_path('module', 'ip_whitelist') . '/ip_range.js',
    );

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name'),
      '#required' => TRUE,
      '#default_value' => @$pattern->name,
    );
    $form['first'] = array(
      '#type' => 'textfield',
      '#title' => t('First IP Address'),
      '#required' => TRUE,
      '#description' => t('Enter the first IP address in the range.'),
      '#default_value' => @$pattern->first,
    );
    $form['last'] = array(
      '#type' => 'textfield',
      '#title' => t('Last IP Address'),
      '#required' => FALSE,
      '#description' => t('(Optional) Enter the last IP address in the range. If this field is left blank, the tool will create the regular expression for the single IP address entered in step 1.'),
      '#default_value' => @$pattern->last,
    );
    $form['pattern'] = array(
      '#type' => 'textfield',
      '#title' => t('Regex pattern'),
      '#required' => TRUE,
      '#description' => t('Automatically generated.'),
      '#default_value' => @$pattern->pattern,
    );
    $groups = db_select('ip_whitelist_group', 'g')
                ->fields('g', array('id', 'name'))
                ->execute()
                ->fetchAllKeyed();
    $form['gid'] = array(
      '#type' => 'select',
      '#title' => t('Group'),
      '#options' => $groups,
      '#default_value' => @$pattern->gid,
    );

    $form['active'] = array(
      '#type' => 'checkbox',
      '#title' => t('Active'),
      '#default_value' => isset($pattern->active) ? $pattern->active : TRUE,
    );

    $form['submit'] = array('#type' => 'submit', '#value' => t('Save'));
    return $form;
  }

  /**
   * Implements CrudItemUI::validateForm().
   */
  public function validateForm($form, &$form_state) {
    $item = new IPPattern();
    foreach (array('first', 'last') as $field) {
      if (!empty($form_state['values'][$field]) && !$item->validate_ip($form_state['values'][$field])) {
        form_set_error($field, t('You must enter a valid IP address.'));
      }
    }
    if (substr($form_state['values']['pattern'], 0, 1) != '^') {
      form_set_error('pattern', $form_state['values']['pattern']);
    }
  }

  /**
   * Implements CrudItemUI::submitForm().
   */
  public function submitForm($form, &$form_state) {
    $item = $this->item;
    foreach ($form_state['values'] as $field => $value) {
      $item->{$field} = $value;
    }
    $item->save();

    drupal_set_message(t("@title has been saved.", array('@title' => $this->item->name)));
  }

  /**
   * Implements CrudItemUI::getDestination().
   */
  public function getDestination() {
    return 'admin/qualcomm/ip-whitelist';
  }
}
