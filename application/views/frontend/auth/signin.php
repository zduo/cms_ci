<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>后台管理</title>

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="http://cms.self.cc/assets/css/bootstrap.min.css" rel="stylesheet">

		<style>
		body {
			padding: 10px 0;
		}
		</style>
    </head>

    <body>
        <!-- Container -->
        <div class="container">
            <!-- Navbar -->
            <div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="active"><a href=""><i class="icon-home icon-white"></i> Home</a></li>
								<li class="active"><a href=""><i class="icon-file icon-white"></i> About us</a></li>
								<li><a href=""><i class="icon-file icon-white"></i> Contact us</a></li>
							</ul>

                            <ul class="nav pull-right">

								<li class="dropdown active">
									<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="">
										Welcome, XX
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										<li><a href=""><i class="icon-cog"></i> Administration</a></li>
										<li class="active"><a href=""><i class="icon-user"></i> Your profile</a></li>
										<li class="divider"></li>
										<li><a href=""><i class="icon-off"></i> Logout</a></li>
									</ul>
								</li>
								<li><a href="{{ route('signin') }}">Sign in</a></li>
								<li><a href="{{ route('signup') }}">Sign up</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

            <!-- Content -->
<div class="page-header">
    <h3>Sign in into your account</h3>
</div>
<div class="row">
    <form method="post" action="" class="form-horizontal">
        <!-- Email -->
        <div class="control-group error">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" name="email" id="email" value="" />
                <span class="help-block">密码锁了</span>
            </div>
        </div>

        <!-- Password -->
        <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" name="password" id="password" value="" />
            </div>
        </div>

        <!-- Remember me -->
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="remember-me" id="remember-me" value="1" /> Remember me
                </label>
            </div>
        </div>

        <hr>

        <!-- Form actions -->
        <div class="control-group">
            <div class="controls">
                <a class="btn" href="{{ route('home') }}">Cancle</a>

                <button type="submit" class="btn">Sign in</button>

                <a href="" class="btn btn-link">I forgot my password</a>
            </div>
        </div>
    </form>
</div>

            <hr />

            <!-- Footer -->
            <footer>
                <p>&copy; Company <?=date('Y') ?></p>
            </footer>
        </div>

        <!-- Javascripts
        ================================================-->
        <script src="http://cms.self.cc/assets/js/jquery.1.10.2.min.js"></script>
        <script src="http://cms.self.cc/assets/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>
