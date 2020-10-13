<?php
// (1) DATABASE CONFIG
define('DB_HOST', 'localhost');
define('DB_NAME', 'biglibrary');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// (2) CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false ]
  );
} catch (Exception $ex) {
  die($ex->getMessage());
}

// (3) SEARCH
$stmt = $pdo->prepare("SELECT * FROM `book` WHERE `Title` LIKE ? OR `Author` LIKE ? OR `ISBN_10` LIKE ? OR `ISBN_13` LIKE ?");
$stmt->execute(["%" . $_POST['search'] . "%","%" . $_POST['search'] . "%","%" . $_POST['search'] . "%","%" . $_POST['search'] . "%"]);
$results = $stmt->fetchAll();
