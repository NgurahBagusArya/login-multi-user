<footer class="container-fluid bg-dark text-light">
    <div class="container-footer text-center">
        <div class="row">
            <div class="col-md-4">
                <h4>TravelKuy</h4>
                <div class="vr">
                    <hr>
                </div>
                <a href="#">Home</a><br>
                <a href="#">About</a><br>
                <a href="#">Blog</a><br>
                <a href="#">Services</a><br>
                <a href="#">Terms of Service</a> <br>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="col-md-4">
                <h4>Contact Us</h4>
                <p>Email: <a href="#">travelkuy@email.com</a></p>
                <p>Contact us : 085764285</p>
            </div>
            <div class="col-md-4">
                <h4>Follow Us</h4>
                <a href="#">Facebook</a><br>
                <a href="#">Twitter</a><br>
                <a href="#">Instagram</a>
            </div>
        </div>
    </div>
</footer>

<script>
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}


</script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>