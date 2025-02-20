document.addEventListener('DOMContentLoaded', () => {
    // ประกาศตัวแปรสำหรับรับค่า botToken , chatId และ message โดยใช้ getElementById เพื่อเรียกใช้งาน Element จาก HTML
    const botToken = document.getElementById('botToken');
    const chatId = document.getElementById('chatId');
    const message = document.getElementById('message');

    // เพิ่ม Event Listener สําหรับปุ่ม "Send Message" โดยให้เรียกใช้ฟังก์ชัน sendMessage เพื่อส่งข้อมูลไปยัง Telegram Message API
    document.getElementById('BtnSend').addEventListener('click', () => {
        sendMessage(botToken.value, chatId.value, message.value);
    });
});

// สร้างฟังก์ชันสําหรับส่งข้อมูลไปยัง Telegram Message API โดยใช้ fetch API
// โดยจะประกอบไปด้วย Parameter ดังนี้ 
// botToken : คือ Token ของ Bot ที่ต้องการส่งข้อมูล
// chatId : คือ ID ของ Chat ที่ต้องการส่งข้อมูล
// message : คือข้อความที่ต้องการส่ง
async function sendMessage(botToken, chatId, message) {

    // ใช้ try catch เพื่อดักจับ Error
    try {

        // ใช้ Fetch API สําหรับส่งข้อมูลไปยัง send.php
        const response = await fetch('api/send.php', {

            //ใช้ Method POST
            method: 'POST',
            //ส่งข้อมูลในรูปแบบ JSON
            headers:{
                'Content-Type' : 'application/json'
            },
            // โดยข้อมูลที่ส่งจะประกอบด้วย botToken , chatId และ message
            body : JSON.stringify({
                botToken : botToken,
                chatId : chatId,
                text : message
            })
        });

        // ทำการตรวจสอบ ว่าการส่งข้อมูลสําเร็จหรือไม่
        if(!response.ok){
            throw new Error('Network response was not ok');
        }
        // ถ้าส่งข้อมูลสําเร็จ ให้แสดงผลใน console
        const data = await response.json();
        console.log("Response from API:", data);
        return data;

    } catch (error) {
        // ถ้าเกิด Error ให้แสดงผลใน console
        console.error("Error:", error);
    }
}