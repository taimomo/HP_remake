<?php
// send.php - PHPMailerを使った送信処理

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// 入力値の代替（本来は $_SESSION や $_POST から取得）
$name = 'テストユーザー';
$email = 'user@example.com';
$organization = 'テスト会社';
$tel = '000-0000-0000';
$detail = "お問い合わせ内容のテストです。\n2行目もあります。";

$mail = new PHPMailer(true);

try {
    // サーバ設定
    $mail->isSMTP();
    $mail->Host       = 'smtp.example.com'; // SMTPサーバー
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your@example.com'; // SMTPユーザー
    $mail->Password   = 'your_password';    // SMTPパスワード
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // 送信者と宛先
    $mail->setFrom('your@example.com', 'Webお問い合わせ');
    $mail->addAddress('admin@example.com', '管理者');
    $mail->addReplyTo($email, $name);

    // メール内容
    $mail->isHTML(false);
    $mail->Subject = '【Webお問い合わせ】 ' . $name . '様より';
    $mail->Body    = "お名前: $name\n"
        . "メールアドレス: $email\n"
        . "会社名: $organization\n"
        . "電話番号: $tel\n"
        . "お問い合わせ内容:\n$detail";

    $mail->send();
    header("Location: thanks.php");
    exit;
} catch (Exception $e) {
    echo "メール送信に失敗しました: {$mail->ErrorInfo}";
}
