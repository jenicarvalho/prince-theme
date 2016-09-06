<?php //?>
<!-- CONTACT -->
<section class="contact text-center" id="contato">
        <h2 class="title-h2">Vamos trabalhar juntos? Fale conosco!</h2>
      
      <span class="border-fun"></span>
      
      <p class="text-gray">Queremos muito participar dos seus projetos.</p>


      <!-- FORM -->
      <div class="form-contact">
            <?php echo do_shortcode('[contact-form-7 id="80" title="Formulário de contato 1"]')?>
        <!--/ end form-->
      </div>
</section>
<!-- / END CONTACT-->


<!-- FOOTER -->
 <footer class="footer">
    <div class="container text-center">
        <div class="row">
            <!-- footer widget-->
            <div class="footer-widget">
                <div class="col-md-12">
                    <img src="<?php echo PXS_THEME_URL?>/img/logo-footer.png" title="Pixels" alt="Pixels">
                </div>
            </div>
            <!-- / end footer widget-->

            <!-- footer widget-->
            <div class="footer-widget">
                <div class="col-md-12">
                    <br>
                    <p> <i class="fa fa-phone"></i> 19 99526-2834 | <i class="fa fa-envelope"></i> contato@agenciapixels.com</p>
                </div>
            </div>
            <!-- / end footer widget-->

        </div>
    </div>

    <div class="copy">
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <p>© 2016 All Rights Reserved Pixels</p>
              </div>
              <div class="col-md-4"></div>
            </div>
        </div>
    </div>
 </footer>

<!--/ end FOOTER -->






    <?php wp_footer();?>
  </body>
</html>