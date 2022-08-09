<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Imperial College London Sustainability</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/ic_logo.png">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">

		<!-- import echarts.js -->
		<script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>

		<!-- import papaparse.min.js -->
		<script type="text/javascript" src="plugins/papaparse.min.js"></script>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
<!-- 							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div> -->

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="index.php"><b>Imperial College London</b></a></div>
								<div class="site-slogan">Digital Twin for Sustainability</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li><a href="index.php">Home</a></li>
												<li><a href="index.php#about">About</a></li>
												<li class="dropdown">
													<a class="dropbtn">
														Visualization
													</a>
													  <div class="dropdown-content">
													    <a href="visualization.php?type=electricity">Electricity</a>
													    <a href="visualization.php?type=gas">Gas</a>
													    <!-- <a href="visualization.php?type=electricity">Electricity</a> -->
													  </div>

												</li>
												<li><a href="download_data.php">Download Data</a></li>
												<!-- <li><a href="#clients">Clients</a></li> -->
												<li><a href="#contact">Contact</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">This page is for <span>Visualization</span></h1>
							<p class="lead text-center">Selection of data type to show the specific data.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<script type="text/javascript">

		 
		// console.log("id:"+a['id']) //打印出传过来的id
		 
		function GetRequest() {
		var url = location.search; //获取url中"?"符后的字串
		var theRequest = new Object();
		 if (url.indexOf("?") != -1) {
		       var str = url.substr(1);
		       strs = str.split("&");
		       for (var i = 0; i < strs.length; i++) {
		           theRequest[strs[i].split("=")[0]] = decodeURIComponent(strs[i].split("=")[1]);
		       }
		   }
		   return theRequest;
		}

		</script>


		<h1 class="text-center" id="meter_type_title"></span></h1>

		<script>
		var a=GetRequest();
		var meter_type = a['type'];
		document.getElementById("meter_type_title").innerHTML = meter_type;
		</script>

		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		  overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg .tg-cly1{text-align:left;vertical-align:middle}
		.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
		.tg .tg-0lax{text-align:left;vertical-align:top}
		</style>

		<div id="site_channel_table"></div>


		<script type="text/javascript">
			// Meter channels in a building
	        var location_file_name;
	        // var meter_channels = [];


	        if (meter_type == "electricity"){
	        	location_file_name = "data/location/elec_location_20220801.csv";
	        }else if (meter_type == "gas"){
	        	location_file_name = "data/location/gas_location_20220801.csv";
	        }

	        var sites_channels = {};

	        // Read location file
	        Papa.parse(location_file_name, {
				  header: true,
				  download: true,
				  // Do things after reading data
				  complete: function(results) {
				    // console.log(results);
				    location_data = results.data;
				    for (var index=0; index < location_data.length; index++) {
				    	const element = location_data[index];
						if (sites_channels[element["SIT:<name>"]] == ""){
							sites_channels[element["SIT:<name>"]] = element["CHN:<channelID>"];
						}else{
							sites_channels[element["SIT:<name>"]] = sites_channels[element["SIT:<name>"]] + "," + element["CHN:<channelID>"];
						}
						
					}
				    console.log(sites_channels);

				    var str = "";
				    str += "<table id='electricity' border='1' align='center' class='tg'>";
					str += "<thead>";
					str += "<tr>";
					if (meter_type == "electricity"){
					    str += "<th class='tg-0lax'><a href='display_data.php?id=electricity,null,campus'><font size=10><b>South Kensington Campus</b></font></th>";
					}else if (meter_type == "gas"){
						str += "<th class='tg-0lax'><a href='display_data.php?id=gas,null,campus'><font size=10><b>South Kensington Campus</b></font></th>";
					}
					    str += "<th class='tg-0lax'></th>"
					  str += "</tr>";
					str += "</thead>";
					str += "<tbody>";

						
					    for (var site in sites_channels){
					    	var channels = sites_channels[site].split(",");
					            for(var j = 1; j < channels.length; j++){
					            	if (channels[j] == "undefined"){
					            		break;
					            	}
					            	str += "<tr>";
					            	if (j == 1){
					            		str += "<td class='tg-cly1'><a href='display_data.php?id=" + meter_type +",null,"+ site +"'><b>" + site + "</b></td>";
					            	}else{
					            		str += "<td class='tg-cly1'></td>";
					            	}
					            	str += "<td class='tg-cly1'><a href='display_data.php?id=" + meter_type +"," + channels[j] + ",null'>" + channels[j] + "</td>";
					            	str += "</tr>";
					            }
					    }
					   
					str += "</tbody>";
					str += "</table>";
					// 注入html
					document.getElementById('site_channel_table').innerHTML = str;
				  }
				});
		</script>

		
		<div class="text-center">
			<h1 class="text-center">Upload New Data File</h1>
			<form action="upload_file.php" method="post" enctype="multipart/form-data" align="center">
			    <label for="file" align="center">Filename: </label>
			    <input type="file" name="file" id="file" text-align="center" margin="auto"><br>
			    <input type="submit" name="submit" value="Submit" align="center">
			</form>
		</div>
		


		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Imperial college focuses exclusively on science, technology, medicine, and business. The main campus is located in South Kensington, and there is an innovation campus in White City.</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> Exhibition Rd, South Kensington, London SW7 2BX</li>
									<li><i class="fa fa-phone pr-10"></i> +44 07419735154</li>
									<li><i class="fa fa-fax pr-10"></i> +44 07419735154</li>
									<li><i class="fa fa-envelope-o pr-10"></i> hongcheng21@imperial.ac.uk</li>
								</ul>
<!-- 								<ul class="social-links">
									<li class="facebook"><i class="fa fa-facebook"></i></li>
									<li class="twitter"><i class="fa fa-twitter"></i></li>
									<li class="googleplus"><i class="fa fa-google-plus"></i></li>
									<li class="skype"><i class="fa fa-skype"></i></li>
									<li class="linkedin"><i class="fa fa-linkedin"></i></li>
									<li class="youtube"><i class="fa fa-youtube"></i></li>
									<li class="flickr"><i class="fa fa-flickr"></i></li>
									<li class="pinterest"><i class="fa fa-pinterest"></i></li>
								</ul> -->
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
<!-- 			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
						</div>
					</div>
				</div>
			</div> -->
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

		<!-- Control which to show -->
		<script>
			
			$("#electricity").hide();
			$("#gas").hide();

			if (meter_type == "electricity") {
				$("#electricity").show();
			}
			else if(meter_type == "gas"){
				$("#gas").show();
			}
		</script>

	</body>
</html>
