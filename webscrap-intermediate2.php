

<?php

/*
Tugasan 2 : Web Scraping
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : Web Scraping Using PHP
Target URL : http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html
*/

$curl = curl_init('http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
 
$page = curl_exec($curl);
 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);
//show some data from fskm page
$regex = '/<div class="ru-content-main clearfix">(.*?)<\/div>/s';
//$regex = '/<div class="article-content">(.*?)<\/div>/s';
//$regex = '/<div><a id="(.*?)" onclick="(.*?)" href="(.*?)">(.*?)<\/a><\/div>/s';
if ( preg_match($regex, $page, $list) )
    echo $list[0];
else 
    print "Not found"; 
?>
