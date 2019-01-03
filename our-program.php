<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Our Program";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

    <!-- our-program.php -->
    <div class="home-banner flex-centered">
        <div class="home-banner-inner">
            <h5>
                &ldquo;&nbsp;No temptation has overtaken you that is not common to man. God is faithful, and he will not let you be tempted beyond your ability, but with the temptation he will also provide the way of escape, that you may be able to endure it.&nbsp;&rdquo;
                &mdash; 1 Corinthians 10:13
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-10 col-md-12 col-mx-auto">
            <h2 class="text-center">OUR PROGRAM</h2>

            <p>
                While at Grace House, each resident will experience 9 months of faith based healing and redemption in a protected environment. The Grace House program is designed to teach young women of their value to themselves, their families  and to society. Grace House is a very structured program and each resident will experience:
            </p>

            <div class="container">
                <div class="columns">
                    <div class="column col-6 col-sm-12">
                        <ul>
                            <li>Multiple Daily Bible Studies/Devotionals</li>
                            <li>Attend area Churches</li>
                            <li>Recovery and Redemption</li>
                            <li>Basic Living Skills</li>
                            <li>Nutrition</li>
                        </ul>
                    </div>
                    <div class="column col-4 col-sm-12">
                        <ul>
                            <li>Money Management</li>
                            <li>Job Skills</li>
                            <li>Parenting Skills</li>
                            <li>Daily Exercise</li>
                            <li>Volunteering</li>
                        </ul>
                    </div>
                    <div class="column col-2 col-sm-12">
                        <?php require(dirname(__FILE__) . "/inc/_nav_menu_program.php"); ?>
                    </div>
                </div>
            </div>
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
