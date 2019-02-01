<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/28/2019
 * Time: 9:48 AM
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
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--My CSS-->
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<include href="views/header.php"></include>

<div class="container">
    <div class="row d-flex h-100">
        <div class="col-12 my-auto">

            <div class="row">
                <div class="col-12">
                    <h1>Profile</h1>
                    <hr>
                </div><!--End row-->
            </div><!--End row-->
            <form id="profileForm" action="interests" method="post">
            <div class="row">
                <div class="col-6">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <select name="state" id="state" class="form-control">
                                <option>--Select a State--</option>
                                <repeat group="{{ @states }}" value="{{@stateOption}}">
                                    <option>{{@stateOption}}</option>
                                </repeat>
                            </select>
                        </div>
                        <fieldset class="form-group">
                            <legend>Seeking</legend>
                            <div class="form-check form-check-inline">
                                <input class= form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label pl-2" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class= form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label pl-2" for="female">Female</label>
                            </div>
                        </fieldset>

                </div><!--End col-6-->
                <div class="col-6">
                        <div class="form-group">
                            <label for="bio">Biography</label>
                            <textarea name="bio" id="" rows="5" class="form-control"></textarea>
                        </div>
                </div><!--End col-6-->
            </div><!--End Row-->
            </form>
            <div class="row float-right">
                <input type="submit" id="submitProfile" class="btn btn-primary" value="Next >">
            </div>
        </div><!--End col-12-->
    </div><!--End row-->
</div><!--End container->

<!--JQUERY - Popper - Boostrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!--My JS--->
<script src="js/dating-js.js"></script>

</body>
</html>