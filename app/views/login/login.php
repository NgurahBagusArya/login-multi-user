<div class="hero"></div>
<div class="content"></div>
<header class="login-background">
    <section class="login-section">
        <div class="center">
            <h1>LOGIN</h1>
            <P>Welcome Back To TravelKuy</P>
            <?php if (isset($pesan)) : ?>
                <div class="alert alert-danger">
                    <?php echo $pesan; ?>
                </div>
            <?php endif; ?>
            <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">
                <div class="txt_field">
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    <span></span>
                </div>

                <div class="pass">Don't have an account? <a href="<?= BASEURL ?>/login/registrasi">Register</a></div>
                <div class="tengah">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>

            </form>
            <br>
    </section>
</header>