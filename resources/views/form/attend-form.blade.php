<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.attend-page{
			padding: 50px 0;
		}
		.attend-page__banner-fix{
			width:100%;
		}
	</style>
</head>
<body>
	<div class="attend-page">
		<div class="row m-0">
			<div class="col-sm-5">
				<div class="attend-page__banner">
					<img src="img/homepage-banner.jpg" alt="" class="attend-page__banner-fix">
				</div>
			</div>
			<div class="col-sm-6 offset-sm-1">
				@include('contact/google-form')
			</div>
		</div>
	</div>
</body>
</html>