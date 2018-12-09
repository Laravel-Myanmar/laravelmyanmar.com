@extends('frontend.template.layout')


@section('content')
<div class="site-body uk-container uk-container-center">
	<div class="uk-grid uk-grid-divider uk-grid-preserve" data-uk-grid-match>
		<div class="site-block home-col-1 uk-width-medium-2-4">
			<h2 class="block-title">Latest Articles</h2>
			<!-- <article class="article-item">
				<h1 class="article-title"><a href="#">Proin gravida nibh vel velit auctor aliquet</a></h1>
				<div class="article-thumb">
					<img src="http://placehold.it/574x190" width="100%">
				</div>
				<p class="article-excerpt">
					Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.
				</p>
				<div class="article-meta uk-grid">
					<div class="uk-width-medium-1-3">
						<a href="#" class="text-block">
							<div class="author-icon meta-icon">
								<img src="assets/img/heinzawhtet.jpg">
							</div>
							Hein Zaw Htet
							<small>View Profile</small>
						</a>
					</div>
					<div class="uk-width-medium-1-3">
						<a href="#" class="text-block">
							<div class="cat-icon meta-icon">
								<i class="uk-icon-lock"></i>
							</div>
							Authentication
							<small>View Profile</small>
						</a>
					</div>
					<div class="uk-width-medium-1-3">
						<a href="#" class="text-block">
							<div class="cal-icon meta-icon">
								<i class="uk-icon-calendar"></i>
							</div>
							15/8/2014
						</a>
					</div>
				</div>
			</article>			
			<ul class="uk-dotnav uk-margin-bottom">
				<li class="uk-active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
			</ul> -->
			<p>coming soon</p>
		</div>
		<div class="home-col-2 uk-width-medium-1-4">
			<div class="site-block">
				<h2 class="block-title">Latest Snippets</h2>
				<div class="mini-list">
					<!-- <article class="article-item">
						<h2 class="article-title"><a href="#">Proin gravida nibh vel velit auctor aliquet</a></h2>
						<p class="article-meta">
							submited by <a href="#">Naing Lin Aung</a>
						</p>
					</article> -->
					<p>coming soon</p>
				</div>
			</div>

			<div class="site-block">
				<h2 class="block-title">Pacakges</h2>
				<div class="mini-list">
					<!-- <article class="article-item">
						<h2 class="article-title"><a href="#">Way Generator</a></h2>
						<p class="article-meta">
							submited by <a href="#">Hein Zaw Htet</a>
						</p>
					</article> -->
					<p>coming soon</p>
				</div>
			</div>
			<div class="site-block">
				<h2 class="block-title">FAQs</h2>
				<div class="mini-list">
					<!-- <article class="article-item">
						<h2 class="article-title"><a href="#">Storage folder error</a></h2>
						<p class="article-meta">
							submited by <a href="#">Naing Lin Aung</a>
						</p>
					</article> -->
					<p>coming soon</p>
				</div>
			</div>
		</div>

		<div class="home-col-3 uk-width-medium-1-4">
			<div class="site-block">
				<h2 class="block-title">Likes Us</h2>
				<div class="fb-page" data-href="https://www.facebook.com/laravelmyanmar" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/laravelmyanmar" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/laravelmyanmar">LaravelMyanmar</a></blockquote></div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2158390921091461&autoLogAppEvents=1';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			</div>
			<div class="site-block">
				<h2 class="block-title">Socials</h2>
				<div class="sidebar-social-icons">
					<a href="https://www.facebook.com/groups/laravelmyanmar/" target="_blank" class="social-icon uk-icon-button uk-icon-facebook" style="background: #3b5998; color: #fff"></a>
					<a href="http://twitter.com/laravel_myanmar" class="social-icon uk-icon-button uk-icon-twitter" target="_blank"  style="background: #55acee; color: #fff"></a>
					<a href="http://github.com/laravel-myanmar" target="_blank" class="social-icon uk-icon-button uk-icon-github"></a>
				</div>
			</div>
			<div class="site-block">
				<h2 class="block-title">Sponsored</h2>
				<!-- <a class="ads-item">
					<img src="assets/img/zawgyi-mart.png">
				</a> -->
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
				<a href="#" class="uk-button-success uk-button">How to become our sponsor?</a>
				<div class="uk-margin-bottom"></div>
			</div>
		</div>
	</div>
</div>
@stop