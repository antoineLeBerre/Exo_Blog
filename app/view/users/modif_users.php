<?php include("app/view/layout/header.php"); ?>
<?php if (!defined("BASE_URL")) die("ressource interdite"); ?>
<div class="container-fluid">
  <h2>Information du compte</h2>
  <table>
    <tr>
      <td>
        Login : <?= $_SESSION["user"]["user_login"] ?>
      </td>
    </tr>
    <tr>
      <td>
        Password : <?= $_SESSION["user"]["user_pass"] ?>
      </td>
    </tr>
    <tr>
      <td>
        Email : <?= $_SESSION["user"]["user_email"] ?>
      </td>
    </tr>
    <tr>
      <td>
        Name : <?= $_SESSION["user"]["display_name"] ?>
      </td>
    </tr>
  </table>
  

</div>
<div class="container-fluid">
  <form id="form_post" method="post" action="?module=user&action=modif">
    <table>
      <h2>Modifier information</h2><br>
        <tr>
          <td>
            <label for="post_login">Login : </label>
          </td>
          <td>
            <input type="text" name="post_login" maxlength="50" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_password">Password : </label>
          </td>
          <td>
            <input type="text" name="post_password" maxlength="50"/>
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_email">E-mail : </label>
          </td>
          <td>
            <input type="text" name="post_email" maxlength="100" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="post_name">Name : </label>
          </td>
          <td>
            <input type="text" name="post_name" maxlength="100" />
          </td>
        </tr>
        <tr>
          <td><input value="Modifier" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>
</div>