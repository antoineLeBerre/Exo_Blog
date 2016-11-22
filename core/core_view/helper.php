<?php 

function select_list($select_name, $tab_table, $id_col, $descr, $class='', $id='')
{
	echo "<select name=".$select_name.">";
	foreach ($tab_table as $select) {
		echo "<option class=".$class." id=".$id." value=".$select[$id_col].">".$select[$descr]."</option>";
	}
	echo "</select>";
}
/*<select name="post_category">
              <?php
              foreach ($categories as $categorie) { ?>
                <option value="<?= $categorie['cat_id'] ?>"><?= $categorie['cat_descr']?></option>
              <?php } ?>
            </select>*/