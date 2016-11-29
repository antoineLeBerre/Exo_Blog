<?php 

function select_list($select_name, $tab_table, $id_col, $descr, $id,  $tab_option = array(), $class = "")
{
	echo "<select name=".$select_name." id='".$id."'>";
	foreach ($tab_table as $select) {
		echo "<option class=".$class." value='".$select[$id_col]."'";
		/*if((isset($tab_option["selected"])) && ($select[$id_col] == $tab_option["selected"])) 
        {
            echo " selected";
     	}*/
     	echo ">".$select[$descr]."</option>";
	}
	echo "</select>";
}