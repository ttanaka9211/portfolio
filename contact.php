<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>お問い合わせ</title>
</head>

<body>
    <form action="write.php" method="post">
        名前：<br />
        <input type="text" name="name" size="50" value="" /><br />

        電話番号:<br />
        <input type="tel" name="phone" size="50" value="" /><br />

        メールアドレス：<br />
        <input type="email" name="mail" size="50" value="" /><br />

        問合せ内容：<br />
        <textarea name="inquiry" cols="50" rows="5"></textarea><br />

        <br />
        <input type="submit" value="送信" />
    </form>
</body>

</html>