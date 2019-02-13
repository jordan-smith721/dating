<include href="views/head.html"></include>
<body>

<include href="views/navbar.php"></include>

<div class="container">
    <div class="row d-flex h-100">
        <div class="col-sm-12 my-auto">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name: {{ @_SESSION['fname'] }} {{@_SESSION['lname']}}</li>
                            <li class="list-group-item">Gender: {{ @_SESSION['gender'] }}</li>
                            <li class="list-group-item">Age: {{ @_SESSION['age']}}</li>
                            <li class="list-group-item">Phone: {{ @_SESSION['phone'] }}</li>
                            <li class="list-group-item">Email: {{ @_SESSION['email'] }}</li>
                            <li class="list-group-item">State: {{ @_SESSION['state'] }}</li>
                            <li class="list-group-item">Seeking: {{ @_SESSION['seeking'] }}</li>
                            <li class="list-group-item">Interests: <br>
                                <check if="{{ isset(@_POST['indoors']) }}">
                                    Indoor: {{ implode(", ", @_SESSION['indoors']) }} <br>
                                </check>
                                <check if="{{ isset(@_POST['outdoors']) }}">
                                    Outdoors: {{ implode(", ", @_SESSION['outdoors']) }}
                                </check>
                            </li>
                        </ul>
                    </div><!--End Card-->
                </div><!--End col-sm-6-->
                <div class="col-sm-6">
                    <div>
                        <img id="imgPlaceholder" src="images/profile-holder.jpg" alt="Profile Image" class="rounded mx-auto d-block img-fluid">
                    </div>
                    <div>
                        <h5 class="text-muted">Biography</h5>
                    </div>
                    <div id="bio" class="text-center">
                        <p class="lead">{{ @_SESSION['bio'] }}</p>
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
