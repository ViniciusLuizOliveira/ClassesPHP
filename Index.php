<?php
class Entidade {
    private $nome;
    private $datadn;
    private $CPF;
    private $RG;

    public function setEntidade($nome,$datadn,$CPF,$RG){
        $this->nome=$nome;
        $this->datadn=$datadn;
        $this->CPF=$CPF;
        $this->RG=$RG;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDatadn(){
        return $this->datadn;
    }
    public function getCPF(){
        return $this->CPF;
    }
    public function getRG(){
        return $this->RG;
    }
}
Class Engenheiro extends Entidade{

    public function setEngenheiro($CREA){
        $this->CREA = $CREA;
    }
    public function getCREA(){
        return $this->CREA;
    }
}
Class Médico extends Entidade{

    public function setMédico($Médico){
        $this->Médico = $Médico;
    }
    public function getMédico(){
        return $this->Médico;
    }
}


$engenheiro= new Engenheiro();
$engenheiro->setEngenheiro("João, 20/06/1979, CPF: 711-911-51, RG, CREA");
var_dump($engenheiro);

$médico = new Médico();
$médico-> setMédico("José, 07/03/1977, CPF: 000-000-00, RG, CRM");
var_dump($médico);