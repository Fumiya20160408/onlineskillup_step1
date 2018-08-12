<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    
    <?php
      date_default_timezone_set('Asia/Tokyo');
      $date = date("Y/m/d H:i:s");
      print($date);
    ?>
  </body>
</html>