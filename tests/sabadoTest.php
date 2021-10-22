<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/sabado.php");

class sabadoTest extends TestCase
{
    public function testVerificaMsg(){
        $sabado = new sabado();
        $sabado->passaMensagem("Sabado");
        $this->assertStringMatchesFormat("%a", $sabado->enviaMensagem());
    }

}












?>