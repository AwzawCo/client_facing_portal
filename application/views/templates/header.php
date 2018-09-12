<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RegencyCL Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</head>
<body>

<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo site_url('dashboard/home') ?>">RegencyCL Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
            <!-- <li><a href="<?php echo site_url('dashboard/createLead') ?>">Create Lead</a></li> -->
              <!-- <li><a href="#">Submitted Quotes</a></li> -->
            <!-- <li><a href="<?php echo site_url('dashboard/createLead') ?>">Create Lead</a></li> -->
            <!-- <li><a href="<?php echo site_url('dashboard/SubmittedQuotes') ?>">Submitted Bids</a></li> -->
<!--               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quotes/Bids
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Create Quote/Bid</a></li>
                  <li><a href="#">Pending Quotes/Bids</a></li>
                  <li><a href="#">Completed Quotes/Bids</a></li>
                </ul>
              </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('dashboard/profile') ?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="<?php echo site_url('login/logout') ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
          </div>
</nav>
