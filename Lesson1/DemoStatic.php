<?php
class DemoStatic{
    static $x;

    //ключевое слово this использовать в статических методах запрещено!
    static function f(){
        self::$x = 10;
    }

    static function test(){
        self::f();
    }

    function usually(){
        DemoStatic::test();
    }

    static function testRun(){
        $o = new DemoStatic();
        $o->usually();
    }
}

DemoStatic::testRun();
echo DemoStatic::$x;