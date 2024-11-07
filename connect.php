<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Button Example</title>
    <style>
        /* Basic styling for the toggle button */
        #toggleBtn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #toggleBtn.off {
            background-color: #DC3545;
        }
    </style>
</head>
<body>

    <button id="toggleBtn" onclick="toggle()">OFF</button>

    <script>
        // Initial state
        let isOn = false;

        // Toggle function
        function toggle() {
            isOn = !isOn; // Switch the state
            const button = document.getElementById('toggleBtn');
            if (isOn) {
                button.textContent = 'ON';
                button.classList.remove('off');
                button.style.backgroundColor = "#28A745";
            } else {
                button.textContent = 'OFF';
                button.classList.add('off');
                button.style.backgroundColor = "#DC3545";
            }
        }
    </script>

</body>
</html>
