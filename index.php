<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ebay</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">EBay</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">HOME</a>
						</li>
						<li>
							<a href="#">DEALS</a>
						</li>
						<li>
							<a href="#">SUPPORT</a>
						</li>
													
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">SERVICE</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="jumbotron">
				<h1>
					New year Sale
				</h1>
				<p>
					This new year will be one to remember forever
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Read more</a>
				</p>
			</div>
		</div>
	</div>
	<form class="form" action="cart.php" method="post">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<h2>
				<input type="checkbox" name="jack" value="jack"/>&nbsp;&nbsp;Jackets
			</h2>
			
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				<input type="checkbox" name="watch" value="watch"/>&nbsp;&nbsp;Watches
			</h2>
			
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				<input type="checkbox" name="cool" value="cool"/>&nbsp;&nbsp; Coolers
			</h2>
			
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>

	</div>
	
		<div class="row clearfix">
		&nbsp;&nbsp;&nbsp;
		<div class="col-md-12 column">
		<input type="submit" name="Buy"/></div>	
	</div>
</form>
</div>
</body>
</html>
