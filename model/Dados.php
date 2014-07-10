<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ver_Dados
 *
 * @author Sam
 */
class Dados extends Banco{
    //put your code here
    
  

   
   
   
   
   
   function Selecionar_Todos(){
        
        try {
         
    $pdo=$this->conectar();
    $novo="SELECT * FROM utilizador u INNER JOIN hardware h ON h.`id_f`=u.`Id`  INNER JOIN sistema s ON s.`id_f`=u.`Id` INNER JOIN tecnico tec ON tec.`id_f`=u.`Id` INNER JOIN workstation ws ON ws.`id_f`=u.`Id` ORDER BY  u.Id DESC  ";
    $consulta=$pdo->prepare($novo);
    $consulta->execute();
   
   
$rs=$consulta->fetchAll(PDO::FETCH_OBJ);
 


 
return $rs;

        }
        catch (Exception $ex) {
          $ex->getMessage();  
        }
    }//Fim
    
    
    function Selecionar_Id($id){
        
        try {
         
    $pdo=$this->conectar();
    $novo="SELECT * FROM utilizador u INNER JOIN hardware h ON   h.`id_f`=".$id." INNER JOIN sistema s ON s.`id_f`=".$id." INNER JOIN tecnico tec ON tec.`id_f`=".$id." INNER JOIN workstation ws ON ws.`id_f`=".$id." WHERE u.Id=".$id." ";
    
    $consulta=$pdo->prepare($novo);
   
    $consulta->execute();
    
    
   
$rs=$consulta->fetchAll(PDO::FETCH_OBJ);
 
return $rs;




        }
        catch (Exception $ex) {
          $ex->getMessage();  
        }
    }//Fim
    
    
    
    
    
    
    
    
    
    function listNome($pesquisa){
        
        $pdo=  $this->conectar();
        $sql="SELECT * FROM utilizador WHERE Nome LIKE :pesquisa";
        $dados=$pdo->prepare($sql);
       $dados->bindValue(":pesquisa",$pesquisa,  PDO::PARAM_STR);
       $dados->execute();
       $r=$dados->fetchAll(PDO::FETCH_ASSOC);
return $r;

        
        
    }
    
    function Login($nome,$senha){
    try{    
        $pdo=$this->conectar();
        $sql="SELECT *FROM Login WHERE Nome=:Nome and Senha=:Senha";
    $login= $pdo->prepare($sql);
    $login->bindValue(':Nome',  $nome,  PDO::PARAM_STR);
    $login->bindValue(':Senha',  $senha);
    $l=$login->execute();
    if($login->rowCount()>0):
        $val=$login->fetchAll(PDO::FETCH_OBJ);
         
    return $val;
        else:
            return FALSE;
    endif;    
        
    }
 catch (PDOException $e){
 
     $e->getMessage();
 }    
 }
 
 function Users(){
   $pdo=$this->conectar();
   $sql="SELECT *FROM Login";
   $login= $pdo->prepare($sql); 
   $l=$login->execute();
  $val=$login->fetchAll(PDO::FETCH_OBJ);
        return $val;
        
 }
 
  function Users_Id($id){
   $pdo=$this->conectar();
   $sql="SELECT *FROM Login WHERE Id=:Id";
   $login= $pdo->prepare($sql);
   $login->bindValue(':Id',$id);
   $l=$login->execute();
  $val=$login->fetchAll(PDO::FETCH_ASSOC);
        
  return $val;
        
 }
 
}
