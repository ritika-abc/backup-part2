<?php

error_reporting(0);

$website_url  = Router::url('/', true);

$total_pages = 2084;

 
$today = '2022-02-19T04:41:05+00:00'; //date('Y-m-dTH:i:sP', time());

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";


 if(!empty($subdomains)) {
	foreach($subdomains as $subdomain) {

	$subdomain_main_url = $subdomain['Subdomain']['slug'].'.html';
	$subdomain_url = str_replace('-category','',$subdomain['Subdomain']['slug']).'/';

           
echo "
<url>
<loc>$website_url".$subdomain_main_url."</loc>
<lastmod>$today</lastmod>
<changefreq>daily</changefreq>
</url>
";
 
if(count($products) > 0) {

foreach($products as $product_item) {
$product_slug = $product_item['Product']['slug'];
$product_url = $subdomain_url.$product_slug.'.html';

echo "<url>
<loc>$website_url".$product_url."</loc>
<lastmod>$today</lastmod>
<changefreq>daily</changefreq>
</url>
";
}
}
 
	}
}
 
echo "</urlset>";

?>