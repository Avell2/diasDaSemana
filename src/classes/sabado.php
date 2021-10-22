<?php
require_once ("src/interface/mensagemInterface.php");

class sabado implements MensagemInterface
{

    private $msg;

    public function getMsg(){
        return $this->msg;
    }
    
    public function setMsg($msg){

        $this->msg = $msg;

    }

    public function enviaMensagem(){
        $html =  '<label style="color:green">Continuará descansando</label><br>';
        return $html.' '.$this->msg."<br><img src='src/assets/imgs/".$this->msg.".png'>";
    }

    public function passaMensagem($msg){
        $this->setMsg($msg);
        return $this->enviaMensagem();
    }
}


?>