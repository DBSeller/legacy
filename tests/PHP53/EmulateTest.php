<?php

namespace DBSeller\Legacy\Tests\PHP53;
use DBSeller\Legacy\PHP53\Emulate;

class EmulateTest extends \PHPUnit_Framework_TestCase {

  function testExistence() {

    $o = new Emulate();
    $this->assertTrue(!!$o);
  }

  public function testSuperEnviroment() {

    Emulate::env();
    $this->assertTrue(isset($GLOBALS['_ENV']['PATH_INFO']));
  }

  public function testRegisterLongArray() {

    Emulate::registerLongArrays();
    $this->assertTrue(isset($GLOBALS['HTTP_ENV_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_GET_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_POST_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_COOKIE_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_SERVER_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_SESSION_VARS']));
    $this->assertTrue(isset($GLOBALS['HTTP_FILES_VARS']));
    
  }
}
