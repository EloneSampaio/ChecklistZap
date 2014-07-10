<?php
require_once 'Autoload.php';
spl_autoload_register('class_model');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dao
 *
 * @author Sam
 */
class Dao extends Banco{
    //put your code here
    
    
    
    //Utilizador
    
    
    //Minhas Variaves Privadas;
    private $Nome;
    private $Empresa;
    private $Login;
    private $Direcao;
    private $Edificio;
    private  $Piso;
    private $Posicao;
    private $Contacto;
    private $Email;
    public $Id;
    //Utilizador
    
    
    //Classe que servira para manipulacao dos dados do Tecnico
    private $Nome_t;
    private $data;
    private $usuario_entreg;
    private $data_entrega;
    private $Comentarios;
//Tecnico
    
    
    //Sistema
    
    
     private $Nome_s;
    private $Config_OutLook;
    private $Config_Impressora;
    private $Config_Antivir;
    private $Actual_Cadastr;
    private $ponto_Red;
    private $ponto_Red_Voip;
    private $Porta_Switch;
    private $Soft_Add;
    private $ad_especific;
    //Sistema
    
    //Hardware
    private $Pass_Bios;
    private $Desat_Bios;
    private $Verific_Devices;
    private $Muda_Drive;
    private $Ad_Dom_Zap;
    private $Valid_Zap_Admin;
  //Hardware
    

    //Variaves Privadas da classe Worksttation
    private $IdUtilizador;
    private $Tipo;
    private $Nome_w;
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
    //Workstation

   //LOGIN
    
   private $nom;
   private $senha;
   private $nive;
   

   public function getNom() {
       return $this->nom;
   }

   public function setNom($nom) {
      if(!$nom==NULL):
       $this->nom = $nom;
      else:
          
      endif;
   }

      public function getNive() {
       return $this->nive;
   }

   public function setNive($nive) {
       
       if(!$nive==NULL):
       $this->nive = $nive;
       else:
           
           
       endif;
   }

      
   public function getSenha() {
       return $this->senha;
   }

   
   public function setSenha($senha) {
       if(!$senha==NULL):
       $this->senha = $senha;
       else:
        
       endif;
       
   }

   

   //Utilizador
    
