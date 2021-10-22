<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/quinta.php");

class quintaTest extends TestCase
{
    public function testVerificaMsg(){
        $quinta = new quinta();
        $quinta->passaMensagem("Quinta");
        $this->assertStringMatchesFormat("%a", $quinta->enviaMensagem());
    }

}












?>