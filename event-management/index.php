<?php
// index.php - public landing page (lists events via AJAX)
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Event Management System</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
  <header>
    <h1>Event Management System</h1>
    <nav>
      <a href="login.php">Login</a> |
      <a href="register.php">Register</a>
    </nav>
  </header>
  <main>
    <section id="events">
      <h2>Upcoming Events</h2>
      <div id="eventsList">Loading events...</div>
    </section>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>
