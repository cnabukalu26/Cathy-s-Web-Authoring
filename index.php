<?php $title="Elite High School Entebbe – Walk the Talk"; include "includes/header.php"; ?>
<main id="top">
<div class="hero"><div class="wrap">
<span class="motto">Walk the Talk · Titus 2:7</span>
<h1>Where character leads the way</h1>
<p>Elite High School Entebbe helps young people grow in knowledge, discipline and faith, on a bright campus in Entebbe, Uganda.</p>
<a class="btn b1" href="admissions.php">Start admission</a><a class="btn b2" href="#gallery">See the campus</a>
</div></div>

<section id="about"><div class="wrap split">
<div><h2>A school that lives what it teaches</h2>
<p>Our motto, “Walk the Talk,” is a promise: students are guided to match their words with their actions, in class, on the field and at home.</p>
<p>Elite High School Entebbe brings together committed teachers, modern learning spaces and a caring community so every student can aim high and stay grounded.</p>
<p class="verse">“In all things show yourself to be an example.” — Titus 2:7</p></div>
<img src="images/campus1.jpg" alt="Main classroom block of Elite High School Entebbe" loading="lazy">
</div></section>

<section class="alt" id="learn"><div class="wrap">
<h2>Learning that prepares you for more</h2>
<p class="lead">A balanced education that develops the mind, the body and the heart.</p>
<div class="grid">
<div class="card"><div class="ic"><svg viewBox="0 0 24 24"><path d="M4 5h6a3 3 0 0 1 3 3v11a2 2 0 0 0-2-2H4zM20 5h-6a3 3 0 0 0-3 3"/><path d="M20 5v12h-7"/></svg></div><h3>Strong academics</h3><p>Focused teaching, regular assessment and support to help every learner reach their potential.</p></div>
<div class="card"><div class="ic"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 3c3 3 3 15 0 18M3 12h18"/></svg></div><h3>Sports and fitness</h3><p>Hockey and other team sports build teamwork, resilience and school pride.</p></div>
<div class="card"><div class="ic"><svg viewBox="0 0 24 24"><path d="M12 3v18M5 9h14"/></svg></div><h3>Faith and values</h3><p>Guided by Titus 2:7, we encourage integrity, respect and service to others.</p></div>
<div class="card"><div class="ic"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Modern facilities</h3><p>Spacious multi-storey classroom blocks with open verandas and plenty of light.</p></div>
</div></div></section>

<section id="life"><div class="wrap split">
<img src="images/games.jpg" alt="Students playing hockey in Uganda team jerseys" loading="lazy">
<div><h2>Life beyond the classroom</h2>
<p>Learning does not stop at the bell. On the pitch, in clubs and around the compound, students learn to lead, cooperate and keep going when things get tough.</p>
<p>Our hockey players show what “Walk the Talk” looks like in action: discipline in training and respect in competition.</p>
<p style="margin-top:22px"><a class="btn b3" href="#gallery">Explore campus life</a></p></div>
</div></section>

<section class="alt" id="gallery"><div class="wrap">
<h2>Around the campus</h2>
<p class="lead">A look at our gate, classroom blocks and playing field.</p>
<div class="gal">
<figure><img src="images/campus1.jpg" alt="Elite High School Entebbe classroom block" loading="lazy"><figcaption>Main classroom block</figcaption></figure>
<figure><img src="images/gate.jpg" alt="School entrance gate" loading="lazy"><figcaption>School gate</figcaption></figure>
<figure><img src="images/campus2.jpg" alt="Courtyard and new building" loading="lazy"><figcaption>Courtyard</figcaption></figure>
<figure><img src="images/games.jpg" alt="Hockey match" loading="lazy"><figcaption>On the pitch</figcaption></figure>
</div></div></section>

<section class="cta" id="admissions"><div class="wrap">
<h2>Join the Elite family</h2>
<p>Ready to begin? Send us a message and the admissions office will guide you through the next steps.</p>
<a class="btn b1" href="admissions.php">Apply for admission</a>
</div></section>

<section id="contact"><div class="wrap split">
<div><h2>Get in touch</h2>
<p>Elite High School Entebbe<br>Entebbe, Uganda</p>
<p style="margin-top:14px;color:var(--mute)">Questions about admission, visits or school life? Send a message and we will reply.</p></div>
<form action="contact.php" method="post">
<?php if(isset($_GET['sent'])): ?><div class="ok" role="status">Thank you. Your message has been received.</div><?php endif; ?>
<?php if(isset($_GET['error'])): ?><div class="err" role="alert">Please fill in your name, a valid email and a message.</div><?php endif; ?>
<label>Your name<input name="name" required autocomplete="name"></label>
<label>Email<input name="email" type="email" required autocomplete="email"></label>
<label>Message<textarea name="message" rows="4" required></textarea></label>
<button class="btn b3" type="submit">Send message</button>
</form></div></section>
</main>
<?php include "includes/footer.php"; ?>
