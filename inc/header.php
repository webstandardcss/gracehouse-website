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

<?php require_once(dirname(__FILE__) . "/_nav.php"); ?>
