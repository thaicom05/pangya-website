<?php
header('Content-Type: application/json');

// Example server status data
$status = array(
    'status' => 'online',
    'players_online' => 125,
    'channels' => [
        'Channel 1',
        'Channel 2',
        'Channel 3'
    ],
    'ping' => '30ms',
    'time' => '2026-04-09 03:16:43'
);

// Return JSON response
echo json_encode($status);
?>