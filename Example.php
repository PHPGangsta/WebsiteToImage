<?php

require_once 'WebsiteToImage.php';

$websiteToImage = new WebsiteToImage();
$websiteToImage->setProgramPath('/usr/local/bin/wkhtmltoimage-i386')
               ->setOutputFile('www.phpgangsta.de.jpg')
               ->setQuality(70)
               ->setUrl('http://www.phpgangsta.de')
               ->start();

$websiteToImage->setFormat(WebsiteToImage::FORMAT_PNG)
               ->setOutputFile('www.phpgangsta.de.png')
               ->start();