<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      .container {
      }
    </style>
  </head>
  <body>
    <?php
    include APPPATH . 'views/header.php'
    ?>

    <form action='<?php echo site_url ('platform/login_post');?>' method='POST'>
      帳號：
      <input type='text' name='account' value='' />
      <br/>
      <br/>
      密碼：
      <input type='password' name='password' value='' />
      <br/>
      <br/>
      <button type='submit'>登入</button>
    </form>
  </body>
</html>