<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Chatbot</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #1e1e1e;
    color: white;
    height: 100vh;
    display: flex;
    flex-direction: column;
  }

  .header {
    padding: 15px;
    background: #111;
    font-size: 20px;
    font-weight: bold;
  }

  .chat-container {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .msg {
    padding: 12px 15px;
    border-radius: 10px;
    max-width: 70%;
    white-space: pre-wrap;
  }

  .user {
    background: #005edb;
    margin-left: auto;
  }

  .bot {
    background: #333;
    margin-right: auto;
  }

  .bot-card {
    background: #444;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 8px;
  }

  .input-area {
    display: flex;
    padding: 10px;
    background: #111;
    gap: 10px;
  }

  textarea {
    flex: 1;
    resize: none;
    padding: 10px;
    background: #222;
    border: 1px solid #444;
    border-radius: 8px;
    color: white;
  }

  button {
    background: #005edb;
    border: none;
    padding: 10px 15px;
    border-radius: 8px;
    color: white;
    cursor: pointer;
    font-weight: bold;
  }

  button:hover {
    background: #0a73ff;
  }
</style>
</head>
<body>

<div class="header">Chatbot</div>

<div class="chat-container" id="chat"></div>

<div class="input-area">
  <textarea id="input" rows="2" placeholder="Escribe tu mensaje..."></textarea>
  <button onclick="sendMessage()">Enviar</button>
</div>

<script>
  const chat = document.getElementById("chat");
  const input = document.getElementById("input");

  function addMessage(content, role) {
    const div = document.createElement("div");
    div.className = `msg ${role}`;

    if (role === "bot" && Array.isArray(content)) {
      div.innerHTML = content
        .map(
          item => `
            <div class='bot-card'>
              <div><strong>${item.titulo}</strong></div>
              <div>${item.contenido}</div>
              <div style='opacity:0.7;font-size:12px;margin-top:4px;'>Tags: ${item.tags}</div>
              <div style='opacity:0.7;font-size:12px;'>Tipo: ${item.tipo}</div>
            </div>`
        )
        .join("");
    } else {
      div.textContent = content;
    }

    chat.appendChild(div);
    chat.scrollTop = chat.scrollHeight;
  }

  async function sendMessage() {
    const text = input.value.trim();
    if (!text) return;

    addMessage(text, "user");
    input.value = "";

    addMessage("Escribiendo...", "bot");
    const loader = chat.lastChild;

    try {
      const res = await fetch("http://127.0.0.1:8000/api/chatbot", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ texto: text })
      });

      const data = await res.json();

      loader.remove();
      addMessage(data.resultados, "bot");
    } catch (e) {
      loader.remove();
      addMessage("Error al conectar con el servidor.", "bot");
    }
  }

  input.addEventListener("keydown", e => {
    if (e.key === "Enter" && !e.shiftKey) {
      e.preventDefault();
      sendMessage();
    }
  });
</script>

</body>
</html>
