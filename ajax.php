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

require('OpenGraph.php');

if(empty($_POST['url']))
{
	die("Please Enter Instagram Post URL.");
}

$urlcheck = strstr($_POST['url'], "instagram.com");
if($urlcheck === false)
{
	die("Please Enter Only Instagram URL.");
}

$graph = OpenGraph::fetch($_POST['url']);

$des = $graph->title;
$image = $graph->image;
$urls = $graph->url;
$video = $graph->video;

if(isset($video))
{	
	echo '<video src="'. $video .'" controls loop autoplay> </video>';
	echo '<br>';
	echo $des;
	echo '<br>';
	echo 'Thumbnail URL : <a href="' . $image . '" target="_blank">' . $image . '</a>';
	echo '<br>';
	echo 'Video URL : <a href="' . $video . '" target="_blank">' . $video . '</a>';
	echo '<br>';
}
else {
	echo '<img src=' . $image . ' width="500">';
	echo '<br>';
	echo $des;
	echo '<br>';
	echo 'Image URL : <a href="' . $image . '" target="_blank">' . $image . '</a>';
	echo '<br>';
}
echo 'Instagram Post URL : <a href="' . $urls . '" target="_blank">' . $urls . '</a>';

?>