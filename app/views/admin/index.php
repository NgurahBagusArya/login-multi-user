<div class="home_content">
  <div class="container mt-3 d-flex justify-content-between align-items-center">
    <h3>Tickets</h3>
    <div class="d-flex align-items-center">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Search</button>
        </div>
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#tambahkan_blog">
          Add Ticket
        </button>
      </div>
    </div>
  </div>
  <hr>

  <div id="konten_blog" class="row mt-3">
  <?php foreach ($data['trip'] as $row) : ?>
    <div class="col-md-4 col-sm-6 col-12 mb-4 text_right">
      <div class="card">
      <img src="http://localhost<?= $row['image']; ?>" class="card-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title"><?= $row['nama_trip']; ?></h5>
          <p class="card-text"><?= $row['deskripsi']; ?></p>
          <p class="card-text"><strong>Tujuan:</strong> <?= $row['tujuan']; ?></p>
          <p class="card-text"><strong>Tanggal Mulai:</strong> <?= $row['start_date']; ?></p>
          <p class="card-text"><strong>Tanggal Selesai:</strong> <?= $row['end_date']; ?></p>
          <p class="card-text"><strong>Harga:</strong> <?= $row['harga']; ?></p>
          <p class="card-text"><strong>Slot Tiket:</strong> <?= $row['slot_tiket']; ?></p>
        </div>
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
        <form method="post" action="<?= BASEURL ?>/admin/addTicket" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama_trip">Nama Trip</label>
            <input type="text" class="form-control" id="nama_trip" name="nama_trip" required>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <input type="text" class="form-control" id="tujuan" name="tujuan" required>
          </div>
          <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
          </div>
          <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
          </div>
          <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="form-group">
            <label for="slot_ticket">Slot Tiket</label>
            <input type="number" class="form-control" id="slot_ticket" name="slot_ticket" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>