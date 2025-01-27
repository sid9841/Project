
<!-- Footer -->
<footer id="footer" class="footer pb-0" data-bg-img="{{asset('images/footer-bg.png')}}" data-bg-color="#25272e">
	<div class="container pb-20">
		<div class="row multi-row-clearfix">
			<div class="col-sm-6 col-md-3">
				<div class="widget dark"> <img alt="" src="{{asset('images/logo-wide-white.png')}}">
					<p class="font-12 mt-20 mb-10">CharityFund is a library of Crowdfunding and Charity templates with predefined elements which helps you to build your own site. Lorem ipsum dolor sit amet consectetur.</p>
					<a class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
					<ul class="styled-icons icon-dark mt-20">
						<li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
						<li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="widget dark">
					<h5 class="widget-title line-bottom">Tags</h5>
					<div class="tags">
						@foreach($categoriesAll as $cat)
						<a href="#">{{$cat->name}}</a>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="widget dark">
					<h5 class="widget-title line-bottom">Site Links</h5>
					<div class="latest-posts">
						<article class="post media-post clearfix pb-0 mb-10">
							<a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
							<div class="post-right">
								<h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
								<p class="post-date mb-0 font-12">Mar 08, 2015</p>
							</div>
						</article>
						<article class="post media-post clearfix pb-0 mb-10">
							<a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
							<div class="post-right">
								<h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
								<p class="post-date mb-0 font-12">Mar 08, 2015</p>
							</div>
						</article>
						<article class="post media-post clearfix pb-0 mb-10">
							<a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
							<div class="post-right">
								<h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
								<p class="post-date mb-0 font-12">Mar 08, 2015</p>
							</div>
						</article>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="widget dark">
					<h5 class="widget-title line-bottom">Quick Contact</h5>
					<ul class="list-border">
						<li><a href="#">+(012) 345 6789</a></li>
						<li><a href="#">hello@yourdomain.com</a></li>
						<li><a href="#" class="lineheight-20">121 King Street, Melbourne Victoria 3000, Australia</a></li>
					</ul>
					<p class="text-white mb-5 mt-15">Subscribe to our newsletter</p>
					<form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
						<label class="display-block" for="mce-EMAIL"></label>
						<div class="input-group">
							<input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
							<span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-theme-colored p-20">
		<div class="row text-center">
			<div class="col-md-12">
				<p class="text-white font-11 m-0">Copyright &copy;2020. All Rights Reserved</p>
			</div>
		</div>
	</div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->