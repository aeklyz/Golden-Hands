<div>
    <!-- Chatbot Button -->
    <div id="chatbotButton" onclick="toggleChat()">💬</div>

    <!-- Chatbot Container -->
    <div id="chatContainer">
        <div id="chatHeader">
            Chat with us
            <button id="closeButton" onclick="closeChat()">✖</button>
        </div>
        <div id="messagesArea">
            <div class="botMessage">Hello! How can I assist you today?</div>
        </div>
        <div id="inputArea">
            <input type="text" id="inputField" placeholder="Type a message...">
            <button id="sendButton" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        // Toggle the chatbot interface
        function toggleChat() {
            var chatContainer = document.getElementById('chatContainer');
            chatContainer.style.display = chatContainer.style.display === 'none' || chatContainer.style.display === '' ? 'flex' : 'none';
        }

        // Close the chatbot
        function closeChat() {
            document.getElementById('chatContainer').style.display = 'none';
        }

        // Send the user's message and display the bot response
        function sendMessage() {
            var inputField = document.getElementById('inputField');
            var messagesArea = document.getElementById('messagesArea');

            if (inputField.value.trim() !== "") {
                // Display user message
                var userMessageDiv = document.createElement('div');
                userMessageDiv.className = 'userMessage';
                userMessageDiv.textContent = inputField.value;
                messagesArea.appendChild(userMessageDiv);

                // Scroll to the latest message
                messagesArea.scrollTop = messagesArea.scrollHeight;

                // Get the user input
                var userMessage = inputField.value;

                // Clear input field
                inputField.value = '';

                // Make an AJAX request to send the user's message to the backend
                fetch('/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ message: userMessage })
                })
                    .then(response => response.json())
                    .then(data => {
                        // Display bot response
                        var botMessageDiv = document.createElement('div');
                        botMessageDiv.className = 'botMessage';
                        botMessageDiv.textContent = data.message;  // The bot's response
                        messagesArea.appendChild(botMessageDiv);

                        // Scroll to the latest message
                        messagesArea.scrollTop = messagesArea.scrollHeight;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }
    </script>
</div>