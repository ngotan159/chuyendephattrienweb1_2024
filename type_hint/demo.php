<?php

declare(strict_types=1);

require_once('I.php');
require_once('A.php');
require_once('B.php');
require_once('C.php');

$a = new A();
$b = new B();

$a->a1();
echo "<br>";
$b->b1();
class Demo {
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeAReturnNull(): ?A { // Nullable return type
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeBReturnNull(): ?B { // Nullable return type
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeCReturnNull(): ?C { // Nullable return type
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnNull(): ?I { // Nullable return type
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

$demo = new Demo();
$demo->typeAReturnA();
$demo->typeIReturnC();