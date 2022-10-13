// Name: Hongcheng Xie 	GitHub username: acse-hx721
// Get sum of array
function sumArr(arr) {
	var s = 0;
    for (var i = 0;i<arr.length;i++) {
    	s += arr[i];
  	}
  	return s;
}

// Get the CO2e conversion factor of the energy
function getCO2Factor(year){
	var factor = 0.1;
	if (meter_type == "electricity"){
 		switch(year){
		    case 2022: factor = 0.19338;
		        break;
		    case 2021: factor = 0.21233;
		        break;
		    case 2020: factor = 0.23314;
		        break;
		    case 2019: factor = 0.2556;
		        break;
		    case 2018: factor = 0.28307;
		        break;
		    case 2017: factor = 0.35156;
		        break;
		    case 2016: factor = 0.41205;
		        break;
		    case 2015: factor = 0.46219;
		        break;
		    case 2014: factor = 0.49426;
		        break;
		    case 2013: factor = 0.44548;
		        break;
		    case 2012: factor = 0.46002;
		        break;
		    case 2011: factor = 0.45205;
		        break;
		    case 2010: factor = 0.48531;
		        break;
		    default:
		        factor = 0.19338;
		}
 	}
 	else if(meter_type == "gas"){
 		switch(year){
		    case 2022: factor = 0.18;
		        break;
		    case 2021: factor = 0.18316;
		        break;
		    case 2020: factor = 0.18387;
		        break;
		    case 2019: factor = 0.18385;
		        break;
		    case 2018: factor = 0.18396;
		        break;
		    case 2017: factor = 0.184163989077374;
		        break;
		    case 2016: factor = 0.183996818181275;
		        break;
		    default:
		        factor = 0.18;
		}
 	}
 	return factor;
}


// Get the Date type data
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

// Calculate how many days in that year
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

var mins_channels = ["sk-rcs-101-sip1.ad.ic.ac.uk_Device_3", "sk-bio-101-sip2.ad.ic.ac.uk_Device_18", "sk-bes-102-sip1.ad.ic.ac.uk_Device_46", "sk-bes-102-sip1.ad.ic.ac.uk_Device_47", "sk-ace-102-sip2.ad.ic.ac.uk_Device_16", "sk-ace-102-sip3.ad.ic.ac.uk_Device_14", "sk-ace-102-sip3.ad.ic.ac.uk_Device_15", "sk-ace-102-sip3.ad.ic.ac.uk_Device_18" , "sk-hux-101-sip1.ad.ic.ac.uk_Device_3", "sk-hux-101-sip2.ad.ic.ac.uk_Device_4","sk-hux-101-sip2.ad.ic.ac.uk_Device_3","sk-hux-101-sip2.ad.ic.ac.uk_Device_2", "sk-che-101-sip2.ad.ic.ac.uk_Device_2", "sk-she-101-sip1.ad.ic.ac.uk_Device_3", "sk-bio-101-sip1.ad.ic.ac.uk_Device_17", "sk-she-101-sip1.ad.ic.ac.uk_Device_5", "sk-bio-101-sip1.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_17", "sk-bio-101-sip2.ad.ic.ac.uk_Device_19", "sk-bio-101-sip1.ad.ic.ac.uk_Device_18", "sk-est-101-sip1.ad.ic.ac.uk_Device_1"];

var mins_channels_sir_ernst = ["sk-bio-101-sip2.ad.ic.ac.uk_Device_18", "sk-bio-101-sip1.ad.ic.ac.uk_Device_17", "sk-bio-101-sip1.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_17", "sk-bio-101-sip2.ad.ic.ac.uk_Device_19", "sk-bio-101-sip1.ad.ic.ac.uk_Device_18"];

