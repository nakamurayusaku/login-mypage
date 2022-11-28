<?php
if(isset($_SESSION['login_keep'])){
    header('Location:mypage.php');
}

?>
<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        <main>
            <form action="mypage.php" method="post">
            <div class="box">
                <p class="error">メールアドレスまたはパスワードが間違っています。</p>
                <div class="box2">
                <p>メールアドレス</p>
                <input type="text" size="30" class="textbox" name="mail">
                <br>
                <p>パスワード</p>
                <input type="password" size="30" class="textbox" name="password">
                <br>
                <br>
                <input type="checkbox" name="login_keep" value="login_keep">ログイン状態を保持する
                <br>
                <br>
                <form action="mypage.php">    
                <div class="submit">
                <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
                </form>
                </div>
            </div>
            </form>
        </main>
        
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>