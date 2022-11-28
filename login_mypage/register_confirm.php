<?php
mb_internal_encoding("utf8");

//仮保存されたファイル名で画像を取得
$temp_pic_name = $_FILE['picture']['tmp_name'];

//元のファイル名で画像ファイルを取得
$original_pic_name = $_FILE['picture']['name'];
$path_filename = './image/'.$original_pic_name;

//仮保存のファイル名をimageフォルダに元のファイル名で移動させる。
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);


?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        <main>
          <div class="box"> 
           <div class="box2">
            <h2>会員登録　確認</h2>
            <div class="kakunin">
                こちらの内容で登録しても宜しいでしょうか？
            </div>
            <br>
            <p>氏名 : <?php echo $_POST['name'] ?></p>
            
            <p>メールアドレス : <?php echo $_POST['mail'] ?></p>
            
            <p>パスワード : <?php echo $_POST['password'] ?></p>
            
            <p>プロフィール写真 : <?php echo $_FILES['picture']['name'] ?></p>
            
            <p>コメント : <?php echo $_POST['comments'] ?></p>
            
            <br>
          <div class="Button">  
            <form action="register.php">
                <input type="submit" class="button1" value="戻って修正する">
            </form>
            <form action="register_insert.php" method="post">
                <input type="submit" class="button2" value="登録する">
                <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                <input type="hidden" value="<?php echo $_FILES['picture']['name']; ?>" name="path_filename">
                <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
            </form>
               </div>      
           </div>
          </div>      
        </main>
        
        
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>