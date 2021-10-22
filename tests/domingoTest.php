<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/domingo.php");

class domingoTest extends TestCase
{
    public function testVerificaMsg(){
        $domingo = new domingo();
        $domingo->passaMensagem("Domingo");
        $this->assertStringMatchesFormat("%a", $domingo->enviaMensagem());
    }

}












?>