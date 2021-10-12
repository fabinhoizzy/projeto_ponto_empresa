<?php
session_start();
requireValidSession();
loadModel('WorkingHours');
$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$recors = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', [
    'taday' => $today,
    'recors' => $recors
]);