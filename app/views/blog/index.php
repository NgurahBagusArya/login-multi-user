<div class="all">
  <br><br><br><br>
  <div class="container">
    <h3 class="text-center ">Recent Posts</h3>
    <div id="konten_blog" class="row mt-5">
      <?php foreach ($data['blog'] as $row) : ?>
        <div class="col-md-4 col-sm-6 col-12 mb-4 text_right">
          <div class="card">
            <img src="<?= BASEURL ?>/img/hero.jpg" class="card-img-top" alt="Image">
            <div class="card-body">
              <h5 class="card-title"><?= $row['judul']; ?></h5>
              <p class="card-author text-primary"><?= $row['author']; ?></p>
              <p class="card-text"><?= $row['konten']; ?></p>
              <a href="<?= BASEURL; ?>/blog/readmore/<?= $row['id_blog'] ?>" class="btn btn-primary float-right">Read more</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
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
          <form action="<?= BASEURL; ?>/blog/add" method="post">
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
  </div>
</div>