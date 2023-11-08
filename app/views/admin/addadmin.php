<div class="home_content">
    <div class="container mt-3">
        <h3 class="mt-3 ">Add admin</h3>
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#tambahkan_adim">
            tambahkan admin
        </button>
        <hr>

        <div id="konten_blog" class="row mt-5">
            <?php foreach ($data['judul'] as $row) : ?>
                <div class="col-md-4 col-sm-6 col-12 mb-4 text_right">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul']; ?></h5>
                            <p class="card-author text-primary"><?= $row['author']; ?></p>
                            <p class="card-text"><?= $row['konten']; ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahkan_blog" tabindex="-1" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog z-1">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Tambahkan Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/admin/add" method="post">
                    <span></span>
                    <input type="text" class="form-control" id="username" placeholder="Type Your Username..." name="username" required>
            </div>
            <div class="inputBx">

                <span></span>
                <input type="email" class="form-control" id="email" placeholder="Type Your Email..." name="email" required>
            </div>
            <div class="inputBx">

                <span></span>
                <input type="number" class="form-control" id="no_telp" placeholder="Type Your No Telp..." name="no_telp" required>
            </div>
            <div class="inputBx">

                <span></span>
                <input type="password" class="form-control" id="password" placeholder="Type Your Password Here..." name="password" required>
            </div>
            <div class="inputBx">

                <span></span>
                <input type="password" class="form-control" id="password" placeholder="Confirm Your Password Here..." name="password" required>
            </div>
            </form>
        </div>
    </div>
</div>