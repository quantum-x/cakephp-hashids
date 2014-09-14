<?php
App::uses('Component', 'Controller');
App::import('Vendor', 'Hashids' . DS . 'Hashids');

class HashidsComponent extends Component {

  private static $hashids;

  public function __construct(ComponentCollection $collection = null, $settings = array()) {
    $settings = Set::merge(array (
        'salt' => '',
        'min_hash_length' => 0,
        'alphabet' => ''
    ), $settings);

    self::$hashids = new Hashids\Hashids($settings['salt'], $settings['min_hash_length'], $settings['alphabet']);
  }

  public static function encrypt() {
    return call_user_func_array(array (
        self::$hashids,
        'encode'
    ), func_get_args());
  }

  public static function decrypt($hash) {
    return self::$hashids->decode($hash);
  }

  public static function encrypt_hex($str) {
    return self::$hashids->encode_hex($str);
  }

  public static function decrypt_hex($hash) {
    return self::$hashids->decode_hex($hash);
  }

  public static function get_max_int_value() {
    return self::$hashids->get_max_int_value();
  }
}
