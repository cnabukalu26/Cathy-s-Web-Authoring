<?php
$title = 'Admissions – Elite High School Entebbe';
require_once 'includes/config.php';
$done = false; $err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $f = fn($k) => trim($_POST[$k] ?? '');
    if ($f('student_name')==='' || $f('guardian_name')==='' || $f('phone')==='' || !filter_var($f('email'), FILTER_VALIDATE_EMAIL) || $f('class_applying')==='') {
        $err = 'Please complete all required fields and use a valid email address.';
    } else {
        db()->prepare('INSERT INTO applications (student_name,dob,class_applying,guardian_name,phone,email,notes) VALUES (?,?,?,?,?,?,?)')
            ->execute([$f('student_name'), $f('dob') ?: null, $f('class_applying'), $f('guardian_name'), $f('phone'), $f('email'), $f('notes')]);
        $done = true; $_POST = [];
    }
}
include 'includes/header.php';
?>
<main class="page"><div class="wrap">
<p><a class="back" href="index.php">&larr; Back to home</a></p>
<h2>Apply to Elite High School Entebbe</h2>
<p class="lead">Fill in the form and the admissions office will contact you with the next steps.</p>
<?php if ($done): ?><div class="ok" role="status">Application received. Thank you, we will contact you soon.</div><?php endif; ?>
<?php if ($err): ?><div class="err" role="alert"><?= e($err) ?></div><?php endif; ?>
<form method="post">
<div class="two">
<label>Student's full name *<input name="student_name" required value="<?= e($_POST['student_name'] ?? '') ?>"></label>
<label>Date of birth<input name="dob" type="date" value="<?= e($_POST['dob'] ?? '') ?>"></label>
</div>
<label>Class applying for *
<select name="class_applying" required><option value="">Choose a class</option>
<?php foreach (['Senior 1','Senior 2','Senior 3','Senior 4','Senior 5','Senior 6'] as $c): ?><option><?= $c ?></option><?php endforeach; ?></select></label>
<label>Parent or guardian name *<input name="guardian_name" required value="<?= e($_POST['guardian_name'] ?? '') ?>"></label>
<div class="two">
<label>Phone *<input name="phone" type="tel" required value="<?= e($_POST['phone'] ?? '') ?>"></label>
<label>Email *<input name="email" type="email" required value="<?= e($_POST['email'] ?? '') ?>"></label>
</div>
<label>Anything else we should know?<textarea name="notes" rows="4"><?= e($_POST['notes'] ?? '') ?></textarea></label>
<button class="btn b3" type="submit">Submit application</button>
</form></div></main>
<?php include 'includes/footer.php'; ?>
