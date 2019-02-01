<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/30/2019
 * Time: 8:32 PM
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
                <div class="col-sm-12">
                    <h1>Interests</h1>
                    <hr>
                </div><!--End col-12-->
            </div><!--End Row-->
            <div class="row">
                <div class="col-sm-12">
                    <form id="interestForm" action="summary" method="post">
        <!----------------INDOOR ACTIVITIES----------------------------->
                        <!--Activites are in two rows with 4 checkboxes each - determined by the
                         arrays in index.php-->
                        <fieldset class="form-group">
                            <legend>Indoor activities</legend>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @indoors }}" value="{{ @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                        <input type="checkbox" class="form-check-input"
                                               value="{{ @activity }}" id="{{ @activity }}">
                                        <label class="form-check-label" for="{{ @activity }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @indoors2 }}" value="{{ @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" class="form-check-input"
                                                   value="{{ @activity }}" id="{{ @activity }}">
                                            <label class="form-check-label" for="{{ @activity }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                        </fieldset>
        <!-----------------------------------OUTDOOR ACTIVITES----------------------->
                        <fieldset class="form-group">
                            <legend>Outdoor activities</legend>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @outdoors }}" value="{{ @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" class="form-check-input"
                                                   value="{{ @activity }}" id="{{ @activity }}">
                                            <label class="form-check-label" for="{{ @activity }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @outdoors2 }}" value="{{ @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" class="form-check-input"
                                                   value="{{ @activity }}" id="{{ @activity }}">
                                            <label class="form-check-label" for="{{ @activity }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                        </fieldset>
                        <div class="row float-right">
                            <input type="submit" id="submitInterests" class="btn btn-primary" value="Next >">
                        </div>
                    </form>
                </div><!--End col-12-->
            </div><!--End row-->
        </div><!--End col-12-->
    </div><!--End row-->
</div><!--End container-->


<!--JQUERY - Popper - Boostrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
