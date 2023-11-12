<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beer Store Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Dark background color */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .beer-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px; /* Add a bit of gap below the image */
        }

        .container {
            width: 100%;
            max-width: 400px;
            text-align: center;
            padding: 20px;
            background-color: #333; /* Dark container background color */
            color: #fff; /* Light text color */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .data-display {
            color: #fff;
            text-align: center;
            margin-top: 20px;
        }

        .error-message {
            color: #ff0000;
            display: none;
        }

        .go-back-button {
            background-color: #000000; /* Darker shade of black */
            color: #fff; /* Light text color */
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .go-back-button:hover {
            background-color: #111; /* Slightly darker background on hover */
        }
    </style>
</head>
<body>
    <img src="beer.png" alt="Beer Image" class="beer-image">
    <div class="container">
        <h2>Beer Store Login</h2>
        <div class="data-display">
            <p>Submitted Data:</p>
            <p>Username: <span id="display-username"><?= isset($_POST['uname']) ? htmlspecialchars($_POST['uname']) : 'N/A' ?></span></p>
            <p>Password: <span id="display-password"><?= isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'N/A' ?></span></p>
        </div>
        <p class="error-message">Incorrect username or password.</p>
        <button class="go-back-button" onclick="goBack()">Go Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
