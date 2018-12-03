
                <div class="dropdown menu-about cushycms-text">
                    <a href="/our-story.php" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="0">
                        <i class="icon icon-caret"></i>
                    </a>
                    <?php require(dirname(__FILE__) . "/_nav_menu_about.php"); ?>
                </div>
                <div class="dropdown menu-our-program">
                    <a href="/our-program.php" class="btn btn-link">Our Program</a>
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="1">
                        <i class="icon icon-caret"></i>
                    </a>
                    <?php require(dirname(__FILE__) . "/_nav_menu_program.php"); ?>
                </div>
                <div class="dropdown menu-get-involved">
                    <a href="/volunteer.php" class="btn btn-link">Get Involved</a>
                    <a href="#" class="btn btn-link dropdown-toggle dropdown-icon" tabindex="2">
                        <i class="icon icon-caret"></i>
                    </a>
                    <?php require(dirname(__FILE__) . "/_nav_menu_involved.php"); ?>
                </div>

                <a href="/application.php" class="btn btn-link" tabindex="3">
                    Application for Residency                
                    <i class="icon icon-people text-gray ml-2"></i>
                </a>
                <a href="/contact.php" class="btn btn-link" tabindex="0">
                    Contact Us                
                    <i class="icon icon-mail text-gray ml-2"></i>
                </a>
                <a href="/blog.php" class="btn btn-link" tabindex="4">
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
