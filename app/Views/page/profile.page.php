<?= $this->extend('layout/main.layout.php') ?>
<?= $this->section('content') ?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>PROFILE</h1>
            <p>View the system user profile.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button type="button" id="open-nav" class="nav-btn" aria-label="Open navigation" aria-controls="dashboard-nav" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
        </div>
    </div>

<div class="profile-wrap" aria-labelledby="profile-heading">
    <?php if ($user === null): ?>
        <div class="empty-state">
            <h2 id="profile-heading">No user record found</h2>
            <p>Add one user to the database to display a profile.</p>
        </div>
    <?php else: ?>
        <article class="profile-card">
            <div class="profile-top">
                <div class="profile-photo-placeholder" aria-label="Profile photo placeholder">
                    <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
                </div>
                <div class="profile-identity">
                    <h2 id="profile-heading"><?= esc($user['full_name']) ?></h2>
                    <p>@<?= esc($user['username']) ?></p>
                    <a href="mailto:<?= esc($user['email'], 'attr') ?>"><?= esc($user['email']) ?></a>
                </div>
            </div>

            <dl class="profile-details">
                <div>
                    <dt>User ID</dt>
                    <dd><?= esc($user['id']) ?></dd>
                </div>
                <div>
                    <dt>Created at</dt>
                    <dd><?= esc($user['created_at']) ?></dd>
                </div>
            </dl>
        </article>
    <?php endif; ?>
</div>
</div>

<?= $this->endSection() ?>
