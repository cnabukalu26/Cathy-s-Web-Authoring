<?php require_once __DIR__."/config.php"; ?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($title ?? "Elite High School Entebbe") ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head><body>
<header><div class="wrap nav">
<a class="brand" href="index.php"><img src="images/logo.png" alt="Elite High School Entebbe crest"><span>Elite High School<small>Entebbe · Walk the Talk</small></span></a>
<nav aria-label="Main"><button id="tg" aria-expanded="false" aria-controls="menu">Menu</button>
<ul id="menu"><li><a href="index.php#about">About</a></li><li><a href="index.php#learn">Learning</a></li><li><a href="index.php#life">Campus life</a></li><li><a href="index.php#gallery">Gallery</a></li><li><a href="index.php#contact">Contact</a></li><li><a class="apply" href="admissions.php"<?= basename($_SERVER['SCRIPT_NAME'])==='admissions.php' ? ' aria-current="page"' : '' ?>>Apply</a></li></ul></nav>
</div></header>
