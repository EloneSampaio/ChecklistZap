<?php

require_once 'Autoload.php';
spl_autoload_register('class_model');
/* incluindo a classe Banco para poder conectar-se ao banco usando a classe spl_autoload_register..
 
  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Workstation
 *
 * @author Sam
 */
class Workstation extends Banco{
    //put your code here
    //Variaves Privadas da classe Worksttation
    private $IdUtilizador;
    private $Tipo;
    private $Nome;
    private $Marca;
    private $Modelo;
    private $Disco;
    private $Memoria;
    private $Processador;
    private $SN;
    private $PN;
    private $Marc_Moni;
    private $Model_Moni;
    private $SN_Moni;
    private $Mac_Eth;
    private $Mac_Wirells;
    private $Mac_bluth;
    
    
    
    
    
    //Metodos getter e setter da classe Workstation...
    
    
    public function getIdUtilizador() {
        return $this->IdUtilizador;
    }

    public function getTipo() {
        return $this->Tipo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getMarca() {
        return $this->Marca;
    }

    public function getModelo() {
        return $this->Modelo;
    }

    public function getDisco() {
        return $this->Disco;
    }

    public function getMemoria() {
        return $this->Memoria;
    }

    public function getProcessador() {
        return $this->Processador;
    }

    public function getSN() {
        return $this->SN;
    }

    public function getPN() {
        return $this->PN;
    }

    public function getMarc_Moni() {
        return $this->Marc_Moni;
    }

    public function getModel_Moni() {
        return $this->Model_Moni;
    }

    public function getSN_Moni() {
        return $this->SN_Moni;
    }

    public function getMac_Eth() {
        return $this->Mac_Eth;
    }

    public function getMac_Wirells() {
        return $this->Mac_Wirells;
    }

    public function getMac_bluth() {
        return $this->Mac_bluth;
    }

    public function setIdUtilizador($IdUtilizador) {
        
        if($IdUtilizador!=NULL):
        $this->IdUtilizador = $IdUtilizador;    
        endif;
        
    }

    public function setTipo($Tipo) {
        
        if($Tipo!=NULL):
        $this->Tipo = $Tipo;    
        endif;
        
    }

    public function setNome($Nome) {
        
        if($Nome!=NULL):
        $this->Nome = $Nome;    
        endif;
        
    }

    public function setMarca($Marca) {
        
        if($Marca!=NULL):
        $this->Marca = $Marca;    
        endif;
        
    }

    public function setModelo($Modelo) {
        if($Modelo!=NULL):
        $this->Modelo = $Modelo;    
        endif;
        
    }

    public function setDisco($Disco) {
        
        if($Disco!=NULL):
        $this->Disco = $Disco;    
        endif;
        
    }

    public function setMemoria($Memoria) {
        
        if($Memoria!=NULL):
        $this->Memoria = $Memoria;    
        endif;
        
    }

    public function setProcessador($Processador) {
        
        if($Processador!=NULL):
        $this->Processador = $Processador;    
        endif;
        
    }

    public function setSN($SN) {
        
        if($SN!=NULL):
        $this->SN = $SN;    
        endif;
        
    }

    public function setPN($PN) {
        $this->PN = $PN;
    }

    public function setMarc_Moni($Marc_Moni) {
        $this->Marc_Moni = $Marc_Moni;
    }

    public function setModel_Moni($Model_Moni) {
        $this->Model_Moni = $Model_Moni;
    }

    public function setSN_Moni($SN_Moni) {
        $this->SN_Moni = $SN_Moni;
    }

    public function setMac_Eth($Mac_Eth) {
        
        if($Mac_Eth!=NULL):
        $this->Mac_Eth = $Mac_Eth;    
        endif;
        
    }

    public function setMac_Wirells($Mac_Wirells) {
       
        $this->Mac_Wirells = $Mac_Wirells;
    }

    public function setMac_bluth($Mac_bluth) {
        $this->Mac_bluth = $Mac_bluth;
    }


    
    //Funcao para guardar os dados da Workstation
    
    function Novo_Workstation(){
        try {
            
         
    $pdo=  $this->conectar();
    $valor="INSERT INTO workstation(IdUtilizador,Tipo,Nome,Marca,Modelo,Disco,Memoria,Processador,SN,PN,Marc_Moni,Model_Moni,SN_Moni,Mac_ethernet,Mac_wirells,Mac_blueth)VALUES(:IdUtilizador,:Tipo,:Nome,:Marca,:Modelo,:Disco,:Memoria,:Processador,:SN,:PN,:Marc_Moni,:Model_Moni,:SN_Moni,:Mac_ethernet,:Mac_wirells,:Mac_blueth)";
    $novo=$pdo->prepare($valor);
    $novo->bindValue(':IdUtilizador',  $this->getIdUtilizador());
    $novo->bindValue(':Tipo',  $this->getTipo());
    $novo->bindValue(':Nome',  $this->getNome());
    $novo->bindValue(':Marca',  $this->getMarca());
    $novo->bindValue(':Modelo',  $this->getModelo());
    $novo->bindValue(':Disco',  $this->getDisco());
    $novo->bindValue(':Memoria',  $this->getMemoria());
    $novo->bindValue(':Processador',  $this->getProcessador());
    $novo->bindValue(':SN',  $this->getSN());
    $novo->bindValue(':PN',  $this->getPN());
    $novo->bindValue(':Marc_Moni',  $this->getMarc_Moni());
    $novo->bindValue(':SN_Moni',  $this->getSN_Moni());
    $novo->bindValue(':Model_Moni',  $this->getModel_Moni());
    $novo->bindValue(':Mac_ethernet',  $this->getMac_Eth());
    $novo->bindValue(':Mac_wirells',  $this->getMac_Wirells());
    $novo->bindValue(':Mac_blueth',  $this->getMac_bluth());
    $novo->execute();
    
    
        }
    
    catch (Exception $ex) {
            $ex->getMessage();
        }
    
    }//FIM
    
    
    
     function Actualizar_Workstation(){
        try {
            
         
    $pdo=  $this->conectar();
    $valor="UPDATE workstation SET Tipo=:Tipo,Nome=:Nome,Marca=:Marca,Modelo=:Modelo,Disco=:Disco,Memoria=:Memoria,Processador=:Processador,SN=:SN,PN=:PN,Marc_Moni=:Marc_Moni,Model_Moni=:Model_Moni,SN_Moni=:SN_Moni,Mac_ethernet=:Mac_ethernet,Mac_wirells=:Mac_wirells,Mac_blueth=:Mac_blueth WHERE IdUtilizador=:IdUtilizador";
    $novo=$pdo->prepare($valor);
    $novo->bindValue(':IdUtilizador',  $this->getIdUtilizador());
    $novo->bindValue(':Tipo',  $this->getTipo());
    $novo->bindValue(':Nome',  $this->getNome());
    $novo->bindValue(':Marca',  $this->getMarca());
    $novo->bindValue(':Modelo',  $this->getModelo());
    $novo->bindValue(':Disco',  $this->getDisco());
    $novo->bindValue(':Memoria',  $this->getMemoria());
    $novo->bindValue(':Processador',  $this->getProcessador());
    $novo->bindValue(':SN',  $this->getSN());
    $novo->bindValue(':PN',  $this->getPN());
    $novo->bindValue(':Marc_Moni',  $this->getMarc_Moni());
    $novo->bindValue(':SN_Moni',  $this->getSN_Moni());
     $novo->bindValue(':Model_Moni',  $this->getModel_Moni());
    $novo->bindValue(':Mac_ethernet',  $this->getMac_Eth());
    $novo->bindValue(':Mac_wirells',  $this->getMac_Wirells());
    $novo->bindValue(':Mac_blueth',  $this->getMac_bluth());
    $novo->execute();
   
    
        }
    
    catch (Exception $ex) {
            $ex->getMessage();
        }
    
    }//FIM
    
    
    function Selecionar_Workstation(){
        
        try {
            
        
    $pdo=$this->conectar();
    $novo="SELECT *FROM workstation WHERE IdUtilizador=:IdUtilizador";
    $consulta=$pdo->prepare($novo);
    $consulta->bindValue(':IdUtilizador',  $this->getId());
    $consulta->execute();
    return  $consulta->fetchAll(PDO::FETCH_OBJ);
         
    }
    catch (Exception $ex) {
          $ex->getMessage();  
        }  
    }//fim
    
    
    
    function Selecionar_Todos_Workstation(){
        
        try {
         
    $pdo=$this->conectar();
    $novo="SELECT *FROM workstation ORDER BY Id DESC ";
    $consulta=$pdo->prepare($novo);
    $consulta->execute();
    return  $consulta->fetchAll(PDO::FETCH_OBJ);
    
        
        }
        catch (Exception $ex) {
          $ex->getMessage();  
        }
    }//Fim
    
    
    
    
    function Deletar_Workstation(){
        
        try {
            
       
    
    $pdo=$this->conectar();
    $novo="DELETE FROM workstation WHERE Id=:Id ";
    $deleta=$pdo->prepare($novo);
    $deleta->bindValue(':Id',  $this->getId());
    $deleta->execute();
    return  $deleta;
     } 
    catch (Exception $ex) {
          $ex->getMessage();  
        }
    
    }//FIm
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
