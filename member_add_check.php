<!doctype html">
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
</head>
<body>
<?php
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $address=$_POST['address'];
   
    $name= htmlspecialchars($name);
    $pass= htmlspecialchars($pass);
    $email= htmlspecialchars($email);
    $address= htmlspecialchars($address);
 
    if($name=='') {
        print 'ネームが入力されていません。<br>';
    } else {
        print 'ようこそ';
        print $name;
        print '様'; print '<br>';
    }
    if($email=='') {
        print 'メールアドレスが入力されていません。<br>';
    } else {
        print 'メールアドレス:';
        print $email;
        print '<br>';
    }
    if($pass=='') {
        print 'パスワードが入力されていません。<br>';
    } else {
        print 'パスワード[';
        print $pass;
        print '] <br>';
    }
     if($address=='') {
        print '住所が入力されていません。<br>';
    } else {
        print '住所[';
        print $pass;
        print '] <br>';
    }
    if($name==''||$pass==''||$email==''||$address=='') {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    } else {
        print'<form method="post" action="thanks.php">';
        print'<input name="name" type="hidden" value="'.$name.'">';
        print'<input pass="pass" type="hidden" value="'.$pass.'">';
        print'<input email="email" type="hidden" value="'.$email.'">';
        print'<input address="address" type="hidden" value="'.$address.'">';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="OK">';
        print'</form>';
    }    
        ?>
    </body>
</html>