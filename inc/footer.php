    <div class="container-fluid footer" style="background: rgb(180,180,180); background: linear-gradient(180deg, rgba(180,180,180,0.15) 0%, rgba(255,255,255,0.15) 100%);">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-5">
                    <h3 class="pb-5">Join our mailing list for updates about our exhibitions, initiatives and more.</h3>
                    <input value="" class="w-100" placeholder="Email address" />
                </div>
                <div class="col-3"></div>
                <div class="col-3">
                    <h3>Follow us</h3>
                    <img src="assets/images/ig.svg" />  
                    <img src="assets/images/fb.svg" /> 
                    <img src="assets/images/twitter.svg" />
                    <div class="pt-5 footer-small">
                        Terms & Conditions<br />
                        © <?php echo date('Y'); ?> Fondation Charles Corm, Lebanon</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script>
    const swiper = new Swiper('.swiperHero', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiperHero-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiperHero-button-next',
        prevEl: '.swiperHero-button-prev',
    }
    });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/header.js"></script>
  </body>
</html>