<?php
// Database settings (XAMPP defaults: user root, no password)
define('DB_HOST', 'localhost');
define('DB_NAME', 'elite_high_school');
define('DB_USER', 'root');
define('DB_PASS', '');
// Admin login for admin/index.php: change these before going live
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'elite2026');

if (session_status() === PHP_SESSION_NONE) session_start();

function db(): PDO {
    static $pdo = null;
    if (!$pdo) {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4', DB_USER, DB_PASS,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $ex) {
            die('Database connection failed. Start MySQL in XAMPP and import database.sql in phpMyAdmin.');
        }
    }
    return $pdo;
}
function e($s): string { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
