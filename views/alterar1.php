<?php

$dados=new Dados();
$altera=new Dao();


/* @var $_GET type */

    /* @var $idd type */
    $id=$_GET['Id'];

    
$inf=$dados->Selecionar_Id($id);





if(isset($_POST['botao'])){
    
    $Nome=  htmlentities($_POST['Nome']);
    $Empresa=  htmlentities($_POST['Empresa']);
    $Login=  htmlentities($_POST['Login']);
    $Direcao=  htmlentities($_POST['Direcao']);
    $Edificio=  htmlentities($_POST['Edificio']);
    $Piso=  htmlentities($_POST['Piso']);
    $posicao=  htmlentities($_POST['Posicao']);
    $Contacto=  htmlentities($_POST['Contacto']);
    $Email=  htmlentities($_POST['Email']);
    
    //Ddos Workstation
    
     
     
     //Dados do Sistema
     $Nome_s=htmlentities($_POST['Nome_s']);
     $Outlook=htmlentities($_POST['Outlook']);
     $Impressora=htmlentities($_POST["Impressora"]);
     $Antivirus=  htmlentities($_POST['Antivirus']);
     $Actualizar_Cadastro=  htmlentities($_POST['Cadastro']);
     $Mv_Ad=  htmlentities($_POST['Mv_Ad']);
     $Rede=  htmlentities($_POST['Rede']);
     $Rede_v=  htmlentities($_POST['Rede_v']);
     $pw=  htmlentities($_POST['pw']);
     $soft=  htmlentities($_POST['soft']);
     
//Ddos Hardware
     $Nome_w=  htmlentities($_POST['Nome_w']);
     $Tipo=  htmlentities($_POST['Tipo']);
     $Marca=  htmlentities($_POST['Marca']);
     $Modelo=  htmlentities($_POST['Modelo']);
     $Disco=  htmlentities($_POST['Disco']);
     $Memoria=  htmlentities($_POST['Memoria']);
     $Processador=  htmlentities($_POST['Processador']);
     $Serial_Number=  htmlentities($_POST['SN']);
     $Port_Number=  htmlentities($_POST['PN']);
     $Marca_Monitor=  htmlentities($_POST['Monitor']);
     $Modelo_Monitor=  htmlentities($_POST['md_monitor']);
     $SN_Monitor=  htmlentities($_POST['sn_monitor']);
     $Mac_Ethernet=  htmlentities($_POST['Mac']);
     $Mac_Wirelles=  htmlentities($_POST['Mac_w']);
     $Mac_bl=  htmlentities($_POST['Mac_b']);
      
     $Passwordbios=  htmlentities($_POST["Bios"]);
     $Desat_bios=  htmlentities($_POST["desact_bios"]);
     $Verific_devices=  htmlentities($_POST["devices"]);
     $Drive=  htmlentities($_POST["drive"]);
     $dom_Zap=  htmlentities($_POST["dom_zap"]);
     $Valid_zap_Admin=  htmlentities($_POST["valid_zap"]);
     
     //Ddos Tecnico
      
     $Nome_t=  htmlentities($_POST["Nome_t"]);
     $Data=  htmlentities($_POST["Data"]);
     $Entregue=  htmlentities($_POST["Entr"]);
     $Data_entrega=  htmlentities($_POST["Data_Entrega"]);
     $Comentarios=  htmlentities($_POST["Comentario"]);


     $altera->setNome($Nome);
     $altera->setEmpresa($Empresa);
     $altera->setLogin($Login);
     $altera->setDirecao($Direcao);
     $altera->setEdificio($Edificio);
     $altera->setPiso($Piso);
     $altera->setPosicao($posicao);
     $altera->setContacto($Contacto);
     $altera->setEmail($Email);
     
     ///

     
     ///
     
     $altera->setNome_s($Nome_s);
     $altera->setConfig_OutLook($Outlook);
     $altera->setConfig_Impressora($Impressora);
     $altera->setConfig_Antivir($Antivirus);
     $altera->setActual_Cadastr($Actualizar_Cadastro);
     $altera->setAd_especific($Mv_Ad);
     $altera->setPonto_Red_Voip($Rede);
     $altera->setPonto_Red_Voip($Rede_v);
     $altera->setPorta_Switch($pw);
     $altera->setSoft_Add($soft);
     
     /////////////////
     
     $altera->setNome_w($Nome_w);
     $altera->setTipo($Tipo);
     $altera->setMarca($Marca);
     $altera->setModelo($Modelo);
     $altera->setDisco($Disco);
     $altera->setMemoria($Memoria);
     $altera->setProcessador($Processador);
     $altera->setSN($Serial_Number);
     $altera->setPN($Port_Number);
     $altera->setMarc_Moni($Marca_Monitor);
     $altera->setModel_Moni($Modelo_Monitor);
     $altera->setSN_Moni($SN_Monitor);
     $altera->setMac_Eth($Mac_Ethernet);
     $altera->setMac_Wirells($Mac_Wirelles);
     $altera->setMac_bluth($Mac_bl);
     
     $altera->setPass_Bios($Passwordbios);
     $altera->setDesat_Bios($Desat_bios);
     $altera->setVerific_Devices($Verific_devices);
     $altera->setMuda_Drive($Drive);
     $altera->setAd_Dom_Zap($dom_Zap);
     $altera->setValid_Zap_Admin($Valid_zap_Admin);
     
     $altera->setNome_t($Nome_t);
     $altera->setData($Data);
     $altera->setUsuario_entreg($Entregue);
     $altera->setData_entrega($Data_entrega);
     $altera->setComentarios($Comentarios);
     
     $t=$altera->Alterar($id);
     
     
         








if($t):
echo "<div class='alert alert-success'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Dados Alterados com Sucesso</strong>
</div>
";
else:
 echo "<div class='alert alert-danger'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Erro Na Alteração dos Dados Verifica os Campos</strong>
</div>
";   
endif;

}
else{print "";}

