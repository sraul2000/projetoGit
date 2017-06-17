<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Facebook Project</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav class="nav navbar-inverse" id="nav-menu">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">EEEP</a>
		</div>

		<div id="menu" class="collapse navbar-collapse">
			<div class="nav navbar-nav">
				<li><a href="#" class="active">dwq</a></li>
				<li><a href="#">wdqdq</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						A<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">qqd</a></li>
						<li><a href="#">qqd</a></li>
						<li><a href="#">qqd</a></li>
						<li><a href="#">qqd</a></li>
					</ul>
				</li>

			</div>
			<div class="nav navbar-nav navbar-right">
				<li><li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						A<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#" data-target="#login" data-toggle="modal" >Login</a></li>
						<li><a href="#">qqd</a></li>
						<li><a href="#">qqd</a></li>
						<li><a href="#">qqd</a></li>
					</ul>
				</li></li>
			</div>
		</div>
	</div>
</nav>

<div class="modal fade" id="login" role="dialog"> 
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title center">
					aldklkjaklskda
				</p>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="" method="POST">
				<div class="modal-body">
					<div class="input-group form-group">
						<span class="input-group-addon"><i class="ghyphicon ghyphicon-user"> </i></span>
						<input type="EMAIL" class="form-control" required="required" placeholder="email">
					</div>
					<div class="modal-footer">
							<input type="SUBMIT" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<br><br><br><br><br><br>

<div id="slide" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#slide" data-slide-too="0" class="active"></li>
		<li data-target="#slide" data-slide-too="1" ></li>
		<li data-target="#slide" data-slide-too="2" ></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/1.jpeg">
		</div>
		<div class="item">
			<img src="img/2.png" alt="">
		</div>
		<div class="item">
			<img src="img/3.png" alt="">
		</div>
	</div>

	<a href="#slide" class="left carousel-control" data-slide="prev">
		<span class="ghyphicon ghyphicon-chevron-left"></span>
	</a>
	<a href="#slide" class="right carousel-control" data-slide="next">
		<span class="ghyphicon ghyphicon-chevron-right"></span>
	</a>

</div>

<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>