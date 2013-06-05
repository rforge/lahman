
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

<h3> Team Lahman:  Michael Friendly, Dennis Murphy, Martin Monkman</h3>
<h2>Contents</h2>

<ul>
  <li>The <strong>R-Forge project summary page</strong> is <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>.</li>
  <li><a href="doc/">HTML documentation for the Lahman package</a>, with the results of all examples.</li>
  <li><a href="http://bayesball.blogspot.ca/">Martin's Bayes ball blog </a>
    <ul>
      <li><a href="http://bayesball.blogspot.ca/2013/06/major-league-baseball-run-scoring.html">
        Baseball run scoring trends by league</a> (and <a href="https://gist.github.com/MonkmanMH/5711584">gist code</a>)
    </ul>
</ul>




</body>
</html>
