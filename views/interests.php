<include href="views/head.html"></include>
<body>

<include href="views/navbar.php"></include>

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
                    <form id="interestForm" action="#" method="post">
        <!--**********************INDOOR ACTIVITIES*********************************-->
                        <!--Activites are in two rows with 4 checkboxes each - determined by the
                         arrays in index.php-->
                        <fieldset class="form-group">
                            <legend>Indoor activities</legend>
                            <check if="{{@errors['indoors']}}">
                                <p class="text-danger">{{@errors['indoors']}}</p>
                            </check>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @indoors }}" value="{{ @id => @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                        <input type="checkbox" name="indoors[]" class="form-check-input"
                                               value="{{ @activity }}"
                                            <check if="{{ isset(@_POST['indoors']) }}">
                                            <check if="{{ in_array(@activity, @_POST['indoors'])}}">
                                                checked="checked"
                                            </check>
                                            </check>
                                            id="{{ @id }}">
                                        <label class="form-check-label" for="{{ @id }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @indoors2 }}" value="{{ @id => @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" name="indoors[]" class="form-check-input"
                                                   value="{{ @activity }}"
                                            <check if="{{ isset(@_POST['indoors']) }}">
                                            <check if="{{ in_array(@activity, @_POST['indoors'])}}">
                                                checked="checked"
                                            </check>
                                            </check>
                                                   id="{{ @id }}">
                                            <label class="form-check-label" for="{{ @id }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                        </fieldset>
        <!--*********************************OUTDOOR ACTIVITIES**************************-->
                        <fieldset class="form-group">
                            <legend>Outdoor activities</legend>
                            <check if="{{@errors['outdoors']}}">
                                <p class="text-danger">{{@errors['outdoors']}}</p>
                            </check>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @outdoors }}" value="{{ @id => @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" name="outdoors[]" class="form-check-input"
                                                   value="{{ @activity }}"
                                            <check if="{{ isset(@_POST['outdoors']) }}">
                                            <check if="{{ in_array(@activity, @_POST['outdoors'])}}">
                                                checked="checked"
                                            </check>
                                            </check>
                                                   id="{{ @id }}">
                                            <label class="form-check-label" for="{{ @id }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <repeat group="{{ @outdoors2 }}" value="{{ @id => @activity }}">
                                        <div class="form-check form-check-inline col-sm-2 ml-5 p-2">
                                            <input type="checkbox" name="outdoors[]" class="form-check-input"
                                                   value="{{ @activity }}"
                                            <check if="{{ isset(@_POST['outdoors']) }}">
                                            <check if="{{ in_array(@activity, @_POST['outdoors'])}}">
                                                checked="checked"
                                            </check>
                                            </check>
                                                   id="{{ @id }}">
                                            <label class="form-check-label" for="{{ @id }}">{{ @activity }}</label>
                                        </div>
                                    </repeat>
                                </div>
                            </div><!--End form-row-->
                        </fieldset>
                        <div class="row float-right">
                            <input type="submit" id="submitInterests" name="submitInterests" class="btn btn-primary" value="Next >">
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
