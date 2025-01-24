<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/Firefly.png" type="image/png">
    <title>Field Service Application</title>
</head>
<body>
    <div class="header">
        <div class="logo_container">
            <img id="website_icon" src="assets/Firefly.png" alt="Logo">
            <h1 id="website_name">FSA</h1>
        </div>

        <div class="navigation_container">
            <button id="job-scheduling_button" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M3 4h18v18H3V4zm2 2v14h14V6H5zm2 3h10v2H7V9zm0 4h7v2H7v-2z" />
                </svg>
            </button>
            <button id="inventory-management_button" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17v-6l10 5 10-5v6l-10 5-10-5z" />
                </svg>
            </button>
            <button id="customer-information_button" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="content_container">
        <h2>Testing the Database!</h2>
        <?php include('database/database-connection.php') ?>
    </div>

    <footer>
        <script src="script/index.js"></script>
    </footer>
</body>
</html>
