<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.Aying Bhouse</title>
    <link rel="shortcut icon" type="image/x-icon" href="source/Image/Raying.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 1px;
            padding-top: 56px; /* Adjust padding-top to match the height of the navbar */
            background-color: #f0f0f0; /* Light background color */
            height: 100vh;
        }

        .jumbotron {
            background-image: url('source/Image/bh.webp');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .jumbotron h1,
        .jumbotron p.lead {
            transition: text-shadow 0.3s ease;
            cursor: pointer;
        }

        .jumbotron h1:hover,
        .jumbotron p.lead:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6);
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .jumbotron p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .card {
            margin-bottom: 30px;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 1.5rem;
        }

        .card-text {
            font-size: 1.2rem;
            color: #555;
        }

        .owner-info {
            background-color: #fff;
            padding: 30px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .owner-info img {
            max-width: 90%;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .owner-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .owner-info p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 5px;
        }

        .text-primary {
            color: #007bff;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        .testimonial-card {
            margin-bottom: 30px;
            cursor: pointer;
        }

        .testimonial-card .card-body {
            padding: 20px;
        }

        .testimonial-card .card-text {
            font-style: italic;
            color: #555;
        }

        footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    border-top: 5px solid #007bff; /* Add a top border for a pop of color */
}

footer p {
    margin-bottom: 1px;
    font-size: 1rem;
}

