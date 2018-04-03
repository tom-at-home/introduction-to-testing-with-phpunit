<?php
namespace Acme\Test;

class SimpleTest extends \PHPUnit\Framework\TestCase {

    public function testIsTrue()
    {
        $myvar = true;
        $this->assertTrue($myvar);
    }
}