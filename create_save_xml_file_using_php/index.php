<?php
$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
		xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" 
		xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" 
		xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>http://www.codexworld.com</loc>
            <lastmod>2016-07-04T07:46:18+00:00</lastmod>
            <changefreq>always</changefreq>
            <priority>1.00</priority>
        </url>
    </urlset>';

$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($xmlString);

//View XML document
//$dom->formatOutput = TRUE;
//echo $dom->saveXml();

//Save XML as file
$dom->save('xml/sitemap.xml');