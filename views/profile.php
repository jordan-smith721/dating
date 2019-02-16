<include href="views/head.html"></include>
<body>

<include href="views/navbar.php"></include>

<div class="container">
    <div class="row d-flex h-100">
        <div class="col-sm-12 my-auto">

            <div class="row">
                <div class="col-sm-12">
                    <h1>Profile</h1>
                    <hr>
                </div><!--End col-12-->
            </div><!--End row-->
            <form id="profileForm" action="#" method="post">
            <div class="row">
                <div class="col-sm-6">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ @_POST['email'] }}">
                            <check if="{{@errors['email']}}">
                                <p class="text-danger">{{@errors['email']}}</p>
                            </check>
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <select name="state" id="state" class="form-control">
                                <option>--Select a State--</option>
                                <repeat group="{{ @states }}" value="{{@stateOption}}">
                                    <option
                                    <check if="{{ @stateOption == @_POST['state'] }}">selected</check>
                                    >{{@stateOption}}</option>
                                </repeat>
                            </select>
                        </div>
                        <fieldset class="form-group">
                            <legend>Seeking</legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seeking" id="male" value="male"
                                <check if="{{ isset(@_POST['seeking'])}}">
                                    <check if="{{ @_POST['seeking'] == 'male' }}">
                                        checked = "checked"
                                    </check>
                                </check>
                                >
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="seeking" id="female" value="female"
                                <check if="{{ isset(@_POST['seeking'])}}">
                                    <check if="{{ @_POST['seeking'] == 'female' }}">
                                        checked = "checked"
                                    </check>
                                </check>
                                >
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </fieldset>

                </div><!--End col-6-->
                <div class="col-sm-6">
                        <div class="form-group">
                            <label for="bio">Biography</label>
                            <textarea name="bio" id="bio" rows="5" class="form-control">{{@bioText}}</textarea>
                        </div>
                </div><!--End col-6-->
            </div><!--End Row-->
            </form>
            <div class="row float-right">
                <input type="submit" id="submitProfile" class="btn btn-primary" value="Next >">
            </div>
        </div><!--End col-12-->
    </div><!--End row-->
</div><!--End container-->

</body>
</html>
