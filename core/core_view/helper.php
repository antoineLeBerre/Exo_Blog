<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function select_list($select_name, $tab_table, $id_col, $descr, $id,  $tab_option = array(), $class = "")
	{
		echo "<select name=".$select_name." id='".$id."'>";
		echo "<option value='0'>Tous les utilsateurs</option>";
		foreach ($tab_table as $select) {
			echo "<option value='".$select[$id_col]."'";
			if((isset($tab_option["selected"])) && ($select[$id_col] == $tab_option["selected"])) 
	        {
	            echo " selected";
	     	}
	     	echo ">".$select[$descr]."</option>";
		}
		echo "</select>";
}