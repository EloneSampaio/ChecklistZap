<?php

require_once '../Autoload.php';
spl_autoload_register('class_model');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author Sam
 */
class Tecnico extends Banco{
    //put your code here
    
    //Classe que servira para manipulacao dos dados do Tecnico
    
    
    private $Nome;
    private $data;
    private $usuario_entreg;
    private $data_entrega;
    private $Comentarios;









    public function getComentarios() {
        return $this->Comentarios;
    }

    
        public function getNome() {
        return $this->Nome;
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

    public function setNome($Nome) {
        if($Nome!=NULL):
          $this->Nome = $Nome;  
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


    function Novo_Tecnico(){
        
        try {
            
        
        $pdo=$this->conectar();
        $valor="INSERT INTO tecnico(Nome,Data,Usuario_Entregue,Data_Entregue,Comentarios)VALUES(:Nome,:Data,:Usuario_Entregue,:Data_Entregue,:Comentarios)";
        $novo=$pdo->prepare($valor);
        
        $novo->bindValue(':Nome',  $this->getNome());
        $novo->bindValue(':Data',  $this->getData());
        $novo->bindValue(':Usuario_Entregue',  $this->getUsuario_entreg());
        $novo->bindValue(':Data_Entregue',  $this->getData_entrega());
        $novo->bindValue(':Comentarios',  $this->getComentarios());
        $novo->execute();
        
        
        
        }
        catch (Exception $ex) {
           $ex->getMessage();  
        }
        
    }
    
    
    function Actualizar_Tecnico(){
        
        try {
            
        
        $pdo=$this->conectar();
        $valor="UPDATE tecnico SET Nome=:Nome,Data=:Data,Usuario_Entregue=:Usuario_Entregue,Data_Entregue=:Data_Entregue,Comentarios=:Comentarios";
        $novo=$pdo->prepare($valor);
        
        $novo->bindValue(':Nome',  $this->getNome());
        $novo->bindValue(':Data',  $this->getData());
        $novo->bindValue(':Usuario_Entregue',  $this->getUsuario_entreg());
        $novo->bindValue(':Data_Entregue',  $this->getData_entrega());
        $novo->bindValue(':Comentarios',  $this->getComentarios());
        $novo->execute();
        
        
    }
    catch (Exception $ex){
        $ex->getMessage();
                
    }
    
}

}