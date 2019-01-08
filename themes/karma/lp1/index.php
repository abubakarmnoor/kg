<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Glamping</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
	<link rel="stylesheet" type="text/css" href="css/custom-m.css"/>
</head>	
<body>

<style type="text/css">
body{
	background-color: #999;
}
	#slider_wrapper{
		border: 5px solid #fff;
		width: 600px;
		padding: 20px;
		margin: auto;
	}	
	.slider-for img{
		height: 300px;
	}

	.slider-nav{
		width: 300px;
		margin: 10px auto 0;
	}
	.slider-nav div{
		margin: 2px;
		padding: 2px;
	}
	.slider-nav img{
		height: 40px;
		width: 80px;
		border: 2px solid #fff;
		cursor: pointer;
	}
</style>


								<div id="slider_wrapper">

									<div class="slider slider-for">
										<div><img src="images/gallery/s1.jpg"></div>
										<div><img src="images/gallery/s2.jpg"></div>
										<div><img src="images/gallery/s3.jpg"></div>																													
										<div><img src="images/gallery/s4.jpg"></div>
									</div>
									
									<div class="slider slider-nav">
										<div><img src="images/gallery/s1.jpg"></div>
										<div><img src="images/gallery/s2.jpg"></div>
										<div><img src="images/gallery/s3.jpg"></div>
										<div><img src="images/gallery/s4.jpg"></div>
									</div>
								</div>
								

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/slick.min.js'></script>
<!-- <script type='text/javascript' src="js/jquery-ui.js"></script> -->

<script>
    $(document).ready(function() {

			$('.slider-for').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				infinite: true,
				asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				dots: false,
				centerMode: true,
				infinite: true,
				focusOnSelect: true
			});		
    });
</script>   

</body>
</html>