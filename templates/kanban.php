<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Назва проекту</h1>
            </div>
            <div class="col-sm-6 d-none d-sm-block">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Назва проекту</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="row">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <a type="button" href="#" class="btn btn-secondary active">Усі завдання</a>
                        <a type="button" href="#" class="btn btn-default">Порядок денний</a>
                        <a type="button" href="#" class="btn btn-default">Завтра</a>
                        <a type="button" href="#" class="btn btn-default">Прострочені</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content pb-3">
    <div class="container-fluid h-100">
        <div class="card card-row card-secondary">
            <div class="card-header">
                <h3 class="card-title">
                    Беклог
                </h3>
            </div>
            <div class="card-body connectedSortable" data-status="backlog">
                <?php foreach ($tasksList as $task): ?>
                    <?php if ($task['status'] == 'backlog'): ?>
                        <?php echo renderTemplate('components/task.php', ['task' => $task, 'info' => timeToDedline($task['date'])]); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card card-row card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Зробити
                </h3>
            </div>
            <div class="card-body connectedSortable" data-status="to-do">
                <?php foreach ($tasksList as $task): ?>
                    <?php if ($task['status'] == 'to-do'): ?>
                        <?php echo renderTemplate('components/task.php', ['task' => $task, 'info' => timeToDedline($task['date'])]); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card card-row card-default">
            <div class="card-header bg-info">
                <h3 class="card-title">
                    В процесі
                </h3>
            </div>
            <div class="card-body connectedSortable" data-status="in-progress">
                <?php foreach ($tasksList as $task): ?>
                    <?php if ($task['status'] == 'in-progress'): ?>
                        <?php echo renderTemplate('/components/task.php', ['task' => $task, 'info' => timeToDedline($task['date'])]); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card card-row card-success">
            <div class="card-header">
                <h3 class="card-title">
                    Готово
                </h3>
            </div>
            <div class="card-body connectedSortable" data-status="done">
                <?php foreach ($tasksList as $task): ?>
                    <?php if ($task['status'] == 'done'): ?>
                        <?php echo renderTemplate('/components/task.php', ['task' => $task, 'info' => '']); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
