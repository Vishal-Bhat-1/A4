<?php
$host = 'localhost';
$db = 'triage_db';
$user = 'dbuser';
$pass = 'dbpass';

$pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['patient-name'];
    $severity = $_POST['severity'];

    $stmt = $pdo->prepare('INSERT INTO patients (name, severity) VALUES (?, ?)');
    $stmt->execute([$name, $severity]);

    echo json_encode(['success' => true]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query('SELECT * FROM patients ORDER BY severity DESC, created_at ASC');
    $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($patients);
    exit;
}
?>
