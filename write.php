<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$inquiry = $_POST['inquiry'];
if ($name == '') {
    echo "空白です";
    exit();
}
if (!preg_match("/^[0-9-]{6,9}$|^[0-9-]{13}$/", $phone)) {
    echo "電話番号が不明です";
    exit();
}
if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
    echo "メールアドレスが不明です";
    exit();
}
if ($inquiry == '') {
    echo "空白です";
    exit();
}
