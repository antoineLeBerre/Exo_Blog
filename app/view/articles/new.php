<?php include("app/view/layout/header.php"); ?>

<div class="container-fluid">
  <form id="form_post" method="post" action="?module=articles&action=new">
    <table>
      <h2>Créer un article</h2><br>
        <tr>
          <td><label for="post_category">Catégorie</label></td>
          <td>
            <?php select_list("post_category", $categories, "cat_id", "cat_descr"); ?>
          </td>
          
        </tr>

        <tr>
          <td><label for="post_title"> Titre </label></td>
          <td><input name="post_title" type="text" maxLenght="200" required /></td>
        </tr>

        <tr>
          <td><label for="post_content"> contenu </label></td>
          <td><textarea name="post_content" rows="10" cols="100" required ></textarea></td>
        </tr>

        <tr>
          <td></td>
          <td><input value="Enregistrer" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>
</div>

<?php include("app/view/layout/footer.php"); ?>