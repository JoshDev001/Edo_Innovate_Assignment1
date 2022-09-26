<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css"> -->

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#nature">Nature</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#architecture">Architecture</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#travel">Travel</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/12312.jpg" class="d-block w-100" alt="Architecture">
                <div class="carousel-caption d-none d-md-block">
                    <h3> Architecture </h3>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/wallpaperflare.com_wallpaper (5).jpg" class="d-block w-100" alt="Nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3> Nature </h3>
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/wallpaperflare.com_wallpaper (6).jpg" class="d-block w-100" alt="Travel">
                <div class="carousel-caption d-none d-md-block">
                    <h3> Travel </h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- For Nature -->
    <a id="nature">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center"> Nature </h2>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/wallpaperflare.com_wallpaper (4).jpg" alt="The galaxy" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/wallpaperflare.com_wallpaper (3).jpg" alt="The moon in it's beauty"
                        class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/wallpaperflare.com_wallpaper (7).jpg" alt="Nature's Beauty"
                        class="img-fluid pb-3">
                </div>

            </div>

        </div>
        </div>
    </section>
</a>

    <!-- second section -->
    <a id="architecture">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center"> Architecture </h2>
            <hr>

        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/wallpaperflare.com_wallpaper (2).jpg" alt="A Laptop" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/Tiger.jpg.jpg" alt="The moon in it's beauty" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/dark_earth-wallpaper-1280x720.jpg" alt="Lion in Nature" class="img-fluid pb-3">
                </div>

            </div>

        </div>
        </div>
    </section>
    </a>

    <!-- Third section -->

    <a id="travel">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center"> Travel </h2>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/12326.jpg" alt="Electric Gadget" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/377734.jpg" alt="Mobile phone" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/12312.jpg" alt="A wrist watch" class="img-fluid pb-3">
                </div>

            </div>

        </div>
        </div>
    </section>
    </a>

    <!-- The contact us page -->
    <a id="contact">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center"> Contact Us </h2>
            <hr>
        </div>
        <div class="w-50 m-auto">
            <form action="about.php" method="POST">
                <div class="form-group">
                    <label> Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label> Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label> Number: </label>
                    <input type="text" name="number" class="form-control">
                </div> <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    </a>
    <!-- About Section -->
    <a id="about">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center"> About </h2>
            <hr>
        </div>
        <div class="container-fluid">
            <h3 class="text-center"> Mac </h3><br>
            <p class="text-center"><b> I am a passionate photographer interested in working in Architecture, Nature and
                    Travel Photography. I am a full time freelancer with an experience of 5 years.</b></p>

        </div>
    </section>
    </a>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>

        <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->

</body>

</html>