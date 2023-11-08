<div class="home_content">
    <div class="container mt-3 d-flex justify-content-between align-items-center">
        <h3>Edit Ticket</h3>
        <div class="d-flex align-items-center">
            <div class="input-group">
                <a class="btn btn-primary " href="<?= BASEURL ?>/admin/index">
                    Kembali
                </a>
            </div>
        </div>
    </div>
    <hr>

    <div id="konten_blog" class="row mt-3 ml-1">
        <form action="<?= BASEURL ?>/admin/updateAdmin/<?= $data['user']['id']; ?>" method="post"  class="edit-form">
            <div class="d-flex">
                <div class="p-2 flex-fill bd-highlight">
                    <div class="edit-input">
                        <h5>Nama</h5>
                        <input type="hidden" class="form-control" id="id" name="id" required value="<?= $data['user']['id']; ?>">
                        <input type="text" class="form-control" id="username" name="username" required value="<?= $data['user']['username']; ?>">
                    </div>
                    <div class="edit-input mt-4">
                        <h5>Email</h5>
                        <input type="text" class="form-control" id="email" name="email" required value="<?= $data['user']['email']; ?>">
                    </div>
                    <div class="edit-input mt-4">
                        <h5>No telpon</h5>
                        <input type="text" class="form-control" id="No_telp" name="no_telp" required value="<?= $data['user']['no_telp']; ?>">
                    </div>
                    <div class="edit-input mt-4">
                        <h5>Password</h5>
                        <input type="text" class="form-control" id="password" name="password" required value="<?= $data['user']['password']; ?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>