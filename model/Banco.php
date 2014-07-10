<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Banco
 *
 * @author Sam
 */
class Banco  {
    //put your code here
 //private construct - class cannot be instatiated externally.
   
 private static $dsn='mysql:host=localhost;dbname=checklistzap';
  private static  $username='root';
  private static  $passwd='elone';
    private static $conexao;
    
    
    public function conectar(){
        try {
        if(!isset(self::$conexao)):
            self::$conexao= new PDO(self::$dsn,  self::$username,  self::$passwd);
        
        endif;
        }
 catch (PDOException $e){
     $e->getMessage();
     
 }
 return self::$conexao;
 var_dump($conexao);
    }
    
 
}
?>

