<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class="container-fluid">
  <form id="form_post" method="post" action="?module=user&action=create">
    <table>
      <h2>Créer un utilisateur</h2><br>
        <tr>
          <td>
            <label for="post_login">Login : </label>
          </td>
          <td>
            <input type="text" name="post_login" maxlength="50" required />
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_password">Password : </label>
          </td>
          <td>
            <input type="text" name="post_password" maxlength="50" required />
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_email">E-mail : </label>
          </td>
          <td>
            <input type="text" name="post_email" maxlength="100" required />
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_name">Name : </label>
          </td>
          <td>
            <input type="text" name="post_name" maxlength="100" required />
          </td>
        </tr>
        <tr>
          <td><input value="Enregistrer" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>
</div>