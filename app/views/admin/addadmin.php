<header>
    <div class="container d-flex justify-content-center">
        <section class="login-section">
            <div class="center-register">

                <div class="contentBx">
                    <div class="formBx">
                        <br><br>
                        <h2>Add Admin</h2>
                        <p></p>
                        <form action="<?= BASEURL ?>/admin/tambahAdmin" method="post" class="form-login">
                            <div class="inputBx">

                                <span></span>
                                <input type="text" class="form-control" id="username" placeholder="Admin Username..." name="username" required>
                            </div>
                            <div class="inputBx">

                                <span></span>
                                <input type="email" class="form-control" id="email" placeholder="Admin Email..." name="email" required>
                            </div>
                            <div class="inputBx">

                                <span></span>
                                <input type="number" class="form-control" id="no_telp" placeholder="Admin No Telp..." name="no_telp" required>
                            </div>
                            <div class="inputBx">

                                <span></span>
                                <input type="password" class="form-control" id="password" placeholder="Admin Password Here..." name="password" required>
                            </div>
                            <div class="inputBx">

                                <span></span>
                                <input type="password" class="form-control" id="password" placeholder="Confirm Admin Password Here..." name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                            <?php foreach ($data['users'] as $row) : ?>
                                <div class="d-flex justify-content-between p-1 border border-dark mt-2 fix-position">
                                    <div class="user-name d-flex">
                                        <p href="#" class="username-column"><?= $row['username']; ?></p>
                                        <a href="#" class="email-column"><?= $row['email']; ?></a>

                                    </div>

                                    <div class="d-flex">
                                        <a href="<?= BASEURL ?>/admin/deleteuser/<?= $row['id']; ?>" class="btn btn-danger " onclick="return confirm('Anda yakin untuk menghapus nya?');"><i class="bi bi-trash3"></i></a>
                                        <a href="<?= BASEURL ?>/admin/edit/<?= $row['id']; ?>" class="btn btn-warning float-left ml-2 ModalUbah"><i class="bi bi-pencil"></i></a>

                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </form>

                        <p href="#" class="username-column"><?= $row['username']; ?></p>
                        <a href="#" class="email-column"><?= $row['email']; ?></a>

                    </div>


                </div>
            </div>
        </section>
    </div>
</header>