<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-16" />
    <title>POSTのサンプル</title>
  </head>
  <body>

    <?php
      if(isset($_POST["name"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        print("名前：${name} ");
      }
      //commentがPOSTされているなら
      if(isset($_POST["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        print("「 ${comment} 」");
      } 
    ?>
        <p>名前とコメントを入力してください。</p>
        <form method="POST" action="post.php">
          <input name="name" />
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      
    ?>
  </body>
</html>