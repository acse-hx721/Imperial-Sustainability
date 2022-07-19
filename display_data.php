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
												<li><a href="index.php">About</a></li>
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
		<!-- <div id="banner" class="banner"> -->
<!-- 			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row"> -->
						<!-- <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn"> -->
							<br><br><br><br><br><br><br>
							<h1 class="text-center">Data Visualization</h1>
<!-- 						</div>
					</div>
				</div> -->
			<!-- </div> -->
		<!-- </div> -->
		<!-- banner end -->

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
		<h1 class="text-center" id="demo"></span></h1>

		<script>
		document.getElementById("demo").innerHTML = a['id'] + " Data Charts";
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

        var elecWeeksChart = echarts.init(document.getElementById('elecWeeksChart'));
    	let baseTime = +new Date(2022, 6, 3, 23, 30);
		let halfHour = 0.5 * 3600 * 1000;
		let dateWeek = [];
		let data_2020_week = [Math.random() * 200];
		let data_2021_week = [Math.random() * 150];
		for (let i = 1; i < 48 * 7 + 2; i++) {
		  var now = new Date((baseTime += halfHour));
		  dateWeek.push([now.getDate(), now.getMonth() + 1].join('/') + " " +now.getHours() +":"+now.getMinutes());
		  data_2020_week.push(Math.round((Math.random() - 0.5) * 10 + data_2020_week[i - 1]));
		  data_2021_week.push(Math.round((Math.random() - 0.5) * 20 + data_2021_week[i - 1]));
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
		    text: 'Electricity Week Data Chart (Same week last year)'
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
                formatter:'{value} kWh'
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
		<br/>
		<br/>
		<br/>
		<br/>


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
		  date.push([now.getDate(), now.getMonth() + 1].join('/'));
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
		    boundaryGap: [0, '100%'],
		    axisLabel: 
		    {
                formatter:'{value} kWh'
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
		    text: 'Electricity Years Comparison by Month'
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
		  yAxis: {		    
		  	axisLabel: 
		    {
                formatter:'{value} kWh'
            }
          },
		  // Declare several bar series, each will be mapped
		  // to a column of dataset.source by default.
		  series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' }]
		};
		elecBarChart.setOption(option);
		</script>
		<br/>
		<br/>
		<br/>
		<br/>


		<div id="elecHeatMap" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	var elecHeatMap = echarts.init(document.getElementById('elecHeatMap'));
    	// prettier-ignore
		const hours = [
		    '12am', '12:30am', '1am', '1:30am', '2am', '2:30am', '3am', '3:30am',
		    '4am', '4:30am', '5am','5:30am', '6am', '6:30am', '7am', '7:30am',
		    '8am', '8:30am', '9am', '9:30am', '10am', '10:30am', '11am', '11:30am',
		    '12pm', '12:30pm', '1pm', '1:30pm', '2pm', '2:30pm', '3pm', '3:30pm',
		    '4pm', '4:30pm', '5pm', '5:30pm', '6pm', '6:30pm', '7pm', '7:30pm', 
		    '8pm', '8:30pm', '9pm', '9:30pm', '10pm', '10:30pm', '11pm', '11:30pm',
		];
		// prettier-ignore
		const days = [
		    'Sunday', 'Saturday', 'Friday', 'Thursday',
		    'Wednesday', 'Tuesday', 'Monday'
		];
		// prettier-ignore
		const data = [[0, 0, 5], [0, 1, 1], [0, 2, 0], [0, 3, 0], [0, 4, 0], [0, 5, 0], [0, 6, 0], [0, 7, 0], 
		              [0, 8, 0], [0, 9, 0], [0, 10, 0], [0, 11, 2], [0, 12, 4], [0, 13, 1], [0, 14, 1], [0, 15, 3], 
		              [0, 16, 4], [0, 17, 6], [0, 18, 4], [0, 19, 4], [0, 20, 3], [0, 21, 3], [0, 22, 2], [0, 23, 5], 
		              [0, 24, 5], [0, 25, 1], [0, 26, 0], [0, 27, 0], [0, 28, 0], [0, 29, 0], [0, 30, 0], [0, 31, 0], 
		              [0, 32, 0], [0, 33, 0], [0, 34, 0], [0, 35, 2], [0, 36, 4], [0, 37, 1], [0, 38, 1], [0, 39, 3], 
		              [0, 40, 4], [0, 41, 6], [0, 42, 4], [0, 43, 4], [0, 44, 3], [0, 45, 3], [0, 46, 2], [0, 47, 5], 
		              
		              [1, 0, 5], [1, 1, 1], [1, 2, 0], [1, 3, 3], [1, 4, 0], [1, 5, 0], [1, 6, 6], [1, 7, 0], 
		              [1, 8, 0], [1, 9, 0], [1, 10, 0], [1, 11, 2], [1, 12, 4], [1, 13, 1], [1, 14, 1], [1, 15, 3],
		              [1, 16, 4], [1, 17, 6], [1, 18, 0], [1, 19, 4], [1, 20, 3], [1, 21, 9], [1, 22, 5], [1, 23, 5], 
		              [1, 24, 5], [1, 25, 1], [1, 26, 0], [1, 27, 0], [1, 28, 6], [1, 29, 0], [1, 30, 0], [1, 31, 1], 
		              [1, 32, 0], [1, 33, 0], [1, 34, 0], [1, 35, 2], [1, 36, 4], [1, 37, 1], [1, 38, 1], [1, 39, 3], 
		              [1, 40, 4], [1, 41, 6], [1, 42, 4], [1, 43, 4], [1, 44, 3], [1, 45, 3], [1, 46, 2], [1, 47, 5],
		              
		              [2, 0, 5], [2, 1, 1], [2, 2, 0], [2, 3, 3], [2, 4, 0], [2, 5, 0], [2, 6, 6], [2, 7, 0], 
		              [2, 8, 0], [2, 9, 0], [2, 10, 0], [2, 11, 2], [2, 12, 4], [2, 13, 1], [2, 14, 1], [2, 15, 3],
		              [2, 16, 4], [2, 17, 6], [2, 18, 0], [2, 19, 4], [2, 20, 3], [2, 21, 9], [2, 22, 5], [2, 23, 0], 
		              [2, 24, 5], [2, 25, 1], [2, 26, 0], [2, 27, 0], [2, 28, 6], [2, 29, 0], [2, 30, 0], [2, 31, 1], 
		              [2, 32, 0], [2, 33, 0], [2, 34, 0], [2, 35, 2], [2, 36, 4], [2, 37, 1], [2, 38, 1], [2, 39, 3], 
		              [2, 40, 4], [2, 41, 6], [2, 42, 4], [2, 43, 0], [2, 44, 3], [2, 45, 3], [2, 46, 2], [2, 47, 5],
		              
		              [3, 0, 5], [3, 1, 1], [3, 2, 0], [3, 3, 3], [3, 4, 0], [3, 5, 7], [3, 6, 6], [3, 7, 5], 
		              [3, 8, 0], [3, 9, 6], [3, 10, 3], [3, 11, 2], [3, 12, 4], [3, 13, 1], [3, 14, 1], [3, 15, 3],
		              [3, 16, 0], [3, 17, 6], [3, 18, 0], [3, 19, 4], [3, 20, 3], [3, 21, 9], [3, 22, 5], [3, 23, 5], 
		              [3, 24, 5], [3, 25, 1], [3, 26, 0], [3, 27, 0], [3, 28, 6], [3, 29, 2], [3, 30, 0], [3, 31, 1], 
		              [3, 32, 0], [3, 33, 0], [3, 34, 0], [3, 35, 2], [3, 36, 4], [3, 37, 1], [3, 38, 1], [3, 39, 3], 
		              [3, 40, 4], [3, 41, 6], [3, 42, 4], [3, 43, 4], [3, 44, 3], [3, 45, 3], [3, 46, 2], [3, 47, 5],
		              
		              [4, 0, 5], [4, 1, 1], [4, 2, 0], [4, 3, 3], [4, 4, 4], [4, 5, 0], [4, 6, 6], [4, 7, 0], 
		              [4, 8, 0], [4, 9, 0], [4, 10, 0], [4, 11, 2], [4, 12, 4], [4, 13, 1], [4, 14, 1], [4, 15, 3],
		              [4, 16, 4], [4, 17, 6], [4, 18, 0], [4, 19, 4], [4, 20, 3], [4, 21, 0], [4, 22, 5], [4, 23, 5], 
		              [4, 24, 5], [4, 25, 1], [4, 26, 7], [4, 27, 3], [4, 28, 6], [4, 29, 0], [4, 30, 0], [4, 31, 1], 
		              [4, 32, 0], [4, 33, 0], [4, 34, 3], [4, 35, 2], [4, 36, 4], [4, 37, 1], [4, 38, 1], [4, 39, 3], 
		              [4, 40, 4], [4, 41, 6], [4, 42, 2], [4, 43, 4], [4, 44, 3], [4, 45, 3], [4, 46, 2], [4, 47, 5],
		              
		              [5, 0, 5], [5, 1, 1], [5, 2, 0], [5, 3, 3], [5, 4, 0], [5, 5, 0], [5, 6, 6], [5, 7, 0], 
		              [5, 8, 0], [5, 9, 0], [5, 10, 0], [5, 11, 2], [5, 12, 5], [5, 13, 1], [5, 14, 1], [5, 15, 3],
		              [5, 16, 5], [5, 17, 6], [5, 18, 0], [5, 19, 5], [5, 20, 3], [5, 21, 0], [5, 22, 5], [5, 23, 5], 
		              [5, 24, 5], [5, 25, 1], [5, 26, 0], [5, 27, 4], [5, 28, 3], [5, 29, 0], [5, 30, 3], [5, 31, 1], 
		              [5, 32, 0], [5, 33, 0], [5, 34, 0], [5, 35, 2], [5, 36, 5], [5, 37, 1], [5, 38, 1], [5, 39, 3], 
		              [5, 40, 5], [5, 41, 6], [5, 42, 5], [5, 43, 5], [5, 44, 3], [5, 45, 3], [5, 46, 2], [5, 47, 5],
		              
		              [6, 0, 6], [6, 1, 1], [6, 2, 0], [6, 3, 3], [6, 4, 0], [6, 5, 0], [6, 6, 6], [6, 7, 0], 
		              [6, 8, 0], [6, 9, 0], [6, 10, 0], [6, 11, 2], [6, 12, 6], [6, 13, 1], [6, 14, 1], [6, 15, 3],
		              [6, 16, 6], [6, 17, 6], [6, 18, 0], [6, 19, 6], [6, 20, 3], [6, 21, 9], [6, 22, 6], [6, 23, 6], 
		              [6, 24, 6], [6, 25, 1], [6, 26, 0], [6, 27, 0], [6, 28, 6], [6, 29, 0], [6, 30, 5], [6, 31, 1], 
		              [6, 32, 0], [6, 33, 0], [6, 34, 0], [6, 35, 2], [6, 36, 6], [6, 37, 1], [6, 38, 1], [6, 39, 3], 
		              [6, 40, 6], [6, 41, 0], [6, 42, 6], [6, 43, 6], [6, 44, 3], [6, 45, 3], [6, 46, 2], [6, 47, 6]]
					    .map(function (item) {
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
		    text: 'Electricity Week Heat Map (30 mins interval)'
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
		    min: 0,
		    max: 10,
		    calculable: true,
		    orient: 'horizontal',
		    left: 'center',
		    bottom: '0%'
		  },
		  series: [
		    {
		      name: 'Electricity comsumption',
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
		var elec_data;
		// var elec_data_file = new File(["elec_data_file"], "data/all_elec_data.csv");

		// Papa.parse(elec_data_file, {
		//   header: true,
		//   dynamicTyping: true,
		//   complete: function(results) {
		//     console.log(results);
		//     elec_data = results.data;
		//   }
		// });
		Papa.parse("data/all_elec_data.csv", {
		  header: true,
		  download: true,
		  complete: function(results) {
		    console.log(results);
		    elec_data = results.data;
		  }
		});
		</script>

	</body>
</html>
