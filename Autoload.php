<?php
function class_views($class) {
   // convert '_' to '/'
   $folderedClass = str_replace('_', '/', $class);
 
   // presumes classes are in './classes'
   $theClass = dirname(__FILE__) . '/view/' . $folderedClass . '.php';
 
   if (file_exists($theClass) && include_once($theClass)) {
      return TRUE;
   } else {
      trigger_error("The class '$class' or the file '$theClass' failed to spl_autoload  ", E_USER_WARNING);
      return FALSE;
   }
   
   
   // if __autoload is active, put it on the spl_autoload stack
if (is_array(spl_autoload_functions()) && in_array('__autoload', spl_autoload_functions())) {
   spl_autoload_register('__autoload');
}
 

}



function class_control($class) {
   // convert '_' to '/'
   $folderedClass = str_replace('_', '/', $class);
 
   // presumes classes are in './classes'
   $theClass = dirname(__FILE__) . 'testes/classes/' . $folderedClass . 'classe.php';
 
   if (file_exists($theClass) && include_once($theClass)) {
      return TRUE;
   } else {
      trigger_error("The class '$class' or the file '$theClass' failed to spl_autoload  ", E_USER_WARNING);
      return FALSE;
   }
   
   
   // if __autoload is active, put it on the spl_autoload stack
if (is_array(spl_autoload_functions()) && in_array('__autoload', spl_autoload_functions())) {
   spl_autoload_register('__autoload');
}
 

}












function class_model($class) {
   // convert '_' to '/'
   $folderedClass = str_replace('_', '/', $class);
 
   // presumes classes are in './classes'
   $theClass = dirname(__FILE__) . '/model/' . $folderedClass . '.php';
 
   if (file_exists($theClass) && include_once($theClass)) {
      return TRUE;
   } else {
      trigger_error("The class '$class' or the file '$theClass' failed to spl_autoload  ", E_USER_WARNING);
      return FALSE;
   }
   
   
   // if __autoload is active, put it on the spl_autoload stack
if (is_array(spl_autoload_functions()) && in_array('__autoload', spl_autoload_functions())) {
   spl_autoload_register('__autoload');
}
 

}


function class_pagination($class) {
   // convert '_' to '/'
   $folderedClass = str_replace('_', '/', $class);
 
   // presumes classes are in './classes'
   $theClass = dirname(__FILE__) . '/Pager/' . $folderedClass . '.php';
 
   if (file_exists($theClass) && include_once($theClass)) {
      return TRUE;
   } else {
      trigger_error("The class '$class' or the file '$theClass' failed to spl_autoload  ", E_USER_WARNING);
      return FALSE;
   }
   
   
   // if __autoload is active, put it on the spl_autoload stack
if (is_array(spl_autoload_functions()) && in_array('__autoload', spl_autoload_functions())) {
   spl_autoload_register('__autoload');
}
 

}




?>