<?php

header("Content-Type: application/json");




// ตรวจสอบค่าที่ส่งมา
if (!isset($_GET['botToken'], $_GET['chatId'], $_GET['text'])) {
    echo json_encode(["error" => "Missing required parameters"]);
    exit;
}

// รับข้อมูลผ่าน GET
$BotToken = $_GET['botToken'];
$chat_id = $_GET['chatId'];
$text = $_GET['text'];

// สร้าง URL สําหรับส่งข้อมูลไปยัง Telegram Bot API
$url = "https://api.telegram.org/bot$BotToken/sendMessage";

// กำหนดค่า Parameters สําหรับส่งข้อมูลไปยัง Telegram Bot API โดยประกอบด้วย 
// chat_id คือ ID ของ Chat ที่ต้องการส่งข้อมูล โดยสามารถหาค่านี้ได้จาก Link API  นี้  https://api.telegram.org/bot<BotToken>/getupdates
// text คือข้อความที่ต้องการส่ง
$postData = [
    'chat_id' => $chat_id,
    'text' => $text
];

// ทำการกำหนด HTTP Request Options 
// โดยกำหนด Header → "Content-Type: application/x-www-form-urlencoded"
// และ Method ให้เป็น POST
// ใช้ http_build_query($postData) เพื่อแปลง $postData จาก อาร์เรย์ เป็น สตริงที่ Telegram Bot API เข้าใจ เช่น chat_id=123456789&text=Hello
$options = [
    'http' => [
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($postData)
    ]
];

// สร้าง Context สําหรับส่งข้อมูลไปยัง Telegram Bot API
// stream_context_create() ใช้สร้าง context สำหรับการส่ง HTTP Request
// Context นี้จะถูกใช้โดย file_get_contents() ในขั้นตอนถัดไป
$context  = stream_context_create($options);


// ส่ง Request ไปยัง Telegram Bot API
$result = file_get_contents($url, false, $context);
// url → คือ "https://api.telegram.org/bot$BotToken/sendMessage"
// false → ไม่ใช้ include_path (ไม่ต้องไปค้นหาไฟล์ในระบบ)
// context → ใช้ context ที่เราสร้าง เพื่อส่ง HTTP POST request

// ส่งผลลัพธ์กลับไปที่ Frontend
echo $result;
?>
