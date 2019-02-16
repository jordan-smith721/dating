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
                            <li class="list-group-item">Name: {{ @_SESSION['member']->getFname() }} {{@_SESSION['member']->getLname()}}</li>
                            <li class="list-group-item">Gender: {{ ucfirst(@_SESSION['member']->getGender()) }}</li>
                            <li class="list-group-item">Age: {{ @_SESSION['member']->getAge()}}</li>
                            <li class="list-group-item">Phone: {{ @_SESSION['member']->getPhone() }}</li>
                            <li class="list-group-item">Email: {{ @_SESSION['member']->getEmail() }}</li>
                            <li class="list-group-item">State: {{ @_SESSION['member']->getState() }}</li>
                            <li class="list-group-item">Seeking: {{ ucfirst(@_SESSION['member']->getSeeking()) }}</li>
                            <check if="{{ @_SESSION['member'] instanceof PremiumMember }}">
                            <li class="list-group-item">Interests: <br>

                                    Indoor: {{ @indoors }} <br>


                                    Outdoors: {{ @outdoors }}

                            </li>
                            </check>
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
                    <div id="bio">
                        <p class="lead">{{ @_SESSION['member']->getBio() }}</p>
                    </div>
                </div>
            </div><!--End row-->
            <div class="col-sm-12 text-center mt-2">
                <button type="button" class="btn btn-primary btn-lg mt-2">Contact Me!</button>
            </div>
        </div><!--End col-sm-12-->

    </div><!--End row-->
</div><!--End container-->

</body>
</html>
