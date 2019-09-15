
<?php
class myClass {
  static $myProperty = 42;
  static function myMethod() {
    echo self::$myProperty;
  }
}

myClass::myMethod();
?>
