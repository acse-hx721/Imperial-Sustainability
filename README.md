# Data science tools to support Imperial College sustainability goals

## Introduction
This web-based data science tool can be used to visualise energy consumption data for Imperial College's South Kensington campus. The tool helps the College's sustainability research and estates division to better understand the College's energy consumption patterns and greenhouse gas emissions, and supports the College in achieving its sustainability goals.

Features of this data science tool：
* Process CSV data files
* Visualise the College's energy consumption data using a wider range of time intervals and more detailed zoning
* Upload data files to the server to update
* Download data files

## Launch
This data science tool can be accessed directly via the following URL https://imperialsustainability.azurewebsites.net/

## Technologies
### Programming Languages
This project uses several programming languages for web development, data visualisation and communication with the server.
* HTML
* CSS
* JavaScript
* PHP

### Server
The project rents a Microsoft Azure server to allow this tool to be accessed via the URL.

The code for the tool will be automatically deployed to this server once it has been uploaded to the repository:

Imperial-Sustainability: <https://github.com/acse-hx721/Imperial-Sustainability>


### Webpage Template Source
This web-based tool was developed on the basis of a free webpage template.
Worthy - Free Bootstrap Template：<https://github.com/Html-Coder/Worthy>

The template relies on some libraries to implement its beautiful display :
* Bootstrap
* jQuery
* Animate CSS

### Data Visualization Framework
The visualisation in this project was achieved using the visualisation framework ECharts.

ECharts: <https://github.com/apache/echarts>

This project uses Javascript to introduce the ECharts library, and uses it in the visualization page to generate a variety of charts, such as bar chart, line chart, map, heat maps, etc.

## File Directory
The following is the directory of this project's files:
```
│  .user.ini
│  default
│  display_data.php
│  download_data.php
│  index.php
│  my_functions.js
│  upload_file.php
│  visualization.php
│  web.config
├─bootstrap
├─css
├─data
│  └─location
│          elec_location_20220801.csv
│          gas_location_20220815.csv
│
├─fonts
├─images
│      banner.jpg
│      ic_logo.png
│
├─js
└─plugins

```


## Example screenshots
### Website Home Page
![image](https://github.com/acse-hx721/Imperial-Sustainability/blob/main/images/index_page.png)

### Whole Visualisation Page of the South Kensington Campus
![image](https://github.com/acse-hx721/Imperial-Sustainability/blob/main/images/visualization_campus_whole.png)

