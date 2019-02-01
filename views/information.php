<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1"> <!--FOR MOBILE VIEW-->

    <title>Personal Information</title>

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
    <div class="col-sm-12 my-auto">

    <div class="row">
        <div class="col-sm-12">
            <h1>Personal Information</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <form id="infoForm" method="POST" action="#">
                <label for="fname">First Name</label>
                <div class="input-group">
                    <check if="{{@errors['fname']}}">
                        <p>{{@errors['fname']}}</p>
                    </check>
                    <input type="text" id="fname" name="fname" value="{{ @_POST['fname'] }}" class="form-control border-right-0">
                    <div class="input-group-append">
                        <span class="input-group-text bg-white border-left-0 fa fa-address-card-o"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <check if="{{@errors['lname']}}">
                        <p>{{@errors['lname']}}</p>
                    </check>
                    <input type="text" id="lname" name="lname" value="{{ @_POST['lname'] }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <check if="{{@errors['lname']}}">
                        <p>{{@errors['age']}}</p>
                    </check>
                    <input type="text" id="age" name="age" value="{{ @_POST['age'] }}" class="form-control">
                </div>
                <fieldset class="form-group">
                    <legend>Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class= form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label pl-2" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class= form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label pl-2" for="female">Female</label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <check if="{{@errors['lname']}}">
                        <p>{{@errors['phone']}}</p>
                    </check>
                    <input type="tel" id="phone" class="form-control" name="phone"
                           value="{{ @_POST['phone'] }}" placeholder="2223334444">
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <div class="card bg-light text-center">
                <div class="card-body">
                    <strong>Note:</strong> All information entered is protected by our <a href="#">privacy policy</a>. Profile
                information can only be viewed by others with your permission.
                </div>
            </div>
        </div>
    </div><!--end row-->

    <div class="row float-right">
        <input type="submit" id="submitInfo" class="btn btn-primary" value="Next >">
    </div>

    </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->


<!--JQUERY - Popper - Boostrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!--My JS-->
<script src="js/dating-js.js"></script>

</body>
</html>