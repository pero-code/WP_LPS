 <!-- footer -->
 <footer class="py-5">
        <div class="container">
          <div class="row">

            <!-- <div class="col-md-4">
              <h4>Suma sumarum</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, illo facere, quae vitae fuga aspernatur commodi fugit velit repudiandae culpa, molestias corrupti similique sit eos nulla est quam. Doloribus, illo.</p>
            </div> -->

            <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
              <?php dynamic_sidebar('footer-1'); ?>
            <?php } ?>

            <!-- <div class="col-md-4">
              <h4>Kontaktirajte nas</h4>
              <p>Telefon: 021/123-456</p>
              <p>mail: lps@gmail.com</p>
              <p>Adresa: Kralja Petra I 25</p>
              <p>25000 Sombor</p>
            </div> -->

            <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
              <?php dynamic_sidebar('footer-2'); ?>
            <?php } ?>

            <!-- <div class="col-md-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.943363753981!2d19.11386061556777!3d45.77232527910579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cb58df8e2c6c7%3A0xd439f3913958f7d4!2z0JrRgNCw0ZnQsCDQn9C10YLRgNCwIEkgMjUsINCh0L7QvNCx0L7RgA!5e0!3m2!1ssr!2srs!4v1627327286169!5m2!1ssr!2srs" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div> -->

            <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
              <?php dynamic_sidebar('footer-3'); ?>
            <?php } ?>

          </div>
        </div>
    </footer>


			 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <?php wp_footer(); ?>
  </body>
</html>
