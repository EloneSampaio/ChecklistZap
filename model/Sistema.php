<?php

require_once '../Autoload.php';
spl_autoload_register('class_model');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sistema
 *
 * @author Sam
 */
class Sistema extends Banco{
    //put your code here

    
    private $Nome;
    private $Config_OutLook;
    private $Config_Impressora;
    private $Config_Antivir;
    private $Actual_Cadastr;
    private $ponto_Red;
    private $ponto_Red_Voip;
    private $Porta_Switch;
    private $Soft_Add;
    
    
    public function getNome() {
        return $this->Nome;
    }

    public function getConfig_OutLook() {
        return $this->Config_OutLook;
    }

    public function getConfig_Impressora() {
        return $this->Config_Impressora;
    }

    public function getConfig_Antivir() {
        return $this->Config_Antivir;
    }

    public function getActual_Cadastr() {
        return $this->Actual_Cadastr;
    }

    public function getPonto_Red() {
        return $this->ponto_Red;
    }

    public function getPonto_Red_Voip() {
        return $this->ponto_Red_Voip;
    }

    public function getPorta_Switch() {
        return $this->Porta_Switch;
    }

    public function getSoft_Add() {
        return $this->Soft_Add;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setConfig_OutLook($Config_OutLook) {
        $this->Config_OutLook = $Config_OutLook;
    }

    public function setConfig_Impressora($Config_Impressora) {
        $this->Config_Impressora = $Config_Impressora;
    }

    public function setConfig_Antivir($Config_Antivir) {
        $this->Config_Antivir = $Config_Antivir;
    }

    public function setActual_Cadastr($Actual_Cadastr) {
        $this->Actual_Cadastr = $Actual_Cadastr;
    }

    public function setPonto_Red($ponto_Red) {
        $this->ponto_Red = $ponto_Red;
    }

    public function setPonto_Red_Voip($ponto_Red_Voip) {
        $this->ponto_Red_Voip = $ponto_Red_Voip;
    }

    public function setPorta_Switch($Porta_Switch) {
        $this->Porta_Switch = $Porta_Switch;
    }

    public function setSoft_Add($Soft_Add) {
        $this->Soft_Add = $Soft_Add;
    }


    function Novo_Sistema(){
        
        try {
            
        
        $pdo=  $this->conectar();
        $valor="INSERT INTO sistema(Nome,Config_Outlook,Config_Impressora,Config_Antivirus,Actualiza_Cadastro,Ponto_Red,Ponto_Red_Voip,Porta_Switch,Soft_Add)VALUES(:Nome,:Config_Outlook,:Config_Impressora,:Config_Antivirus,:Actualiza_Cadastro,:Ponto_Red,:Ponto_Red_Voip,:Porta_Switch,:Soft_Add)";
        $novo=$pdo->prepare($valor);
        $novo->bindValue(':Nome',$this->getNome());
        $novo->bindValue(':Config_Outlook',  $this->getConfig_OutLook());
        $novo->bindValue(':Config_Impressora',  $this->getConfig_Impressora());
        $novo->bindValue(':Config_Antivirus',  $this->getConfig_Antivir());
        $novo->bindValue(':Actualiza_Cadastro',  $this->getActual_Cadastr());
        $novo->bindValue(':Ponto_Red',  $this->getPonto_Red());
        $novo->bindValue(':Ponto_Red_Voip',  $this->getPonto_Red_Voip());
        $novo->bindValue('Porta_Switch',  $this->getPorta_Switch());
        $novo->bindValue(':Soft_Add',  $this->getSoft_Add());
        
        $novo->execute();
        
    } catch (Exception $ex) {
            $ex->getMessage();
        }
    
    }
    
    
    
    
}
