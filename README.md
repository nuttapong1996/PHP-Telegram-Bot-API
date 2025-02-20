<h1>PHP Telegram Bot API</h1>
<h6>An example for sending message from PHP to Telegram Bot API via Fetch API</h6>

<h5>Requirement</h5>
<ul>
  <li>Telegram Account</li>
  <li>Bot Token</li>
  <li>Chat ID</li>
</ul>
<h5>Usage</h5>
<ol>
  <li>You need BotToken by Add @BotFather in your Telegram then use command "/newbot" to create bot.</li>
  <li>Create a group for a bot</li>
  <li>Add your Bot to your group then type this command "/start" in your group.</li>
  <li>Use this API link to get chat_id (your group chat id) : https://api.telegram.org/bot<YorBotToken>/getupdates .</li>
  <li>Clone this repository and put it in your host directory</li>
  <li>Launch this project in browser e.g. "localhost/PHP-Telegram-Bot-API"</li>
  <li>Fill the form with your Bot Token and Chat ID to test the result</li>
</ol>
<h6><i>***If you want to test your bot without this repository***</i></h6>
  use this API Link: https://api.telegram.org/bot$BotToken/sendMessage?chat_ud=<YouGroupChatID></YouGroupChatID>
