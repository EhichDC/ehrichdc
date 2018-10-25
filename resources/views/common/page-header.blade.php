<header id="masthead">
	<div class="row" id="link">
		<div class="small-12 columns">
			<div class="header-wrap">
				<div class="logo">
					<a href="{{ url('/') }}">
						<img src="https://padento.de/img/logo.png" alt="Padento - Kostenlose Beratung Zahnersatz">
					</a>
				</div>
				<div class="burger"></div>
				<nav class="navigation">
					<button class="close-button" aria-label="Close alert" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
					<ul>
						@foreach(\App\Link::orderBy('sort')->get() as $link)
							<li>
								<a href="{{ $link->url }}">{{ $link->title }}</a>
							</li>
						@endforeach
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>