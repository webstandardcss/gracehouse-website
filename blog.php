<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Blog";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<style scoped>
.iframe-blog {
  height: 60vw;
}
</style>

    <!-- blank.php -->
    <div class="home-banner flex-centered">
        <div class="home-banner-inner">
            <h5>
                &ldquo;&nbsp;Now concerning spiritual gifts, brothers, I do not want you to be uninformed. &nbsp;&rdquo;
                &mdash; 1 Corinthians 12:1
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-12 col-mx-auto">
                <h2 class="text-center">Blog</h2>
                <iframe class="iframe-blog" width="100%" src="//gracehouselongview.com/blog/" frameborder="0"></iframe>
            </div>
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
