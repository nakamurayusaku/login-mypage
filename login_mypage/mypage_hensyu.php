<?php
mb_internal_encoding("utf8");

session_start();

$image="./image/".$_SESSION['picture'];

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ編集</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        <main>
            <form action="mypage_update.php" method="post">
            <div class="box">
                <div class="title">
                    <h2>会員情報</h2>
                </div>
                <p>こんにちは！　<?php echo $_SESSION['name']; ?>さん</p>
                <div class="maincontents">
                <div class="left">
                    <img src="<?php echo $image ?>" name="picture">
                </div>
                <div class="right">
                    <p>氏名：<input type="text" size="30" class="textbox" name="name" value="<?php echo $_SESSION['name'] ?>"></p>
                    <p>メール：<input type="text" size="30" class="textbox" name="mail" value="<?php echo $_SESSION['mail'] ?>"></p>
                    <p>パスワード：<input type="text" size="30" class="textbox" name="password" value="<?php echo $_SESSION['password'] ?>"></p>
                </div>
                </div>
                <div class="comment">
                    <textarea name="comments"><?php echo $_SESSION['comments'] ?></textarea>
                </div>
                
                <div class="button"><input type="submit" class="submit_button" size="35" value="この内容に変更する"></div>
               
            </div>
             </form>            
        </main>
    </body>
</html>