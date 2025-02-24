<?php
session_start();
include('config.php'); // Include database connection settings

// Fetch the logged-in user's information
$user_id = $_SESSION['user_id'] ?? null;
$username = "Guest";

if ($user_id) {
    $stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->fetch();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/fa.png">
    <title>Pakistan Citizen's Portal Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Resetting default margin and padding */
        body, h1, h2, h3, p, ul {
            margin: 0;
            padding: 0;
        }

        /* General styling */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #1f6c08;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #04913f;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex; /* Use flexbox for layout */
        }

        /* Header */
        header {
            background-color: #2b780a;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%; /* Header takes full width */
        }

        .logo {
            width: 100px;
            height: 100px;
        }

        .header h1 {
            margin-top: 10px;
            font-size: 24px;
        }

        .header h2 {
            font-size: 18px;
            font-weight: normal;
        }

        /* Dashboard layout */
        main {
            display: flex;
            flex-grow: 1; /* Grow to fill remaining space */
        }

        .sidebar {
            width: 250px;
            background-color: #088329;
            padding: 20px;
            position: sticky; /* Sidebar sticks */
            top: 0; /* Stick to top */
            height: 100vh; /* Full height */
            overflow-y: auto; /* Scroll if needed */
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-info {
            flex-grow: 1;
        }

        .settings-btn {
            font-size: 14px;
            color: #02060d;
            text-decoration: none;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
        }

        .menu ul li {
            margin-bottom: 10px;
        }

        .menu ul li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 8px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .menu ul li a:hover,
        .menu ul li a.active {
            background-color: #135107;
            color: white;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            position: relative; /* Ensure relative positioning for absolute elements */
        }

        .bell-icon {
            position: absolute;
            top: 20px; /* Adjust top position */
            right: 20px; /* Adjust right position */
            width: 40px; /* Set width for bell icon */
            height: 40px; /* Set height for bell icon */
            cursor: pointer;
            transition: transform 0.3s ease; /* Add transition effect */
        }

        .bell-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image fills the container */
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 5px;
            font-size: 12px;
        }

        .notifications-list {
            position: absolute;
            top: 0;
            right: 0;
            width: 200px; /* Adjust width as needed */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 10px;
            border-radius: 5px;
            display: none; /* Initially hide notifications */
            z-index: 10; /* Ensure it's on top */
            transition: transform 0.3s ease, opacity 0.3s ease; /* Add transition effects */
            transform: translateY(-10px); /* Shift up initially */
            opacity: 0; /* Initially transparent */
        }

        .notifications-list.show {
            transform: translateY(0);
            opacity: 1;
        }

        .notifications-list ul {
            list-style-type: none;
            padding: 0;
        }

        .notifications-list ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .main-content {
            margin-top: 20px; /* Adjust margin for content separation */
        }

        /* Footer */
        footer {
            background-color: #308644;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            width: 100%; /* Footer takes full width */
            clear: both; /* Clear floats */
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <button id="homeButton" title="Home">
        <img src="images/home-icon.png" alt="Home" style="width: 20px; height: 20px;">
        <img id="ji" src="images/setting.png" alt="Settings" style="width: 20px; height: 20px;">
    </button>
    
    <div class="container">
        <header>
            <img src="images/logo.png" alt="Portal Logo" class="logo">
            <h1>PAKISTAN CITIZEN'S PORTAL</h1>
            <h2>عوام کی آواز</h2>
        </header>
        
        <main>
            <div class="sidebar">
                <div class="profile">
                    <img src="images/pm.png" alt="Profile Picture">
                    <div class="profile-info">
                        <p><?php echo htmlspecialchars($username); ?></p>
                        <a href="#" class="settings-btn">Settings</a>
                    </div>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a style="color: purple;"    href="manage_users.php" data-page="manage_users.php">Accounts</a></li>
                        <li><a href="services.php" data-page="services.php">Services</a></li>
                        <li><a href="statistic.php" data-page="statistic.php">statistic </a></li>
                        <li><a href="reviews.php" data-page="reviews.php">Reviews</a></li>
                        <li><a href="messages.php" data-page="messages.php">Messages</a></li>
                        <li><a style="color: red;"background-color="brown"   href="logout.php" data-page="logout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="content">
                <img src="images/pm.jpg" alt="Dashboard Image" style="width:100%; height: auto">
                <div class="notifications-list" id="notificationsList">
                    <ul>
                        <li>You have a new message</li>
                        <li>Event reminder: Meeting today</li>
                        <li>Report submitted successfully</li>
                    </ul>
                </div>
                
                <div class="main-content">
                    <h3>Welcome to Pakistan Citizen's Portal Dashboard</h3>
                    <p>Your dashboard content here...</p>
                </div>
            </div>
        </main>
    </div>
    
    <footer>
        <p>Need Help? <a href="contact.html">Contact Us</a></p>
        <div class="social-media">
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/email.png" alt="Email"></a>
            <a href="#"><img src="images/whatsapp.png" alt="WhatsApp"></a>
        </div>
        <p>Developed by Faizan</p>
    </footer>

    <script>
        // Toggle notifications panel
        const bellIcon = document.querySelector('.bell-icon');
        const notificationsList = document.querySelector('.notifications-list');

        bellIcon.addEventListener('click', () => {
            notificationsList.classList.toggle('show');
        });

        document.getElementById('ji').addEventListener('click', function() {
            window.location.href = 'dashborad.html';
        });

        // Load content dynamically into the content area
        const menuLinks = document.querySelectorAll('.menu a');
        const content = document.querySelector('.main-content');

        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = this.getAttribute('data-page');

                fetch(page)
                    .then(response => response.text())
                    .then(data => {
                        content.innerHTML = data;
                    })
                    .catch(error => console.error('Error loading page:', error));
            });
        });
    </script>
</body>
</html>
