<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd">

<?php

$total_products = count($products); 
$total_subdomains =  count($subdomains); 
$total_locations = count($locations);
$total_subdomains_pages = ($total_products*$total_subdomains);
$total_locations_pages = ($total_products*$total_locations); 
$sitemap_page_count = ceil($total_locations_pages / 4000) + 2;

?> 

<!--  Indexed Pages:  <?php echo (5 + $total_products + $total_subdomains + $total_locations + $total_subdomains_pages + $total_locations_pages);?>  -->

<?php for($p = 1; $p<=$sitemap_page_count;$p++) { ?>
<sitemap>
<loc><?php echo Router::url('/', true);?>sitemap<?php echo $p;?>.xml</loc>
 </sitemap>
<?php } ?>

</sitemapindex>