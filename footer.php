<!--
    Spilt Clothing - footer.php
    Designed and Coded by Robert Willis.
    Version 2.0. Updated 23 September 2016.
-->

    <!-- Footer -->
    <footer>
		
          <!-- Copyright information -->
          <small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
          
          <!-- Contact email -->
		  <p id="email"><small>robert@spilt.com</small></p>
        
    </footer>
  
    <!-- Background Image -->
    <img src="<?php bloginfo('template_directory'); ?>/_/img/background.png" id="background" alt="Background Image">

<!-- End wrapper -->
</div>

<!-- End of footer -->
<?php wp_footer(); ?>

<!-- Import JQuery -->
<script>window.jQuery || document.write("<script src='<?php 
bloginfo('template_directory'); ?>/_/js/jquery-1.11.0.min.js'>\x3C/script>")</script>

<!-- Functions. -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

</body>

</html>
