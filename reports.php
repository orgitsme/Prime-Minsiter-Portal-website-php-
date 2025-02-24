<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Pakistan Citizen's Portal</title>
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
            background-color: #2a5b01;
            padding: 20px;
        }

        header {
            background-color: #144a04;
            color: #31f406;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav a {
            color: #00c00a;
            text-decoration: none;
            margin-left: 10px;
        }

        main {
            margin-top: 20px;
            background-color: #1d6e02;
            padding: 20px;
            border-radius: 8px;
        }

        main h2 {
            margin-bottom: 10px;
        }

        .report-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .report {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
        }

        .report h3 {
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Reports</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="dashboard.html">Dashboard</a>
            <a href="events.html">Events</a>
            <a href="messages.html">Messages</a>
           
        </nav>
    </header>
    <main>
        <h2>Recent Reports</h2>
        <div class="report-list">
            <div class="report">
                <h3>Report 1</h3>
                <p>Date: January 1, 2024</p>
                <p>Category: Public Health</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="report">
                <h3>Report 2</h3>
                <p>Date: February 15, 2024</p>
                <p>Category: Education</p>
                <p>Description: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Add more reports as needed -->
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Pakistan Citizen's Portal. All rights reserved.</p>
    </footer>
</body>
</html>
