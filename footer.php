


	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<!-- <ul class="social-networks">
						<li><a href="https://www.instagram.com/"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="https://twitter.com/"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a></li>
						<li><a href="https://www.pinterest.com/"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul> -->
					<p class="copyright">
						&copy; Plumber Service. All rights reserved.
					</p>
				</div>
			</div>
		</div>

		



<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Plumber Service'; 
    $to = 'xuanzai989830@gmail.com'; 
    $subject = $_POST['subject'];
    $address = $_POST['address'];

    $body = "From: $name\nPhone: $phone\nAddress: $address\nMessage: $message";
    if (frmp("submit")) {
    if ($name != '' && $phone != ''&&$address !='') {         
            if (mail ($to, $subject, $body, $from)) { 
          echo "<script>alert('Your message have been sent!')</script>";

      } else { 
          echo "<script>alert('Something went wrong go back and try again.')</script>"; 
      } 
  }else {
        echo "<script>alert('You need to fill in everythings!')</script>";
    }
}
?>


		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>
