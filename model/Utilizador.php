<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilizador
 *
 * @author Sam
 */
class Utilizador extends Banco{
    //put your code here
     //Classe que servira para manipulacao dos dados do Usuario
    
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
    private $Id;



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


    function Novo_Utilizador(){
        
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


}
 catch (Exception $ex) {
            $ex->getMessage();
        }




    }
    
   
    //FuncaoAtualizar
    
     function Actualizar_Utilizador(){
        
        try {
            
        
$pdo=$this->conectar();
$valor="UPDATE  utilizador SET Nome=:Nome,Empresa=:Empresa,Login=:Login,Direcao=:Direcao,Edificio=:Edificio,Piso=:Piso,Posicao=:Posicao,Contacto=:Contacto,Email=:Email WHERE Id=:Id" ;    
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
$novo->bindValue(':Id',  $this->getId());
$novo->execute();


echo 'Actualizado';

$t=$novo->fetchAll();
            var_dump($t);
}
 catch (Exception $ex) {
            $ex->getMessage();
        }




    }
    
    
    function Selecionar_Utilizador(){
        
        try {
            
        
    $pdo=$this->conectar();
    $novo="SELECT *FROM utilizador WHERE Id=:Id";
    $consulta=$pdo->prepare($novo);
    $consulta->bindValue(':Id',  $this->getId());
    $consulta->execute();
    return  $consulta->fetchAll(PDO::FETCH_OBJ);
         
    }
    catch (Exception $ex) {
          $ex->getMessage();  
        }  
    }//fim
    
    function Selecionar_Todos_Utilizador(){
        
        try {
         
    $pdo=$this->conectar();
    $novo="SELECT *FROM utilizador ORDER BY Id DESC ";
    $consulta=$pdo->prepare($novo);
    $consulta->execute();
    return  $consulta->fetchAll(PDO::FETCH_OBJ);
    
        
        }
        catch (Exception $ex) {
          $ex->getMessage();  
        }
    }//Fim
    
    
    function Deletar_Utilizador(){
        
        try {
            
       
    
    $pdo=$this->conectar();
    $novo="DELETE FROM utilizador WHERE Id=:Id ";
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
