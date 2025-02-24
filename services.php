<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Pakistan Citizen's Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* General styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #272729;
            color: white;
        }

        /* Intro section styles */
        .intro {
            text-align: center;
            padding-left: 20px;
            margin-top: 20px;
        }

        .intro h2 {
            font-size: 3rem;
            margin-bottom: 5px;
        }

        .intro h1 {
            font-size: 5rem;
            color: rgb(50, 222, 11);
            margin-left: 100px;
        }

        /* Services section styles */
        .services-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .services-header h1 {
            font-size: 3rem;
            color: #50fa7b;
            animation: fadeInDown 1s;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: linear-gradient(to right, #55b550, #398b37);
            margin-top: 50px;
            animation: fadeIn 1.5s;
        }

        .service-card {
            background-image: linear-gradient(#5889e9, rgb(0, 0, 0)); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
            animation: float 4s ease-in-out infinite;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card img {
            width: 100%;
            border-radius: 10px;
        }

        .service-card h3 {
            color: #50fa7b;
            margin-top: 10px;
            text-align: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Responsive styles */
        @media (max-width: 800px) {
            .services-grid {
                grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
            }
        }

        .zoom {
            text-decoration: none;
        }

        .zoom:hover {
            transform: scale(1.1);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="index.php">
        <button id="homeButton" title="Home">
            <img src="images/home-icon.png" alt="Home" style="width: 20px; height: 20px;">
        </button>
    </a>
    <div class="intro">
        <h2>Welcome to the Pakistan Citizen's Portal</h2>
    </div>

    <div class="services-header">
        <h1>Our Services</h1>
    </div>

    <div class="services-grid">
        <a href="https://web.citizenportal.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/complain.jpg" alt="Complaints Service Image">
            <h3>Complaints</h3>
        </a>
        <a href="https://pmdc.pk" target="_blank" class="zoom service-card">
            <img src="images/care.jpg" height="234px" alt="Healthcare Service Image">
            <h3>Healthcare</h3>
        </a>
        <a href="https://bor.punjab.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/land.jpg" height="234px" alt="Land Revenue Service Image">
            <h3>Land Revenue</h3>
        </a>
        <a href="https://www.hec.gov.pk/english/Pages/default.aspx" target="_blank" class="zoom service-card">
            <img src="images/hec.jpg" alt="Education Service Image">
            <h3>Education</h3>
        </a>
        <a href="https://pakistan.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/gov.jfif" height="234px" alt="Government Department Service Image">
            <h3>Government Departments</h3>
        </a>
        <a href="https://www.wapda.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/energy.jpg" height="234px" alt="Energy and Power Service Image">
            <h3>Energy and Power</h3>
        </a>
        <a href="https://www.wapda.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/farmer.jpg" height="234px" alt="Farmers Service Image">
            <h3>Farmers</h3>
        </a>
        <a href="https://lgcd.punjab.gov.pk/chiniot_district_lgs_soe" target="_blank" class="zoom service-card">
            <img src="images/muni.jpg" height="234px" alt="Municipal Services Image">
            <h3>Municipal Services</h3>
        </a>
        <a href="https://www.pmo.gov.pk" target="_blank" class="zoom service-card">
            <img src="images/pm.png" height="234px" alt="PM House Service Image">
            <h3>PM House</h3>
        </a>
    </div>
</body>
</html>
