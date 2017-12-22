<?php

class MetaProgrammingPaymentCvs {

  const CONVENIENCE_CODE_DAILY_YAMAZAKI = '00006';
  const CONVENIENCE_CODE_THREE_F        = '00009';
  const CONVENIENCE_CODE_LAWSON         = '10001';
  const CONVENIENCE_CODE_FAMILY_MART    = '10002';
  const CONVENIENCE_CODE_SUNKUS         = '10003';
  const CONVENIENCE_CODE_CIRCLE_K       = '10004';
  const CONVENIENCE_CODE_MINI_STOP      = '10005';
  const CONVENIENCE_CODE_SEICO_MART     = '10008';

  private static $convenience_store_names = [
    'DailyYamazaki',
    'ThreeF',
    'Lawson',
    'FamilyMart',
    'Sunkus',
    'CircleK',
    'MiniStop',
    'SeicoMart'
  ];  

  public function isDailyYamazakiCode($convenience_store_code){
    return $convenience_store_code == self::CONVENIENCE_CODE_DAILY_YAMAZAKI;
  }

  public function isThreeCode($convenience_store_code){
    return $convenience_store_code == self::CONVENIENCE_CODE_THREE_F;
  }

  public function isLawsonCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_LAWSON;
  }

  public function isFamilyMartCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_FAMILY_MART;
  }

  public function isSunkusCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_SUNKUS;
  }

  public function isCircleKCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_CIRCLE_K;
  }

  public function isMiniStopCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_MINI_STOP;
  }

  public function isSeicoMartCode($convenience_store_code) {
    return $convenience_store_code == self::CONVENIENCE_CODE_SEICO_MART;
  }

  public function __call($name, $args) {
    foreach (self::$convenience_store_names as $convenience_store_name) {
      if ($name == "is{$convenience_store_name}Code") {
        $str = ltrim(strtoupper(preg_replace('/[A-Z]/', '_\0', $convenience_store_name)), '_');
        $convenience_store_code = $args[0];
        return $convenience_store_code == constant("self::CONVENIENCE_CODE_{$str}");
      }
    }

    return __call($name, $args);
  }

}
