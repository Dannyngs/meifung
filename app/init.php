<?php


 
//# Read from databases
    try{
    $dsn = "mysql:host=120.24.233.54;dbname=feifung";
    $db = new PDO($dsn, 'danny', 'Ud0891802183');
    $db->query('set names utf8;');
    }catch(Exception $e){
        echo "Cannot connect to database,Please come back later!";
         echo  $e;
        exit();   
    }

//# Global Iage
    $imgurl ="http://58.96.172.29/newcmweb.hk/themes/meifung.hk/app/admin/media/images/";
    
//# Read System
    $rs = $db->query("SELECT* FROM T_System");
    $system = $rs->fetch();
   
 $pageSize =6 ;
  
 
 //# Multi-Language    
session_start();
 
if(isSet($_GET['lang']))
{
$current_lang = $_GET['lang'];
$_SESSION['lang'] = $current_lang;
 
}
else if(isSet($_SESSION['lang']))
{
$current_lang = $_SESSION['lang'];
}
else
{
    //# set default lang
$current_lang = 'eng';
}
 
switch ($current_lang) {
  
 
  case 'eng':
  $lang_file = 'eng.php';
  break;
 
  default:
  $lang_file = 'chi.php';
 
}
 
include_once 'lang/'.$lang_file;
   
