<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>İletişim Formu</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url('background.jpg') no-repeat center center fixed;
        background-size: cover;
        font-family: Arial, sans-serif;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .form-container {
        background: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
    }
    .form-container input[type="text"],
    .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .form-container input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .form-container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h2>İletişim Formu</h2>
        <form action="submit.php" method="post">
            <label for="fname">İsim:</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Soyisim:</label><br>
            <input type="text" id="lname" name="lname" required><br>
            <label for="message">Görüşleriniz:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            <input type="submit" value="Gönder">
        </form>
    </div>
</div>
</body>
</html>
