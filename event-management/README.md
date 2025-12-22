# Event Management System (PHP, jQuery, AJAX, JSON)
Structure and basic starter files for a course project.

## How to use
1. Unzip the archive in your web server's document root (e.g., XAMPP `htdocs`).
2. Create a MySQL database (e.g., `event_mgmt`) and import `database.sql`.
3. Update `config/db.php` with your DB credentials.
4. Start your local server and open `index.php`.

## Included files
- config/db.php  -- DB connection (PDO)
- index.php      -- Public event listing + login links
- login.php      -- Simple login (customer/admin placeholder)
- register.php   -- Customer registration (simple)
- assets/css/style.css
- assets/js/main.js
- ajax/eventActions.php
- ajax/registrationActions.php
- database.sql   -- schema for users, events, registrations
- README.md
