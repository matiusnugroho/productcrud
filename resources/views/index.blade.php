<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>AppStack - Admin &amp; Dashboard Template</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/corporate.css" rel="stylesheet"> -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="{{url('/js/settings.js')}}"></script>
	<!-- END SETTINGS -->
</head>

<body>
	<div class="wrapper">
		<nav class="sidebar">
			<div class="sidebar-content ">
				<a class="sidebar-brand" href="index.html">
          <i class="align-middle" data-feather="box"></i>
          <span class="align-middle">AppStack</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a href="pages-blank.html#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse ">
						<li class="sidebar-item active"><a class="sidebar-link" href="{{url('/product')}}">Product</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{url('/unit')}}">Unit</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{url('/category')}}">Category</a></li>
						</ul>
					</li>
				</ul>

				<div class="sidebar-bottom d-none d-lg-block">
					<div class="media">
						<img class="rounded-circle mr-3" src="" alt="Chris Wood" width="40" height="40">
						<div class="media-body">
							<h5 class="mb-1">Chris Wood</h5>
							<div>
								<i class="fas fa-circle text-success"></i> Online
							</div>
						</div>
					</div>
				</div>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-white">
				<a class="sidebar-toggle d-flex mr-2">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="form-inline d-none d-sm-inline-block">
					<input class="form-control form-control-no-border mr-sm-2" type="text" placeholder="Search projects..." aria-label="Search">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="pages-blank.html#" id="messagesDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-circle"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Ashley Briggs</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Carl Jenkins</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Stacie Hall</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Bertha Martin</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="pages-blank.html#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="pages-blank.html#" id="alertsDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell-off"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="pages-blank.html#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="pages-blank.html#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-flag dropdown-toggle" href="pages-blank.html#" id="languageDropdown" data-toggle="dropdown">
                <img src="" alt="English" />
              </a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
								<a class="dropdown-item" href="pages-blank.html#">
                  <img src="" alt="English" width="20" class="align-middle mr-1" />
                  <span class="align-middle">English</span>
                </a>
								<a class="dropdown-item" href="pages-blank.html#">
                  <img src="" alt="Spanish" width="20" class="align-middle mr-1" />
                  <span class="align-middle">Spanish</span>
                </a>
								<a class="dropdown-item" href="pages-blank.html#">
                  <img src="" alt="German" width="20" class="align-middle mr-1" />
                  <span class="align-middle">German</span>
                </a>
								<a class="dropdown-item" href="pages-blank.html#">
                  <img src="" alt="Dutch" width="20" class="align-middle mr-1" />
                  <span class="align-middle">Dutch</span>
                </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="pages-blank.html#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="pages-blank.html#" data-toggle="dropdown">
                <img src="" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" /> <span class="text-dark">Chris Wood</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="pages-blank.html#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
								<a class="dropdown-item" href="pages-blank.html#">Help</a>
								<a class="dropdown-item" href="pages-blank.html#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					@yield('content')

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="pages-blank.html#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="pages-blank.html#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="pages-blank.html#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="pages-blank.html#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">
								&copy; 2019 - <a href="index.html" class="text-muted">AppStack</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{url('js/app.js')}}"></script>

</body>

</html>