@extends('frontend.template.layout')


@section('content')
<div class="single-sidebar uk-width-medium-1-4">
	<div class="related-articles site-block">
		<div class="article-meta uk-grid">
			<div class="uk-width-1-1 uk-margin-bottom uk-margin-top">
				{!! $index !!}
			</div>
		</div>
	</div>
</div>
<div class="site-block home-col-1 uk-width-medium-3-4 uk-margin-top">
	<article class="single-article article-item">
		<div class="article-content">
			{!! $content !!}
		</div>
	</article>
</div>
@stop
