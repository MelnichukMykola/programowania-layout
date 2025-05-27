<?php
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

if (!$name || !$email || !$message) {
  header('Location: index.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dziękujemy!</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: Poppins, sans-serif;
      background-color: #1d1d1d;
      color: white;
      text-align: center;
      padding: 50px;
    }
    .thank-you-box {
      background-color: #2a2a2a;
      padding: 40px;
      border-radius: 16px;
      display: inline-block;
      max-width: 500px;
    }
    .thank-you-box h1 {
      color: #f9c74f;
      margin-bottom: 20px;
    }
    .thank-you-box p {
      font-size: 18px;
      margin: 10px 0;
    }
    a.button {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #f9c74f;
      color: #000;
      text-decoration: none;
      border-radius: 32px;
      font-weight: bold;
      transition: background 0.3s;
    }
    a.button:hover {
      background-color: #ffd84d;
    }
  </style>
</head>
<body>
  <div class="thank-you-box">
    <h1>Dziękujemy za kontakt!</h1>
    <p><strong>Imię:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Wiadomość:</strong></p>
    <p><?= nl2br($message) ?></p>
    <a href="index.html" class="button">Wróć na stronę główną</a>
  </div>
</body>
</html>
