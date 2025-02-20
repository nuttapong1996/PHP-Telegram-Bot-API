<h1>An example for sending message from PHP to Telegram Bot API via Fetch API</h1>

<h5>Requirement</h5>
  1.Telegram Account
  2.Bot Token
  3.Chat ID

<h5>Usage</h5>
1.You need BotToken by Add @BotFather in your Telegram then use command "/newbot" to create bot.
2.You need to create a group for bot to alert the message
3.Add your Bot to your group then type this command "/start" in your group.
4.After you got your bot created and put it in your group then use this API link to get chat_id (your group chat id) : https://api.telegram.org/bot<YorBotToken>/getupdates .
5.Clone this repository and put it in your host directory
6.Launch this project in browser e.g. "localhost/PHP-Telegram-Bot-API"
7.Fill the form with your Bot Token and Chat ID to test the result

<h6><i>***If you want to test your bot without this repository***</i></h6>
  use this API Link: https://api.telegram.org/bot$BotToken/sendMessage?chat_ud=<YouGroupChatID></YouGroupChatID>
