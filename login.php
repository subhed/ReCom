<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="/"> <img
                class="main-head-image d-inline-block align-middle"
                src=""> ReCom</a><button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/contests" target="_self">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/ratings" target="_self">Tags</a></li>
                <li class="nav-item"><a class="nav-link" href="/blog" target="_self">Trending</a></li>
                <li class="nav-item"><a class="nav-link" href="/playlists" target="_self">Playlists</a></li>
                

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/search" target="_self"><span
                            class="mbri-search"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="/auth/signup" target="_self">Signup</a></li>
                <li class="nav-item"><a class="nav-link" href="/auth/login" target="_self">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="mt-5">
        <div class="container-fluid">
            <div class="row pad-4 pad-b-4">
                <div class="col col-sm-12 col-md-6 col-lg-4 offset-lg-2 d-none d-sm-block">
                    <center><img class="pad-1"
                            src="https://res.cloudinary.com/siesgstarena/image/upload/f_auto,q_auto/v1546283328/arena/assets_webp/arena_assets_login.webp"
                            width="50%"></center>
                </div>
                <div class="col col-sm-12 col-md-6 col-lg-4">
                    <h5>Login</h5>
                    <form action="includes/login_check.php" method="POST">
                        <div class="form-group"><label for="email">Email address</label><input class="form-control"
                                id="email" name="email" type="email" aria-describedby="emailHelp"
                                placeholder="Enter Email Address"></div>
                        <div class="form-group"><label for="password">Password</label><input class="form-control"
                                id="password" name="password" type="password" placeholder="Enter Password"></div>
                        <div class="form-group float-right"><button class="btn btn btn-outline-primary"
                                type="submit"><span class="mbri-success"></span> Login</button></div><br>
                        <p><a href="/auth/forgot"> Forgot Password?</a></p>
                    </form>
                </div>
            </div>
            <div class="row text-muted pad-b-3">
                <div class="col-sm-12 col-lg-8 col-md-8 offset-md-2 offset-lg-2 underline-top mt-5">
                    <center>
                        <a class="no-decor" href="/about"> About</a><span class="mid-dot"></span>
                        <a class="no-decor" href="/contact"> Contact</a><span class="mid-dot"></span>
                        <a class="no-decor" href="/developers"> Our Team</a><span class="mid-dot"></span>
                        <a class="no-decor" href="/feedback"> Feedback</a><span class="mid-dot"></span>
                        <a class="no-decor" href="/faq"> FAQ</a><span class="mid-dot"></span><a class="no-decor"
                            href="/privacy"> Privacy</a>
                    </center>
                </div>
            </div>
            <div id="alert-section" style="position:fixed;right:8px;bottom:0px;"></div>

        </div>
    </div>

</body>

</html>