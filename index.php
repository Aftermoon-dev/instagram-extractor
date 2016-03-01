<?php
/**********************************************
The MIT License (MIT)

Copyright (c) 2016 Minjae Seon

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
***********************************************/
?>
<!DOCTYPE html>
<html lang=en>
<head>
<!-- Title Setting -->
<title>Instagram Content Extractor</title>

<!-- Style Setting -->
<style>
   .wf-active body {
    font-family: 'NanumGothic';
   }
	html, body { 
		background-color: #e5e5e5;
	}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<h1>Instagram Content Extractor</h1>
<br>
<br>
<br>
Instagram Post URL : 
<br> 
<input type="text" id="url" placeholder="(ex. https://www.instagram.com/p/BBPDmCnu2HL/) " style="width:330px"/> 
<br>
<br>
<br>
<input type="button" id="extract" name="extract" value="Extract" >
<br>
<br>
<br>
<p id="content"></p>
</center>
</body>
<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

<!-- AJAX -->
<script>
$( "#extract" ).click(function() {
	$.post( "ajax.php", { url: $("#url").val() })
	.done(function( data ) {
	document.getElementById('content').innerHTML= data;
	});
});
</script>

<!-- IE Placeholder -->
<script src="js/placeholders.js"> </script>

<!-- Using NanumGothic -->
<script script src="http://www.google.com/jsapi">
   google.load( "webfont", "1" );
   google.setOnLoadCallback(function() {
    WebFont.load({ custom: {
     families: [ "NanumGothic" ],
     urls: [ "http://fonts.googleapis.com/earlyaccess/nanumgothic.css" ]
    }});
   });
</script>
</html>