footer .owner-info {
    background-color: transparent;
    box-shadow: none;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

footer .owner-info h2 {
    color: #fff;
    margin-bottom: 5px;
    font-size: 1.5rem;
}

footer .owner-info p {
    color: #ccc;
    margin-bottom: 0px;
    font-size: 1rem;
}

footer .owner-info img {
    border: 3px solid #007bff; /* Border around the logo */
    border-radius: 50%; /* Make the image circular */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add a subtle shadow */
    max-width: 100px; /* Adjust image size */
    margin-right: 15px; /* Spacing between image and text */
}

footer a {
    color: #007bff;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

footer .container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}



        @media (max-width: 768px) {
            .jumbotron h1 {
                font-size: 2.5rem;
            }

            .jumbotron p {
                font-size: 1.2rem;
            }
            .embed-responsive-16by9 {
            max-width: 100%; /* Ensures iframe doesn't overflow container */
        }

        .embed-responsive-16by9 iframe {
            width: 100%; /* Makes iframe fill its parent div */
            height: 250px; /* Adjust height as needed */
        }
        }
    </style>
</head>

<body>
    <?php include('LandingPage/landingheader.php'); ?>

    <!-- Main content -->   
    <div class="jumbotron" id="home">
        <div class="container">
            <h1>Welcome to R.Aying Boarding House</h1>
            <p class="lead">Your ideal home awaits...</p>
        </div>
    </div>
    
    <!-- Additional features cards -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fas fa-users fa-4x text-success mb-3"></i>
                        <h5 class="card-title">Friendly Roommates</h5>
                        <p class="card-text">Join a community where roommates are welcoming and supportive, creating a warm atmosphere.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fas fa-tree fa-4x text-success mb-3"></i>
                        <h5 class="card-title">Peaceful Environment</h5>
                        <p class="card-text">Enjoy a serene atmosphere, surrounded by green spaces.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <i class="fas fa-money-bill-wave fa-4x text-success mb-3"></i>
                        <h5 class="card-title">Affordable Pricing</h5>
                        <p class="card-text">Competitive pricing options to suit your budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission and Vision -->
     <!-- will scroll here when click about us -->
    <div class="container mt-5" id="mission-vision">
        <h2 class="section-title">Our Mission & Vision</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">To provide comfortable and affordable housing solutions while fostering a community-centric environment where residents feel welcomed and valued.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">To be recognized as the leading provider of quality apartments that prioritize resident satisfaction, community engagement, and sustainable living practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="container mt-5">
        <h2 class="section-title">What Our Tenants Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card card shadow">
                    <div class="card-body">
                        <p class="card-text">"Living at R.Aying Boarding House has been a wonderful experience. The environment is peaceful and the neighbors are friendly. Highly recommended!"</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">- Zhask Doe, Tenant</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card card shadow">
                    <div class="card-body">
                        <p class="card-text">"I appreciate the affordability and convenience of living here. The management team is responsive and professional."</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">- Zues Smith, Tenant</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card card shadow">
                    <div class="card-body">
                        <p class="card-text">"The owner, Mr. Aying, goes above and beyond to ensure that residents are happy and comfortable. It's a great place to call home."</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">- Johnson Rich, Tenant</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
    <h2 class="section-title">Visit Location</h2>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d580.8744943293094!2d124.01262827576201!3d10.304231060345598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a997375903bd2d%3A0x4dee91ea1c57dba6!2sR.Aying%20Boarding%20House%20for%20Rent!5e1!3m2!1sen!2sph!4v1719675522218!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
    </div>

        <div class="container mt-5" >
 <h2 class="section-title" id="staffs">Boarding House Staffs</h2>
 <div class="row align-items-center">
        <div class="col-md-4 text-center">
                <img src="source/Image/owner.jpg" alt="maintenance Image" style="max-width: 50%; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  margin-bottom: 10px;">
            </div>
            <div class="col-md-8">
                <h2>Rogelio Aying</h2>
                    <p><i class="fas fa-briefcase text-primary"></i> <strong> Position:</strong> Owner</p>
                    <p><i class="fab fa-facebook-messenger text-primary"></i> <strong>Messenger:</strong> Rogelio Aying</p>
                    <p><i class="fas fa-phone-alt text-primary"></i> <strong>Contact Number:</strong> 09084929392</p>
                    <p><i class="fas fa-envelope text-primary"></i> <strong>Email:</strong> rogeliop.aying@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt text-primary"></i> <strong>Address:</strong> Sitio Kasinto, Mactan Lapu-lapu City</p>
                    <p><i class="fas fa-comment-dots text-primary"></i> <strong>Message:</strong> Feel free to reach out with any inquiries!</p>               
            </div>
        </div>
    </div>
     <!-- Collector information section -->
 <div class="container">
 <div class="row align-items-center">
        <div class="col-md-4 text-center">
                <img src="source/Image/collector.jpg" alt="maintenance Image" style="max-width: 50%; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  margin-bottom: 10px;">
            </div>
            <div class="col-md-8">
                <h2>Ailynn Aying</h2>
                <p><i class="fab fa-facebook-messenger text-primary"></i> <strong>Messenger:</strong> Ailynn Aying</p>
                <p><i class="fas fa-briefcase text-primary"></i><strong> Position:</strong> Boarding House collector</p>
                <p><i class="fas fa-phone-alt text-primary"></i>  <strong>Contact Number:</strong> 09084929392</p>
               
            </div>
        </div>
    </div>
 <!-- Maintenance information section -->
 <div class="container">
 <div class="row align-items-center">
        <div class="col-md-4 text-center">
                <img src="source/Image/maintenance2.jpg" alt="maintenance Image" style="max-width: 50%; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  margin-bottom: 10px;">
            </div>
            <div class="col-md-8">
                <h2>Carl Anthony Aying</h2>
                <p><i class="fab fa-facebook-messenger text-primary"></i> <strong>Messenger:</strong> Anthony Aying</p>
                <p><i class="fas fa-briefcase text-primary"></i><strong> Position:</strong> Boarding House Maintenace</p>
                <p><i class="fas fa-phone-alt text-primary"></i>  <strong>Contact Number:</strong> 09084929392</p>
               
            </div>
        </div>
    </div>

    <!-- Maintenance information section -->
 <div class="container">
 <div class="row align-items-center">
        <div class="col-md-4 text-center">
                <img src="source/Image/maintenance1.jpg" alt="maintenance Image" style="max-width: 50%; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 10px;    ">
            </div>
            <div class="col-md-8">
                <h2>John Neil Aying</h2>
                <p><i class="fab fa-facebook-messenger text-primary"></i> <strong>Messenger:</strong> John Neil Aying</p>
                <p><i class="fas fa-briefcase text-primary"></i><strong> Position:</strong> Web Maintenace/Developer</p>
                <p><i class="fas fa-phone-alt text-primary"></i>  <strong>Contact Number:</strong> 09084929392</p>
               
            </div>
        </div>
    </div>

    <footer>
    <div class="container">
        <div class="owner-info d-flex align-items-center">
            <img src="source/Image/Raying.png" alt="R.Aying Apartment Logo" class="img-fluid #007bff">
            <p>Owner of R.Aying B.House</p>
            <p>&copy; 2024 R.Aying BHouse. All rights reserved.</p> 
            <!--<p>Providing quality B.House since 2018</p>-->
        </div>
        
    </div>
</footer>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
