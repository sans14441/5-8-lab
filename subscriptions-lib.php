<?php
const SUBSCRIPTIONS_FILE = './storage/subscriptions.ser';

function allSubscriptions() {
    return file_exists(SUBSCRIPTIONS_FILE) ? unserialize(file_get_contents(SUBSCRIPTIONS_FILE)) : [];
}

function addSubscription($params) {
    $subscriptions = allSubscriptions();
    $subscriptions[] = $params;
    file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}

function logMessage($message) {
    $logFile = './storage/log.txt';
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND | LOCK_EX);
}