<?php
// ajax/registrationActions.php
session_start();
require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');
$action = $_REQUEST['action'] ?? '';
if ($action === 'register') {
    if (empty($_SESSION['user_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'You must be logged in to register. Please login first.']);
        exit;
    }
    $user_id = $_SESSION['user_id'];
    $event_id = intval($_POST['event_id'] ?? 0);
    if (!$event_id) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid event id']);
        exit;
    }
    // check duplicate
    $s = $pdo->prepare('SELECT id FROM registrations WHERE user_id = ? AND event_id = ? AND status != "cancelled"');
    $s->execute([$user_id, $event_id]);
    if ($s->fetch()) {
        echo json_encode(['status' => 'error', 'message' => 'Already registered for this event']);
        exit;
    }
    // simple capacity check
    $c = $pdo->prepare('SELECT capacity FROM events WHERE id = ?');
    $c->execute([$event_id]);
    $row = $c->fetch();
    if (!$row) {
        echo json_encode(['status' => 'error', 'message' => 'Event not found']);
        exit;
    }
    $capacity = intval($row['capacity']);
    $count = $pdo->prepare('SELECT COUNT(*) as cnt FROM registrations WHERE event_id = ? AND status = "confirmed"');
    $count->execute([$event_id]);
    $cnt = intval($count->fetchColumn());
    if ($capacity > 0 && $cnt >= $capacity) {
        echo json_encode(['status' => 'error', 'message' => 'Event is full']);
        exit;
    }
    $ins = $pdo->prepare('INSERT INTO registrations (user_id, event_id, status, registered_at) VALUES (?, ?, ?, NOW())');
    $ins->execute([$user_id, $event_id, 'pending']);
    echo json_encode(['status' => 'success', 'message' => 'Registration submitted (pending confirmation)']);
    exit;
}
echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
exit;
?>