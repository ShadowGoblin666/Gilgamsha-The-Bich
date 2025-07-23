
<?php
date_default_timezone_set("Africa/Algiers"); // 👑 توقيت الجزائر

// بيانات الزائر
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d H:i:s");
$page = $_SERVER['REQUEST_URI'];

// 👑 بيانات بوت تيليغرام
$botToken = "7557167179:AAG0_jw9g7EEPhFKJbW5pMLhiPidHrGzt8M";
$chatId = "7664410054";

// نص الرسالة
$message = "👁‍🗨 تم دخول زائر جديد للموقع!\n\n🌐 IP: $ip\n📅 التاريخ: $time\n📱 الجهاز: $userAgent\n🔗 الصفحة: $page";

// إرسال عبر Telegram
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));
?>
