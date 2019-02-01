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
        <div class="col-12 my-auto">
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
                    </div>
                </div>
            </div>

        </div>

    </div><!--End row-->
</div><!--End container-->

</body>
</html>
