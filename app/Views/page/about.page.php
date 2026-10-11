<?= $this->extend('layout/main.layout.php') ?>
<?= $this->section('content') ?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>ABOUT</h1>
            <p>Learn more about the system.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button type="button" id="open-nav" class="nav-btn" aria-label="Open navigation" aria-controls="dashboard-nav" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
        </div>
    </div>

    <div class="description-about">
        <h1 id="about-heading">Task Management System</h1>
        <p>TMS is a simple system for viewing today's tasks, the complete task list, and the user profile.</p>
        <p class="developer-credit">Designed and developed by <strong>Ardon Reyes</strong>.</p>
    </div>
</div>

<?= $this->endSection() ?>
