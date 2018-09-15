<!-- ▼▼▼▼▼▼▼▼▼▼footer.php ▼▼▼▼▼▼▼▼▼▼▼-->

    <footer class="document__footer">
      <div class="document__inner footerContainer">
        <div class="footerContainer__basicInfo">
          <? global $place;
            $place = "footer";
            get_template_part("basic_info"); ?>

          <div class="footerContainer__address"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_address_blue.png" alt="住所">
          </div>
        </div>
        <div class="footerContainer__kando"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rihatsu_kando.png" alt="りはつかんどう"></div>
        <div class="footerContainer__copyright">Copyright&copy; 2015 Rihatsukan All rights reserved.</div>
      </div>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>
    <script>
      $(function(){

        $(".topSlider").slick({
          infinite: true,
          speed: 200,
          slidesToShow: 1,
          autoplay:true,
          autoplaySpeed:2000,
          fade:true,
        });
      
        $(".pageMenu__catHeader").click(function(){
          var $header = $(this);
      
          var id = $header.attr("id");
          var name = id.split("_")[1];
          var $body = $("#menu_"+name+"_body");
      
          $body.toggleClass("hidden");
        });
      });
    </script>
<?php wp_footer() ; ?>
  </body>
</html>