<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/sexta.php");

class sextaTest extends TestCase
{
    public function testVerificaMsg(){
        $sexta = new sexta();
        $sexta->passaMensagem("Sexta");
        $this->assertStringMatchesFormat("%a", $sexta->enviaMensagem());
    }

}












?>