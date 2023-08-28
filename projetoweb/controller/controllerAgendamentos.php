<?php

class ControllerAgendamento{

    private $cadastro

    public function __construct(){
        $this->agendamentos = new Agendamentos();
        $this->incluir();
    }

    private function incluir(){
        $this->agendamentos->setNome($_POST['txtNome']);
    }

}

?>