<?php
require_once '../Autoload.php';
spl_autoload_register('class_model');

$dados=new Dados();
$id=htmlentities($_GET['id']);
$dado=$dados->Selecionar_Id($id);



        foreach ($dado as $valor):
            
        $Nome=$valor->Nome;
        $Empresa=$valor->Empresa;
        $Contacto=$valor->Contacto;
        $Login=$valor->Login;
        $Direcao=$valor->Direcao;
        $Edificio=$valor->Edificio;
        $Piso=$valor->Piso;
        $Posicao=$valor->Posicao;
        $Email=$valor->Email;
        
        $Tipo=$valor->Tipo;
        $Nome_w=$valor->Nome_w;
        $Marca=$valor->Marca;
        $Modelo=$valor->Modelo;
        $Disco=$valor->Disco;
        $Memoria=$valor->Memoria;
        $Processador=$valor->Processador;
      $SN=$valor->SN;
      $PN=$valor->PN;
      $Marc_Moni=$valor->Marc_Moni;
      
      $SN_Moni=$valor->SN_Moni;
      $Model_Moni=$valor->Model_Moni;
      $SN_Moni=$valor->SN_Moni;
      $Mac_ethernet=$valor->Mac_ethernet;
      $Mac_wirells=$valor->Mac_wirells;
      $Mac_blueth=$valor->Mac_blueth;
      
      $PasswordBios=$valor->PasswordBios;
      $Desat_Bios=$valor->Desat_Bios;
      $Verific_Devices=$valor->Verific_Devices;
      $Muda_Drive=$valor->Muda_Drive;
      $Ad_Dom_Zap=$valor->Ad_Dom_Zap;
      $Valid_Zap_Admin=$valor->Valid_Zap_Admin;
      $Nome_s=$valor->Nome_s;
      $Config_Outlook=$valor->Config_Outlook;
      $Config_Impressora=$valor->Config_Impressora;
      $Config_Antivirus=$valor->Config_Antivirus;
      $Actualiza_Cadastro=$valor->Actualiza_Cadastro;
      $Ponto_Red=$valor->Ponto_Red;
      $Ponto_Red_Voip=$valor->Ponto_Red_Voip;
      $Porta_Switch=$valor->Porta_Switch;
      $Soft_Add=$valor->Soft_Add;
      
      $Nome_t=$valor->Nome_t;
      $Data=$valor->Data;
      $Usuario_Entregue=$valor->Usuario_Entregue;
       $Data_Entrega= $valor->Data_Entrega;
       $Comentarios=$valor->Comentarios;
       $Mv_Ad=$valor->ad_especific;
        endforeach;


?>


<?php

        
require_once 'fpdf17/fpdf.php';
define('FPDF_FONTPATH','fpdf17/font/');

$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage();
$pdf->Image('./fonts/zap.jpg',15,15,90);

$pdf->SetDrawColor(0, 0, 0); // Hot Pink
$pdf->SetLineWidth(1); // We will change the line width now to 2mm
$pdf->Rect(5, 2, 580, 830, 'D');
//Dados do utilizador

$pdf->SetFont('courier','B',16);
$pdf->Cell(0,5,"Check List Instalação Imagem Padrão",0,1,'C');

$pdf->Ln(28);
 

//Dados do utilizador
//
$pdf->Ln(12);
$pdf->SetFont('courier','B',12);
$pdf->Cell(30,10,"\n   Dados Utilizador",0,1,'L');

$pdf->Ln(18);

//nome
$pdf->SetY(100);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Nome:",0,0,'L');
$pdf->Cell(90,14,$Nome,0,0,'L');

//email
$pdf->SetY(110);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Empresa:",0,0,'L');
$pdf->Cell(90,14,$Empresa,0,0,'L');

