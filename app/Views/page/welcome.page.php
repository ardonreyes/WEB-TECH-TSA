<?= $this->extend('layout/main.layout.php') ?>
<?= $this->section('content') ?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>WELCOME</h1>
            <p>See the tasks scheduled for today.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button type="button" id="open-nav" class="nav-btn" aria-label="Open navigation" aria-controls="dashboard-nav" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
        </div>
    </div>

<div class="content-section" aria-labelledby="today-tasks-heading">
    <div class="section-heading">
        <div>
            <h2 id="today-tasks-heading">Today's tasks</h2>
            <p><?= esc(date('l, F j, Y', strtotime($today))) ?></p>
        </div>
        <a class="button-link" href="<?= site_url('/tasks') ?>">View all tasks</a>
    </div>

    <?= $this->include('page/_task_list') ?>
</div>
</div>

<?= $this->endSection() ?>
