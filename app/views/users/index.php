<div class="container mt-4">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Daftar Users</h1>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center" >
                        <?= $mhs['username'] ?>
                        <a class="badge badge-primary " href="<?= BASEURL ?>/users/detail/<?= $mhs['id'];?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col">
            <h1>Cara Daftar</h1>
        </div>
    </div>
</div>