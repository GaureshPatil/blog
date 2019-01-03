<?php require_once("include/db.php"); ?>

<html>
    <head>
        <title>Checking Bootstrap</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js">  </script>
        <link rel="stylesheet" href="css/adminstyles.css">
       

    </head>
<body>

<div class="container-fluid">
<div class="row">
        <div class="col-sm-2">
            <h1>Gauresh</h1>
            <ul id="side_Menu" class="nav nav-pills nav-stacked">
            <li><a href="Dashboard.php">
            <span class="glyphicon glyphicon-th"></span>
            &nbsp;Dashboard</a></li>
            <li><a href="#">
            <span class="glyphicon glyphicon-list-alt"></span>
            &nbsp;Add New Post</a></li>
            <li class="active"><a href="Categories.php">
            <span class="glyphicon glyphicon-tags"></span>    
            Categories</a></li>
            <li><a href="#">
            <span class="glyphicon glyphicon-user"></span>
            &nbsp;Manage Admins</a></li>
            <li><a href="#">
            <span class="glyphicon glyphicon-comment"></span>
            &nbsp;Comments</a></li>
            <li><a href="#">
            <span class="glyphicon glyphicon-equalizer"></span>
            &nbsp;Live Blog</a></li>
            <li><a href="#">
            <span class="glyphicon glyphicon-log-out"></span>    
            &nbsp;Logout</a></li>

            </ul>
        </div> <!-- ending of side area -->
        <div class="col-sm-10">

            <h1>Manage categories</h1>
            
            <div>

            <form action="categories.php" method="post">
                <fieldset>
                    <div claas="form-group">
                    <label for="categoryname">Name:</label>
                    <input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
                    </div>
                </fieldset>

            </div>
            
            

        </div> <!--ending of main area -->

</div> <!-- Ending of Row-->
</div> <!--ending of container fluid-->

<div>
    <div id="Footer">
    <hr><p>Theme By | Gauresh Patil |&copy;2016-2020 --- All rights reserved.
    </p>
    <a style="color : white; text-decoration : none; cursor : pointer; font-weight : bold;" href="http://gauresh.epizy.com/final/Student/" target="blank">
    <p>This site is only used for study purpose gauresh have all the rights. no one is allow
        copies other than <br>&trade; Gauresh &trade;
    </a>
</div>
<div style="height: 10px; background: #27AAE1;"></div>

</body>
</html>