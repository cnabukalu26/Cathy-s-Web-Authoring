<?php
require_once '../includes/config.php';
if (isset($_GET['logout'])) { session_destroy(); header('Location: index.php'); exit; }
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    if (hash_equals(ADMIN_USER, $_POST['user'] ?? '') && hash_equals(ADMIN_PASS, $_POST['pass'] ?? '')) { $_SESSION['admin'] = true; header('Location: index.php'); exit; }
    $err = 'Wrong username or password.';
}
if (!empty($_SESSION['admin']) && isset($_GET['status'], $_GET['id']) && in_array($_GET['status'], ['New','Contacted','Admitted','Declined'], true)) {
    db()->prepare('UPDATE applications SET status=? WHERE id=?')->execute([$_GET['status'], (int)$_GET['id']]);
    header('Location: index.php'); exit;
}
?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin – Elite High School Entebbe</title><link rel="stylesheet" href="../css/style.css"></head><body>
<header><div class="wrap nav"><a class="brand" href="../index.php"><img src="../images/logo.png" alt="Crest"><span>School admin<small>Elite High School Entebbe</small></span></a>
<?php if (!empty($_SESSION['admin'])): ?><a class="btn b1" style="margin:0" href="?logout=1">Log out</a><?php endif; ?></div></header>
<main class="page"><div class="wrap">
<?php if (empty($_SESSION['admin'])): ?>
<h2>Admin login</h2>
<?php if ($err): ?><div class="err"><?= e($err) ?></div><?php endif; ?>
<form method="post"><input type="hidden" name="login" value="1">
<label>Username<input name="user" required></label><label>Password<input name="pass" type="password" required></label>
<button class="btn b3" type="submit">Log in</button></form>
<?php else:
$apps = db()->query('SELECT * FROM applications ORDER BY created_at DESC')->fetchAll();
$msgs = db()->query('SELECT * FROM messages ORDER BY created_at DESC')->fetchAll(); ?>
<h2>Applications (<?= count($apps) ?>)</h2>
<div class="tw"><table><tr><th>Student</th><th>Class</th><th>Guardian</th><th>Phone</th><th>Email</th><th>Status</th><th>Date</th></tr>
<?php foreach ($apps as $a): ?><tr><td><?= e($a['student_name']) ?></td><td><?= e($a['class_applying']) ?></td><td><?= e($a['guardian_name']) ?></td><td><?= e($a['phone']) ?></td><td><?= e($a['email']) ?></td>
<td><?= e($a['status']) ?><br><?php foreach (['Contacted','Admitted','Declined'] as $s): ?><a href="?id=<?= (int)$a['id'] ?>&status=<?= $s ?>"><?= $s ?></a> <?php endforeach; ?></td><td><?= e($a['created_at']) ?></td></tr>
<?php endforeach; if (!$apps): ?><tr><td colspan="7">No applications yet.</td></tr><?php endif; ?></table></div>
<h2>Messages (<?= count($msgs) ?>)</h2>
<div class="tw"><table><tr><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr>
<?php foreach ($msgs as $m): ?><tr><td><?= e($m['name']) ?></td><td><?= e($m['email']) ?></td><td><?= nl2br(e($m['message'])) ?></td><td><?= e($m['created_at']) ?></td></tr>
<?php endforeach; if (!$msgs): ?><tr><td colspan="4">No messages yet.</td></tr><?php endif; ?></table></div>
<?php endif; ?>
</div></main></body></html>
