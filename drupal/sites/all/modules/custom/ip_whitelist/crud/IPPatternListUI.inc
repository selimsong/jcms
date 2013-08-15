<?php

class IPPatternListUI extends CrudGroupedListUI {
  public static $name = 'IP Whitelist';
  public static $machineName = 'IP addresses';
  public static $urlName = 'ip-whitelist';

  protected $table = 'ip_whitelist_pattern';
  protected $primary_key = 'id';
  // protected $order_by = 'title';
  // protected $order = 'ASC';
  // public $limit = 20;

  /**
   * Name of the field used to group items into separate tables.
   *
   * @var string
   */
  protected $group_field = 'groupname';

  /**
   * Overrides CrudListUI::getPath().
   */
  public static function getPath() {
    return 'admin/qualcomm/' . self::$urlName;
  }

  /**
   * Implements CrudStandardListUI::getColumns().
   */
  public function getColumns() {
    return array(
      array(
        'data' => t('Name'),
        'field' => 'name',
      ),
      array(
        'data' => t('IP Start'),
        'field' => 'first',
      ),
      array(
        'data' => t('IP End'),
        'field' => 'last',
      ),
      array(
        'data' => t('Active'),
        'field' => 'active',
      ),
    );
  }

  /**
   * Overrides CrudListUI::formatItem().
   */
  public function formatItem(&$item) {
    $item->active = $item->active ? t('Yes') : t('No');
  }

  /**
   * Implements CrudListUI::loadItems().
   */
  protected function loadItems() {
    $items = array();
    $query = db_select('ip_whitelist_pattern', 'p');
    $group_alias = $query->leftJoin('ip_whitelist_group', 'g', 'g.id = p.gid');
    $query
      ->fields('p', array('id', 'name', 'first', 'last', 'active'))
      ->addField($group_alias, 'name', 'groupname');
    $query->orderBy('gid');
    $result = $query->execute()->fetchAll();
    return $result;
  }

}
