<?php // require_once(dirname(__FILE__) . "/_mobilenav.php"); ?>
<?php // require_once(dirname(__FILE__) . "/_nav.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(dirname(__FILE__) . "/_meta.php"); ?>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link rel="stylesheet" href="custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
    <?php if (in_array("forms", $extraCss)) { ?>
      <link rel="stylesheet" href="/assets/css/forms.css">
    <?php } ?>  
</head>
<body>
<!-- flexbox grid example -->
    <div class="container bar-header">
        <div class="columns">
            <div class="column col-12 bar-top">
                <header class="navbar">
                    <div class="navbar-section">
                        <!-- top left navbar section -->
                    </div>
                    <div class="navbar-center">
                        <!-- centered logo or brand -->
                    </div>
                    <div class="navbar-section">
                        <button class="btn btn-sm btn-alternate">Donate</button>
                        <button class="btn btn-link btn-action btn-sm"><svg class="svg-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg></button>
                        <button class="btn btn-link btn-action btn-sm show-md"><i class="icon icon-menu"></i></button>
                    </div>
                </header>
            </div>
            <div class="column col-12 flex-centered">
                <img src="images/logo-outline.png" class="logo-header" alt="Grace House">
                <button class="btn btn-alternate header-donate d-none">Donate</button>
            </div>
        </div>
    </div>
    <div class="container bar-menu">
        <div class="columns">
            <div class="column col-12 flex-centered hide-md">
                <div class="dropdown menu-about">
                    <a href="about.php" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="0">
                        <i class="icon icon-caret"></i>
                    </a>

                    <!-- menu component -->
                    <ul class="menu">
                        <li class="divider" data-content="ABOUT US"></li>
                        <li class="menu-item">
                            <a href="about.php">
                            <i class="icon icon-link"></i> Our Story
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="mission.php">
                            <i class="icon icon-link"></i> Our Mission
                            </a>
                        </li>                    
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="team.php">
                            <i class="icon icon-link"></i> Our Team
                            </a>
                        </li>                                        
                    </ul>
                </div>
                <div class="dropdown menu-our-program">
                    <a href="about.php" class="btn btn-link">Our Program</a>
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="1">
                        <i class="icon icon-caret"></i>
                    </a>

                    <!-- menu component -->
                    <ul class="menu">
                        <li class="divider" data-content="OUR PROGRAM"></li>
                        <li class="menu-item">
                            <a href="education.php">
                            <i class="icon icon-link"></i> Education and Recovery Classes
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="visitors.php">
                            <i class="icon icon-link"></i> Visitor Guidelines
                            </a>
                        </li>                    
                    </ul>
                </div>
                <div class="dropdown menu-get-involved">
                    <a href="about.php" class="btn btn-link">Get Involved</a>
                    <a href="#get-involved" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="2">
                        <i class="icon icon-caret"></i>
                    </a>

                    <!-- menu component -->
                    <ul class="menu">
                        <li class="divider" data-content="GET INVOLVED"></li>
                        <li class="menu-item">
                            <a href="volunteer.php">
                            <i class="icon icon-link"></i> Volunteer
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="alumni.php">
                            <i class="icon icon-link"></i> Alumni
                            </a>
                        </li>                    
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="donate.php">
                            <i class="icon icon-link"></i> Donate
                            </a>
                        </li>                                        
                    </ul>
                </div>

                <a href="application.php" class="btn btn-link" tabindex="3">
                    Application for Residency                
                    <i class="icon icon-people text-gray ml-2"></i>
                </a>
                <a href="contact.php" class="btn btn-link" tabindex="0">
                    Contact Us                
                    <i class="icon icon-mail text-gray ml-2"></i>
                </a>
                <a href="blog.php" class="btn btn-link" tabindex="4">
                    Blog                
                    <i class="icon icon-time text-gray ml-2"></i>
                </a>

                <div class="dropdown d-none menu-example">
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="5">
                        dropdown menu <i class="icon icon-caret"></i>
                    </a>

                    <!-- menu component -->
                    <ul class="menu">
                        <!-- menu header text -->
                        <li class="divider" data-content="LINKS">
                        </li>
                        <!-- menu item standard -->
                        <li class="menu-item">
                            <a href="#">
                            <i class="icon icon-link"></i> Slack
                            </a>
                        </li>
                        <!-- menu item with form control -->
                        <li class="menu-item">
                            <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> form-checkbox
                            </label>
                        </li>
                        <!-- menu divider -->
                        <li class="divider"></li>
                        <!-- menu item with badge -->
                        <li class="menu-item">
                            <div class="menu-badge">
                            <label class="label label-primary">2</label>
                            </div>
                            <a href="#">
                            <i class="icon icon-link"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>            
            </div>
        </div>
    </div>
