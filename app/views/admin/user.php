<div class="home_content">
  <div class="container mt-3 d-flex justify-content-between align-items-center">
    <h3>Users</h3>
    <div class="d-flex align-items-center">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Button</button>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <?php foreach ($data['users'] as $row) : ?>
    <div class="d-flex justify-content-between p-1 border border-dark mt-2 fix-position">
      <div class="user-name d-flex">
        <p href="#" class="username-column"><?= $row['username']; ?></p>
        <a href="#" class="email-column"><?= $row['email']; ?></a>
      </div>

      <div class="d-flex">
        <a href="<?= BASEURL ?>/admin/deleteuser/<?= $row['id']; ?>" class="btn btn-danger " onclick="return confirm('Anda yakin untuk menghapus nya?');"><i class="bi bi-trash3"></i></a>
        <?php
        if ($row['level'] === 'user') {
          echo '<a href="' . BASEURL . '/admin/promote/' . $row['id'] . '" class="btn btn-success float-left mr-auto email-column" onclick="return confirm(\'Anda yakin untuk Mengubah User Ini Menjadi Admin?\');"><i class="bi bi-arrow-up-circle-fill"></i></a>';
        } else {
          echo '<a href="' . BASEURL . '/admin/demote/' . $row['id'] . '" class="btn btn-warning float-left mr-auto email-column" onclick="return confirm(\'Anda yakin untuk Menngubah Admin Ini Menjadi User?\');"><i class="bi bi-arrow-down-circle-fill"></i></a>';
        }
        ?>

      </div>
    </div>
  <?php endforeach; ?>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahkan_blog" tabindex="-1" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambahkan Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/admin/add" method="post">
          <div class="form-group">
            <label for="judul">Judul Blog</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="">
          </div>


          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="">
          </div>


          <div class="form-group">
            <label for="konten">Konten</label>
            <input type="text" class="form-control" id="konten" name="konten" placeholder="">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
      </form>
    </div>
  </div>