<header id="header" style="background-color: #fff;" data-uk-sticky="show-on-up: true; animation: uk-animation-fade; media: @l" class="uk-sticky">
			<div class="uk-container">
				<nav id="navbar" data-uk-navbar="mode: click;" class="uk-navbar">
					<div class="uk-navbar-left nav-overlay">
						<div class="uk-navbar-item">
						        <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-overlay">
            						<span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
       							</a>
						</div>
					</div>
					<div class="uk-navbar-center nav-overlay">
						<a class="uk-navbar-item uk-logo" href="#" title="Logo">LOGO</a>
					</div>
			<div class="uk-navbar-right nav-overlay uk-visible@m">
						<ul class="uk-navbar-nav">
            @if (Route::has('login'))
                    @auth
			<li>
                        	<a href="{{ url('/home') }}">Главная</a>
			</li>
                    @else
			<li>
                        	<a href="{{ route('login') }}">Авторизация</a>
			</li>
                        @if (Route::has('register'))
			<li>
                            <a href="{{ route('register') }}">Регистрация</a>
			</li>
                        @endif
                    @endauth
            @endif
						</ul>
			</div>
				</nav>
			</div>
		</header>
<!-- sidebar /* can move to another blade */ -->
<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    </div>
</div>
<!-- end sidebar -->