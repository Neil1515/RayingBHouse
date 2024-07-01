<!-- landingheader.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <div class="logo-container">
            <img src="\RayingBHouse\source\Image\Raying.png" alt="Logo" class="img-fluid rounded-circle" width="50" height="50">
        </div>
        <a class="navbar-brand ms-1" href="\RayingBHouse\index.php  ">R.Aying Boarding House</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\RayingBHouse\index.php#home">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\RayingBHouse\index.php#mission-vision">
                        <i class="fas fa-info-circle"></i> About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\RayingBHouse\index.php#staffs">
                        <i class="fas fa-phone"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\RayingBHouse\LandingPage\headermenu\login.php">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\RayingBHouse\LandingPage\headermenu\registerform.php">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <style>
        .navbar-brand {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem; /* Adjust font size as needed */
            font-weight: bold; /* Make the font bold */
            color: #bd2727; /* Set text color to a nice blue */
            text-decoration: none; /* Remove underline */
        }

        .navbar-brand:hover {
            color: #0056b3; /* Darker shade of blue on hover */
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: #333; /* Default text color */
            text-decoration: none;
        }

        .nav-link:hover {
            color: #007bff; /* Text color on hover */
        }

        .nav-link i {
            margin-right: 5px; /* Space between icon and text */
        }
    </style>
</nav>
