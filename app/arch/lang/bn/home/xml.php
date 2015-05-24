
<?php

require_once('XMLparser.php');
/*
$ans = XMLparser::my_xpath("songs.xml", "/songs/title");
echo $ans."<br>";
*/
$ans = XMLparser::show_my_xml("songs.xml", "/songs");
echo $ans."<br>";



/*
echo "<ul id= songlist >\n";
foreach ($mysongs as $songinfo):
$title=$songinfo->title;
$artist=$songinfo->artist;
$date=$songinfo['dateplayed'];
echo "<li><div class=title>".$title."</div><div class=artist>by ".$artist."</div><time>".$date."</time></li>\n";
endforeach;
echo "</ul>";
*/

?> 

