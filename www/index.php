
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="R.css">
</head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<table>
<tr>
  <td>
  <a href="doc/Batting.html"><img src="doc/figure/Batting-unnamed-chunk-1.png" width=160></a>
  </td>
  <td>
  <a href="doc/HallOfFame.html"><img src="doc/figure/HallOfFame-unnamed-chunk-12.png" width=160></a>
  </td>
  <td>
  <a href="doc/Master.html"><img src="doc/figure/Master-unnamed-chunk-1.png" width=160></a>
  </td>
  <td>
  <a href="doc/Managers.html"><img src="doc/figure/Managers-unnamed-chunk-12.png" width=160></a>
  </td>
</tr>
</table>

<h3> Team Lahman:  Michael Friendly, Dennis Murphy, Martin Monkman, Chris Dalzell</h3>
<h2>Contents</h2>

<ul>
  <li>The <strong>R-Forge project summary page</strong> is <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>.</li>
  <li><a href="doc/">HTML documentation for the Lahman package</a>, with the results of all examples.</li>
  <li><a href="http://bayesball.blogspot.ca/">Martin's Bayes ball blog </a>
    <ul>
      <li><a href="http://bayesball.blogspot.ca/2013/06/major-league-baseball-run-scoring.html">
        Baseball run scoring trends by league</a> (and <a href="https://gist.github.com/MonkmanMH/5711584">gist code</a>)
      <li>Using the <a href="http://cran.r-project.org/web/packages/dplyr/index.html">ddplyr package</a> for analysis, summary and manipulation
        of the Lahman Master, Batting and Fielding tables 
        (<a href="https://gist.github.com/MonkmanMH/3c0da6afd58eb61e2c51">Gist code</a>)
    </ul>
  <li>Ramnath Vaidyanathan shows in a blog post how to create an
  <a href="http://rcharts.io/nytinteractive/">interactive graphic of strikeouts
  per game by team</a> using the <a href="https://github.com/rcharts">rCharts package</a>.
  <li>Other baseball visualizations and analyses:</li>
  	<ul>
  		<li>An impressive interactive chart of <a href="http://cscheid.net/static/mlb-hall-of-fame-voting/">Hall of Fame voting trajectories</a>.
  		The original exploratory visualizations were created in R, and then made interactive using <a href="http://d3js.org/">d3</a>
  		and other javascript libraries.</li>
  	</ul>
</ul>




</body>
</html>