// Handle the calculation equations of electricity for some building
function handleBuildingEquation(meter_location, elem, num){
	var result = num;

	if (meter_location == "campus"){
		for (var index=0; index < mins_channels.length; index++){
			result = result - elem[mins_channels[index]];
		}
	} else if (meter_location == "Bessemer"){
		result = result - elem["sk-bes-102-sip1.ad.ic.ac.uk_Device_46"] - elem["sk-bes-102-sip1.ad.ic.ac.uk_Device_47"];
	} else if (meter_location == "ACE"){
		result = result - elem["sk-ace-102-sip2.ad.ic.ac.uk_Device_16"] - elem["sk-ace-102-sip3.ad.ic.ac.uk_Device_14"] - elem["sk-ace-102-sip3.ad.ic.ac.uk_Device_15"] - elem["sk-ace-102-sip3.ad.ic.ac.uk_Device_18"];
	} else if (meter_location == "Huxley"){
		result = result - elem["sk-hux-101-sip1.ad.ic.ac.uk_Device_3"] - elem["sk-hux-101-sip2.ad.ic.ac.uk_Device_4"] - elem["sk-hux-101-sip2.ad.ic.ac.uk_Device_3"] - elem["sk-hux-101-sip2.ad.ic.ac.uk_Device_2"];
	} else if (meter_location == "Chemistry 1 & 2"){
		result = result - elem["sk-che-101-sip2.ad.ic.ac.uk_Device_2"];
	} else if (meter_location == "Sherfield"){
		result = result - elem["sk-she-101-sip1.ad.ic.ac.uk_Device_3"] - elem['sk-she-101-sip1.ad.ic.ac.uk_Device_4'];
	} else if (meter_location == "Sir Ernst Chain (Biochemistry)"){
		for (var index=0; index < mins_channels_sir_ernst.length; index++){
			result = result - elem[mins_channels_sir_ernst[index]];
		}
	// } else if (meter_location == "Southside Hall"){
	// 	result = result - elem["sk-est-101-sip1.ad.ic.ac.uk_Device_1"];
	} else if (meter_location == "RCS1"){
		result = result - elem["sk-rcs-101-sip1.ad.ic.ac.uk_Device_3"];
	} else if (meter_location == "City and Guilds"){
		result = result - elem["sk-mec-102-sip2.ad.ic.ac.uk_Device_3"] - elem["sk-mec-102-sip2.ad.ic.ac.uk_Device_4"] - elem["sk-mec-102-sip2.ad.ic.ac.uk_Device_5"];
	}

	// RSM "sk-bes-102-sip1.ad.ic.ac.uk_Device_46", "sk-bes-102-sip1.ad.ic.ac.uk_Device_47", 
	// Bessemer

	// Beit Quad "sk-ace-102-sip2.ad.ic.ac.uk_Device_16", "sk-ace-102-sip3.ad.ic.ac.uk_Device_14", 
	// ACE


	// Bone and Roderic Hill "sk-ace-102-sip3.ad.ic.ac.uk_Device_15", "sk-ace-102-sip3.ad.ic.ac.uk_Device_18" 
	// ACE


	// Blackett "sk-hux-101-sip1.ad.ic.ac.uk_Device_3", "sk-hux-101-sip2.ad.ic.ac.uk_Device_4","sk-hux-101-sip2.ad.ic.ac.uk_Device_3","sk-hux-101-sip2.ad.ic.ac.uk_Device_2"
	// Huxley


	// RCS1 "sk-che-101-sip2.ad.ic.ac.uk_Device_2"
	// Chemistry 1 & 2

	// Library "sk-she-101-sip1.ad.ic.ac.uk_Device_3", "sk-bio-101-sip1.ad.ic.ac.uk_Device_17"
	// 1. Sherfield
	// 2. Sir Ernst Chain (Biochemistry)


	// William Penney "sk-she-101-sip1.ad.ic.ac.uk_Device_5"
	// Sherfield

	// Chemistry 1 & 2 "sk-bio-101-sip1.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_16", "sk-bio-101-sip2.ad.ic.ac.uk_Device_17", "sk-bio-101-sip2.ad.ic.ac.uk_Device_19", "sk-bio-101-sip1.ad.ic.ac.uk_Device_18", 
	// Sir Ernst Chain (Biochemistry)
	


	// Eastside Hall "sk-est-101-sip1.ad.ic.ac.uk_Device_1"
	// Southside Hall

	return result;
}


// Calculate the sum of this location
function sumOfLocation(elem, channels){
	var sum = 0;
	for (var e in elem){

		let index = channels.indexOf(e);
		if (index != -1){
   //  		if (e == 'sk-she-101-sip1.ad.ic.ac.uk_Device_5' || e == 'sk-nor-101-sip1.ad.ic.ac.uk_Device_12'){
			// 	if (parseFloat(elem[e]) > special_threshold){
			// 		continue;
			// 	}
			// }
			sum = sum + parseFloat(elem[e]);
		}
	}
	var result = 0;
	if (meter_type == "electricity"){
		result = handleBuildingEquation(meter_location, elem, sum);
	}else{
		result = sum;
	}
	return result;
}


// Handle the calculation equations of electricity for some building, return the positive number
function handleBuildingEquationForCampus_numberNeedMinus(site, all_channels){
	var result = 0;
	if (meter_type == "electricity"){
    	if (site == "Bessemer"){
    		result = all_channels["sk-bes-102-sip1.ad.ic.ac.uk_Device_46"] + all_channels["sk-bes-102-sip1.ad.ic.ac.uk_Device_47"];
    	} else if (site == "ACE"){
    		result = all_channels["sk-ace-102-sip2.ad.ic.ac.uk_Device_16"] + all_channels["sk-ace-102-sip3.ad.ic.ac.uk_Device_14"] + all_channels["sk-ace-102-sip3.ad.ic.ac.uk_Device_15"] 
    		+ all_channels["sk-ace-102-sip3.ad.ic.ac.uk_Device_18"];
    	} else if (site == "Huxley"){
    		result = all_channels["sk-hux-101-sip1.ad.ic.ac.uk_Device_3"] + all_channels["sk-hux-101-sip2.ad.ic.ac.uk_Device_4"] + all_channels["sk-hux-101-sip2.ad.ic.ac.uk_Device_3"] + all_channels["sk-hux-101-sip2.ad.ic.ac.uk_Device_2"];
    	} else if (site == "Chemistry 1 & 2"){
    		result = all_channels["sk-che-101-sip2.ad.ic.ac.uk_Device_2"];
    	} else if (site == "Sherfield"){
    		result = all_channels["sk-she-101-sip1.ad.ic.ac.uk_Device_3"] + all_channels['sk-she-101-sip1.ad.ic.ac.uk_Device_4'];;
    	} else if (site == "Sir Ernst Chain (Biochemistry)"){
    		for (var index=0; index < mins_channels_sir_ernst.length; index++){
    			result = result + all_channels[mins_channels_sir_ernst[index]];
    		}
    	// } else if (site == "Southside Hall"){
    	// 	result = all_channels["sk-est-101-sip1.ad.ic.ac.uk_Device_1"];
    	} else if (site == "RCS1"){
    		result = all_channels["sk-rcs-101-sip1.ad.ic.ac.uk_Device_3"];
    	} else if (site == "City and Guilds"){
    		result = all_channels["sk-mec-102-sip2.ad.ic.ac.uk_Device_3"] + all_channels["sk-mec-102-sip2.ad.ic.ac.uk_Device_4"] + all_channels["sk-mec-102-sip2.ad.ic.ac.uk_Device_5"];
    	}
	}
	return result;
}