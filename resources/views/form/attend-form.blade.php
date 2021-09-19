<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.attend-page {
    padding: 50px 0;
	}
	.attend-page__wrapper{

		background-image: url(img/arjun.jpg);
		background-repeat: no-repeat;
		background-position: center;
		/* background-size: 350px; */
		background-size: cover;
	}
	.attend-page__banner-fix {
		width: 100%;
		
	}
	.attend-page__title{
		color:white;
		text-align:center;
	}
	.attend-page__subtitle{
		color:white;
		text-align:center;
	}

	</style>
</head>
<body>
	<div class="attend-page">
		<div class="row m-0">
			<div class="col-sm-5 attend-page__wrapper">
				<div class="attend-page__banner">
					<!-- <img src="img/homepage-banner.jpg" alt="" class="attend-page__banner-fix"> -->
					<h1 class="attend-page__title">First</h1>
					<p class="attend-page__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tenetur fuga culpa magni repudiandae suscipit aspernatur earum cumque accusantium nostrum soluta et voluptatibus, dolorem omnis doloribus cum minus iusto beatae.</p>
				</div>
			</div>
			<div class="col-sm-6 offset-sm-1">
				@include('contact/google-form-demo')
			</div>
		</div>
	</div>
</body>
</html>