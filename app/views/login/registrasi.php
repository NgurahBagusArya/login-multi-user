<?php 

if (isset($_POST["tambahDataUser"])) {

    if( isset($_POST) > 0){
    echo"<script>
        alert('registrasi berhasil')
    </script>";
} else{
    echo"<script>
    alert('registrasi gagal')
</script>";
}
}
?>


<header>
    <div class="container d-flex justify-content-center">
        <section class="login-section">
            <div class="center-register">
                <div class="imgBx">
                    <img src="<?= BASEURL ?>\img\register-image.jpg" alt="Background Image">
                </div>
                <div class="contentBx">
                    <div class="formBx">
                        <br><br>
                        <h2>Register</h2>
                        <p>Welcome To TravelKuy</p>
                        <form action="<?= BASEURL ?>/login/tambah" method="post" class="form-login">
                            <div class="inputBx">
                                
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

                            <button type="submit" class="btn btn-primary">Submit</button>

                            <div class="inputBx-input">
                                <p>Have An Account? <a href="./login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>