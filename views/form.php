<?php


$usuario=new Dao();


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
      
     
     $usuario->setNome($Nome);
     $usuario->setEmpresa($Empresa);
     $usuario->setLogin($Login);
     $usuario->setDirecao($Direcao);
     $usuario->setEdificio($Edificio);
     $usuario->setPiso($Piso);
     $usuario->setPosicao($posicao);
     $usuario->setContacto($Contacto);
     $usuario->setEmail($Email);
     
     ///

     $usuario->setNome_w($Nome_w);
     $usuario->setTipo($Tipo);
     $usuario->setMarca($Marca);
     $usuario->setModelo($Modelo);
     $usuario->setDisco($Disco);
     $usuario->setMemoria($Memoria);
     $usuario->setProcessador($Processador);
     $usuario->setSN($Serial_Number);
     $usuario->setPN($Port_Number);
     $usuario->setMarc_Moni($Marca_Monitor);
     $usuario->setModel_Moni($Modelo_Monitor);
     $usuario->setSN_Moni($SN_Monitor);
     $usuario->setMac_Eth($Mac_Ethernet);
     $usuario->setMac_Wirells($Mac_Wirelles);
     $usuario->setMac_bluth($Mac_bl);
     
     ///
     
     $usuario->setNome_s($Nome_s);
     $usuario->setConfig_OutLook($Outlook);
     $usuario->setConfig_Impressora($Impressora);
     $usuario->setConfig_Antivir($Antivirus);
     $usuario->setActual_Cadastr($Actualizar_Cadastro);
     $usuario->setAd_especific($Mv_Ad);
     $usuario->setPonto_Red($Rede);
     $usuario->setPonto_Red_Voip($Rede_v);
     $usuario->setPorta_Switch($pw);
     $usuario->setSoft_Add($soft);
     
     /////////////////
     
     
     $usuario->setPass_Bios($Passwordbios);
     $usuario->setDesat_Bios($Desat_bios);
     $usuario->setVerific_Devices($Verific_devices);
     $usuario->setMuda_Drive($Drive);
     $usuario->setAd_Dom_Zap($dom_Zap);
     $usuario->setValid_Zap_Admin($Valid_zap_Admin);
     
     //////////
     $usuario->setNome_t($Nome_t);
     $usuario->setData($Data);
     $usuario->setUsuario_entreg($Entregue);
     $usuario->setData_entrega($Data_entrega);
     $usuario->setComentarios($Comentarios);
     $t=$usuario->Novo();
     
     echo "<div class='alert alert-success'> 
<button type='button' class='close' data-dismiss='alert'&times;></button>
<strong class='pull-right'>Dados Guardados com Sucesso</strong>
</div>
";    
         
     
     
    

}
else{
    
?>
<script type="text/javascript">
    
    alert("Preencha Todoas Informações Necessarias");
    
</script>
<?php
}
?>





































<div class="col-md-9">
      	
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
          
            <form class="form form-horizontal" method="POST" >
            <div class="control-group">
              
              <label>Nome</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Escreva o nome" requered name="Nome" />
              </div>
            </div>      
            <div class="control-group">
              <label>Empresa</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Empresa" name="Empresa" />
                
              </div>
            </div>  

            <div class="control-group">
              <label>Login</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Login" name="Login" />
                
              </div>
            </div>  

            <div class="control-group">
              <label>Direçao</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Direçao" name="Direcao" />
                
              </div>
            </div>  

            <div class="control-group">
              <label>Edificio</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Edificio" name="Edificio" />
                
              </div>
            </div>  

             <div class="control-group">
              <label>Piso</label>
              <div class="controls">
                  <input type="number" class="form-control" placeholder="Piso" name="Piso" />
                
              </div>
            </div>  

             <div class="control-group">
              <label>Posiçao</label>
              <div class="controls">
                  <input type="number" class="form-control" name="Posicao" />
                
              </div>
            </div>  

             <div class="control-group">
              <label>Contacto</label>
              <div class="controls">
                  <input type="number" class="form-control" placeholder="Contacto" name="Contacto" />
                
              </div>
            </div>  


             <div class="control-group">
              <label>Email</label>
              <div class="controls">
                  <input type="email" class="form-control" placeholder="Email" name="Email" />
                
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
                  <input type="text" class="form-control" placeholder="Escreva o nome"  name="Nome_w" requered />
              </div>
            </div>
           
          <div class="control-group">
              <label>Tipo</label>
              <div class="controls">
                  <select class="form-control"  name="Tipo" id="Tipo">
                      <option value="Desktop">Desktop</option>
                      <option value="Portatil">Portatil</option>
                  </select>   
                  
                
              </div>    
          </div>
           <div class="control-group">
              
              <label>Marca</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Marca" name="Marca" />
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Modelo</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Modelo" name="Modelo" />
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Disco</label>
              <div class="controls">
                  <input type="number" class="form-control"  name="Disco" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Memoria</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Memoria" name="Memoria" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Processador</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Processador" name="Processador" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Serial Number</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Serial Number" name="SN" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Port Number</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Modelo" name="PN" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Marca Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Marca Monitor" name="Monitor" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Modelo Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Hp" name="md_monitor" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>SN/Monitor</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="SN" name="sn_monitor" />
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Mac Ethernet</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Mac" name="Mac" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Mac Wirelles</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="W" name="Mac_w" />
              </div>
            </div> 
           
           <div class="control-group">
              
              <label>Mac Bluethooth</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Bluethooth" name="Mac_b"  />
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
  <select name="Nome_s">
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
                  <input type="text" class="form-control" placeholder="rede" name="Rede" />
              </div>
            </div>
      
           <div class="control-group">
              
              <label>Ponto Rede Voip</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Voip" name="Rede_v" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Porta Switch</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Porta Switch" name="pw" />
              </div>
            </div>
           
           <div class="control-group">
              
              <label>Software Adicionas </label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Winrar,..." name="soft" />
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
                  <input type="text" class="form-control" placeholder="Sampaio"  name="Nome_t" />
              </div>
            </div>
      
       <div class="control-group">
              
              <label>Data</label>
              <div class="controls">
                  <input type="date" class="form-control"   name="Data" />
              </div>
            </div>
      
       <div class="control-group">
              
              <label>Entregue á</label>
              <div class="controls">
                  <input type="text" class="form-control" placeholder="Sampaio"  name="Entr" />
              </div>
            </div>
      
      <div class="control-group">
              
              <label>Data da Entrega</label>
              <div class="controls">
                  <input type="date" class="form-control"   name="Data_Entrega" />
              </div>
            </div>
      <hr>
      <div class="control-group">
              
              <label>Comentarios</label>
              <div class="controls">
                  <textarea placeholder="Exemplo" class="form-control"  name="Comentario"></textarea>
              </div>
            </div>
      
      
      
  </div>
            
         
             <div class="control-group">
              <label></label>
              <div class="controls">
                  <button type="submit" class="btn btn-primary" name="botao" id="botao">
                    <label>Guardar</label> <i class="glyphicon glyphicon-saved"></i> 
                </button>
              </div>
            </div>   
            
          </form>
          
          
        </div><!--/panel content-->
      </div><!--/panel-->
      
              
                                
              
          
         
            <!--center-right-->
        	
    
     
     
  	</div><!--/col-span-9-->
    