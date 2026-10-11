<?= $this->extend('layout/main.layout.php') ?>
<?= $this->section('content') ?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>TASK LIST</h1>
            <p>View every task in date order.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button type="button" id="open-nav" class="nav-btn" aria-label="Open navigation" aria-controls="dashboard-nav" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
        </div>
    </div>

<div class="content-section" aria-labelledby="all-tasks-heading">
    <div class="section-heading">
        <div>
            <h2 id="all-tasks-heading">All tasks</h2>
            <p>Tasks ordered by date.</p>
        </div>
    </div>

    <?= $this->include('page/_task_list') ?>
</div>
</div>

<?= $this->endSection() ?>
