<?php if ($tasks === []): ?>
    <div class="empty-state">
        <h3>No tasks found</h3>
        <p>There are no tasks to display here yet.</p>
    </div>
<?php else: ?>
    <div class="task-list">
        <?php foreach ($tasks as $task): ?>
            <?php $statusClass = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $task['status'])); ?>
            <article class="task-card">
                <div class="task-details">
                    <h3><?= esc($task['title']) ?></h3>
                    <p><?= esc(date('F j, Y', strtotime($task['task_date']))) ?></p>
                </div>
                <span class="status-pill status-<?= esc($statusClass, 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
