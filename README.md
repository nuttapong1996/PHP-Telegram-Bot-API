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
  <li>Use this API link to get chat_id (your group chat id) : https://api.telegram.org/bot#YourBotToken#/getupdates<br><br>
   <blockquote> e.g. :  https://api.telegram.org/botABCDEF123456/getupdates</blockquote>
  </li><br>
  <li>Clone this repository and put it in your host directory</li>
  <li>Launch this project in browser e.g. "localhost/PHP-Telegram-Bot-API"</li>
  <li>Fill the form with your Bot Token and Chat ID to test the result</li>
</ol>
<h5>***If you want to test your bot without this repository***</h6>
  Use this API Link: https://api.telegram.org/bot#YourBotToken#/sendMessage?chat_id=YouGroupChatID?text=YourMessage
  <br><br>
  <blockquote>e.g. https://api.telegram.org/botABCDEF123456/sendMessage?chat_id=-123456?text=Hello</blockquote>
