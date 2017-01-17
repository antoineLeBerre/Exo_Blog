<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class="container-fluid">
  <form id="form_login" method="post" action="?module=user&action=login">
    <table>
      <h2>Connexion</h2><br>
        <tr>
          <td><label for="post_login">Login : </label></td>
          <td><input name="post_login" type="text" maxLenght="50" required /></td>
        </tr>
        <tr>
          <td><label for="post_password">Password : </label></td>
          <td><input name="post_password" type="text" maxLenght="50" required /></td>
        </tr>

        <tr>
          <td></td>
          <td><input value="Valider" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>
</div>

<?php include("app/view/layout/footer.php"); ?>