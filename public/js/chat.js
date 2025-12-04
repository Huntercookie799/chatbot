// Configuración de la API
const API_URL = "http://localhost:8000/api/chatbot";

// Elementos del DOM
const input = document.getElementById('chat-input');
const sendButton = document.getElementById('send-button');
const messageArea = document.getElementById('message-area');
const typingIndicator = document.getElementById('typing-indicator');

// Ajustar el textarea
function adjustInputArea() {
    input.style.height = 'auto';
    input.style.height = Math.min(input.scrollHeight, 150) + 'px';
    sendButton.disabled = input.value.trim() === "";
}
input.addEventListener('input', adjustInputArea);

// Enviar mensaje
sendButton.addEventListener('click', sendMessage);
input.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        const userText = input.value.trim();
        if (userText) {
            sendMessage();
        }
    }
});

function sendMessage() {
    const userText = input.value.trim();
    if (!userText) return;

    addMessage(userText, 'user');
    input.value = "";
    adjustInputArea();
    sendToAPI(userText);
}

// Agregar mensajes
function addMessage(text, type, options = {}) {
    const msgDiv = document.createElement('div');
    msgDiv.classList.add("message");
    
    if (type === "user") {
        msgDiv.classList.add("user-message");
        msgDiv.innerHTML = `<div class="message-content">${text}</div>`;
    } else if (type === "alert") {
        msgDiv.classList.add("chat-message");
        msgDiv.innerHTML = `
            <div class="chat-icon">
                <i class="fa-solid fa-robot"></i>
            </div>
            <div class="message-alert">${text}</div>
        `;
    } else if (type === "response") {
        msgDiv.classList.add("chat-message", "clickable-response");
        msgDiv.setAttribute('data-response-id', options.id || '');
        msgDiv.innerHTML = `
            <div class="chat-icon">
                <i class="fa-solid fa-robot"></i>
            </div>
            <div class="message-content">
                <div class="response-title">${options.title || 'Opción'}</div>
                <div class="response-content">${text}</div>
                ${options.tags ? `<div class="response-tags">${options.tags}</div>` : ''}
            </div>
        `;
        msgDiv.onclick = () => responseSelect(msgDiv, text, options);
    } else {
        msgDiv.classList.add("chat-message");
        msgDiv.innerHTML = `
            <div class="chat-icon">
                <i class="fa-solid fa-robot"></i>
            </div>
            <div class="message-content">${text}</div>
        `;
    }

    messageArea.appendChild(msgDiv);
    messageArea.scrollTop = messageArea.scrollHeight;
}

// Indicador de carga
function showTypingIndicator(show) {
    if (show) {
        typingIndicator.classList.add("active");
        setTimeout(() => {
            messageArea.scrollTop = messageArea.scrollHeight;
        }, 100);
    } else {
        typingIndicator.classList.remove("active");
    }
}

// Función principal de la API
async function sendToAPI(userQuery) {
    if (!userQuery) return;

    showTypingIndicator(true);  
    sendButton.disabled = true; 

    const controller = new AbortController();
    const timeoutId = setTimeout(() => {
        controller.abort();
        showTypingIndicator(false);
        addMessage("⚠ La API tardó demasiado en responder.", "alert");
    }, 10000);

    try {
        const response = await fetch(API_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ texto: userQuery }),
            signal: controller.signal
        });

        clearTimeout(timeoutId);
        
        if (!response.ok) {
            throw new Error(`Error HTTP: ${response.status}`);
        }
        
        const data = await response.json();
        showTypingIndicator(false);
        
        // Procesar la respuesta de la API
        processAPIResponse(data);
        
    } catch (error) {
        showTypingIndicator(false);
        if (error.name === "AbortError") {
            addMessage("⏳ Tiempo excedido.", "alert");
        } else {
            addMessage("⚠ Error inesperado con la API.", "alert");
        }
    } finally {
        sendButton.disabled = false;
    }
}

// Procesar respuesta de la API
function processAPIResponse(data) {
    // Mostrar información del análisis
    addMessage(`Sentimiento <strong>${data.sentiment}</strong> `, "chat");
    
    // Mostrar resultados organizados
    if (data.resultados && data.resultados.length > 0) {
        addMessage("💬 Encontré estas opciones para ti. Selecciona la que prefieras:", "chat");
        
        // Marcar el inicio de las opciones con un contenedor especial
        const optionsStartMarker = document.createElement('div');
        optionsStartMarker.classList.add('options-container-start');
        optionsStartMarker.style.display = 'none';
        messageArea.appendChild(optionsStartMarker);
        
        data.resultados.forEach((resultado, index) => {
            const tagsArray = resultado.tags ? resultado.tags.split(', ') : [];
            const tagsHtml = tagsArray.map(tag => `<span class="tag">${tag}</span>`).join('');
            
            addMessage(resultado.contenido, "response", {
                id: resultado.id,
                title: resultado.titulo,
                tags: tagsHtml,
                tipo: resultado.tipo,
                created_at: resultado.created_at
            });
        });
    } else {
        addMessage("No encontré resultados específicos para tu consulta. ¿Puedes proporcionar más detalles?", "chat");
    }
    
    // Mostrar tokens expandidos si existen
    if (data.expanded_tokens && data.expanded_tokens.length > 0) {
        const expandedTokens = data.expanded_tokens.join(', ');
        addMessage(`Búsqueda expandida: ${expandedTokens}`, "chat");
    }
}

// Manejar selección de respuesta
function responseSelect(selectedElement, text, options) {
    // Encontrar todos los elementos de respuesta
    const allResponseElements = document.querySelectorAll('.clickable-response');
    const optionsStartMarker = document.querySelector('.options-container-start');
    
    // Encontrar el índice del elemento seleccionado
    let selectedIndex = -1;
    allResponseElements.forEach((el, index) => {
        if (el === selectedElement) {
            selectedIndex = index;
        }
    });
    
    // Remover todas las opciones excepto la seleccionada
    allResponseElements.forEach((el, index) => {
        if (el !== selectedElement) {
            // Animación de desvanecimiento antes de remover
            el.style.opacity = '0.5';
            el.style.transform = 'translateX(-100%)';
            setTimeout(() => {
                el.remove();
            }, 300);
        } else {
            // Marcar como seleccionado y aplicar estilos
            el.classList.add('selected');
            el.style.opacity = '1';
            el.style.transform = 'scale(1.02)';
            el.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
            
            // Hacer no clickeable después de seleccionar
            el.onclick = null;
            el.style.cursor = 'default';
        }
    });
    
    // Remover el marcador de inicio de opciones
    if (optionsStartMarker) {
        optionsStartMarker.remove();
    }
    
    // Remover el mensaje "Selecciona la que prefieras" si existe
    const selectMessage = Array.from(document.querySelectorAll('.chat-message')).find(el => 
        el.textContent.includes('Selecciona la que prefieras')
    );
    if (selectMessage) {
        selectMessage.style.opacity = '0.5';
        setTimeout(() => {
            selectMessage.remove();
        }, 300);
    }
    
    
}

window.onload = adjustInputArea;