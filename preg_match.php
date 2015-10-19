<?php
/*
Tugasan 2 : Web Scraping
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : Web Scraping Using PHP
Target URL : http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html
*/
$html = file_get_contents("http://fskm.uitm.edu.my/v1/fakulti/staff-directory/academic/1097.html");

preg_match_all(
    '/<a href="(.*?)">(.*?)<\/a>/s',
    //'/<a href="/vi/fakulti/staff-directory/academic/(.*?)">(.*?)<\/a>/s',
    //'/<a id="(.*?)" onclick="(.*?)" href="(.*?)">(.*?)<\/a>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[1];
    $title = $post[2];

    echo "<a href='" . $link . "'>" . $title . "</a></br>";
}
 
echo "<p>" . count($posts) . " posts found</p>";