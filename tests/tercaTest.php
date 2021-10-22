<?php

use PHPUnit\Framework\TestCase;
require_once ("src/classes/terca.php");

class tercaTest extends TestCase
{
    public function testVerificaMsg(){
        $terca = new terca();
        $terca->passaMensagem("Terça");
        $this->assertStringMatchesFormat("%a", $terca->enviaMensagem());
    }

}












?>