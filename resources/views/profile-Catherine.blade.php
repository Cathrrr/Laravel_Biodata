<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Catherine</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            max-width: 400px;
            margin: 0 auto;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-nav .nav-link {
            font-weight: normal;
            text-decoration: none;
            position: relative;
            color: black;
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: black;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            left: 0;
            bottom: -3px;
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
                        <a class="nav-link" href="{{ url('Home-11939') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('profile-Catherine') }}">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="profile-container text-center">
            <h2 class="mt-5">My Profile</h2>
            <div class="card mt-3 shadow-sm">
                <img src="{{asset('images/IMG_3619.jpg')}}" class="card-img-top" alt="Profile Picture">
                <div class="card-body">
                    <h5 class="card-title">{{ $nama }} - {{ $npm }}</h5>
                    <p class="card-text">{{ $quotes }}</p>
                    <a href="/" class="btn btn-outline-danger">Lihat Profil &gt</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
