<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>


<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span><?php _e("با ما در شبکه های اجتماعی همراه باشید") ?> :</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=""  style="font-size:15px">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>درباره مبادله گر
          </h6>
          <div style="display: unset" > 
          <p>
          تمرکز ما در مبادله گر، طراحی بستری هوشمند برای سرمایه‌‌گذاری است تا هر کسی در هر کجای جهان و در هر ساعت از شبانه روز بتواند تجربه‌ای خوشایند و لذت بخش از تبادل دارایی های دیجیتال را تجربه کند.


</p>

        </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          امکانات و ویژگی‌ها

          </h6>
          <p>
            <a href="#!" class="text-reset"><?php _e("کارمزد ها") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"><?php _e("اپلیکیشن مبادله گر") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"><?php _e("دعوت از دوستان") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"><?php _e("پس انداز") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"><?php _e("دارایی های دیجیتال") ?></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          راهنما
          </h6>
          <p>
            <a href="#!" class="text-reset"><?php _e("پشتیبانی") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"<?php _e("سوالات متداول") ?></a>
          </p>
          <p>
            <a href="#!" class="text-reset"><?php _e("مستندات API") ?></a>
          </p>
          <p>
            <a href="/blog" class="text-reset"><?php _e("آکادمی") ?></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" dir="ltr">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">ارتباط با ما</h6>
          <div style="text-align:left" dir="ltr">
          <p><i class="fa fa-home me-3"></i>      آذربایجان شرقی - تبریز 
            چهار راه منصور برج ابریشم طبقه 14 واحد یک</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            Info@MobadeleGar.com
          </p>
          <p><i class="fa fa-phone me-3"></i> 041-35595601</p>
          <p><i class="fa fa-mobile  me-3"></i> + 98 935 233 1657</p>
        </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 تمامی حقوق بهره برداری و کپی رایت محفوظ است:
    <a class="text-reset fw-bold" href="https://mobadelegar.com/">mobadelegar.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<?php wp_footer(); ?>

</body>
</html>
