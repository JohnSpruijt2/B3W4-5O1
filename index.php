<?php

$servername = 'localhost';
$database = 'databank_php';
$username = 'website';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $query = $conn->prepare("SELECT * FROM characters");
    $query->execute();
    $result = $query->fetchall();

    $query = $conn->prepare("SELECT max(id) AS total FROM `characters`");
    $query->execute();
    $resultCount = $query->fetchall();
    
    if ($_GET['page'] == null) {
        header('Location: ?page=home');
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>B3W5O1</title>
</head>
<body>

<?php include 'content/'.$_GET['page'].'.php';  $conn = null;?>


<footer>&copy; John Spruijt 2020</footer>
</body>
</html>