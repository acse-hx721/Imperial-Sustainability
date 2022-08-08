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
						if (sites_channels[element["SIT:<name>"]] == ""){
							sites_channels[element["SIT:<name>"]] = element["CHN:<channelID>"];
						}else{
							sites_channels[element["SIT:<name>"]] = sites_channels[element["SIT:<name>"]] + "," + element["CHN:<channelID>"];
						}
						
					}
				    for (var x of all_sites){
				    	all_sites_obj[x] = 0;
				    	all_sites_obj_year[x] = 0;
				    }
				    for (var x of all_channels){
				    	all_channels_obj[x] = 0;
				    	all_channels_obj_year[x] = 0;
				    }
				    console.log(all_sites_obj);
				    console.log(all_channels_obj);
				    console.log(sites_channels);
				  }
				});
		</script>



		<h1 class="text-center" id="meter_type_title"></span></h1>

		<script>
		var a=GetRequest();
		var meter_type = a['type'];
		document.getElementById("meter_type_title").innerHTML = meter_type;
		</script>

		<!-- electricity -->
		<table id="electricity" border="1" align="center">
		    <tr>
		        <td><a href="display_data.php?id=electricity,sk-ele-101-sip1.ad.ic.ac.uk_Device_1,null">sk-ele-101-sip1.ad.ic.ac.uk_Device_1</a></td>
		        <td><a href="display_data.php?id=electricity,1200010050250,null">1200010050250</td>
		    </tr>
		    <tr>
		        <td><a href="display_data.php?id=electricity,1200010081620,null">1200010081620</td>
		        <td><a href="display_data.php?id=electricity,1200010081630,null">1200010081630</td>
		    </tr>

		    <tr>
		        <td><a href="display_data.php?id=electricity,1200010081620,campus">South Kensington Campus</td>
		        <td><a href="display_data.php?id=electricity,1200010081630,RSM">RSM</td>
		    </tr>
		</table>

	<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		  overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg .tg-cly1{text-align:left;vertical-align:middle}
		.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
	</style>
	<table id="electricity" border="1" align="center" class="tg">
		<thead>
		  <tr>
		    <th class="tg-lboi">8-15&nbsp;&nbsp;&nbsp;Princes Gardens (inc Garden Hall)</th>
		    <th class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_5</th>
		  </tr>
		</thead>
	<tbody>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_10</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_9</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">ACE</td>
	    <td class="tg-cly1">sk-ace-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-101-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_6</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_21</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip3.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Beit Quad</td>
	    <td class="tg-cly1">sk-ace-102-sip2.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip3.ad.ic.ac.uk_Device_14</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Bessemer</td>
	    <td class="tg-cly1">sk-bes-102-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bes-102-sip1.ad.ic.ac.uk_Device_31</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bes-102-sip1.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Blackett</td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip2.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip2.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Bone and Roderic Hill</td>
	    <td class="tg-cly1">sk-ace-102-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip3.ad.ic.ac.uk_Device_15</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip3.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip1.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ace-102-sip1.ad.ic.ac.uk_Device_5</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Business School</td>
	    <td class="tg-cly1">sk-mec-102-sip2.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-102-sip2.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Chemistry 1 &amp; 2</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_196</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_211</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip1.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip2.ad.ic.ac.uk_Device_17</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip2.ad.ic.ac.uk_Device_19</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip1.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip2.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-che-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-che-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-che-101-sip1.ad.ic.ac.uk_Device_7</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">City and Guilds</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_76</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_121</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_91</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_106</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-102-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-102-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-102-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-102-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Data Centre</td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_12</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_5</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_6</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_15</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_7</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_7</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_19</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_11</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_13</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_12</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_6</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_9</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_10</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_8</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_14</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_5</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_8</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_9</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_10</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_11</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_13</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_14</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_17</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_20</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_21</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_17</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip1.ad.ic.ac.uk_Device_15</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-104-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Dyson SoE</td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_20</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_21</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">SK-DBDE-B-SIP2.ad.ic.ac.uk_Device_64</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Eastside Hall</td>
	    <td class="tg-cly1">sk-est-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-est-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Electrical Engineering</td>
	    <td class="tg-cly1">sk-bes-104-sip2.ad.ic.ac.uk_Device_48</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bes-104-sip2.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bes-104-sip2.ad.ic.ac.uk_Device_33</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Energy Centre</td>
	    <td class="tg-cly1">sk-ele-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-ele-101-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Ethos Sports Centre</td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Ethos Sports Centre Residences</td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Faculty</td>
	    <td class="tg-cly1">sk-mec-102-sip2.ad.ic.ac.uk_Device_5</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Flowers</td>
	    <td class="tg-cly1">sk-bes-104-sip2.ad.ic.ac.uk_Device_63</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Huxley</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_181</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_166</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_151</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_5</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_6</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-hux-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Library</td>
	    <td class="tg-cly1">sk-she-101-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip1.ad.ic.ac.uk_Device_17</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-lib-102-sip3.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">RCS1</td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_66</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_81</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-che-101-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_25</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_26</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_27</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_28</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_29</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_30</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_31</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_32</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_33</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_34</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_35</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_36</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_37</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_38</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_39</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_40</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_41</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_42</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_43</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_44</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_45</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_46</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_47</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_48</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_49</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_50</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_51</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_52</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_53</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_54</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_55</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rcs-101-sip1.ad.ic.ac.uk_Device_56</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">RSM</td>
	    <td class="tg-cly1">sk-bes-102-sip1.ad.ic.ac.uk_Device_46</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bes-102-sip1.ad.ic.ac.uk_Device_47</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">SAF</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_31</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_46</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_61</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-saf-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-saf-101-sip2.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Sherfield</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_16</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-she-101-sip1.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-she-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-she-101-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Sir Ernst Chain (Biochemistry)</td>
	    <td class="tg-cly1">sk-bio-101-sip2.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-bio-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Skempton</td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_36</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-eyec-b-sip.ad.ic.ac.uk_Device_51</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">South Kensington</td>
	    <td class="tg-cly1">sk-mec-g-sip1.ad.ic.ac.uk_Device_2</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-mec-g-sip1.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Southside Hall</td>
	    <td class="tg-cly1">sk-rsm-101-sip2.ad.ic.ac.uk_Device_18</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-rsm-101-sip2.ad.ic.ac.uk_Device_33</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-sou-101-sip2.ad.ic.ac.uk_Device_1</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">Weeks Hall</td>
	    <td class="tg-cly1">sk-icsm-2-sip1.ad.ic.ac.uk_Device_136</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_3</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_4</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_12</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1"></td>
	    <td class="tg-cly1">sk-nor-101-sip1.ad.ic.ac.uk_Device_6</td>
	  </tr>
	  <tr>
	    <td class="tg-cly1">William Penney</td>
	    <td class="tg-cly1">sk-she-101-sip1.ad.ic.ac.uk_Device_5</td>
	  </tr>
	</tbody>
	</table>

		<!-- gas -->
		<table id="gas" border="1" align="center">
		    <tr>
		        <td><a href="display_data.php?id=gas,sk-58pg-101-sip1.ad.ic.ac.uk_Device_3,null">sk-58pg-101-sip1.ad.ic.ac.uk_Device_3</a></td>
		        <td><a href="display_data.php?id=gas,sk-58pg-101-sip1.ad.ic.ac.uk_Device_2,null">sk-58pg-101-sip1.ad.ic.ac.uk_Device_2</td>
		    </tr>
		    <tr>
		        <td><a href="display_data.php?id=gas,sk-ec-101-sip1.ad.ic.ac.uk_Device_27,null">sk-ec-101-sip1.ad.ic.ac.uk_Device_27</td>
		        <td><a href="display_data.php?id=gas,sk-est-102-sip1.ad.ic.ac.uk_Device_1,null">sk-est-102-sip1.ad.ic.ac.uk_Device_1</td>
		    </tr>
		    
		    <tr>
		        <td><a href="display_data.php?id=gas,1200010081620,campus">South Kensington Campus</td>
		        <td><a href="display_data.php?id=gas,1200010081630,Energy Centre">Energy Centre</td>
		    </tr>
		</table>

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
