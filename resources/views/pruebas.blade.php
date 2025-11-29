<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TalkJS components tutorial</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@talkjs/web-components@0.0.30/default.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@talkjs/web-components@0.0.30"
      async
    ></script>
    <script type="module">
      import { getTalkSession } from 'https://cdn.jsdelivr.net/npm/@talkjs/core@1.5.9';

      const appId = 'tVkdEklX';

      const userId = 'frank';
      const otherUserId = 'nina';
      const conversationId = 'my_conversation';

      const session = getTalkSession({ appId, userId });

      session.currentUser.createIfNotExists({ name: 'Frank' });
      session.user(otherUserId).createIfNotExists({ name: 'Nina' });

      const conversation = session.conversation(conversationId);
      conversation.createIfNotExists();
      conversation.participant(otherUserId).createIfNotExists();
    </script>
  </head>
  <body>
    <t-chatbox
      style="width: 400px; height: 600px;"
      app-id="tVkdEklX"
      user-id="frank"
      conversation-id="my_conversation"
    ></t-chatbox>
  </body>
</html>