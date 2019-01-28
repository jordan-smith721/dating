<!--Jordan Smith
    1/14/2019
    home.php - Home view for dating site-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1"> <!--FOR MOBILE VIEW-->
    <title>Dating Site</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css"><!--My CSS-->
</head>
<body>

<include href="views/header.php"></include>

<div class="container d-flex">
    <div class="row my-auto">

        <!--Main body-->
        <div id="about" class="col-12 col-md-6">
            <h1 class="text-center">My Dating Website</h1>
            <p>Welcome to the world's most successful dating website. At <strong>My Dating Website</strong>
            you'll meet your one true soulmate. We at My Dating Website have the highest success rate of couples on the web.
            User's are matched by interest and location. Find out why so many others have found love on our site!</p>
            <h2 class="h4 text-center">Hear what our users are saying about us.</h2>
            <hr>
            <blockquote class="blockquote">
                <p class="mb-0">"I met the love of my life after only a month!"</p>
                <footer class="blockquote-footer">Andrea</footer>
                <p class="mb-0">"It was so easy to set up a profile and start meeting people. I didn't realize how many
                others were looking for love in my area</p>
                <footer class="blockquote-footer">John</footer>
                <p class="mb-0">Just try it! You'll never look at dating the same!</p>
                <footer class="blockquote-footer">Sarah</footer>
            </blockquote>
            <hr>
            <div class="text-center">
                <a href="information" class="btn-lg btn-primary">Create a Profile!</a>
            </div>
        </div><!--#about-->

        <!--Home page image-->
        <div id="picture" class="d-none d-md-block col-12 col-md-6 my-auto">
            <img src="images/couple.jpg" alt="Couple" class="w-100 img-fluid img-responsive rounded">
        </div><!--#picture-->

    </div><!--.row-->
</div><!--.container-->

<!--JQUERY - Popper - Boostrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
