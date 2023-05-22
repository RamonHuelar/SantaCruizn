<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantaCruizin'</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-film mr-2"></i>
                SantaCruizin'
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="discoveries.php">New Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.php">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/offroad1.jpg"></div>
    
    <main>
    <section id="tours" class="container">
        <h1 class="mt-5">New Discoveries</h1>

        <form method="GET" class="mt-3">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xmlFile = simplexml_load_file('discoveries.xml');
    $found = false;
    foreach ($xmlFile->tour as $tour) {
        if (stripos($tour->title, $search) !== false) {
            echo '<div class="blog mt-5">';
            echo '<h3>' . $tour->title . '</h3>';
            echo '<p><strong>Details:</strong> ' . $tour->details . '</p>'; // Use 'details' instead of 'Details'
            echo '<p><strong>Photo Credit:</strong> ' . $tour->author . '</p>';
            echo '<p><strong>Date:</strong> ' . $tour->date . '</p>';
            echo '<img src="img/' . $tour->image . '" alt="img" class="tour-image img-fluid">'; // Include the 'img/' path
            echo '</div>';
            $found = true;
        }
    }
    if (!$found) {
        echo '<p class="mt-5">No destination found.</p>';
    }
    // Display the search metadata
    echo '<p class="mt-3">Showing results for search: ' . $search . '</p>';
} else {
    $xmlFile = simplexml_load_file('discoveries.xml');
    foreach ($xmlFile->tour as $tour) {
        echo '<div class="blog mt-5">';
        echo '<h3>' . $tour->title . '</h3>';
        echo '<p><strong>Author:</strong> ' . $tour->author . '</p>';
        echo '<p><strong>Date:</strong> ' . $tour->date . '</p>';
        echo '<img src="img/' . $tour->image . '" alt="img" class="tour-image img-fluid">'; // Include the 'img/' path
        echo '<p><strong>Details:</strong> ' . $tour->details . '</p>'; // Add the 'details' element
        echo '</div>';
    }
}
?>
    </section>
</main>

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About SantaCruizin'</h3>
                    <p>SantaCruizin' is a free website that was made to highlight the many beautiful places in Santa Cruz, Marinduque. It was only a photograph, but every image on this website has links to details about the spot where it was taken, making SantaCruizin' a gallery that may help you find places in Santa Cruz.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2023 SantaCruizin'. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="#" class="tm-text-gray" rel="sponsored" target="_parent">Ramon.pogi</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>