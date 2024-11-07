<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover to Speak Text</title>
</head>
<body>

    <h1 id="header" onmouseover="speakText(this)">Hover over this title!</h1>
    <button id="speakButton" onmouseover="speakText(this)">Hover over this button!</button>
    <p id="paragraph" onmouseover="speakText(this)">Hover over this paragraph to hear it speak!</p>

    <script>
        // Function to speak text
        function speakText(element) {
            const text = element.textContent || element.innerText;
            const utterance = new SpeechSynthesisUtterance(text);
            window.speechSynthesis.speak(utterance);
        }
    </script>

</body>
</html>
