<?php
// send.php
session_start();

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$form = $_SESSION['form'] ?? null;

if (!$form) {
    header('Location: index.php');
    exit;
}

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USER'];
    $mail->Password = $_ENV['SMTP_PASS'];
    $mail->SMTPSecure = $_ENV['SMTP_SECURE']; // ssl or tls
    $mail->Port = $_ENV['SMTP_PORT'];
    $mail->CharSet = 'UTF-8';

    // mail settings
    $mail->setFrom($_ENV['SMTP_USER'], 'Webお問い合わせ');
    $recipients = explode(',', $_ENV['MAIL_TO']);
    foreach ($recipients as $address) {
        $mail->addAddress(trim($address));
    }
    $mail->addReplyTo($form['email'], $form['name']);
    $mail->isHTML(false);

    $mail->Subject = "【Webお問い合わせ】{$form['name']} 様より";
    $mail->Body = "お名前: {$form['name']}\n"
        . "メールアドレス: {$form['email']}\n"
        . "会社名: {$form['organization']}\n"
        . "電話番号: {$form['tel']}\n"
        . "お問い合わせ内容:\n{$form['detail']}";
    $mail->send();

    // ユーザーへの自動返信メール
    $autoReply = new PHPMailer(true);
    $autoReply->isSMTP();
    $autoReply->Host = $_ENV['SMTP_HOST'];
    $autoReply->SMTPAuth = true;
    $autoReply->Username = $_ENV['SMTP_USER'];
    $autoReply->Password = $_ENV['SMTP_PASS'];
    $autoReply->SMTPSecure = $_ENV['SMTP_SECURE'];
    $autoReply->Port = $_ENV['SMTP_PORT'];
    $mail->CharSet = 'UTF-8';

    $autoReply->setFrom($_ENV['SMTP_USER'], '株式会社シーイーエム');
    $autoReply->addAddress($form['email'], $form['name']);
    $autoReply->isHTML(false);

    $autoReply->Subject = "【CEM】お問い合わせありがとうございます";
    $autoReply->Body = "{$form['name']} 様\n\n"
        . "この度はお問い合わせいただき誠にありがとうございます。\n"
        . "以下の内容で承りました。追って担当者よりご連絡いたします。\n\n"
        . "-------------------------------------\n"
        . "お名前: {$form['name']}\n"
        . "メールアドレス: {$form['email']}\n"
        . "会社名: {$form['organization']}\n"
        . "電話番号: {$form['tel']}\n"
        . "お問い合わせ内容:\n{$form['detail']}\n"
        . "-------------------------------------\n\n"
        . "※このメールは自動送信です。返信は不要です。";
    $autoReply->send();

    session_unset();
    session_destroy();
    header('Location: thanks.php');
    exit;
} catch (Exception $e) {
    echo 'メール送信に失敗しました: ', $mail->ErrorInfo;
}
