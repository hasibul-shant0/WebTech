<?php
// ajax/eventActions.php
require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');
$action = $_REQUEST['action'] ?? '';
if ($action === 'fetch_events') {
    $stmt = $pdo->query('SELECT id, title, description, location, DATE_FORMAT(event_date, "%Y-%m-%d") event_date, TIME_FORMAT(event_time, "%H:%i") event_time FROM events WHERE event_date >= CURDATE() ORDER BY event_date ASC');
    $events = $stmt->fetchAll();
    echo json_encode(['events' => $events]);
    exit;
}
// Additional admin actions (create/edit/delete) can be added here and protected by session + role checks.
echo json_encode(['error' => 'Invalid action']);
exit;
?>