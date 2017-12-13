<footer class="footer">
		<div class="container-fluid" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul>
							<li> <a href="">Contact Us</a></li>
							<li> <a href="">Contact Us</a></li>
							<li> <a href="">Contact Us</a></li>
							<li> <a href="">Contact Us</a></li>
							<li> <a href="">Contact Us</a></li>
							<li> <a href="">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul>
							<li> <a href="">Blog</a></li>
							<li> <a href="">Blog</a></li>
							<li> <a href="">Blog</a></li>
							<li> <a href="">Blog</a></li>
							<li> <a href="">Blog</a></li>
							<li> <a href="">Blog</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul>
							<li> <a href="">News later</a></li>
							<li> <a href="">News later</a></li>
							<li> <a href="">News later</a></li>
							<li> <a href="">News later</a></li>
							<li> <a href="">News later</a></li>
							<li> <a href="">News later</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<address>
							Sukrabad , Dhanmondi 32<br>
							Dhaka ,Bangladesh.
						</address>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>      
    $('a.smoth-scroll').on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });
    </script>
</body>
</html>