<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/tms.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title> <?= esc($title) ?> </title>
</head>
<body>
    <nav id="dashboard-nav" aria-label="Main navigation">
        <button type="button" class="close-nav" id="close-nav" aria-label="Close navigation">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
        <div class="title-container-nav">
            <h1 class="title-nav">TMS</h1>
        </div>
        <div class="divider-nav"></div>
        <div class="links-nav">
            <a href="<?= site_url('/') ?>">Welcome</a>
            <a href="<?= site_url('/about') ?>">About</a>
            <a href="<?= site_url('/tasks') ?>">Tasks</a>
            <a href="<?= site_url('/profile') ?>">Profile</a>
        </div>
    </nav>
    <div class="ui-backdrop" id="ui-backdrop-nav" aria-hidden="true"></div>
    <section>
        <div class="content-dashboard">
            <?= $this->renderSection('content') ?>
        </div>
        <footer>
            <div class="logo-footer">
                <h1>TMS</h1>
                <p>&copy since 2026</p>
            </div>
            <div class="socs-footer">
                <div class="socs-link-footer">
                    <p>Github:</p>
                    <a href="https://github.com/ardonreyes">ardonreyes</a>
                </div>
                <div class="socs-link-footer">
                    <p>E-mail:</p>
                    <p>arreyes@fit.edu.ph</p>
                </div>
            </div>
        </footer>
    </section>
</body>

<script src=" <?= base_url('js/tms.js') ?>"></script>
</html>
