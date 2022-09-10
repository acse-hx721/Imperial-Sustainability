<!-- Name: Hongcheng Xie 	GitHub username: acse-hx721-->
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Imperial College London Sustainability</title>

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

		<!-- Core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">

		<!-- import echarts.js -->
		<script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>

		<!-- import important functions to process or calculate data-->
		<script type="text/javascript" src="my_functions.js"></script>
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
		 
		function GetRequest() {
		// Get the string in the url after the "?"
		var url = location.search; 
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

		<!-- Title section -->
		<h1 class="text-center" id="meter_type"></span></h1>
		<h1 class="text-center" id="meter_id"></span></h1>
		<!-- Loading instructions -->
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


		<!-- Table for CO2 emission -->
		<style type="text/css">
			.tg  {border-collapse:collapse;border-spacing:0;}
			.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
			  overflow:hidden;padding:10px 5px;word-break:normal;}
			.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
			  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
			.tg .tg-1wig{font-weight:bold;text-align:left;vertical-align:top}
			.tg .tg-0lax{text-align:left;vertical-align:top}
		</style>

		<br>
		<h3 class="text-center">Weekly</h3>
		<table border='1' align='center' class='tg'>
		<thead>
		  	<tr>
			    <th class="tg-0lax"></th>
			    <th class="tg-1wig">Energy consumption (unit: kWh)</th>
			    <th class="tg-1wig">CO<sub>2</sub>e emission (unit: t)</th>

		  	</tr>
		</thead>
		<tbody>
			<tr>
				<td class="tg-1wig" id="table_seven_date">Date Period</td>
			    <td class="tg-0lax" id="table_seven_consumption">Loading</td>
			    <td class="tg-0lax" id="table_seven_emision">Loading</td>
			</tr>
			<tr>
				<td class="tg-1wig">The same 7 days last year</td>
			    <td class="tg-0lax" id="table_last_seven_consumption">Loading</td>
			    <td class="tg-0lax" id="table_last_seven_emision">Loading</td>
			</tr>
		</tbody>
		</table>

		<h3 class="text-center">Annual</h3>
		<table border='1' align='center' class='tg'>
		<thead>
		  	<tr>
			    <th class="tg-0lax"></th>
			    <th class="tg-1wig">Energy consumption (unit: kWh)</th>
			    <th class="tg-1wig">CO<sub>2</sub>e emission (unit: t)</th>

		  	</tr>
		</thead>
		<tbody>
			<tr>
				<td class="tg-1wig" id="table_last_year">Year X</td>
			    <td class="tg-0lax" id="table_last_year_consumption">Loading</td>
			    <td class="tg-0lax" id="table_last_year_emision">Loading</td>
		  	</tr>
		  	<tr>
				<td class="tg-1wig" id="table_last_last_year">Year Y</td>
			    <td class="tg-0lax" id="table_last_last_year_consumption">Loading</td>
			    <td class="tg-0lax" id="table_last_last_year_emision">Loading</td>
			</tr>
			<tr>
				<td class="tg-1wig" id="table_last_last2_year">Year Z</td>
			    <td class="tg-0lax" id="table_last_last2_year_consumption">Loading</td>
			    <td class="tg-0lax" id="table_last_last2_year_emision">Loading</td>
			</tr>
		</tbody>
		</table>


		<br><br><br>

		<script type="text/javascript">

		var this_year1;
		var last_year1;
		var last_last_year1;
		var last_last2_year1;



		// Update the CO2e calculation table
		function calculateCO2(this_year, last_year, last_last_year, last_last2_year, sum_last_seven, sum_seven, sum_last_last2_year, sum_last_last_year, sum_last_year){
			this_year1 = this_year;
			last_year1 = last_year;
			last_last_year1 = last_last_year;
			last_last2_year1 = last_last2_year;
			sum1 = sum_last_seven;
			sum2 = sum_seven;

			document.getElementById("table_last_last2_year").innerHTML = 'Year ' + last_last2_year;
			document.getElementById("table_last_last_year").innerHTML = 'Year ' + last_last_year;
		    document.getElementById("table_last_year").innerHTML = 'Year ' + last_year;

		    document.getElementById("table_last_seven_emision").innerHTML = sum_last_seven * getCO2Factor(last_year) / 1000;
		    document.getElementById("table_seven_emision").innerHTML = sum_seven * getCO2Factor(this_year) / 1000;

		    document.getElementById("table_last_seven_consumption").innerHTML = sum_last_seven;
		    document.getElementById("table_seven_consumption").innerHTML = sum_seven;

		    document.getElementById("table_last_last2_year_emision").innerHTML = sum_last_last2_year * getCO2Factor(last_last2_year) / 1000;
		    document.getElementById("table_last_last_year_emision").innerHTML = sum_last_last_year * getCO2Factor(last_last_year) / 1000;
		    document.getElementById("table_last_year_emision").innerHTML = sum_last_year * getCO2Factor(last_year) / 1000;

		    document.getElementById("table_last_last2_year_consumption").innerHTML = sum_last_last2_year;
		    document.getElementById("table_last_last_year_consumption").innerHTML = sum_last_last_year;
		    document.getElementById("table_last_year_consumption").innerHTML = sum_last_year;
		}
		</script>




    	<div id="channelPieChartWeek" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	// Function to draw pie chart in building-level
    	function drawChannelPieChartWeek(this_site_channel_obj, unit){
	        var channelPieChartWeek = echarts.init(document.getElementById('channelPieChartWeek'));

	        var pie_data = [];
	        for (var x in this_site_channel_obj){
	        	var pie_obj = {};
	        	pie_obj["name"] = x;
	        	pie_obj["value"] = this_site_channel_obj[x];
	        	pie_data.push(pie_obj);
	        }

			option = {
			  title: {
			    text: meter_type + ' Meter consumption over the past 7 days',
			    subtext: meter_type + "("+unit+")",
			    left: 'center'
			  },
			  tooltip: {
			    trigger: 'item'
			  },
			  legend: {
			    orient: 'vertical',
			    left: 'left'
			  },
			  series: [
			    {
			      name: 'Electricity Data',
			      type: 'pie',
			      radius: '50%',
			      data: pie_data,
			      emphasis: {
			        itemStyle: {
			          shadowBlur: 10,
			          shadowOffsetX: 0,
			          shadowColor: 'rgba(0, 0, 0, 0.5)'
			        }
			      }
			    }
			  ]
			};
			channelPieChartWeek.setOption(option);
		}
		
		</script>

    	<div id="buildingChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	// Function to draw comparison of different buildings weekly in campus-level
    	function drawBuildingChart(all_sites_obj, all_sites_obj_week, unit, period_str){
	        var buildingChart = echarts.init(document.getElementById('buildingChart'));

	        option = {
		      tooltip: {
		        trigger: 'axis',
		        axisPointer: {
		          type: 'shadow',
		          label: {
		            show: true
		          }
		        }
		      },
		      title: {
			    // text: 'Buildings of the South Kensington Campus Energy Consumption Weekly Chart (most recent week compared to the same week last year)',
			    text: 'Weekly '  + meter_type + ' Consumption per Building (' + period_str + ')',
			    // subtext:'This chart shows the data comparison of the latest week and the same week of the previous year for each building. You can browse the data of different buildings by dragging the slider below, and change the data scale by dragging the slider on the right hand side.\n\n',
			  },
		      toolbox: {
		        show: true,
		        feature: {
		          mark: { show: true },
		          dataView: { show: true, readOnly: false },
		          magicType: { show: true, type: ['line', 'bar'] },
		          restore: { show: true },
		          saveAsImage: { show: true }
		        }
		      },
		      calculable: true,
		      legend: {
		        data: ['Growth', "The same 7 days last year", period_str],
		        itemGap: 5,
		        x:'right',
	        	y:'top',
	        	padding:[0,120,0,0],
		      },
		      grid: {
		        top: '12%',
		        left: '1%',
		        right: '10%',
		        containLabel: true
		      },
		      xAxis:{
		      	name:'Building Name',
		        type: 'category',
		        data: Object.keys(all_sites_obj),
		        axisLabel: {
			      // set for x axis
			      rotate: '30'
			    }
			  },
		      yAxis: {
		      	name:'Energy Consumption',		    
			  	axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }
	          },
		      dataZoom: [
		        {
		          show: true,
		          start: 94,
		          end: 100
		        },
		        {
		          type: 'inside',
		          start: 94,
		          end: 100
		        },
		        {
		          show: true,
		          yAxisIndex: 0,
		          filterMode: 'empty',
		          width: 30,
		          height: '80%',
		          showDataShadow: false,
		          left: '93%'
		        }
		      ],
		      series: [
		        {
		          name: "The same 7 days last year",
		          type: 'bar',
		          data: Object.values(all_sites_obj_week)
		        },
		        {
		          name: period_str,
		          type: 'bar',
		          data: Object.values(all_sites_obj)
		        }
		      ]
		    };
		    buildingChart.setOption(option);

	    }
		</script>


		<br><br>
    	<div id="elecWeeksChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	// Function to draw line chart weekly
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
			  	x:'right',
	        	y:'top',
	        	padding:[0,400,0,0],
	          },
			  tooltip: {
			    trigger: 'axis',
			    position: function (pt) {
			      return [pt[0], '10%'];
			    }
			  },
			  title: {
			    // text: meter_type + ' Energy Consumption Weekly Chart (most recent week compared to the same week last year)',
			    text: "Thirty-minute " + meter_type + " Consumption (most recent week compared to the same week last year)" 

			    // subtext:'This chart shows the data comparison of the latest week and the same week of the previous year in the form of a line chart. You can browse the data of different periods by dragging the slider below.',
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
			  	name:'Date/time',
			    type: 'category',
			    boundaryGap: false,
			    data: dateWeek
			  },
			  yAxis: {
			    type: 'value',
			    boundaryGap: [0, '100%'],
			    name:'Energy Consumption',
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
			      name: previous_year,
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
			    },
			    {
			      name: this_year,
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
			    }
			  ]
			};
			elecWeeksChart.setOption(option);
		};

		</script>

		<br><br>
		<!-- Button to change the year -->
		<div class="rectangle" id="btn_div" style="text-align: center; margin: auto">
			<button type="button" id="last_last2_year_btn" style="width: 100px; height:30px; margin:0 auto;" onclick="drawSKMap_year(all_sites_obj_last2_year, last_last2_year1, unit)">Loading</button>
    		<button type="button" id="last_last_year_btn" style="width: 100px; height:30px; margin:0 auto;" onclick="drawSKMap_year(all_sites_obj_last_year, last_last_year1, unit)">Loading</button>
			<button type="button" id="last_year_btn" style="width: 100px; height:30px; margin:0 auto;" onclick="drawSKMap_year(all_sites_obj_year, last_year1, unit)">Loading</button>
		</div>

		<!-- DIV used to draw the map -->
		<div id="map_year" style="width: 100%; height:500px; float:center; "></div>

		<br><br>
		<div id="buildingChartYear" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	// Function to draw comparison of different buildings weekly in campus-level
    	function drawBuildingChartYear(all_sites_obj_year, all_sites_obj_last_year, all_sites_obj_last2_year, last_year, last_last_year, last_last2_year, unit){
	        var buildingChartYear = echarts.init(document.getElementById('buildingChartYear'));

	        option = {
		      tooltip: {
		        trigger: 'axis',
		        axisPointer: {
		          type: 'shadow',
		          label: {
		            show: true
		          }
		        }
		      },
		      title: {
			    // text: 'Buildings of the South Kensington Campus ' + meter_type +  ' Energy Consumption Yearly Chart (compare the last 3 civil years)',
			    text: 'Annual '  + meter_type + ' Consumption per Building (' + last_last2_year + ' - ' + last_year + ')',
			    // subtext:'This chart shows the data comparison of the last 3 civil years for each building. You can browse the data of different buildings by dragging the slider below, and change the data scale by dragging the slider on the right hand side.\n\n',
			  },
		      toolbox: {
		        show: true,
		        feature: {
		          mark: { show: true },
		          dataView: { show: true, readOnly: false },
		          magicType: { show: true, type: ['line', 'bar'] },
		          restore: { show: true },
		          saveAsImage: { show: true }
		        }
		      },
		      calculable: true,
		      legend: {
		        data: ['Growth', last_last2_year, last_last_year, last_year],
		        itemGap: 5,
		        x:'right',
	        	y:'top',
	        	padding:[0,150,0,0],
		      },
		      grid: {
		        top: '12%',
		        left: '1%',
		        right: '10%',
		        containLabel: true
		      },
		      xAxis:{
		      	name:'Building Name',
		        type: 'category',
		        data: Object.keys(all_sites_obj),
		        axisLabel: {
			      // set for x axis
			      rotate: '30'
			    }
			  },
		      yAxis: {
		      	name:'Energy Consumption',		    
			  	axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }
	          },
		      dataZoom: [
		        {
		          show: true,
		          start: 94,
		          end: 100
		        },
		        {
		          type: 'inside',
		          start: 94,
		          end: 100
		        },
		        {
		          show: true,
		          yAxisIndex: 0,
		          filterMode: 'empty',
		          width: 30,
		          height: '80%',
		          showDataShadow: false,
		          left: '93%'
		        }
		      ],
		      series: [
		      	{
		          name: last_last2_year,
		          type: 'bar',
		          data: Object.values(all_sites_obj_last2_year)
		        },
		        {
		          name: last_last_year,
		          type: 'bar',
		          data: Object.values(all_sites_obj_last_year)
		        },
		        {
		          name: last_year,
		          type: 'bar',
		          data: Object.values(all_sites_obj_year)
		        }
		      ]
		    };
		    buildingChartYear.setOption(option);

	    }
		</script>

		<br/>
		<br/>
		<br/>
		<br/>


		<div id="elecDateChart" style="width: 100%; height:500px; float:center; "></div>
    	<script type="text/javascript">
    	// Function to draw line chart of whole year
    	function drawYearLineChart(last_year, last_last_year, last_last2_year, last_year_data, last_last_year_data, last_last2_year_data, unit){
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
			    // text: meter_type + ' Energy Consumption Yearly Chart (compare the last 3 civil years)',
			    text: 'Daily ' + meter_type + ' Consumption (' + last_last2_year + ' - ' + last_year + ')',
			   	// subtext:'This chart shows the last 3 civil years energy consumption data by way of a line graph.',
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
			  	name:'Date',
			    type: 'category',
			    boundaryGap: false,
			    data: date
			  },
			  yAxis: {
			    type: 'value',
			    boundaryGap: [0, '100%'],
			    name:'Energy Consumption',
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
			      name: last_last2_year,
			      type: 'line',
			      symbol: 'none',
			      sampling: 'lttb',
			      itemStyle: {
			        color: 'rgb(60,179,113)'
			      },
			      areaStyle: {
			        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
			          {
			            offset: 0,
			            color: 'rgb(46, 139, 87)'
			          },
			          {
			            offset: 1,
			            color: 'rgb(144, 238, 144)'
			          }
			        ]),
			        opacity: 0.3
			      },
			      data: last_last2_year_data
			    },
			  	{
			      name: last_last_year,
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
			    },
			    {
			      name: last_year,
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
    	// Function to draw bar chart for whole year in one month interval
    	function drawMonthBarChart(last_year, last_last_year, last_last2_year, last_year_month_data, last_last_year_month_data, last_last2_year_month_data, unit){
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
			    // text: meter_type + ' Energy Consumption Yearly Chart by Month (compare the last 3 civil years)',
			    text: 'Monthly' + meter_type + ' Consumption (' + last_last2_year + ' - ' + last_year + ')',
			    // subtext: 'This chart shows the data of the last 3 civil years in a bar chart, showing the accumulated data of each month in detail.',
			  },
			  xAxis: {
			  	name:'Month',
			  	type: 'category',
			  	data: ['January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',]
			  },
			  yAxis: {
			  	name:'Energy Consumption',		    
			  	axisLabel: 
			    {
	                formatter:'{value} ' + unit
	            }
	          },
			  // Declare several bar series, each will be mapped
			  // to a column of dataset.source by default.
			  series: [
			  			{
                            name: last_last2_year,
                            type: 'bar',
                            data: last_last2_year_month_data
                        },
                        {
                            name: last_last_year,
                            type: 'bar',
                            data: last_last_year_month_data
                        },
                        {
                            name: last_year,
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
    	// Function to draw heat map of a week's data
    	function drawHeapMap(heat_map_data, heat_map_days, heat_map_times, period_str){
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
			    // text: meter_type + ' Energy Consumption Weekly Heat Map (30 mins interval)',
			    text: 'Thirty-minute' + meter_type + 'Consumption (' + unit + ') Heat Map during ' + period_str,
			    subtext: 'This figure shows the data of the lastest week of existing data by color, and the usage of specific time can be observed by the depth of data. You can filter the range of data you want to display by using the slider below.',
			  },
			  grid: {
			    height: '60%',
			    top: '10%'
			  },
			  xAxis: {
			  	name:'Time',
			    type: 'category',
			    data: hours,
			    splitArea: {
			      show: true
			    }
			  },
			  yAxis: {
			  	name:'Date',
			    type: 'category',
			    data: days,
			    splitArea: {
			      show: true
			    }
			  },
			  visualMap: {
			    min: Math.min.apply(null, this_year_week_data) + ' ' + unit,
			    max: Math.max.apply(null, this_year_week_data) + ' ' + unit,
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
		SK_json = {"type":"FeatureCollection","features":[{"type":"Feature","properties":{"name":"Blackett"},"geometry":{"type":"Polygon","coordinates":[[[-360.1796489953994,51.49952146247725],[-360.1796168088913,51.499341131075056],[-360.1792439818382,51.499366177145816],[-360.179203748703,51.49915245023299],[-360.17883628606796,51.49917916615191],[-360.1788818836212,51.499394562676024],[-360.17868340015406,51.4994062508304],[-360.17871022224426,51.499588251704395],[-360.1796489953994,51.49952146247725]]]}},{"type":"Feature","properties":{"name":"Huxley"},"geometry":{"type":"Polygon","coordinates":[[[-360.17951756715775,51.49913074353735],[-360.1794049143791,51.49849289601929],[-360.179024040699,51.49851794255618],[-360.17903476953506,51.498559686753744],[-360.17893821001053,51.498571375122204],[-360.1789596676826,51.49865987267189],[-360.17867535352707,51.49868491911704],[-360.1786807179451,51.49874503052918],[-360.1786056160927,51.49875504909017],[-360.1786807179451,51.49918751487335],[-360.17951756715775,51.49913074353735]]]}},{"type":"Feature","properties":{"name":"Library"},"geometry":{"type":"Polygon","coordinates":[[[-360.1784835755825,51.49792934530041],[-360.17778888344765,51.49798277855647],[-360.17790019512177,51.49851961232481],[-360.1785895228386,51.4984661796981],[-360.1784835755825,51.49792934530041]]]}},{"type":"Feature","properties":{"name":"Bone and Roderic Hill"},"geometry":{"type":"Polygon","coordinates":[[[-360.178302526474,51.499212561028514],[-360.1783722639084,51.49920588205518],[-360.17835617065424,51.49912573429843],[-360.1780316233635,51.49915245023299],[-360.1780638098717,51.49929437837284],[-360.1779565215111,51.49929938759321],[-360.1779994368553,51.49955151764157],[-360.1777848601341,51.49956821494654],[-360.17769902944565,51.4991758266629],[-360.17746835947037,51.49918751487335],[-360.17755687236786,51.49958157278609],[-360.17773389816284,51.499566545216325],[-360.1777526736259,51.49970346289118],[-360.1784983277321,51.49965504083368],[-360.17848223447794,51.49953815979321],[-360.17836958169937,51.49954650844891],[-360.178302526474,51.499212561028514]]]}},{"type":"Feature","properties":{"name":"ACE"},"geometry":{"type":"Polygon","coordinates":[[[-360.178315937519,51.499127404044806],[-360.1782810688019,51.49880848137822],[-360.17799407243723,51.49883519749876],[-360.17800211906433,51.498940392071155],[-360.177763402462,51.49896042910503],[-360.17774999141693,51.49884521603993],[-360.1774361729622,51.49886859262742],[-360.1774603128433,51.499027219154364],[-360.176859498024,51.4990723023823],[-360.1768970489502,51.499235937427585],[-360.178315937519,51.499127404044806]]]}},{"type":"Feature","properties":{"name":"William Penney"},"geometry":{"type":"Polygon","coordinates":[[[-360.1773154735565,51.499038907402905],[-360.1772779226303,51.49886859262742],[-360.1768219470977,51.49890532724068],[-360.1768487691879,51.49906896288548],[-360.1773154735565,51.499038907402905]]]}},{"type":"Feature","properties":{"name":"Electrical Engineering"},"geometry":{"type":"Polygon","coordinates":[[[-360.1765778660774,51.49922257948674],[-360.17651081085205,51.498925364289974],[-360.1762318611145,51.49894874083634],[-360.17629623413086,51.499252634848176],[-360.1765778660774,51.49922257948674]]]}},{"type":"Feature","properties":{"name":"RSM"},"geometry":{"type":"Polygon","coordinates":[[[-360.1765711605549,51.499225918972336],[-360.1762895286083,51.499249295364535],[-360.17635658383364,51.49953315059908],[-360.17519250512123,51.499626655465704],[-360.1751442253591,51.49939623241255],[-360.17456620931625,51.499444654745034],[-360.1746560633182,51.49987377454688],[-360.1766891777516,51.49971682069112],[-360.1765711605549,51.499225918972336]]]}},{"type":"Feature","properties":{"name":"Bessemer"},"geometry":{"type":"Polygon","coordinates":[[[-360.17635256052023,51.49953315059908],[-360.1762653887272,51.499122394805504],[-360.1750919222831,51.49921256102854],[-360.17512679100037,51.499341131075056],[-360.17550230026245,51.49931274551157],[-360.1755639910698,51.499599939809094],[-360.17635256052023,51.49953315059908]]]}},{"type":"Feature","properties":{"name":"Business School"},"geometry":{"type":"Polygon","coordinates":[[[-360.17514556646347,51.49939623241255],[-360.1750758290291,51.499122394805504],[-360.17449647188187,51.499160798959345],[-360.1745581626892,51.49943964554062],[-360.17514556646347,51.49939623241255]]]}},{"type":"Feature","properties":{"name":"SAF"},"geometry":{"type":"Polygon","coordinates":[[[-360.1772926747799,51.49746764596316],[-360.1772578060627,51.49729649040942],[-360.1760132610798,51.49740252343796],[-360.17611384391785,51.49786756302],[-360.1767468452453,51.49781579942327],[-360.17668113112444,51.497520244857895],[-360.1772926747799,51.49746764596316]]]}},{"type":"Feature","properties":{"name":"Chemistry 1 and 2"},"geometry":{"type":"Polygon","coordinates":[[[-360.1776909828186,51.49770976735615],[-360.1776587963104,51.49751607034466],[-360.1767522096634,51.49757284369192],[-360.17677903175354,51.49776654046214],[-360.1776909828186,51.49770976735615]]]}},{"type":"Feature","properties":{"name":"Flowers"},"geometry":{"type":"Polygon","coordinates":[[[-360.17836958169937,51.497471820480825],[-360.1783521473408,51.497350759313115],[-360.1775595545769,51.4973975140091],[-360.17757833004,51.49751690524734],[-360.17836958169937,51.497471820480825]]]}},{"type":"Feature","properties":{"name":"Sir Ernst Chain (Biochemistry)"},"geometry":{"type":"Polygon","coordinates":[[[-360.1784138381481,51.49769724386736],[-360.1783796399832,51.49749102325719],[-360.1777446269989,51.49753360329768],[-360.1777821779251,51.497740658613765],[-360.1784138381481,51.49769724386736]]]}},{"type":"Feature","properties":{"name":"Faculty"},"geometry":{"type":"Polygon","coordinates":[[[-360.17597168684006,51.49877341644624],[-360.17593547701836,51.49859141231831],[-360.1754003763199,51.49862981691957],[-360.17544865608215,51.4988251789554],[-360.17597168684006,51.49877341644624]]]}},{"type":"Feature","properties":{"name":"City and Guilds"},"geometry":{"type":"Polygon","coordinates":[[[-360.17527163028717,51.499075641878896],[-360.17512142658234,51.49824076011457],[-360.1743328571319,51.49829085345171],[-360.17444014549255,51.498791783794935],[-360.17478346824646,51.49876172812959],[-360.1748639345169,51.49913909226767],[-360.1750785112381,51.49912573429843],[-360.17506778240204,51.499078981375234],[-360.17527163028717,51.499075641878896]]]}},{"type":"Feature","properties":{"name":"Skempton"},"geometry":{"type":"Polygon","coordinates":[[[-360.17631635069847,51.49822322743358],[-360.1764705777168,51.4982098691959],[-360.17643570899963,51.49806877257141],[-360.1752166450024,51.49817396891273],[-360.1753158867359,51.4985880727862],[-360.1761205494404,51.498522116977654],[-360.17614200711256,51.49863065180184],[-360.17640486359596,51.498609779740335],[-360.17631635069847,51.49822322743358]]]}},{"type":"Feature","properties":{"name":"RCS1"},"geometry":{"type":"Polygon","coordinates":[[[-360.1760360598564,51.49776487066592],[-360.17595559358597,51.4973975140091],[-360.17551839351654,51.49743257999962],[-360.17557203769684,51.49771310695258],[-360.175059735775,51.49775151229392],[-360.1750758290291,51.497845020815745],[-360.1760360598564,51.49776487066592]]]}},{"type":"Feature","properties":{"name":"Dyson SoE"},"geometry":{"type":"Polygon","coordinates":[[[-360.174885392189,51.49793852914574],[-360.17484247684484,51.497666352580296],[-360.17422288656235,51.497706427759454],[-360.1742845773697,51.49799697175458],[-360.17481297254557,51.497968585353945],[-360.1748076081276,51.4979401989356],[-360.174885392189,51.49793852914574]]]}},{"type":"Feature","properties":{"name":"Ethos Sports Centre"},"geometry":{"type":"Polygon","coordinates":[[[-360.1738715171814,51.50014760763937],[-360.1738232374191,51.499877113984745],[-360.1730453968048,51.49994056325773],[-360.17310708761215,51.50023276271691],[-360.1737293601036,51.50018267151411],[-360.1737293601036,51.50016096530911],[-360.1738715171814,51.50014760763937]]]}},{"type":"Feature","properties":{"name":"Eastside Hall"},"geometry":{"type":"Polygon","coordinates":[[[-360.17226219177246,51.49991384778514],[-360.1721267402172,51.49879136635528],[-360.1718793064356,51.49880347210388],[-360.17202347517014,51.49992052665476],[-360.17226219177246,51.49991384778514]]]}},{"type":"Feature","properties":{"name":"Weeks Hall"},"geometry":{"type":"Polygon","coordinates":[[[-360.1721347868442,51.500178497244704],[-360.1721213757992,51.50012214457059],[-360.1720395684242,51.50012798855484],[-360.17202749848366,51.50007914952051],[-360.1718135923147,51.500096264059856],[-360.17183773219585,51.50022149220105],[-360.17206303775305,51.50020145572159],[-360.17205968499184,51.50018434122173],[-360.1721347868442,51.500178497244704]]]}},{"type":"Feature","properties":{"name":"8-15 Princes Gardens (inc Garden Hall)"},"geometry":{"type":"Polygon","coordinates":[[[-360.17210930585856,51.500084158654644],[-360.1721575856209,51.500276175048135],[-360.1730990409851,51.500199368587815],[-360.1730588078499,51.499997333585014],[-360.1727986335754,51.50002070958155],[-360.1728415489197,51.500216065655415],[-360.17235338687897,51.50025279918259],[-360.1723158359527,51.50006913125057],[-360.17210930585856,51.500084158654644]]]}},{"type":"Feature","properties":{"name":"Southside Hall"},"geometry":{"type":"Polygon","coordinates":[[[-360.17313927412033,51.49864150527004],[-360.1730963587761,51.498451151760555],[-360.1717418432236,51.498571375122204],[-360.1717793941498,51.498750039809956],[-360.17313927412033,51.49864150527004]]]}},{"type":"Feature","properties":{"name":"Sherfield"},"geometry":{"type":"Polygon","coordinates":[[[-360.17861634492874,51.49871163530999],[-360.1785761117935,51.49849957509713],[-360.17641693353653,51.49866070755362],[-360.1764625310898,51.49887527165021],[-360.17861634492874,51.49871163530999]]]}},{"type":"Feature","properties":{"name":"Beit Quad"},"geometry":{"type":"Polygon","coordinates":[[[-360.17853051424026,51.499815334344625],[-360.1775515079498,51.49988713229689],[-360.17766416072834,51.5005032542607],[-360.17840176820755,51.50045483305296],[-360.17838299274445,51.50036466928757],[-360.17787605524063,51.500395558745815],[-360.17780900001526,51.499991489584],[-360.17831057310093,51.49995559070417],[-360.17840176820755,51.50045316335521],[-360.1786485314369,51.5004414754693],[-360.17853051424026,51.499815334344625]]]}},{"type":"Feature","properties":{"name":"Energy Centre"},"geometry":{"type":"Polygon","coordinates":[[[-360.17653226852417,51.49902054015383],[-360.17651081085205,51.498927034043675],[-360.1762318611145,51.4989504105892],[-360.17625600099564,51.49904725615004],[-360.17653226852417,51.49902054015383]]]}},{"type":"Feature","properties":{"name":"Data Centre"},"geometry":{"type":"Polygon","coordinates":[[[-360.17703384160995,51.49894373157742],[-360.17702847719187,51.498888629692864],[-360.1768219470977,51.49890699699512],[-360.17683267593384,51.49895875935255],[-360.17703384160995,51.49894373157742]]]}}]};
		function drawSKMap_year(all_sites_obj_year, last_year, unit){

			objs = [];
			for (var i in all_sites_obj_year){
				var obj={
					name: i,
					value:all_sites_obj_year[i]
				};
				objs.push(obj);
			}

			var map_year_chart = echarts.init(document.getElementById('map_year'));
		    echarts.registerMap('SK', SK_json) //注册

		    var option = {
			    title: {
			      // text: last_year + ' South Kensington Campus ' + meter_type + ' Usage Map',
			      text: last_year + ' Annual ' + meter_type + ' Consumption Map ('+ unit + ')',

			      // subtext: 'Unit: ' + unit,
			      left: 'center'
			    },
			    tooltip: {
			      trigger: 'item',
			      showDelay: 0,
			      transitionDuration: 0.2
			    },
			    visualMap: {
			      left: 'right',
			      min: Math.min.apply(null, Object.values(all_sites_obj_year)) + ' ' + unit,
			      max: Math.max.apply(null, Object.values(all_sites_obj_year)) + ' ' + unit,
			      inRange: {
			        color: [
			          '#313695',
			          '#4575b4',
			          '#74add1',
			          '#abd9e9',
			          '#e0f3f8',
			          '#ffffbf',
			          '#fee090',
			          '#fdae61',
			          '#f46d43',
			          '#d73027',
			          '#a50026'
			        ]
			      },
			      text: ['Max', 'Min'],
			      calculable: true
			    },
			    toolbox: {
			      show: true,
			      //orient: 'vertical',
			      left: 'left',
			      top: 'top',
			      feature: {
			        dataView: { readOnly: false },
			        restore: {},
			        saveAsImage: {}
			      }
			    },
			    series: [
			      {
			        name: meter_type + ' Usage ' + '(' + unit + ')',
			        type: 'map',
			        roam: true,
			        map: 'SK',
			        emphasis: {
			          label: {
			            show: true
			          }
			        },
			        data: objs
			      }
			    ]
			  };
			map_year_chart.setOption(option, true);
		}

		// drawSKMap();

		</script>



        <script type="text/javascript">
        // Meter channels in a building
        var location_file_name;
        // var meter_channels = [];


        if (meter_type == "electricity"){
        	location_file_name = "data/location/elec_location_20220801.csv";
        }else if (meter_type == "gas"){
        	location_file_name = "data/location/gas_location_20220815.csv";
        }


        var all_sites_obj = {}; //Obj
	    var all_channels_obj = {}; //Obj

	    var all_sites_obj_week = {}; //Obj
	    var all_channels_obj_week = {}; //Obj

	    var all_sites_obj_year = {}; //Obj
	    var all_channels_obj_year = {}; //Obj

	   	var all_sites_obj_last_year = {}; //Obj
	    var all_channels_obj_last_year = {}; //Obj

		// The year before last
	    var all_sites_obj_last2_year = {}; //Obj
	    var all_channels_obj_last2_year = {}; //Obj


        var all_sites = new Set();
        var all_channels = new Set();

        var sites_channels = {};

        // threshold for special meter error
        var special_threshold = 900;



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

					if (sites_channels[element["SIT:<name>"]] == ""){
						sites_channels[element["SIT:<name>"]] = element["CHN:<channelID>"];
					}else{
						sites_channels[element["SIT:<name>"]] = sites_channels[element["SIT:<name>"]] + "," + element["CHN:<channelID>"];
					}
					
				}
			    for (var x of all_sites){
			    	all_sites_obj[x] = 0;
			    	all_sites_obj_week[x] = 0;
			    	all_sites_obj_year[x] = 0;
			    	all_sites_obj_last_year[x] = 0;
			    	all_sites_obj_last2_year[x] = 0;
			    }
			    for (var x of all_channels){
			    	all_channels_obj[x] = 0;
			    	all_channels_obj_week[x] = 0;
			    	all_channels_obj_year[x] = 0;
			    	all_channels_obj_last_year[x] = 0;
			    	all_channels_obj_last2_year[x] = 0;

			    }
			    console.log(all_sites_obj);
			    console.log(all_channels_obj);
			    console.log(sites_channels);
			  }
			});
	    }


	    var this_site_channel_obj = {};
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

				if (meter_location != "campus" && meter_location != "null"){
			    	for (var x = 0; x <temp_meter_channels.length; x++){
					    this_site_channel_obj[temp_meter_channels[x]] = 0;
					}
					console.log(this_site_channel_obj);
	    		}
			  }
			});
			
			return temp_meter_channels;
	    }


	    var meter_channels = getChannelOfLocation(meter_location);


		</script>


		<script type="text/javascript">
		var elec_data = new Array();

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
	 	var start_of_last_last2_year;
	 	var start_of_last_last_year;
	 	var start_of_last_year;

	 	var last_year_data = [];
	 	var last_last_year_data = [];
	 	var last_last2_year_data = [];

	 	var last_year_day_counter = 0;
	 	var last_year_day_sum = 0;

	 	var last_last_year_day_counter = 0;
	 	var last_last_year_day_sum = 0;

	 	// The year before last
	 	var last_last2_year_day_counter = 0;
	 	var last_last2_year_day_sum = 0;

	 	// the variable used for month bar chart
	 	var last_year_month_data = [];
	 	var last_last_year_month_data = [];
	 	var last_last2_year_month_data = [];

	 	var last_year_month_sum = 0;
	 	var last_last_year_month_sum = 0;
	 	var last_last2_year_month_sum = 0;

	 	var current_month1 = 0;
	 	var month_last_loop1 = 0;

	 	var current_month2 = 0;
	 	var month_last_loop2 = 0;

	 	// The year before last
	 	var current_month3 = 0;
	 	var month_last_loop3 = 0;


		// Data error handle
	 	// The number of the latest one
	 	var last_data = 100000;
	 	var threshold = 100000;




	 	// var all_campus_data;

	 	var filename;
	 	var unit;
	 	if (meter_type == "electricity"){
	 		filename = "data/all_elec_data.csv";
	 		unit = "kWh";
	 		last_data = 100000;
	 		threshold = 100000;
	 	}
	 	else if(meter_type == "gas"){
	 		filename = "data/all_gas_data.csv";
	 		unit = "kWh";
	 		last_data = 10000000;
	 		threshold = 10000000;
	 		if (meter_location == "campus"){
	 			last_data = 100000000;
	 			threshold = 100000000;
	 		}
	 	}


	 	sum_counter = 0;
	 	sum_counter_last_year = 0;
	 	sum_counter_last2_year = 0;

	 	$("#buildingChart").hide();
	 	$("#buildingChartYear").hide();
	 	$("#channelPieChartWeek").hide();
	 	$("#map_year").hide();
	 	// $("#btn_div").hide();
	 	document.getElementById("last_year_btn").style.display = "none";
	 	document.getElementById("last_last_year_btn").style.display = "none";
	 	document.getElementById("last_last2_year_btn").style.display = "none";
	 	if (meter_location == "campus"){
			$("#buildingChart").show();
			$("#buildingChartYear").show();
			if (meter_type == "electricity"){
				$("#map_year").show();

			}
		}else if (meter_location != "campus" && meter_location != "null"){
			$("#channelPieChartWeek").show();
		}


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
			// 前前年
			var last_last2_year = new Date(last_datetime).getFullYear() - 3;

			start_of_last_year = last_year + "/1/1";
			start_of_last_last_year = last_last_year + "/1/1";
			start_of_last_last2_year = last_last2_year + "/1/1";

			start_of_last_year = new Date(start_of_last_year);
			start_of_last_last_year = new Date(start_of_last_last_year);
			start_of_last_last2_year = new Date(start_of_last_last2_year);

			// var days_last_year = getDaysOfYear(last_year);
			// var days_last_last_year = getDaysOfYear(last_last_year);
			// var days_last_last2_year = getDaysOfYear(last_last2_year);



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
				// console.log(one_data['Value']);
				var float_data = parseFloat(one_data['Value']);

				float_data = float_data.toFixed(0);
				float_data = parseFloat(float_data);
				// if (meter_type == 'electricity'){
				// Handling negative value
				// if (float_data < 0){
				// 	last_data = 0;
				// 	float_data = last_data;
				// }
				if (float_data > Math.abs(threshold * last_data) || float_data > threshold || float_data < -threshold){
					float_data = last_data;
				}
				if (float_data != 0){
					last_data = float_data;
				}
				// }
				// console.log(last_data);
				// console.log(float_data);


				// Calculate data of latest week for this year and previous year
				var current_datetime_str = '20' + elec_data[index]['Date'] + " " + elec_data[index]['Time'];
				var current_datetime = new Date(current_datetime_str);
				if (current_datetime >= previous_year_week_datetime && previous_year_week_data.length <= 48 * 7){
					previous_year_week_data.push(float_data);
					// Cumulative calculation of consumption per channel for the week last year
					if (meter_location == "campus"){
						for (var x in elem){
							if (x != 'Date' && x != 'Time'){
								if (!isNaN(elem[x])){
									var float_num = parseFloat(elem[x]).toFixed(0);
									float_num = parseFloat(float_num);
									if (float_num < threshold && float_num > -threshold){
										all_channels_obj_week[x] = all_channels_obj_week[x] + float_num;
									}
								}
							}
						}
					}
				}
				if (current_datetime >= this_year_week_datetime && this_year_week_data.length <= 48 * 7){
					this_year_week_data.push(float_data);
					// Cumulative calculation of consumption per channel for the most recent week
					
					for (var x in elem){
						if (meter_location == "campus"){
							if (x != 'Date' && x != 'Time'){
								if (!isNaN(elem[x])){
									var float_num = parseFloat(elem[x]).toFixed(0);
									float_num = parseFloat(float_num);
									if (float_num < threshold && float_num > -threshold){
										all_channels_obj[x] = all_channels_obj[x] + float_num;
									}
								}
							}
						}
						else if (meter_location != "campus" && meter_location != "null"){
							if (x != 'Date' && x != 'Time'){
								if (!isNaN(elem[x]) && meter_channels.indexOf(x) != -1){
									var float_num = parseFloat(elem[x]).toFixed(0);
									float_num = parseFloat(float_num);
									if (float_num < threshold && float_num > -threshold){
										this_site_channel_obj[x] = this_site_channel_obj[x] + float_num;
									}
								}
							}
						}
					}
				}

				// Store each day data of last year and last last year
				// last year
				if (current_datetime >= start_of_last_year && last_year_data.length < 365){
					last_year_day_sum = last_year_day_sum + float_data;
					last_year_day_counter = last_year_day_counter + 1;

					if (last_year_day_counter == 48){
						last_year_data.push(last_year_day_sum);
						last_year_day_sum = 0;
						last_year_day_counter = 0;
					}
				}
				if (current_datetime >= start_of_last_year && sum_counter < 365 * 48 && meter_location == "campus"){
					// Cumulative calculation of per-channel consumption for the last year
					for (var x in elem){
						if (x != 'Date' && x != 'Time'){
							if (!isNaN(elem[x]) && parseFloat(elem[x]) > 0){
								var float_num = parseFloat(elem[x]).toFixed(0);
								float_num = parseFloat(float_num);
								// Special error handling
								if (x == 'sk-she-101-sip1.ad.ic.ac.uk_Device_5' || x == 'sk-nor-101-sip1.ad.ic.ac.uk_Device_12'){
									if (float_num > special_threshold){
										continue;
									}
								}
								if (float_num < threshold && float_num > -threshold){
									all_channels_obj_year[x] = all_channels_obj_year[x] + float_num;
								}
							}
						}
					}
					sum_counter = sum_counter + 1;
				}
				// Cumulative calculation of per-channel consumption for the year before last
				if (current_datetime >= start_of_last_last_year && last_last_year_data.length < 365){
					last_last_year_day_sum = last_last_year_day_sum + float_data;
					last_last_year_day_counter = last_last_year_day_counter + 1;

					if (last_last_year_day_counter == 48){
						last_last_year_data.push(last_last_year_day_sum);
						last_last_year_day_sum = 0;
						last_last_year_day_counter = 0;
					}
				}
				if (current_datetime >= start_of_last_last_year && sum_counter_last_year < 365 * 48 && meter_location == "campus"){
					// Cumulative calculation of per-channel consumption for the previous year
					for (var x in elem){
						if (x != 'Date' && x != 'Time'){
							if (!isNaN(elem[x]) && parseFloat(elem[x]) > 0){
								var float_num = parseFloat(elem[x]).toFixed(0);
								float_num = parseFloat(float_num);
								// Special error handling
								if (x == 'sk-she-101-sip1.ad.ic.ac.uk_Device_5' || x == 'sk-nor-101-sip1.ad.ic.ac.uk_Device_12'){
									if (float_num > special_threshold){
										continue;
									}
								}
								if (float_num < threshold && float_num > -threshold){
									all_channels_obj_last_year[x] = all_channels_obj_last_year[x] + float_num;
								}
							}
						}
					}
					sum_counter_last_year = sum_counter_last_year + 1;
				}
				// Year before last 2 years
				if (current_datetime >= start_of_last_last2_year && last_last2_year_data.length < 365){
					last_last2_year_day_sum = last_last2_year_day_sum + float_data;
					last_last2_year_day_counter = last_last2_year_day_counter + 1;

					if (last_last2_year_day_counter == 48){
						last_last2_year_data.push(last_last2_year_day_sum);
						last_last2_year_day_sum = 0;
						last_last2_year_day_counter = 0;
					}
				}
				if (current_datetime >= start_of_last_last2_year && sum_counter_last2_year < 365 * 48 && meter_location == "campus"){
					for (var x in elem){
						if (x != 'Date' && x != 'Time'){
							if (!isNaN(elem[x]) && parseFloat(elem[x]) > 0){
								var float_num = parseFloat(elem[x]).toFixed(0);
								float_num = parseFloat(float_num);
								// Special error handling
								if (x == 'sk-she-101-sip1.ad.ic.ac.uk_Device_5' || x == 'sk-nor-101-sip1.ad.ic.ac.uk_Device_12'){
									if (float_num > special_threshold){
										continue;
									}
								}
								if (float_num < threshold && float_num > -threshold){
									all_channels_obj_last2_year[x] = all_channels_obj_last2_year[x] + float_num;
								}
							}
						}
					}
					sum_counter_last2_year = sum_counter_last2_year + 1;
				}


				// Month bar chart
				current_month1 = current_datetime.getMonth();
				current_month2 = current_datetime.getMonth();
				current_month3 = current_datetime.getMonth();

				if (current_datetime >= start_of_last_year && last_year_month_data.length < 12){
					if (current_month1 == month_last_loop1){
						last_year_month_sum = last_year_month_sum + float_data;
					}
					else {
						last_year_month_data.push(last_year_month_sum);
						last_year_month_sum = 0;
					}
					month_last_loop1 = current_month1;
				}
				if (current_datetime >= start_of_last_last_year && last_last_year_month_data.length < 12){
					if (current_month2 == month_last_loop2){
						last_last_year_month_sum = last_last_year_month_sum + float_data;
					}
					else {
						last_last_year_month_data.push(last_last_year_month_sum);
						last_last_year_month_sum = 0;
					}
					month_last_loop2 = current_month2;
				}
				// 前前年
				if (current_datetime >= start_of_last_last2_year && last_last2_year_month_data.length < 12){
					if (current_month3 == month_last_loop3){
						last_last2_year_month_sum = last_last2_year_month_sum + float_data;
					}
					else {
						last_last2_year_month_data.push(last_last2_year_month_sum);
						last_last2_year_month_sum = 0;
					}
					month_last_loop3 = current_month3;
				}
				

				all_data.push(one_data);
			}




			// -----------------------------------------
			var start_arr = heat_map_days[heat_map_days.length-1].split(" ");
			var end_arr = heat_map_days[0].split(" ");
			var start_date = start_arr[0];
			var end_date = end_arr[0];

			var period_str = start_date + " - " + end_date;

			drawWeekLineChart(this_year_week_datetime, this_year_week_data, previous_year_week_data, unit);

			drawYearLineChart(last_year, last_last_year, last_last2_year, last_year_data, last_last_year_data, last_last2_year_data, unit);

			drawMonthBarChart(last_year, last_last_year, last_last2_year, last_year_month_data, last_last_year_month_data, last_last2_year_month_data, unit);

			// Draw the heat map
			var datetime1 = this_year_week_datetime;
			for (var i = 0; i < 7; i++) {
				var month = datetime1.getMonth() + 1;
				var day = datetime1.getDate() + 1;
				var datetime_str = day + '/' + month + '/' + datetime1.getFullYear();
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

			drawHeapMap(heat_map_data, heat_map_days, heat_map_times, unit, period_str);

			// var channels = [];
			if (meter_location == "campus"){
				console.log(all_channels_obj);
				console.log(all_channels_obj_year);
				for (var site in all_sites_obj){
					// console.log(site);
					var channels = sites_channels[site].split(",");
					// console.log(channels);

					// Iterate through all channels of each site
					for(var k = 1; k < channels.length; k++){
						// console.log(channels[k]);
						if (!isNaN(all_channels_obj[channels[k]])){
							all_sites_obj[site] = all_sites_obj[site] + all_channels_obj[channels[k]];
						}
						if (!isNaN(all_channels_obj_week[channels[k]])){
							all_sites_obj_week[site] = all_sites_obj_week[site] + all_channels_obj_week[channels[k]];
						}
						if (!isNaN(all_channels_obj_year[channels[k]])){
							all_sites_obj_year[site] = all_sites_obj_year[site] + all_channels_obj_year[channels[k]];
						}
						if (!isNaN(all_channels_obj_last_year[channels[k]])){
							all_sites_obj_last_year[site] = all_sites_obj_last_year[site] + all_channels_obj_last_year[channels[k]];
						}
						if (!isNaN(all_channels_obj_last2_year[channels[k]])){
							all_sites_obj_last2_year[site] = all_sites_obj_last2_year[site] + all_channels_obj_last2_year[channels[k]];
						}
					}
					all_sites_obj[site] = all_sites_obj[site] - handleBuildingEquationForCampus_numberNeedMinus(site, all_channels_obj);
					all_sites_obj_week[site] = all_sites_obj_week[site] - handleBuildingEquationForCampus_numberNeedMinus(site, all_channels_obj_week);
					all_sites_obj_year[site] = all_sites_obj_year[site] - handleBuildingEquationForCampus_numberNeedMinus(site, all_channels_obj_year);
					all_sites_obj_last_year[site] = all_sites_obj_last_year[site] - handleBuildingEquationForCampus_numberNeedMinus(site, all_channels_obj_last_year);
					all_sites_obj_last2_year[site] = all_sites_obj_last2_year[site] - handleBuildingEquationForCampus_numberNeedMinus(site, all_channels_obj_last2_year);
				}

				console.log(all_sites_obj);
				console.log(all_sites_obj_year);
				drawBuildingChart(all_sites_obj, all_sites_obj_week, unit, period_str);


				drawBuildingChartYear(all_sites_obj_year, all_sites_obj_last_year, all_sites_obj_last2_year, last_year, last_last_year, last_last2_year, unit);

				if (meter_type == "electricity"){
					document.getElementById("last_year_btn").innerHTML = last_year;
					document.getElementById("last_last_year_btn").innerHTML = last_last_year;
					document.getElementById("last_last2_year_btn").innerHTML = last_last2_year;
					
					drawSKMap_year(all_sites_obj_year, last_year, unit);
					// $("btn_div").show();
					document.getElementById("last_year_btn").style.display = "block";
	 				document.getElementById("last_last_year_btn").style.display = "block";
	 				document.getElementById("last_last2_year_btn").style.display = "block";
				}

			}else if (meter_location != "campus" && meter_location != "null"){
				console.log(this_site_channel_obj);
				drawChannelPieChartWeek(this_site_channel_obj, unit);
			}



			document.getElementById("table_seven_date").innerHTML = period_str;
			calculateCO2(this_year_week_datetime.getFullYear(), last_year, last_last_year, last_last2_year, sumArr(previous_year_week_data), sumArr(this_year_week_data), sumArr(last_last2_year_data),sumArr(last_last_year_data), sumArr(last_year_data));



		  },
		});


		// console.log(elec_data);


		</script>

	</body>
</html>
