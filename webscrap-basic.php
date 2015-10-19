<?php
/*
Tugasan 2 : Web Scraping
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : Web Scraping Using PHP
Target URL : http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html
*/
// Basic Scraping
$url = 'http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html';
$output = file_get_contents($url);
echo $output;
?>