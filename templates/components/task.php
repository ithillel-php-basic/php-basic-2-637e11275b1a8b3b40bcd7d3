<div class="card card-info card-outline" data-task-id="1">
  <div class="card-header">
    <h5 class="card-title">
      <?= $task['name']; ?>
    </h5>
    <div class="card-tools">
      <a href="#" class="btn btn-tool btn-link">#3</a>
      <a href="#" class="btn btn-tool">
        <i class="fas fa-pen"></i>
      </a>
    </div>
  </div>
  <div class="card-body">
    <p>
      <?= $task['date'] ?? ''; ?>
    </p>
    <a href="#" class="btn btn-tool">
      <i class="fas fa-file"></i>
    </a>
      <small class="badge badge-<?php echo $info['badge_color'] ?? 'dark'; ?>">
        <i class="far fa-clock"></i>
        <?php echo $info['time_left'] ?? ''; ?>
      </small>
  </div>
</div>