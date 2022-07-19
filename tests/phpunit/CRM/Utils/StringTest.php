<?php

class CRM_Utils_StringTest extends \PHPUnit\Framework\TestCase {

  public function testEllipsify() {
    $maxLen = 5;
    $cases = [
      '1' => '1',
      '12345' => '12345',
      '123456' => '12...',
    ];
    foreach ($cases as $input => $expected) {
      $this->assertEquals($expected, CRM_Utils_String::ellipsify($input, $maxLen));
    }
    // test utf-8 string, CRM-18997
    $input = 'Registro de eventos on-line: Taller: "Onboarding - Cómo integrar exitosamente a los nuevos talentos dentro de su organización - Formación práctica."';
    $maxLen = 128;
    $this->assertEquals(TRUE, mb_check_encoding(CRM_Utils_String::ellipsify($input, $maxLen), 'UTF-8'));
  }

}
