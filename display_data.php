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


		<br><br><br><br><br><br><br>
		


		<script type="text/javascript">
		var a=GetRequest();
		 
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
		<h1 class="text-center" id="meter_type"></span></h1>
		<!-- <h1 class="text-center" id="meter_location"></span></h1> -->
		<h1 class="text-center" id="meter_id"></span></h1>
		<h1 class="text-center" id="loading">Loading, please wait...</h1>

		<script>
		var meter = a['id'].split(",");
		var meter_type = meter[0];
		var meter_id = meter[1];
		var meter_location = meter[2];
		document.getElementById("meter_type").innerHTML = meter_type;
		if (meter_location != "null"){
			document.getElementById("meter_id").innerHTML = meter_location;
		}else{
			document.getElementById("meter_id").innerHTML = meter_id;
		}

		
		</script>


		<!-- <div id="elecWeekChart" style="width: 100%; height:500px; float:center; "></div>
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

    	</script> -->

    	<div id="elecWeeksChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	function drawWeekLineChart(this_year_week_datetime, this_year_data, previous_year_data, unit){
	        var elecWeeksChart = echarts.init(document.getElementById('elecWeeksChart'));
	    	let baseTime = +new Date(this_year_week_datetime);
			let halfHour = 0.5 * 3600 * 1000;
			let dateWeek = [];
			var now = new Date(baseTime);

			// Number of the year
			var this_year = this_year_week_datetime.getFullYear();
			var previous_year = this_year_week_datetime.getFullYear() - 1;

			for (let i = 0; i < 48 * 7 + 1; i++) {
			  dateWeek.push([now.getDate(), now.getMonth() + 1].join('/') + " " +now.getHours() +":"+now.getMinutes());
			  now = new Date((baseTime += halfHour));
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
			    text: 'Week Data Chart (Same week last year)',
			    subtext:'This chart shows the data comparison of the latest week and the same week of the previous year in the form of a line chart. You can browse the data of different periods by dragging the slider below.',
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
			    boundaryGap: [0, '100%'],
			    axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }

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
			      name: this_year + ' Data',
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
			      data: this_year_data
			    },
			    {
			      name: previous_year + ' Data',
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
			      data: previous_year_data
			    }
			  ]
			};
			elecWeeksChart.setOption(option);
		};

		</script>
		<br/>
		<br/>
		<br/>
		<br/>


		<div id="elecDateChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">

    	function drawYearLineChart(last_year, last_last_year, last_year_data, last_last_year_data){
	        var elecDateChart = echarts.init(document.getElementById('elecDateChart'));
	    	let base = +new Date(2020, 12, 0);
			let oneDay = 24 * 3600 * 1000;
			let date = [];
			for (let i = 1; i < 366; i++) {
			  var now = new Date((base += oneDay));
			  date.push([now.getDate(), now.getMonth() + 1].join('/'));
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
			    text: 'Year Data Chart',
			   	subtext:'This chart shows the most recent civil year in the available data compared to the previous year by way of a line graph.',
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
			    boundaryGap: [0, '100%'],
			    axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }
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
			      name: last_year + ' Data',
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
			      data: last_year_data
			    },
			    {
			      name: last_last_year + ' Data',
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
			      data: last_last_year_data
			    }
			  ]
			};
			elecDateChart.setOption(option);
		};

		</script>
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="elecBarChart" style="width: 100%; height:500px; float:center; "></div>

    	<script type="text/javascript">

    	function drawMonthBarChart(last_year, last_last_year, last_year_month_data, last_last_year_month_data){
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
			    text: 'Years Comparison by Month',
			    subtext: 'This chart shows the data of the last full natural year in the available data compared to the previous year in a bar chart, showing the data of each month in detail.',
			  },
			  xAxis: {
			  	type: 'category',
			  	data: ['January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',]
			  },
			  yAxis: {		    
			  	axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }
	          },
			  // Declare several bar series, each will be mapped
			  // to a column of dataset.source by default.
			  series: [
                        {
                            name: last_last_year + ' Data',
                            type: 'bar',
                            data: last_last_year_month_data
                        },
                        {
                            name: last_year + ' Data',
                            type: 'bar',
                            data: last_year_month_data
                        }
                    ]
			};
			elecBarChart.setOption(option);
		};
		</script>
		<br/>
		<br/>
		<br/>
		<br/>


		<div id="elecHeatMap" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	function drawHeapMap(heat_map_data, heat_map_days, heat_map_times){
	    	var elecHeatMap = echarts.init(document.getElementById('elecHeatMap'));
	    	// prettier-ignore
			// const hours = [
			//     '12am', '12:30am', '1am', '1:30am', '2am', '2:30am', '3am', '3:30am',
			//     '4am', '4:30am', '5am','5:30am', '6am', '6:30am', '7am', '7:30am',
			//     '8am', '8:30am', '9am', '9:30am', '10am', '10:30am', '11am', '11:30am',
			//     '12pm', '12:30pm', '1pm', '1:30pm', '2pm', '2:30pm', '3pm', '3:30pm',
			//     '4pm', '4:30pm', '5pm', '5:30pm', '6pm', '6:30pm', '7pm', '7:30pm', 
			//     '8pm', '8:30pm', '9pm', '9:30pm', '10pm', '10:30pm', '11pm', '11:30pm',
			// ];
			const hours = heat_map_times;

			const days = heat_map_days;

			const data = heat_map_data.map(function (item) {
						    return [item[1], item[0], item[2] || '-'];
						});
			option = {
			  toolbox: {
			    feature: {
			      restore: {},
			      saveAsImage: {}
			    }
			  },
			  tooltip: {
			    position: 'top'
			  },
			  title: {
			    text: 'Week Heat Map (30 mins interval)',
			    subtext: 'This figure shows the data of the last week of existing data by color, and the usage of specific time can be observed by the depth of data. You can filter the range of data you want to display by using the slider below.',
			  },
			  grid: {
			    height: '60%',
			    top: '10%'
			  },
			  xAxis: {
			    type: 'category',
			    data: hours,
			    splitArea: {
			      show: true
			    }
			  },
			  yAxis: {
			    type: 'category',
			    data: days,
			    splitArea: {
			      show: true
			    }
			  },
			  visualMap: {
			    min: Math.min.apply(null, this_year_week_data),
			    max: Math.max.apply(null, this_year_week_data),
			    calculable: true,
			    orient: 'horizontal',
			    left: 'center',
			    bottom: '0%'
			  },
			  series: [
			    {
			      name: unit,
			      type: 'heatmap',
			      data: data,
			      label: {
			        show: true
			      },
			      emphasis: {
			        itemStyle: {
			          shadowBlur: 10,
			          shadowColor: 'rgba(0, 0, 0, 0.5)'
			        }
			      }
			    }
			  ]
			};

			elecHeatMap.setOption(option);
		};
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


		<script type="text/javascript" src="plugins/papaparse.min.js"></script>

		<script type="text/javascript">
		function getDay(today_time, day){
		    function doHandleMonth(month){
		    　　var m = month;
		    　　if(month.toString().length == 1){
		    　　　　m = "0" + month;
		    　　}
		    　　return m;
		    };
		    var today = new Date(today_time);
		    var targetday_milliseconds=today.getTime() + 1000*60*60*24*day;
		    today.setTime(targetday_milliseconds); // key code
		    // var tYear = today.getFullYear();
		    // var tMonth = today.getMonth();
		    // var tDate = today.getDate();
		    // tMonth = doHandleMonth(tMonth + 1);
		    // tDate = doHandleMonth(tDate);
		    return new Date(targetday_milliseconds);
		}


		function getDaysOfYear(t) {
            if (t==null)
            {
                var Year = new Date().getFullYear(), s = 0, d;
                for (var i = 1; i < 13; i++) {
                    d = new Date(Year, i, 0);//get days of a month
                    s += d.getDate();
                };
                return s;
        	} else if(t >= 1970) {
                var Year = new Date().getFullYear(), s = 0, d;
                for (var i = 1; i < 13; i++) {
                    d = new Date(t, i, 0);
                    s += d.getDate();
                };
                return s;
        	} else {
            	return "wrong year number!";
        	} 
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


        var all_sites_obj = {}; //Obj类型
	    var all_channels_obj = {}; //Obj类型

	    var all_sites_obj_year = {}; //Obj类型
	    var all_channels_obj_year = {}; //Obj类型

        var all_sites = new Set();
        var all_channels = new Set();

        // Read location file
        if (meter_location == "campus"){
	        Papa.parse(location_file_name, {
			  header: true,
			  download: true,
			  // Do things after reading data
			  complete: function(results) {
			    // console.log(results);
			    location_data = results.data;
			    for (var index=0; index < location_data.length; index++) {
			    	const element = location_data[index];
			    	if (element["SIT:<name>"] != ""){
						all_sites.add(element["SIT:<name>"]);
					}
					if (element["CHN:<channelID>"] != ""){
						all_channels.add(element["CHN:<channelID>"]);
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
			  }
			});
	    }



        function getChannelOfLocation(meter_location){
	        var temp_meter_channels = [];

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
					if (element["SIT:<name>"] == meter_location){
						temp_meter_channels.push(element["CHN:<channelID>"]);
					} else if (meter_location == "campus"){
						temp_meter_channels.push(element["CHN:<channelID>"]);
					}
				}
			  }
			});
			return temp_meter_channels;
	    }


	    var meter_channels = getChannelOfLocation(meter_location);


        // Calculate the sum of this location
        function sumOfLocation(elem, channels){
        	var sum = 0;
        	for (var e in elem){
        		let index = channels.indexOf(e);
        		if (index != -1){
        			sum = sum + parseFloat(elem[e]);
        		}
        	}
        	return sum;
        }


		</script>


		<script type="text/javascript">
		var elec_data = new Array();
		// var elec_data_file = new File(["elec"], "data/all_elec_data.csv");

		// Papa.parse(elec_data_file, {
		//   header: true,
		//   complete: function(results) {
		//     console.log(results);
		//     elec_data = results.data;
		//   }
		// });

		// var csvfile = "data/all_elec_data.csv";

	 //    $.get(csvfile, function (data) {
	 //        var csvdata = Papa.parse(data, {
	 			// header: true,

	 	// });
	 //        console.log(csvdata);
	 //    });

	 	const all_data = [];
	 	var last_datetime;
	 	var this_year_week_datetime;
	 	var previous_year_week_datetime;

	 	// Week data of this year and previous year
	 	const this_year_week_data = [];
	 	const previous_year_week_data = [];

	 	var heat_map_data = [];
	 	var heat_map_days= [];
	 	var heat_map_times= [];

	 	// the date of last year and the year befor last year
	 	var start_of_last_last_year;
	 	var start_of_last_year;

	 	var last_year_data = [];
	 	var last_last_year_data = [];

	 	var last_year_day_counter = 0;
	 	var last_year_day_sum = 0;

	 	var last_last_year_day_counter = 0;
	 	var last_last_year_day_sum = 0;

	 	// the variable used for month bar chart
	 	var last_year_month_data = [];
	 	var last_last_year_month_data = [];

	 	var last_year_month_sum = 0;
	 	var last_last_year_month_sum = 0;

	 	var current_month1 = 0;
	 	var month_last_loop1 = 0;

	 	var current_month2 = 0;
	 	var month_last_loop2 = 0;

	 	// var all_campus_data;

	 	var filename;
	 	var unit;
	 	if (meter_type == "electricity"){
	 		filename = "data/all_elec_data.csv";
	 		unit = "kWh";
	 	}
	 	else if(meter_type == "gas"){
	 		filename = "data/all_gas_data.csv";
	 		unit = "m^3";
	 	}


	 	sum_counter = 0;

		Papa.parse(filename, {
		  header: true,
		  download: true,
		  // Do things after reading data
		  complete: function(results) {
		    console.log(results);
		    elec_data = results.data;
		    document.getElementById("loading").innerHTML = "Data loading completed";
		    last_datetime = '20' + elec_data[elec_data.length-2]['Date'] + " " + elec_data[elec_data.length-2]['Time'];
			console.log(getDay(last_datetime, -7)); // 7 days before

			this_year_week_datetime = getDay(last_datetime, -7);
			previous_year_week_datetime = getDay(this_year_week_datetime, -365);


			// Calculate the start of 2 year
			var last_year = new Date(last_datetime).getFullYear() - 1;
			var last_last_year = new Date(last_datetime).getFullYear() - 2;

			start_of_last_year = last_year + "/1/1";
			start_of_last_last_year = last_last_year + "/1/1";

			start_of_last_year = new Date(start_of_last_year);
			start_of_last_last_year = new Date(start_of_last_last_year);

			var days_last_year = getDaysOfYear(last_year);
			var days_last_last_year = getDaysOfYear(last_last_year);



		    for (var index=0; index < elec_data.length; index++) {
				const elem = elec_data[index];
				// console.log(index, elem);
				var one_data;
				if (meter_location != "null"){
					one_data = {
						Date: elem['Date'],
						Time: elem['Time'],
						Value: sumOfLocation(elem, meter_channels),
					};
				}else{
					one_data = {
						Date: elem['Date'],
						Time: elem['Time'],
						Value: elem[meter_id],
					};
				}


				// Calculate data of latest week for this year and previous year
				var current_datetime_str = '20' + elec_data[index]['Date'] + " " + elec_data[index]['Time'];
				var current_datetime = new Date(current_datetime_str);
				if (current_datetime >= previous_year_week_datetime && previous_year_week_data.length <= 48 * 7){
					previous_year_week_data.push(one_data['Value']);
				}
				if (current_datetime >= this_year_week_datetime && this_year_week_data.length <= 48 * 7){
					this_year_week_data.push(one_data['Value']);
					// 累计计算这周的每个channel消耗
					if (meter_location == "campus"){
						for (var x in elem){
							if (x != 'Date' && x != 'Time'){
								if (!isNaN(elem[x])){
									all_channels_obj[x] = all_channels_obj[x] + parseFloat(elem[x]);
								}
							}
						}
					}
				}

				// Store each day data of last year and last last year
				if (current_datetime >= start_of_last_year && last_year_data.length < 365){
					last_year_day_sum = last_year_day_sum + parseFloat(one_data['Value']);
					last_year_day_counter = last_year_day_counter + 1;

					if (last_year_day_counter == 48){
						last_year_data.push(last_year_day_sum);
						last_year_day_sum = 0;
						last_year_day_counter = 0;
					}
				}
				if (current_datetime >= start_of_last_year && sum_counter < 365 * 48 && meter_location == "campus"){
					// 累计计算去年的每个channel消耗
					for (var x in elem){
						if (x != 'Date' && x != 'Time'){
							if (!isNaN(elem[x])){
								all_channels_obj_year[x] = all_channels_obj_year[x] + parseFloat(elem[x]);
							}
						}
					}
					sum_counter = sum_counter + 1;
				}
				if (current_datetime >= start_of_last_last_year && last_last_year_data.length < 365){
					last_last_year_day_sum = last_last_year_day_sum + parseFloat(one_data['Value']);
					last_last_year_day_counter = last_last_year_day_counter + 1;

					if (last_last_year_day_counter == 48){
						last_last_year_data.push(last_last_year_day_sum);
						last_last_year_day_sum = 0;
						last_last_year_day_counter = 0;
					}
				}

				// Month bar chart
				current_month1 = current_datetime.getMonth();
				current_month2 = current_datetime.getMonth();

				if (current_datetime >= start_of_last_year && last_year_month_data.length < 12){
					if (current_month1 == month_last_loop1){
						last_year_month_sum = last_year_month_sum + parseFloat(one_data['Value']);
					}
					else {
						last_year_month_data.push(last_year_month_sum);
						last_year_month_sum = 0;
					}
					month_last_loop1 = current_month1;
				}
				if (current_datetime >= start_of_last_last_year && last_last_year_month_data.length < 12){
					if (current_month2 == month_last_loop2){
						last_last_year_month_sum = last_last_year_month_sum + parseFloat(one_data['Value']);
					}
					else {
						last_last_year_month_data.push(last_last_year_month_sum);
						last_last_year_month_sum = 0;
					}
					month_last_loop2 = current_month2;
				}
				

				all_data.push(one_data);
			}
			drawWeekLineChart(this_year_week_datetime, this_year_week_data, previous_year_week_data, unit);

			drawYearLineChart(last_year, last_last_year, last_year_data, last_last_year_data, unit);

			drawMonthBarChart(last_year, last_last_year, last_year_month_data, last_last_year_month_data, unit);

			// Draw the heat map
			var datetime1 = this_year_week_datetime;
			for (var i = 0; i < 7; i++) {
				var month = datetime1.getMonth() + 1;
				var datetime_str = datetime1.getDate() + '/' + month + '/' + datetime1.getFullYear();
				var week = datetime1.getDay();
				if (week == 0) {  
				    datetime_str = datetime_str + " Sunday";  
				} else if (week == 1) {  
				    datetime_str = datetime_str + " Monday";
				} else if (week == 2) {  
				    datetime_str = datetime_str + " Tuesday";
				} else if (week == 3) {  
				    datetime_str = datetime_str + " Wednesday";
				} else if (week == 4) {  
				    datetime_str = datetime_str + " Thursday";
				} else if (week == 5) {  
				    datetime_str = datetime_str + " Friday"; 
				} else if (week == 6) {  
				    datetime_str = datetime_str + " Saturday"; 
				}
				heat_map_days.push(datetime_str);
				datetime1 = getDay(datetime1, 1);
			}

			heat_map_days.reverse();

			let baseTime = +new Date(this_year_week_datetime);
			var datetime2 = new Date(baseTime);
			let halfHour = 0.5 * 3600 * 1000;
			for (let i = 0; i < 48; i++) {
			    heat_map_times.push(datetime2.getHours() + ":" + datetime2.getMinutes());
			    datetime2 = new Date((baseTime += halfHour));
			}


			for (var i = 0; i < 48 * 7; i++) {
				var heat_map_element = [6 - parseInt(i/48), i%48, this_year_week_data[i]];
				heat_map_data.push(heat_map_element);
			} 

			drawHeapMap(heat_map_data, heat_map_days, heat_map_times, unit);

			// var channels = [];
			if (meter_location == "campus"){
				console.log(all_channels_obj);
				console.log(all_channels_obj_year);
				for (var site in all_sites_obj){
					console.log(site);
					var channels = getChannelOfLocation(site);
					console.log(channels);
					for(var k = 0; k < channels.length; k++){
						console.log(channels[k]);
						// if (!isNaN(all_channels_obj[channels[i]])){
						all_sites_obj[site] = all_sites_obj[site] + all_channels_obj[channels[k]];
						// }
						// if (!isNaN(all_channels_obj_year[channels[i]])){
						// 	all_sites_obj_year[site] = all_sites_obj_year[site] + parseFloat(all_channels_obj_year[channels[i]]);
						// }
					}
				}

				console.log(all_sites_obj);
				console.log(all_sites_obj_year);
			}



		  },
		});


		// console.log(elec_data);


		</script>

	</body>
</html>
