<?php

error_reporting(0);

$website_url  = Router::url('/', true);

$today = '2022-02-19T04:41:05+00:00'; //date('Y-m-dTH:i:sP', time());

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";

if(count($locations) > 0) {
   
foreach($locations as $location_item) :
 $locationslug =$location_item['Location']['slug'].'/';

if(count($products) > 0) {

foreach($products as $product_item) {
$product_slug = $product_item['Product']['slug'];
$product_url = $locationslug.$product_slug.'.html';

echo "
<url>
<loc>$website_url".$product_url."</loc>
<lastmod>$today</lastmod>
<changefreq>daily</changefreq>
</url>
";


}
}

 
endforeach; 

}
 

echo "</urlset>";

?>