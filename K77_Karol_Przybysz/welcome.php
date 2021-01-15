<?php
// Inicjalizacja 
session_start();
 
// Sprawdzenie czy jestesmy zalogowani, jezeli nie to przeniesie nas na stronę głowną - do logowania
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witaj na naszej stronie.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Zresetuj hasło</a>
        <a href="logout.php" class="btn btn-danger">Wyloguj się</a>
		<a href="admin.php" class="btn btn-danger">Przejdź do strony głównej</a>
    </p>
</body>
</html>