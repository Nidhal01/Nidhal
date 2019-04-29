<?php session_start() ?>
<?php
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="account\css/login.css">
  </head>
  <body>
    <div id="login_div">
      <form id="login_form" action="\includes\sign.inc.php" method="post">
        <div id="d1">
          <span>Ajouter Produits</span>
        </div>
        <input type="text" name="id" placeholder="id" pattern="[0-9]">
        <input type="text" name="name" placeholder="name" required pattern="[A-Z a-z]" title="only letter " maxlength="15">
        <input type="text" name="brand" placeholder="brand" required pattern="[A-Z a-z]" title="only letter " maxlength="15">
        <input type="text" name="Categorie" placeholder="Categorie" required pattern="[A-Z a-z]" title="only letter " maxlength="15">
        <input type="text" name="Prix" placeholder="Prix" pattern="[0-9]">
        <input type="hidden" name="size" value="1000000">
        <div>
        <input type="file" name="image">
        </div>
          <button type="submit" name="submit">Sign in</button>
      </form>
    </div>
  </body>
</html>