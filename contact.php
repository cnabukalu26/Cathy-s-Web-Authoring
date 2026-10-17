<?php
require_once 'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }
$name = trim($_POST['name'] ?? ''); $email = trim($_POST['email'] ?? ''); $msg = trim($_POST['message'] ?? '');
if ($name === '' || $msg === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { header('Location: index.php?error=1#contact'); exit; }
db()->prepare('INSERT INTO messages (name,email,message) VALUES (?,?,?)')->execute([$name,$email,$msg]);
header('Location: index.php?sent=1#contact');
