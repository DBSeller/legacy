<?php

namespace DBSeller\Legacy\Tests\PHP56;
use DBSeller\Legacy\PHP56\Emulate;

class EmulateTest extends \PHPUnit_Framework_TestCase {

  function testExistence() {

    $o = new Emulate();
    $this->assertTrue(!!$o);
  }
  // /**
  //  * Split string into array by regular expression
  //  *
  //  * @return array
  //  */
  // public static function split($pattern, $string) {
  //   return explode($pattern, $string);
  // }
}
