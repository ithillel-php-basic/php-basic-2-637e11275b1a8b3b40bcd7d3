<?php

require 'helpers.php';

function tasksNumber($tasks, $projectName) {
  $count = 0;

  foreach ($tasks as $task) {
    if ($task['category'] === $projectName) {
      $count++;
    }
  }

  return $count;
}

$status = [
    'backlog',
    'to-do',
    'in-progress',
    'done'
];

$project = [
    "Вхідні",
    "Навчання",
    "Робота",
    "Домашні справи",
    "Авто"
];

$tasksList = [
    [
        'name' => 'Співбесіда в ІТ компанії',
        'date' => '01.07.2023',
        'category' => $project[2],
        'status' => $status[0]
    ],
    [
        'name' => 'Виконати тестове завдання',
        'date' => '25.07.2023',
        'category' => $project[2],
        'status' => $status[0]
    ],
    [
        'name' => 'Зробити завдання до першого уроку',
        'date' => '27.04.2023',
        'category' => $project[1],
        'status' => $status[3]
    ],
    [
        'name' => 'Зустрітись з друзями',
        'date' => '14.05.2023',
        'category' => $project[0],
        'status' => $status[1]
    ],
    [
        'name' => 'Купити корм для кота',
        'date' => null,
        'category' => $project[3],
        'status' => $status[2]
    ],
    [
        'name' => 'Замовити піцу',
        'date' => null,
        'category' => $project[3],
        'status' => $status[1]
    ],
];

$kanban = renderTemplate('kanban.php', [
    'tasksList' => $tasksList
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