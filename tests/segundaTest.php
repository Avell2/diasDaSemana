<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/segunda.php");

class segundaTest extends TestCase
{
    public function testVerificaMsg(){
        $segunda = new segunda();
        $segunda->passaMensagem("Segunda");
        $this->assertStringMatchesFormat("%a", $segunda->enviaMensagem());
    }

}












?>