$pdf->SetY(120);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Contacto:",0,0,'L');
$pdf->Cell(90,14,$Contacto,0,0,'L');
$pdf->SetY(130);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Login:",0,0,'L');
$pdf->Cell(90,14,$Login,0,0,'L');
$pdf->SetY(140);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Direção:",0,0,'L');
$pdf->Cell(90,14,$Direcao,0,0,'L');
$pdf->SetY(150);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Edificio:",0,0,'L');
$pdf->Cell(90,14,$Edificio,0,0,'L');
$pdf->SetY(160);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Piso:",0,0,'L');
$pdf->Cell(90,14,$Piso,0,0,'L');
$pdf->SetY(170);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Posição:",0,0,'L');
$pdf->Cell(90,14,$Posicao,0,0,'L');
$pdf->SetY(180);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Email:",0,0,'L');
$pdf->Cell(90,14,$Email,0,0,'L');










//
$pdf->SetY(75);
$pdf->SetX(250);
$pdf->SetFont('courier','B',12);
$pdf->Cell(30,14,"Dados Workstation",0,1,'L');

$pdf->SetY(95);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Tipo:",0,1,'L');
$pdf->SetY(95);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Tipo,0,0,'L');

$pdf->SetY(105);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Nome:",0,1,'L');
$pdf->SetY(105);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Nome_w,0,0,'L');

$pdf->SetY(115);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Marca:",0,1,'L');
$pdf->SetY(115);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Marca,0,0,'L');

$pdf->SetY(125);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Modelo:",0,1,'L');
$pdf->SetY(125);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Modelo,0,0,'L');

$pdf->SetY(135);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Disco:",0,1,'L');
$pdf->SetY(135);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Disco,0,0,'L');

$pdf->SetY(145);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Memoria:",0,1,'L');
$pdf->SetY(145);
$pdf->SetX(300);
$pdf->SetFont('courier','B',8); 
$pdf->Cell(90,14,$Memoria,0,0,'L');


 
$pdf->SetY(155);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Processador:",0,1,'L');
$pdf->SetY(155);
$pdf->SetX(309);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Processador,0,0,'L');

$pdf->SetY(165);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Serial/N:",0,1,'L');
$pdf->SetY(165);
$pdf->SetX(300);
$pdf->Cell(90,14,$SN,0,0,'L');


$pdf->SetY(175);
$pdf->SetX(250);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Part/N:",0,1,'L');
$pdf->SetY(175);
$pdf->SetX(300);
$pdf->Cell(90,14,$PN,0,0,'L');

$pdf->SetY(105);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Marca Monitor:",0,1,'L');
$pdf->SetY(105);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Marc_Moni,0,0,'L');

$pdf->SetY(115);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Modelo Monitor:",0,1,'L');
$pdf->SetY(115);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Model_Moni,0,0,'L');

$pdf->SetY(125);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"S/N Monitor:",0,1,'L');
$pdf->SetY(125);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$SN_Moni,0,0,'L');

$pdf->SetY(135);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"MAC Ethernet:",0,1,'L');
$pdf->SetY(135);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Mac_ethernet,0,0,'L');

$pdf->SetY(145);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"MAC Wireless:",0,1,'L');
$pdf->SetY(145);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Mac_wirells,0,0,'L');

$pdf->SetY(155);
$pdf->SetX(400);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"MAC Bluethooth:",0,1,'L');
$pdf->SetY(155);
$pdf->SetX(490);
$pdf->SetFont('courier','B',8);
$pdf->Cell(90,14,$Mac_blueth,0,0,'L');


$pdf->SetFont('courier','B',12);
$pdf->SetY(260);
$pdf->SetX(50);
$pdf->Cell(0,0,"Hardware",0,1,'J');

$pdf->Ln(18);

$pdf->SetY(280);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Passord Bios:",0,0,'L');

$pdf->SetY(280);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$PasswordBios,0,0,'L');

$pdf->SetY(290);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Desactivar Bios:",0,0,'L');
$pdf->SetY(290);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Desat_Bios,0,0,'L');

$pdf->SetY(300);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Verificar Devices",0,0,'L');

