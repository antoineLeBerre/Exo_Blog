<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function protection($session, $level, $module, $action)
{

  if (!isset($_SESSION[$session]))
  {
    header("location:?module=".$module."&action=".$action."&notification=nokConnexion");
    exit;
  }
  if (!isset($_SESSION['level'])) {
  	header("location:?module=".$module."&action=".$action."&notification=nokLevel");
  	exit;
  }
  if ($_SESSION['level'] < $level) 
  {
  	header("location:?module=".$module."&action=".$action."&notification=nokDroit");
    exit;
  }
}