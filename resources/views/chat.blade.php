<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<body>

    <div class="chat-container">

        <!-- BACKGROUND YT IFRAME
        <iframe
            id="yt-bg"
            src="https://www.youtube.com/embed/uWMr16O_Aso?autoplay=1&mute=1&loop=1&playlist=uWMr16O_Aso&controls=0&modestbranding=1&rel=0"
            frameborder="0"
            allow="autoplay; encrypted-media; picture-in-picture"
            title="Video de fondo"
        ></iframe> -->

        <!--<div id="video-overlay"></div>-->

        <!-- Área de mensajes -->
        <div id="message-area" class="message-area">
            <div class="message chat-message" >
                <div class="chat-icon">
                    <i class="fa-solid fa-robot" aria-hidden="true"></i>
                </div>
                <div class="message-content" >¡Hola! Soy tu asistente para cualquier duda ¿En qué puedo ayudarte hoy?</div>
            </div>

        
    </div>
    <!--Icono de carga de el ChatBot-->
         <div class="typing-indicator" id="typing-indicator">
        <div class="chat-icon">
            <i class="fa-solid fa-robot" aria-hidden="true"></i>
        </div>
        <div class="typing-dots">
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        </div>
        </div>
            <!-- Área de entrada de texto -->
        <div class="input-area-wrapper">
            <div class="input-area">
                <textarea id="chat-input" placeholder="Escribe tu mensaje aquí..." rows="1" aria-label="Escribe tu mensaje"></textarea>
                <button id="send-button" disabled aria-label="Enviar mensaje">
                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                </button>
            </div>
            <p class="disclaimer">
                ChatBot 
            </p>
        </div>
    </div>

    <script src="{{ asset('js/chat.js') }}"></script>
</body>
</html>

