<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hardware
 *
 * @author Sam
 */
class Hardware extends Banco{
    //put your code here
    
    private $Pass_Bios;
    private $Desat_Bios;
    private $Verific_Devices;
    private $Muda_Drive;
    private $Ad_Dom_Zap;
    private $Valid_Zap_Admin;
    
    
    
    public function getPass_Bios() {
        return $this->Pass_Bios;
    }

    public function getDesat_Bios() {
        return $this->Desat_Bios;
    }

    public function getVerific_Devices() {
        return $this->Verific_Devices;
    }

    public function getMuda_Drive() {
        return $this->Muda_Drive;
    }

    public function getAd_Dom_Zap() {
        return $this->Ad_Dom_Zap;
    }

    public function getValid_Zap_Admin() {
        return $this->Valid_Zap_Admin;
    }

    public function setPass_Bios($Pass_Bios) {
        
        $this->Pass_Bios = $Pass_Bios;
    }

    public function setDesat_Bios($Desat_Bios) {
        $this->Desat_Bios = $Desat_Bios;
    }

    public function setVerific_Devices($Verific_Devices) {
        $this->Verific_Devices = $Verific_Devices;
    }

    public function setMuda_Drive($Muda_Drive) {
        $this->Muda_Drive = $Muda_Drive;
    }

    public function setAd_Dom_Zap($Ad_Dom_Zap) {
        $this->Ad_Dom_Zap = $Ad_Dom_Zap;
    }

    public function setValid_Zap_Admin($Valid_Zap_Admin) {
        $this->Valid_Zap_Admin = $Valid_Zap_Admin;
    }


      function Novo_Hardware(){
          
          try {
              
           
          $pdo=  $this->conectar();
          $valor="INSERT INTO hardware(PasswordBios,Desat_Bios,Verific_Devices,Muda_Drive,Ad_Dom_Zap,Valid_Zap_Admin)VALUES(:PasswordBios,:Desat_Bios,:Verific_Devices,:Muda_Drive,:Ad_Dom_Zap,:Valid_Zap_Admin)";
          $novo=$pdo->prepare($valor);
          $novo->bindValue(':PasswordBios',  $this->getPass_Bios());
          $novo->bindValue(':Desat_Bios',  $this->getDesat_Bios());
          $novo->bindValue(':Verific_Devices',  $this->getVerific_Devices());
          $novo->bindValue(':Muda_Drive',  $this->getMuda_Drive());
          $novo->bindValue(':Ad_Dom_Zap',  $this->getAd_Dom_Zap());
          $novo->bindValue(':Valid_Zap_Admin',  $this->getValid_Zap_Admin());
          $novo->execute();
          
         print $novo->rowCount();
         }
         catch (Exception $ex) {
              
          }
      }    
    
    
}
