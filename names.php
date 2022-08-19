<?php
include ("wp-load.php");
include ("simple_html_dom.php");
$baseUrl = "https://www.names.org/baby-names-by-letter/a/";
$domain = "https://www.names.org";

$html = file_get_html($baseUrl);
$pageNums= $html->find("ul.pagination.pagination-lg",0)->find("li");
foreach ($pageNums as $pagenum){
    $pageResultNum = $domain.$pagenum->find("a",0)->href;
    echo "-----------------".$pageResultNum."........";
    echo "<br />";
    $html2 = file_get_html($pageResultNum);
    $nameLink = $html2->find("table.table",0)->find("tbody",0)->find("tr");
    foreach ($nameLink as $link){
        echo $aboutLink = $domain.$link->find("a",0)->href;
        echo "<br />";
        echo $nameLink = $link->find('a',0)->innertext;


        // Create post object
        $my_post = array(
            'post_title'    => $nameLink,
            'post_content'  => "hellooooo".$nameLink." ----- link ".$aboutLink,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array( 8,39 )
        );

// Insert the post into the database
        wp_insert_post( $my_post );

    }

}

