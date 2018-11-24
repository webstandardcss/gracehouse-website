<?php
$siteName = "Grace House Longview";
$sitePhone = "(903) 746-4145";
$sitePhoneRaw = "+19037464145";
$siteTwitter = "@gracehouselongview";
$siteKeywords = ",grace,house,gracehouse,ministries";
$siteFacebookAdmin = "Facebook admin numeric ID";
$siteFacebookURL = "https://www.facebook.com/gracehouselongview/";
$siteGoogleURL = "https://plus.google.com/1111111";
// $siteHost = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI];
$siteHost = "http://" . $_SERVER['HTTP_HOST'];
$pageURL = $siteHost . $_SERVER['REQUEST_URI'];
$pageImage = $siteHost . "/images/logo-outline.png";
$lastModified = @filemtime($pageURL);
if($lastModified == NULL)
    // $lastModified = filemtime(utf8_decode($pageURL));$lastModified = filemtime(utf8_decode($pageURL));
    // $lastModified = filemtime(urldecode($pageURL));$lastModified = filemtime(urldecode($pageURL));
// echo $lastModified;
//$pageDateModifiedFriendly = date("F d Y H:i:s",filemtime($pageURL));
// February 14 2006 13:22:46
//$pageDateModified = date("Y-F-d\TH:i:s-5:00",filemtime($pageURL));
// 2013-09-17T05:59:00+01:00
?>
