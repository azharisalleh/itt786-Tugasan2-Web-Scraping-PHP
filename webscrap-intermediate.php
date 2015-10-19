
/*
Tugasan 2 : Web Scraping
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : Web Scraping Using PHP
Target URL : http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html
*/
/*
<?php
$url = "http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
echo $curl_scraped_page;
?>
*/

<?php
$data = file_get_contents('http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html?q=Lecturer');
$regex = '/Page 1 of (.+?) results/';
preg_match($regex,$data,$match);
var_dump($match);
echo $match[1];
?>