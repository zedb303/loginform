<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound to Text Converter</title>
</head>
<body>
    <h1>Speech to Text Converter</h1>
    <button id="start-recording">Start Recording</button>
    <button id="stop-recording" disabled>Stop Recording</button>
    <p id="output">Your speech will appear here...</p>

    <script>
        // Check if the browser supports Speech Recognition API
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        if (!SpeechRecognition) {
            alert("Your browser does not support Speech Recognition. Please try Chrome or Edge.");
        } else {
            const recognition = new SpeechRecognition();
            recognition.lang = 'en-US'; // Set the language
            recognition.interimResults = false; // Only show final results
            recognition.continuous = true; // Continue listening for speech

            // Reference to UI elements
            const startBtn = document.getElementById('start-recording');
            const stopBtn = document.getElementById('stop-recording');
            const output = document.getElementById('output');

            // Start recording
            startBtn.addEventListener('click', () => {
                recognition.start();
                output.textContent = "Listening...";
                startBtn.disabled = true;
                stopBtn.disabled = false;
            });

            // Stop recording
            stopBtn.addEventListener('click', () => {
                recognition.stop();
                startBtn.disabled = false;
                stopBtn.disabled = true;
            });

            // Capture speech and display as text
            recognition.addEventListener('result', (event) => {
                const transcript = event.results[event.results.length - 1][0].transcript;
                output.textContent = transcript;
            });

            // Handle errors
            recognition.addEventListener('error', (event) => {
                console.error("Speech Recognition Error:", event.error);
                output.textContent = "Error: " + event.error;
            });
        }
    </script>
</body>
</html>
