<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Donate";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

    <!-- donate.php -->
    <div class="home-banner flex-centered">
        <div class="home-banner-inner">
            <h5>
                &ldquo;&nbsp;Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver.&nbsp;&rdquo;
                &mdash; 2 Corinthians 9:7
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12">
                <h2 class="text-center">DONATE</h2>

                <p>
                    Grace House of Longview is a tax exempt, non-profit 501(c) (3) corporation that seeks to provide this ministry to young women in crisis, at no cost to the individual. Grace House accepts no state or federal funding and relies solely upon individuals, businesses and churches to support this community ministry. Most women will come direct from jail and have nothing. It is the desire of Grace House to house, clothe and feed them while teaching them that God provides a better way.
                </p>

                <div class="p-centered" style="max-width:320px; margin: 48px auto">
                  <h4><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QE2EKPCFFYDA8&source=url">MAKE A DONATION</a></h4>
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick" />
                  <input type="hidden" name="hosted_button_id" value="QE2EKPCFFYDA8" />
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" width="240" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                  <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                  </form>
                  <br />
                  <p>
                    Donations may also be mailed to:
                    <div>
                      Grace House of Longview
                    </div>
                    <address>P.O. Box 761<br />
                    Longview, TX 75606</address>
                </p>

                </div>


            </div>
            <div class="column col-4 col-md-12">
                <?php require(dirname(__FILE__) . "/inc/_nav_menu_involved.php"); ?>
            </div>
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
