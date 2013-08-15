<?php

class IPPattern extends CrudItemDB {

  protected $table = 'ip_whitelist_pattern';
  protected $primary_key = 'id';
  protected $title_field = 'name';

  public function save() {
    $result = parent::save();
    if ($result) {
      variable_del('ip_whitelist');
    }
    return $result;
  }

  public function delete() {
    $success = parent::delete();
    if ($success) {
      variable_del('ip_whitelist');
    }
    return $success;
  }

  public function validate_ip($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP);
  }

}
