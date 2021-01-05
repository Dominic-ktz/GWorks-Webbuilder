<?php 
header("Access-Control-Allow-Origin: no-cors");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script src="https://cdn.g-works.eu/js/discord.js-webpack/discord.stable.min.js"></script>
<script type="text/javascript">
  const client = new Discord.Client();

  client.on('message', msg => {
    const guildTag = msg.channel.type === 'text' ? `[${msg.guild.name}]` : '[DM]';
    const channelTag = msg.channel.type === 'text' ? `[#${msg.channel.name}]` : '';
    console.log(`${guildTag}${channelTag} ${msg.author.tag}: ${msg.content}`);
  });

  client.login('NzM0MzU0NzI2OTg4MjgzOTA1.XxQfIg.eeDYQv12N1cp5GMLiAgQvIaPwyo');
</script>
</html>