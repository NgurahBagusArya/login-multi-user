<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['user']['username']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['user']['email']; ?></h6>
            <p class="card-text"><?= $data['user']['no_telp']; ?></p>
            <a href="<?= BASEURL ?>/users" class="card-link">Kembali</a>
        </div>
    </div>
</div>