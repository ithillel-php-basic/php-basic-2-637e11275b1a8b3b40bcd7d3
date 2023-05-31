<?php

require 'helpers.php';
require 'config.php';

/** @var $database */
$serverName = $database['host'];
$dbName = $database['db_name'];
$userName = $database['user_name'];
$password =  $database['password'];

$status = [
    'backlog',
    'to-do',
    'in-progress',
    'done'
];

try {
	$connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$projectCollection = $connection->prepare("SELECT * FROM projects WHERE user_id = (SELECT id FROM users WHERE email='sblessed6@surveymonkey.com')");
	$projectCollection->execute();
	$result = $projectCollection->setFetchMode(PDO::FETCH_ASSOC);
	$projectsList = $projectCollection->fetchAll();

	foreach ($projectsList as $item) {
		$project[] = $item['name'];
	}

	$taskCollection = $connection->prepare("SELECT * FROM tasks WHERE user_id = (SELECT id FROM users WHERE email='sblessed6@surveymonkey.com')");
	$taskCollection->execute();
	$result = $taskCollection->setFetchMode(PDO::FETCH_ASSOC);
	$tasks = $taskCollection->fetchAll();

	foreach ($tasks as $task) {

		$category = getCategoryName($projectsList, $task['project_id']);

		$tasksList[] = [
			'name' => $task['title'],
			'date' => $task['created_at'],
			'category' => $category,
			'status' => $task['status']
		];
	}

} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$kanban = renderTemplate('kanban.php', [
    'tasksList' => $tasksList,
    'info' => 'info'
]);

$main = renderTemplate('main.php', [
    'avatar' => "static/img/user2-160x160.jpg",
    'userName' => 'John',
    'project' => $project,
    'tasksList' => $tasksList,
    'content' => $kanban,
]);

$layout = renderTemplate('layout.php', [
    'main' => $main,
    'title' => "Завдання та проекти | ДошкаЗавдання та проекти | Дошка"
]);

print($layout);