?>














    









       <div class="col-md-9" id="mostrar" style="">
      	
      <!-- column 2 -->	
      
     
       <hr>
      
	   
          
			  
              
             <div class="panel panel-default ">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Dados Utilizador</h4>
            
          </div>
        </div>
                
        <div class="panel-body">
          
            <?php
             foreach ($inf as $valores):
            ?>
            <form class="form form-horizontal" method="POST" >
            <div class="control-group">
              
              <label>Nome</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Escreva o nome" requered name="Nome" value="<?php echo $valores->Nome; ?>"/>
              </div>
            </div>      
            <div class="control-group">
              <label>Empresa</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Empresa" name="Empresa" value="<?php echo $valores->Empresa; ?>" />
                
              </div>
            </div>  

            <div class="control-group">
              <label>Login</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Login" name="Login" value="<?php echo $valores->Empresa; ?>"/>
                
              </div>
            </div>  

            <div class="control-group">
              <label>Direçao</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Direçao" name="Direcao" value="<?php echo $valores->Direcao; ?>"/>
                
              </div>
            </div>  

            <div class="control-group">
              <label>Edificio</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Edificio" name="Edificio" value="<?php echo $valores->Edificio; ?>"/>
                
              </div>
            </div>  

             <div class="control-group">
              <label>Piso</label>
              <div class="controls">
                  <input type="number" class="form-control" placeholder="Piso" name="Piso" value="<?php echo $valores->Piso; ?>"/>
                
              </div>
            </div>  

             <div class="control-group">
              <label>Posiçao</label>
              <div class="controls">
                  <input type="number" class="form-control" name="Posicao" value="<?php echo $valores->Posicao; ?>"/>
                
              </div>
            </div>  

             <div class="control-group">
              <label>Contacto</label>
              <div class="controls">
                  <input type="number" class="form-control" placeholder="Contacto" name="Contacto" value="<?php echo $valores->Contacto; ?>"/>
                
              </div>
            </div>  


             <div class="control-group">
              <label>Email</label>
              <div class="controls">
                  <input type="email" class="form-control" placeholder="Email" name="Email" value="<?php echo $valores->Email; ?>"/>
                
              </div>
            </div>  

       <!--------Dados do workstation !----->
       <hr>
       <div class="panel panel-default">
       <div class="panel-title">
           
            <h4>Dados Workstation</h4>
          </div>
           
           <div class="control-group">
              
              <label>Nome</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Escreva o nome"  name="Nome_w" requered value="<?php echo $valores->Nome_w; ?>"/>
              </div>
            </div>
           
          <div class="control-group">
              <label>Tipo</label>
              <div class="controls">
                  <select class="form-control"  name="Tipo" id="Tipo" >
                      <option value="Desktop">Desktop</option>
                      <option value="Portatil">Portatil</option>
                  </select>   
                  
                
              </div>    
          </div>
           <div class="control-group">
              
              <label>Marca</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Marca" name="Marca" value="<?php echo $valores->Marca; ?>"/>
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Modelo</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Modelo" name="Modelo" value="<?php echo $valores->Modelo; ?>"/>
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Disco</label>
              <div class="controls">
                  <input type="number" class="form-control"  name="Disco" value="<?php echo $valores->Disco; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Memoria</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Memoria" name="Memoria" value="<?php echo $valores->Memoria; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Processador</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Processador" name="Processador" value="<?php echo $valores->Processador; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Serial Number</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Serial Number" name="SN" value="<?php echo $valores->SN; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Port Number</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="PN" name="PN" value="<?php echo $valores->PN; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Marca Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Marca Monitor" name="Monitor" value="<?php echo $valores->Marc_Moni; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Modelo Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Hp" name="md_monitor" value="<?php echo $valores->Model_Moni; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>SN/Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="SN" name="sn_monitor" value="<?php echo $valores->SN_Moni; ?>"/>
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Mac Ethernet</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Mac" name="Mac" value="<?php echo $valores->Mac_ethernet; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Mac Wirelles</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="W" name="Mac_w" value="<?php echo $valores->Mac_wirells; ?>"/>
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Mac Bluethooth</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Bluethooth" name="Mac_b"  value="<?php echo $valores->Mac_blueth; ?>"/>
              </div>
            </div>
           
  </div>
              
              
  <!-----Dados  Sistema ---->          
  <hr>
       <div class="panel panel-default">
       <div class="panel-title">
           
            <h4>Dados do Sistema</h4>
          </div>
          
           
           <div class="control-group"> 
               <label>Nome:</label>
  <select name="Nome_s" >
  <optgroup label="Servidores">
    <option value="Windows Server 2003">Windows Server 2003</option>
    <option value="Windows Server 2008">Windows Server 2008</option>
    <option value="Windows Server 2018 R2">Windows Server 2008 R2</option>
    <option value="Windows Server 2013">Windows Server 2013</option>
    
  </optgroup>
  <optgroup label="Sistemas Opercacionas">
    <option value="Windows X">Windows X</option>
    <option value="Windows Vista">Windows Vista</option>
    <option value="Windows 7 Professional">Windows 7 Professional</option>
    <option value="Windows 7 Ultimate">Windows 7 Ultimate</option>
    <option value="Windows 8">Windows 8</option>
    </optgroup>

    <optgroup label="Outros">
    <option value="MAC">MAC</option>
    <option value="Ubuntu">Ubuntu</option>
    <option value="Debian">Debian</option>
    </optgroup>

  </select>
               <hr>   
       </div>
           
           <div class="control-group">
               <label>Configurar Outlook</label><input type="checkbox"  name="Outlook" value="Sim"/> 
               <label>Configurar Impressora</label> <input type="checkbox"  name="Impressora" value="Sim"/>
               <label>Configurar Antivirus</label><input type="checkbox"  name="Antivirus" value="Sim"/>
               
           </div>
           
           <div class="control-group">
               <label>Actualizar Cadastro</label><input type="checkbox"  name="Cadastro" value="Sim"/> 
               <label>Mover no AD/ OU especifica</label><input type="checkbox"  name="MV_Ad" value="Sim"/>
                   </div>
           <hr>
           <div class="control-group">
              
              <label>Ponto Rede</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="rede" name="Rede" value="<?php echo $valores->Ponto_Red; ?>" />
              </div>
            </div>
      
           <div class="control-group">
              
              <label>Ponto Rede Voip</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Voip" name="Rede_v" value="<?php echo $valores->Ponto_Red_Voip; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Porta Switch</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Porta Switch" name="pw" value="<?php echo $valores->Porta_Switch; ?>"/>
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Software Adicionas </label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Winrar,..." name="soft" value="<?php echo $valores->Soft_Add; ?>"/>
              </div>
            </div>
           
       </div> 
  
  
  <div class="panel panel-default">
       <div class="panel-title">
           
            <h4>Dados do Hardware</h4>
          </div>
      
      <hr>
      <div class="control-group">
          <label>Password Bios</label><input type="checkbox"  name="Bios" value="Sim"/> 
          <label>Desatactivar Bios</label> <input type="checkbox"  name="desact_bios" value="Sim"/>
          <label>Verific Devices Desconhecido</label><input type="checkbox"  name="devices" value="Sim"/>
               
           </div>
      <hr>
      <div class="control-group">
          <label>Muda Drive(C) para (K)</label><input type="checkbox"  name="drive" value="Sim"/> 
          <label>Adicionar Dominio  Zap</label> <input type="checkbox"  name="dom_zap" value="Sim"/>
          <label>Validar Zap Admin</label><input type="checkbox"  name="valid_zap" value="Sim" />
               
           </div>
      <hr>
      </div>
  
  
  <div class="panel panel-default">
       <div class="panel-title">
           
            <h4>Dados do Tecnico</h4>
          </div>
  
        <div class="control-group">
              
              <label>Nome</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Sampaio"  name="Nome_t" value="<?php echo $valores->Nome_t; ?>"/>
              </div>
            </div>
      
       <div class="control-group">
              
              <label>Data</label>
              <div class="controls">
                  <input type="date" class="form-control"   name="Data" value="<?php echo $valores->Data; ?>"/>
              </div>
            </div>
      
       <div class="control-group">
              
              <label>Entregue á</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Sampaio"  name="Entr" value="<?php echo $valores->Usuario_Entregue; ?>"/>
              </div>
            </div>
      
      <div class="control-group">
              
              <label>Data da Entrega</label>
              <div class="controls">
                  <input type="date" class="form-control"   name="Data_Entrega" value="<?php echo $valores->Data_Entrega; ?>"/>
              </div>
            </div>
      <hr>
      <div class="control-group">
              
              <label>Comentarios</label>
              <div class="controls">
                  <textarea placeholder="Exemplo" class="form-control"  name="Comentario" value="<?php echo $valores->Comentarios; ?>"></textarea>
              </div>
            </div>
      
      
      
  </div>
            
         
             <div class="control-group">
              <label></label>
              <div class="controls">
                  <button type="submit" class="btn btn-primary" name="botao" id="botao">
                    <label>Actualizar</label> <i class="glyphicon glyphicon-saved"></i> 
                </button>
              </div>
            </div>   
            <?php
                     endforeach;
            ?>
          </form>
          
          
        </div><!--/panel content-->
      </div><!--/panel-->
      </div><!--/panel-->
      