    public function getId() {
        return $this->Id;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

        public function getNome() {
        return $this->Nome;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function getLogin() {
        return $this->Login;
    }

    public function getDirecao() {
        return $this->Direcao;
    }

    public function getEdificio() {
        return $this->Edificio;
    }

    public function getPiso() {
        return $this->Piso;
    }

    public function getPosicao() {
        return $this->Posicao;
    }

    public function getContacto() {
        return $this->Contacto;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setNome($Nome) {
        if($Nome!=NULL):
        $this->Nome = $Nome;    
        endif;
        
    }

    public function setEmpresa($Empresa) {
        if($Empresa!=NULL):
           $this->Empresa = $Empresa; 
        endif;
        
    }

    public function setLogin($Login) {
        if($Login!=NULL):
        $this->Login = $Login;    
        endif;
        
    }

    public function setDirecao($Direcao) {
        $this->Direcao = $Direcao;
    }

    public function setEdificio($Edificio) {
        if($Edificio!=NULL):
            $this->Edificio = $Edificio; 
        endif;
       
    }

    public function setPiso($Piso) {
        $this->Piso = $Piso;
    }

    public function setPosicao($Posicao) {
        $this->Posicao = $Posicao;
    }

    public function setContacto($Contacto) {
        $this->Contacto = $Contacto;
    }

    public function setEmail($Email) {
        
        $this->Email = $Email;
    }
//Utilizador
    
    //Tecnico
    
    
    
    public function getComentarios() {
        return $this->Comentarios;
    }

    
        public function getNome_t() {
        return $this->Nome_t;
    }

    public function getData() {
        return $this->data;
    }

    public function getUsuario_entreg() {
        return $this->usuario_entreg;
    }

    public function getData_entrega() {
        return $this->data_entrega;
    }

    public function setNome_t($Nome) {
        if($Nome!=NULL):
          $this->Nome_t = $Nome;  
        endif;
        
    }
    
    public function setComentarios($Comentarios) {
        $this->Comentarios = $Comentarios;
    }


    public function setData($data) {
        
        if($data!=NULL):
        $this->data = $data;    
        endif;
        
    }

    public function setUsuario_entreg($usuario_entreg) {
        
        if($usuario_entreg!=NULL):
        $this->usuario_entreg = $usuario_entreg;    
        endif;
        
    }

    public function setData_entrega($data_entrega) {
        
        if($data_entrega!=NULL):
        $this->data_entrega = $data_entrega;    
        endif;
        
    }
//Tecnico
    
    
    //Sistema
    
    public function getAd_especific() {
        return $this->ad_especific;
    }

    public function setAd_especific($ad_especific) {
        $this->ad_especific = $ad_especific;
    }

         public function getNome_s() {
        return $this->Nome_s;
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

    public function setNome_s($Nome) {
        $this->Nome_s = $Nome;
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

//Sistema
    
    //Hardware
    
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
//Hardware
    
    //Workstation
    
    public function getIdUtilizador() {
        return $this->IdUtilizador;
    }

    public function getTipo() {
        return $this->Tipo;
    }

    public function getNome_w() {
        return $this->Nome_w;
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
        
     
        $this->IdUtilizador = $IdUtilizador;    
        
        
    }

    public function setTipo($Tipo) {
        
        if($Tipo!=NULL):
        $this->Tipo = $Tipo;    
        endif;
        
    }

    public function setNome_w($Nome) {
        
        if($Nome!=NULL):
        $this->Nome_w = $Nome;    
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
//Workstation
    
    
    //Utilizador
    
    function Novo(){
        
        try {
            
        
    $pdo=$this->conectar();
    
$valor="INSERT INTO utilizador(Nome,Empresa,Login,Direcao,Edificio,Piso,Posicao,Contacto,Email)VALUES(:Nome,:Empresa,:Login,:Direcao,:Edificio,:Piso,:Posicao,:Contacto,:Email)";    
$novo=$pdo->prepare($valor);
$novo->bindValue(':Nome',  $this->getNome());        
$novo->bindValue(':Empresa',  $this->getEmpresa());  
$novo->bindValue(':Login',  $this->getLogin());
$novo->bindValue(':Direcao',  $this->getDirecao());
$novo->bindValue(':Edificio',  $this->getEdificio());
$novo->bindValue(':Piso',  $this->getPiso());
$novo->bindValue(':Posicao',  $this->getPosicao());
$novo->bindValue(':Contacto',  $this->getContacto());
$novo->bindValue(':Email',  $this->getEmail());
$novo->execute();
    
    
    


$this->setIdUtilizador($pdo->lastInsertId());



//Tecnico

    $pdo1=$this->conectar();    
        $valor1="INSERT INTO tecnico(Nome_t,Data,Usuario_Entregue,Data_Entrega,Comentarios,id_f)VALUES(:Nome_t,:Data,:Usuario_Entregue,:Data_Entregua,:Comentarios,:id_f)";
        $novo1=$pdo1->prepare($valor1);
        
        $novo1->bindValue(':Nome_t',$this->getNome_t());
        $novo1->bindValue(':Data',$this->getData());
        $novo1->bindValue(':Usuario_Entregue',$this->getUsuario_entreg());
        $novo1->bindValue(':Data_Entregua',$this->getData_entrega());
        $novo1->bindValue(':Comentarios',$this->getComentarios());
         $novo1->bindValue(':id_f',$this->getIdUtilizador());
        
        $novo1->execute();
        

//Tecnico

//Sistema
$pdo2=$this->conectar();
$valor2="INSERT INTO sistema(Nome_s,Config_Outlook,Config_Impressora,Config_Antivirus,Actualiza_Cadastro,Ponto_Red,Ponto_Red_Voip,Porta_Switch,Soft_Add,ad_especific,id_f)Values(:Nome_s,:Config_Outlook,:Config_Impressora,:Config_Antivirus,:Actualiza_Cadastro,:Ponto_Red,:Ponto_Red_Voip,:Porta_Switch,:Soft_Add,:ad_especific,:id_f)";
        $novo2=$pdo2->prepare($valor2);
        $novo2->bindValue(':Nome_s',$this->getNome_s());
        $novo2->bindValue(':Config_Outlook',  $this->getConfig_OutLook());
        $novo2->bindValue(':Config_Impressora',  $this->getConfig_Impressora());
        $novo2->bindValue(':Config_Antivirus',  $this->getConfig_Antivir());
        $novo2->bindValue(':Actualiza_Cadastro',  $this->getActual_Cadastr());
        $novo2->bindValue(':Ponto_Red',  $this->getPonto_Red());
        $novo2->bindValue(':Ponto_Red_Voip',  $this->getPonto_Red_Voip());
        $novo2->bindValue(':Porta_Switch',  $this->getPorta_Switch());
        $novo2->bindValue(':Soft_Add',  $this->getSoft_Add());
        $novo2->bindValue (':ad_especific',$this->getAd_especific());
        $novo2->bindValue(':id_f',$this->getIdUtilizador());
        $novo2->execute();


//Sistema


    //Hardware
$pdo3=$this->conectar();
$valor3="INSERT INTO hardware(PasswordBios,Desat_Bios,Verific_Devices,Muda_Drive,Ad_Dom_Zap,Valid_Zap_Admin,id_f)VALUES(:PasswordBios,:Desat_Bios,:Verific_Devices,:Muda_Drive,:Ad_Dom_Zap,:Valid_Zap_Admin,:id_f)";
          $novo3=$pdo3->prepare($valor3);
          $novo3->bindValue(':PasswordBios',  $this->getPass_Bios());
          $novo3->bindValue(':Desat_Bios',  $this->getDesat_Bios());
          $novo3->bindValue(':Verific_Devices',  $this->getVerific_Devices());
          $novo3->bindValue(':Muda_Drive',  $this->getMuda_Drive());
          $novo3->bindValue(':Ad_Dom_Zap',  $this->getAd_Dom_Zap());
          $novo3->bindValue(':Valid_Zap_Admin',  $this->getValid_Zap_Admin());
          $novo3->bindValue(':id_f',$this->getIdUtilizador());
         
          $novo3->execute();
          
          
          
        //Workstation  
          $pdo4=$this->conectar();
       $valor4="INSERT INTO workstation(Tipo,Nome_w,Marca,Modelo,Disco,Memoria,Processador,SN,PN,Marc_Moni,Model_Moni,SN_Moni,Mac_ethernet,Mac_wirells,Mac_blueth,id_f)VALUES(:Tipo,:Nome_w,:Marca,:Modelo,:Disco,:Memoria,:Processador,:SN,:PN,:Marc_Moni,:Model_Moni,:SN_Moni,:Mac_ethernet,:Mac_wirells,:Mac_blueth,:id_f)";
    $novo4=$pdo4->prepare($valor4);
    
    $novo4->bindValue(':Tipo',  $this->getTipo());
    $novo4->bindValue(':Nome_w',  $this->getNome_w());
    $novo4->bindValue(':Marca',  $this->getMarca());
    $novo4->bindValue(':Modelo',  $this->getModelo());
    $novo4->bindValue(':Disco',  $this->getDisco());
    $novo4->bindValue(':Memoria',  $this->getMemoria());
    $novo4->bindValue(':Processador',  $this->getProcessador());
    $novo4->bindValue(':SN',  $this->getSN());
    $novo4->bindValue(':PN',  $this->getPN());
    $novo4->bindValue(':Marc_Moni',  $this->getMarc_Moni());
   $novo4->bindValue(':Model_Moni',  $this->getModel_Moni());
    $novo4->bindValue(':SN_Moni',  $this->getSN_Moni());
   $novo4->bindValue(':Mac_ethernet',  $this->getMac_Eth());
    $novo4->bindValue(':Mac_wirells',  $this->getMac_Wirells());
    $novo4->bindValue(':Mac_blueth',  $this->getMac_bluth());
    $novo4->bindValue(':id_f',$this->getIdUtilizador());
    
    $novo4->execute();
       
          
          
          
          //Workstation  




    //Hardware

}
 catch (Exception $ex) {
           echo $ex->getMessage();
        }




    }
    
    
    function Apagar($id){
        
        try{
        $pdo=$this->conectar();
        $sql="DELETE FROM utilizador WHERE Id=:Id";
        $deletar=$pdo->prepare($sql);
        $deletar->bindValue(":Id",$id);
        if($deletar->execute()){
            
 
        }
        
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
    }
    
    
    function Alterar($id){
       
         try{
        $pdo=$this->conectar();
        $sql="
UPDATE utilizador u inner join sistema s on s.id_f=".$id." inner join workstation w on w.id_f=".$id." inner join hardware h on h.id_f=".$id." inner join tecnico t on t.id_f=".$id."
SET
u.Nome=:Nome,
u.Empresa=:Empresa,
u.Login=:Login,
u.Direcao=:Direcao,
u.Edificio=:Edificio,
u.Piso=:Piso,
u.Posicao=:Posicao,
u.Contacto=:Contacto,
u.Email=:Email,

s.Nome_s=:Nome_s,
s.Config_Outlook=:Config_Outlook,
s.Config_Impressora=:Config_Impressora,
s.Config_Antivirus=:Config_Antivirus,
s.Actualiza_Cadastro=:Actualiza_Cadastro,
s.Ponto_Red=:Ponto_Red,
s.Ponto_Red_Voip=:Ponto_Red_Voip,
s.Porta_Switch=:Porta_Switch,
s.Soft_Add=:Soft_Add,
s.ad_especific=:ad_especific,

w.Tipo=:Tipo,
w.Nome_w=:Nome_w,
w.Marca=:Marca,
w.Modelo=:Modelo,
w.Disco=:Disco,
w.Memoria=:Memoria,
w.Processador=:Processador,
w.SN=:SN,
w.PN=:PN,
w.Marc_Moni=:Marc_Moni,
w.Model_Moni=:Model_Moni,
w.SN_Moni=:SN_Moni,
w.Mac_ethernet=:Mac_ethernet,
w.Mac_wirells=:Mac_wirells,
w.Mac_blueth=:Mac_blueth,

h.PasswordBios=:PasswordBios,
h.Desat_Bios=:Desat_Bios,
h.Verific_Devices=:Verific_Devices,
h.Muda_Drive=:Muda_Drive,
h.Ad_Dom_Zap=:Ad_Dom_Zap,
h.Valid_Zap_Admin=:Valid_Zap_Admin,

t.Nome_t=:Nome_t,
t.Data=:Data,
t.Usuario_Entregue=:Usuario_Entregue,
t.Data_Entrega=:Data_Entrega,
t.Comentarios=:Comentarios

WHERE u.Id=:Id
	
";
        
        
        $altera=$pdo->prepare($sql);
        
$altera->bindValue(':Nome',  $this->getNome());        
$altera->bindValue(':Empresa',  $this->getEmpresa());  
$altera->bindValue(':Login',  $this->getLogin());
$altera->bindValue(':Direcao',  $this->getDirecao());
$altera->bindValue(':Edificio',  $this->getEdificio());
$altera->bindValue(':Piso',  $this->getPiso());
$altera->bindValue(':Posicao',  $this->getPosicao());
$altera->bindValue(':Contacto',  $this->getContacto());
$altera->bindValue(':Email',  $this->getEmail());
//////Utilizador

$altera->bindValue(':Nome_s',$this->getNome_s());
$altera->bindValue(':Config_Outlook',  $this->getConfig_OutLook());
$altera->bindValue(':Config_Impressora',  $this->getConfig_Impressora());
$altera->bindValue(':Config_Antivirus',  $this->getConfig_Antivir());
$altera->bindValue(':Actualiza_Cadastro',  $this->getActual_Cadastr());
$altera->bindValue(':Ponto_Red',  $this->getPonto_Red());
$altera->bindValue(':Ponto_Red_Voip',  $this->getPonto_Red_Voip());
$altera->bindValue(':Porta_Switch',  $this->getPorta_Switch());
$altera->bindValue(':Soft_Add',  $this->getSoft_Add());
$altera->bindValue (':ad_especific',$this->getAd_especific());

///Sistema

$altera->bindValue(':Tipo',  $this->getTipo());
$altera->bindValue(':Nome_w',  $this->getNome_w());
$altera->bindValue(':Marca',  $this->getMarca());
$altera->bindValue(':Modelo',  $this->getModelo());
$altera->bindValue(':Disco',  $this->getDisco());
$altera->bindValue(':Memoria',  $this->getMemoria());
$altera->bindValue(':Processador',  $this->getProcessador());
$altera->bindValue(':SN',  $this->getSN());
$altera->bindValue(':PN',  $this->getPN());
$altera->bindValue(':Marc_Moni',  $this->getMarc_Moni());
$altera->bindValue(':Model_Moni',  $this->getModel_Moni());
$altera->bindValue(':SN_Moni',  $this->getSN_Moni());
$altera->bindValue(':Mac_ethernet',  $this->getMac_Eth());
$altera->bindValue(':Mac_wirells',  $this->getMac_Wirells());
$altera->bindValue(':Mac_blueth',  $this->getMac_bluth());

$altera->bindValue(':PasswordBios',  $this->getPass_Bios());
$altera->bindValue(':Desat_Bios',  $this->getDesat_Bios());
$altera->bindValue(':Verific_Devices',  $this->getVerific_Devices());
$altera->bindValue(':Muda_Drive',  $this->getMuda_Drive());
$altera->bindValue(':Ad_Dom_Zap',  $this->getAd_Dom_Zap());
$altera->bindValue(':Valid_Zap_Admin',  $this->getValid_Zap_Admin());
$altera->bindValue(':Id',  $id);

$altera->bindValue(':Nome_t',$this->getNome_t());
$altera->bindValue(':Data',$this->getData());
$altera->bindValue(':Usuario_Entregue',$this->getUsuario_entreg());
$altera->bindValue(':Data_Entrega',$this->getData_entrega());
$altera->bindValue(':Comentarios',$this->getComentarios());

$altera->bindValue(':Id',  $id);
echo $id;
///Sistema

        
        
        
        
        $y=$altera->execute();
        return $y;    
           print "ok";
        
        
        
        
    }
    catch(Exception $e){
         $e->getMessage();
        }
        
    
    
}

function Novo_User(){
    
    try {
        
    
    $pdo=$this->conectar();
    $sql="INSERT INTO Login(Nome,Senha,Nivel)Values(:Nome,:Senha,:Nivel)";
    $login= $pdo->prepare($sql);
    $login->bindValue(':Nome',  $this->getNom(),  PDO::PARAM_STR);
    $login->bindValue(':Senha',  $this->getSenha());
    $login->bindValue(':Nivel',  $this->getNive(),  PDO::PARAM_STR);
    if($login->execute()):
        return TRUE;
    else:
        return FALSE;
    endif;
    
    } catch (Exception $ex) {
        
    }
    
}



function Apagar_user($id){
        
        try{
        $pdo=$this->conectar();
        $sql="DELETE FROM Login WHERE Id=:Id";
        $deletar=$pdo->prepare($sql);
        $deletar->bindValue(":Id",$id);
        if($deletar->execute()){
            
 
        }
        
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
    }
    

    function Altera_user($id){
       
        try{
        $pdo=$this->conectar();
        $sql="UPDATE Login  SET Nome=:Nome, Senha=:Senha, Nivel=:Nivel WHERE Id=".$id."";
        $altera=$pdo->prepare($sql);
        $altera->bindValue(":Nome",  $this->getNom());
        $altera->bindValue(":Senha",  $this->getSenha());
        $altera->bindValue(":Nivel",  $this->getNive());
        if($l=$altera->execute()){
            return TRUE;
            var_dump($l);
 
        }
 else {
            return FALSE;
 }
        
        }
        catch(Exception $e){
         echo   $e->getMessage();
        }
        
    }

    
}


