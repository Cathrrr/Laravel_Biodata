<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - 11939</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            font-family: 'Poppins', sans-serif;
        }

        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }

        .social-icons-border {
            border: 1px solid gray;
            border-radius: 8px;
            width: 400px;
            height: 60px;
            margin: 30px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons{
            display: flex;
            justify-content: center;
            align-items: center;
        }
      
        .social-icons a {
            font-size: 24px;
            margin: 0 10px;
            color: #000;
            display: inline-block; 
            padding: 20px;
        }

        .navbar-nav .nav-link {
            font-weight: normal;
            text-decoration: none;
            position: relative;
            color: black; /* Default color */
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: black; /* Color for the active page */
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            left: 0;
            bottom: -3px; /* Distance between text and underline */
        }

       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Atmarior</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('Home-11939') }}">Home</a> <!-- Home is active -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile-Catherine') }}">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/picture1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/picture2.jpeg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/picture3.jpg" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="social-icons-border">
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://www.github.com" target="_blank">
                <i class="bi bi-github"></i>
            </a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
