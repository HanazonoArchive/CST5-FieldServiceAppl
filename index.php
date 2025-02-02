<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Service</title>
    <link rel="stylesheet" href="public/css/index.css">
    <script src="public/javaScript/sidebarToggle.js" defer></script>
</head>

<body>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- Logo Section -->
        <div class="logo_container">
            <button id="toggle_button" onclick="toggleSidebar()">
                <img id="website_icon" src="public/assets/icons/Firefly.png" alt="Logo">
                <h1 id="website_name">FSA</h1>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="nav_links">
            <a href="#" class="nav_link">
                <img src="public/assets/icons/job-scheduling.svg" alt="">
                <div class="job-scheduling link">Job Scheduling</div>
            </a>
            <a href="#" class="nav_link">
                <img src="public/assets/icons/inventory-management.svg" alt="">
                <div class="inventory-management link">Inventory Management</div>
            </a>
            <a href="#" class="nav_link">
                <img src="public/assets/icons/customer-information.svg" alt="">
                <div class="customer-information link">Customer Information</div>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Main Content Goes Here</h2>
        <p>This is where your page content will be displayed.</p>
    </div>
</body>

</html>