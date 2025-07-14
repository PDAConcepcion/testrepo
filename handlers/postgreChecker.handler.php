<?php
// PostgreSQL connection checker
try {
    // Use port 5113 (external) mapped to 5433 (internal) as per compose.yaml
    $host = 'host.docker.internal';
    $port = '5114';
    $dbname = 'tester_db';
    $user = 'demonking';
    $password = 'divinecultivation';
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "✅ PostgreSQL Connection";
} catch (Exception $e) {
    echo "❌ Connection Failed: " . $e->getMessage();
}
