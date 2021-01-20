<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
    <script type="text/javascript">
    function setChartImage() {
	var query = { cht: "qr", choe: "UTF-8", 
		      chs: $("#size").val(), chld: $(":radio[name='ec']:checked").val(),
		      chl: $("#text").val() };
	var url = "http://chart.apis.google.com/chart?" + $.param(query);
	
	$("#chart").attr('src', url);
	$("#url").val(url);
	$("#link").attr('href', url);
    }
    </script>
    <style type="text/css">
      img#chart { margin: 0; background: #fff; border: 1px solid black; }
    </style>
   
  </head>
  <body style="color: black;">
    <div data-role="page">
      <div data-role="header">
	
      </div>
      <div data-role="content">
	<ul data-role="listview">
	  <li>
	    <label for="size">Size</label>
	    <select id="size" onchange="setChartImage()">
	      <option value="50x50">50x50</option>
	      <option value="75x75">75x75</option>
	      <option value="100x100">100x100</option>
	      <option value="150x150">150x150</option>
	      <option value="300x300">300x300</option>
	    </select>
	  </li>
	  <li>
	    <fieldset data-role="controlgroup" data-type="horizontal">
	      <legend>Error correction</legend>
	      <input type="radio" name="ec" id="ec-L" value="L" checked="checked" onclick="setChartImage()" /><label for="ec-L">7%</label>
	      <input type="radio" name="ec" id="ec-M" value="M" onclick="setChartImage()" /><label for="ec-M">15%</label>
	      <input type="radio" name="ec" id="ec-Q" value="Q" onclick="setChartImage()" /><label for="ec-Q">25%</label>
	      <input type="radio" name="ec" id="ec-H" value="H" onclick="setChartImage()" /><label for="ec-H">30%</label>
	    </fieldset>
	  </li>
	  <li>
	    <label for="text">Data</label>
	    <textarea id="text" cols="20" rows="5"></textarea>
	  </li>
	  <li>
	    <button data-theme="b" onclick="setChartImage()">Generate</button>
	  </li>
	  <li>
	    <label for="chart">QR Code</label>
	    <div><a id="link" href="#"><img id="chart" src="" alt="QR code" /></a>
	  </li>
	</ul>
      </div>
    </div>
  </body>
</html>