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
												<li><a href="#about">About</a></li>
												<li class="active"><a href="visualization.php">Visualization</a></li>
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
							<p class="lead text-center">Selection of data type and time to show the specific data.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<div id="elecWeekChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
        var elecWeekChart = echarts.init(document.getElementById('elecWeekChart'));

        option = {
		  title: {
		    text: 'Electricity Week Chart'
		  },
		  tooltip: {
		    trigger: 'axis',
		    axisPointer: {
		      type: 'cross',
		      label: {
		        backgroundColor: '#6a7985'
		      }
		    }
		  },
		  legend: {
		  },
		  toolbox: {
		    feature: {
		      restore: {},
		      saveAsImage: {}
		    }
		  },
		  grid: {
		    left: '3%',
		    right: '4%',
		    bottom: '3%',
		    containLabel: true
		  },
		  xAxis: [
		    {
		      type: 'category',
		      boundaryGap: false,
		      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
		    }
		  ],
		  yAxis: [
		    {
		      type: 'value'
		    }
		  ],
		  series: [
		    {
		      name: 'Fake 2021 electric Data',
		      type: 'line',
		      // stack: 'Total',
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(255, 158, 68)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(255, 70, 131)'
		          }
		        ]),
		      },
		      emphasis: {
		        focus: 'series'
		      },
		      data: [120, 132, 101, 134, 90, 230, 210, 120, 132, 101, 134, 90, 230, 210]
		    },
		    {
		      name: 'Fake 2022 electric Data',
		      type: 'line',
		      // stack: 'Total',
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(123, 104, 238)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(0, 191, 255)'
		          }
		        ]),
		        opacity: 0.3
		      },
		      emphasis: {
		        focus: 'series'
		      },
		      data: [220, 182, 191, 234, 290, 330, 310, 220, 182, 191, 234, 290, 330, 310]
		    }
		  ]
		};
        elecWeekChart.setOption(option);

    	</script>

    	<div id="elecWeeksChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">

        var elecWeeksChart = echarts.init(document.getElementById('elecWeeksChart'));
    	let baseTime = +new Date(2022, 6, 3, 23, 30);
		let halfHour = 0.5 * 3600 * 1000;
		let dateWeek = [];
		let data_2020_week = [Math.random() * 200];
		let data_2021_week = [Math.random() * 150];
		for (let i = 1; i < 49 * 7; i++) {
		  var now = new Date((baseTime += halfHour));
		  dateWeek.push([now.getMonth() + 1, now.getDate()].join('/') + " " +now.getHours() +":"+now.getMinutes());
		  data_2020.push(Math.round((Math.random() - 0.5) * 10 + data_2020[i - 1]));
		  data_2021.push(Math.round((Math.random() - 0.5) * 20 + data_2021[i - 1]));
		}
		option = {
		  legend: {
		  	x:'center',
        	y:'top',
          },
		  tooltip: {
		    trigger: 'axis',
		    position: function (pt) {
		      return [pt[0], '10%'];
		    }
		  },
		  title: {
		    text: 'Electricity Week Data Chart'
		  },
		  toolbox: {
		    feature: {
		      dataZoom: {
		        yAxisIndex: 'none'
		      },
		      restore: {},
		      saveAsImage: {}
		    }
		  },
		  xAxis: {
		    type: 'category',
		    boundaryGap: false,
		    data: dateWeek
		  },
		  yAxis: {
		    type: 'value',
		    boundaryGap: [0, '100%']
		  },
		  dataZoom: [
		    {
		      type: 'inside',
		      start: 0,
		      end: 10
		    },
		    {
		      start: 0,
		      end: 10
		    }
		  ],
		  series: [
		    {
		      name: 'Fake 2021 electric Data',
		      type: 'line',
		      symbol: 'none',
		      sampling: 'lttb',
		      itemStyle: {
		        color: 'rgb(255, 70, 131)'
		      },
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(255, 158, 68)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(255, 70, 131)'
		          }
		        ]),
		      },
		      data: data_2021_week
		    },
		    {
		      name: 'Fake 2020 electric Data',
		      type: 'line',
		      symbol: 'none',
		      sampling: 'lttb',
		      itemStyle: {
		        color: 'rgb(30,144,255)'
		      },
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(123, 104, 238)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(0, 191, 255)'
		          }
		        ]),
		        opacity: 0.3
		      },
		      data: data_2020_week
		    }
		  ]
		};
		elecWeeksChart.setOption(option);

		</script>



		<div id="elecDateChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">

        var elecDateChart = echarts.init(document.getElementById('elecDateChart'));
    	let base = +new Date(2020, 12, 0);
		let oneDay = 24 * 3600 * 1000;
		let date = [];
		let data_2020 = [Math.random() * 200];
		let data_2021 = [Math.random() * 150];
		for (let i = 1; i < 366; i++) {
		  var now = new Date((base += oneDay));
		  date.push([now.getMonth() + 1, now.getDate()].join('/'));
		  data_2020.push(Math.round((Math.random() - 0.5) * 10 + data_2020[i - 1]));
		  data_2021.push(Math.round((Math.random() - 0.5) * 20 + data_2021[i - 1]));
		}
		option = {
		  legend: {
		  	x:'center',
        	y:'top',
          },
		  tooltip: {
		    trigger: 'axis',
		    position: function (pt) {
		      return [pt[0], '10%'];
		    }
		  },
		  title: {
		    text: 'Electricity Data Chart'
		  },
		  toolbox: {
		    feature: {
		      dataZoom: {
		        yAxisIndex: 'none'
		      },
		      restore: {},
		      saveAsImage: {}
		    }
		  },
		  xAxis: {
		    type: 'category',
		    boundaryGap: false,
		    data: date
		  },
		  yAxis: {
		    type: 'value',
		    boundaryGap: [0, '100%']
		  },
		  dataZoom: [
		    {
		      type: 'inside',
		      start: 0,
		      end: 10
		    },
		    {
		      start: 0,
		      end: 10
		    }
		  ],
		  series: [
		    {
		      name: 'Fake 2021 electric Data',
		      type: 'line',
		      symbol: 'none',
		      sampling: 'lttb',
		      itemStyle: {
		        color: 'rgb(255, 70, 131)'
		      },
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(255, 158, 68)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(255, 70, 131)'
		          }
		        ]),
		      },
		      data: data_2021
		    },
		    {
		      name: 'Fake 2020 electric Data',
		      type: 'line',
		      symbol: 'none',
		      sampling: 'lttb',
		      itemStyle: {
		        color: 'rgb(30,144,255)'
		      },
		      areaStyle: {
		        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
		          {
		            offset: 0,
		            color: 'rgb(123, 104, 238)'
		          },
		          {
		            offset: 1,
		            color: 'rgb(0, 191, 255)'
		          }
		        ]),
		        opacity: 0.3
		      },
		      data: data_2020
		    }
		  ]
		};
		elecDateChart.setOption(option);

		</script>
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="elecBarChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">

        var elecBarChart = echarts.init(document.getElementById('elecBarChart'));
		option = {
		  legend: {
		  	x:'center',
        	y:'bottom',
          },
          toolbox: {
		    feature: {
		      restore: {},
		      saveAsImage: {}
		    }
		  },
		  tooltip: {},
		  title: {
		    left: 'center',
		    text: 'Electricity Year Comparison'
		  },
		  dataset: {
		    source: [
		      ['product', '2019', '2020', '2021'],
		      ['January', 43.3, 85.8, 93.7],
		      ['Feburary', 83.1, 73.4, 55.1],
		      ['March', 86.4, 65.2, 82.5],
		      ['April', 72.4, 53.9, 39.1],
		      ['May', 43.3, 85.8, 93.7],
		      ['June', 83.1, 73.4, 55.1],
		      ['July', 86.4, 65.2, 82.5],
		      ['August', 72.4, 53.9, 39.1],
		      ['September', 43.3, 85.8, 93.7],
		      ['October', 83.1, 73.4, 55.1],
		      ['November', 86.4, 65.2, 82.5],
		      ['December', 72.4, 53.9, 39.1]
		    ]
		  },
		  xAxis: { type: 'category' },
		  yAxis: {},
		  // Declare several bar series, each will be mapped
		  // to a column of dataset.source by default.
		  series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' }]
		};
		elecBarChart.setOption(option);
		</script>


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

	</body>
</html>
