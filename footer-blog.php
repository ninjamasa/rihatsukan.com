<!-- ▼▼▼▼▼▼▼▼▼▼footer.php ▼▼▼▼▼▼▼▼▼▼▼-->
    <footer class="document__footer--blog">
      <div class="document__inner--width-blog footerContainer">
        <div class="footerContainer__basicInfo">
          <? global $place;
            $place = "footer";
            get_template_part("basic_info"); ?>

          <div class="footerContainer__address"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_address_white.png" alt=""></div>
        </div>
        <div class="footerContainer__kando"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rihatsu_kando_white.png" alt=""></div>
        <div class="footerContainer__copyright">Copyright&copy; 2015 Rihatsukan All rights reserved.</div>
      </div>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.2.1.min.js"></script>

<?php wp_footer() ; ?>
  </body>
</html>