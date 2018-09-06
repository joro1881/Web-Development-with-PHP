<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 6:26 PM
 */

interface Fooable
{
    public function ihatefooexamples();
}

class Foo implements Fooable
{
    public function ihatefooexamples()
    {
        return "boo-foo!";
    }
}

class FooBar implements Fooable
{
    public function ihatefooexamples()
    {
        return "really boo-foo";
    }
}

$foo = new Foo();

if (10 == $_GET['foolevel']) {
    $foo = new FooBar();
}

echo $foo->ihatefooexamples();