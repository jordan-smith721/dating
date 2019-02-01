<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/31/2019
 * Time: 4:16 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Dating Website</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--My CSS-->
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<include href="views/header.php"></include>

<div class="container">
    <div class="row d-flex h-100">
        <div class="col-sm-12 my-auto">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name:</li>
                            <li class="list-group-item">Gender:</li>
                            <li class="list-group-item">Age:</li>
                            <li class="list-group-item">Phone:</li>
                            <li class="list-group-item">Email:</li>
                            <li class="list-group-item">State:</li>
                            <li class="list-group-item">Seeking:</li>
                            <li class="list-group-item">Interests:</li>
                        </ul>
                    </div><!--End Card-->
                </div><!--End col-sm-6-->
                <div class="col-sm-6">
                    <div>
                        <img id="imgPlaceholder" src="images/profile-holder.jpg" class="rounded mx-auto d-block img-fluid">
                    </div>
                    <div>
                        <h5 class="text-muted">Biography</h5>
                    </div>
                    <div id="bio" class="text-center">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                    </div>
                </div>
            </div><!--End row-->
            <div class="col-sm-12 text-center mt-2">
                <button type="button" class="btn btn-primary btn-lg">Contact Me!</button>
            </div>
        </div><!--End col-sm-12-->

    </div><!--End row-->
</div><!--End container-->

</body>
</html>