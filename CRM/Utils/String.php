<?php

class CRM_Utils_String {

  /**
   * Truncate $string; if $string exceeds $maxLen, place "..." at the end
   *
   * @param string $string
   * @param int $maxLen
   * @return string
   */
  public static function ellipsify($string, $maxLen) {
    if (mb_strlen($string, 'UTF-8') <= $maxLen) {
      return $string;
    }
    return mb_substr($string, 0, $maxLen - 3, 'UTF-8') . '...';
  }

}