$pdf->SetY(300);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Verific_Devices,0,0,'L');

$pdf->SetY(310);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Mudar Drive(C) para (K):",0,0,'L');

$pdf->SetY(310);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Muda_Drive,0,0,'L');

$pdf->SetY(320);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"ADD ao Dominio Zap:",0,0,'L');

$pdf->SetY(320);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Ad_Dom_Zap,0,0,'L');

$pdf->SetY(330);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Validar ZAPADMIN:",0,0,'L');

$pdf->SetY(330);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Valid_Zap_Admin,0,0,'L');

$pdf->SetY(360);
$pdf->SetX(50);
$pdf->SetFont('courier','B',12);
$pdf->Cell(50,14,"Administrador de Sistema",0,0,'L');


$pdf->SetY(380);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Mover na AD para OU Especifica:",0,0,'L');
$pdf->SetY(380);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Mv_Ad,0,0,'L');

$pdf->SetY(410);
$pdf->SetX(50);
$pdf->SetFont('courier','B',12);
$pdf->Cell(50,14,"SOFTWARE",0,0,'L');

$pdf->SetY(430);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Configurar Outlook:",0,0,'L');
$pdf->SetY(430);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Config_Outlook,0,0,'L');

$pdf->SetY(440);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Configurar Impressoras:",0,0,'L');
$pdf->SetY(440);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Config_Impressora,0,0,'L');

$pdf->SetY(450);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Validar Antivirus:",0,0,'L');
$pdf->SetY(450);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Valid_Zap_Admin,0,0,'L');


$pdf->SetY(460);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Actualizar Cadastro:",0,0,'L');

$pdf->SetY(460);
$pdf->SetX(170);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Actualiza_Cadastro,0,0,'L');


$pdf->SetY(260);
$pdf->SetX(350);
$pdf->SetFont('courier','B',12);
$pdf->Cell(50,14,"Dados Conectividade",0,0,'L');


$pdf->SetY(280);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(150,14,"Ponto Rede:",0,0,'L');
$pdf->SetY(280);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Ponto_Red,0,0,'L');



$pdf->SetY(290);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Ponto Rede VOIP:",0,0,'L');
$pdf->SetY(290);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Ponto_Red_Voip,0,0,'L');


$pdf->SetY(300);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Porta Switch:",0,0,'L');
$pdf->SetY(300);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Porta_Switch,0,0,'L');


$pdf->SetY(320);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(150,14,"Software Adicionas:",0,0,'L');
$pdf->SetY(320);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Soft_Add,0,0,'L');


$pdf->SetY(520);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(150,14,"Configurado por: ",0,0,'L');
$pdf->SetY(520);
$pdf->SetX(160);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Nome_t,0,0,'L');


$pdf->SetY(540);
$pdf->SetX(50);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Data de Configuração: ",0,0,'L');
$pdf->SetY(540);
$pdf->SetX(160);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Data,0,0,'L');


$pdf->SetY(520);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Entregue á: ",0,0,'L');
$pdf->SetY(520);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(150,14,$Usuario_Entregue,0,0,'L');



$pdf->SetY(540);
$pdf->SetX(350);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Data da Entrega: ",0,0,'L');
$pdf->SetY(540);
$pdf->SetX(460);
$pdf->SetFont('courier','B',8);
$pdf->Cell(150,14,$Data_Entrega,0,0,'L');



$pdf->SetDrawColor(0, 0, 0); // Hot Pink
$pdf->SetLineWidth(1); // We will change the line width now to 2mm
$pdf->Rect(55, 590, 480, 100, 'D');
//Dados do utilizador
//
$pdf->SetY(600);
$pdf->SetX(60);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,"Observações: ",0,0,'L');
$pdf->SetY(600);
$pdf->SetX(120);
$pdf->SetFont('courier','B',8);
$pdf->Cell(50,14,$Comentarios,0,0,'L');




$pdf->Output($Nome.".pdf","I");

f?>