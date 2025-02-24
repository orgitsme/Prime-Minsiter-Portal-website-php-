<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Pakistan Citizen's Portal</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for body and header */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #14741d;
            padding: 20px;
        }

        header {
            background-color: #004b37;
            color: #06b417;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav a {
            color: #3ef43b;
            text-decoration: none;
            margin-left: 10px;
        }

        main {
            margin-top: 20px;
            background-color: #036508;
            padding: 20px;
            border-radius: 8px;
        }

        main h2 {
            margin-bottom: 10px;
        }

        .event-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .event {
            background-color: #e7eaee;
            padding: 15px;
            border-radius: 8px;
        }

        .event h3 {
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #137005;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Events</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="dashboard.html">Dashboard</a>
            <a href="reports.html">Reports</a>
            <a href="messages.html">Messages</a>
             
        </nav>
    </header>
    <main>
        <h2>Upcoming Events</h2>
        <div class="event-list">
            <div class="event">
                <h3>Event 1</h3>
                <p>Date: January 1, 2025</p>
                <p>Location: Islamabad</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="event">
                <h3>Event 2</h3>
                <p>Date: February 15, 2025</p>
                <p>Location: Lahore</p>
                <p>Description: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Add more events as needed -->
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Pakistan Citizen's Portal. All rights reserved.</p>
    </footer>
</body>
</html>
