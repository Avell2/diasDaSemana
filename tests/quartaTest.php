<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/quarta.php");

class quartaTest extends TestCase
{
    public function testVerificaMsg(){
        $quarta = new quarta();
        $quarta->passaMensagem("Quarta");
        $this->assertStringMatchesFormat("%a", $quarta->enviaMensagem());
    }

}












?>