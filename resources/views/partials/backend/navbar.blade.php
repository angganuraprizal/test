<nav class="navbar navbar-spark navbar-toggleable navbar-expand-md">
	<div class="container-fluid">
		<button type="button" class="sidebar-open d-lg-none">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand d-none d-lg-inline-block" href="{{ url('home')}}">
			<i class="ion ion-ios-pulse-strong" aria-hidden="true"></i>
		</a>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item dropdown active">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
				<ul class="dropdown-menu">
					<li>
						<a class="dropdown-item" href="#"><i class="ion ion-person"></i>
							{{ Auth::user()->name }}
						</a>
					</li>
					<li role="separator" class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							<i class="fa fa-sign-out"></i>
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<img src="{{asset ('/spark/assets/img/avatar-500x500.png') }}" alt="Avatar" width="48" height="48" class="avatar img-circle" />
				</a>
			</li>
		</ul>
	</div>
</nav>