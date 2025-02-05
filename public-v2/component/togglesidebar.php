<?php
// Get absolute path
$fullPath = $_SERVER['SCRIPT_NAME']; // Example: "/webpage/job-scheduling/Sub1.php"

// Extract directory and file name
$pathParts = explode('/', trim($fullPath, '/'));
$directory = $pathParts[count($pathParts) - 2] ?? ''; // Get the parent directory (e.g., "job-scheduling")
$currentPage = end($pathParts); // Get the file name (e.g., "Sub1.php")

// Define paths based on directory and file
$paths = [
    'job-scheduling' => [
        'Sub1.php' => " | Job Scheduling > Sub 1",
        'Sub2.php' => " | Job Scheduling > Sub 2",
        'Sub3.php' => " | Job Scheduling > Sub 3",
    ],
    'inventory-management' => [
        'Sub1.php' => " | Inventory Management > Sub 1",
        'Sub2.php' => " | Inventory Management > Sub 2",
        'Sub3.php' => " | Inventory Management > Sub 3",
    ],
    'customer-information' => [
        'Sub1.php' => " | Customer Information > Sub 1",
        'Sub2.php' => " | Customer Information > Sub 2",
        'Sub3.php' => " | Customer Information > Sub 3",
    ]
];

// Determine path text
$pathText = $paths[$directory][$currentPage] ?? " | Home";

?>

<div class="toggle-btn-container" id="toggle-btn-container">
    <button class="toggle-btn" onclick="toggleSidebar()">
        <img src="<?= BASE_URL ?>/assets/expand_navbar.svg" alt="Expand Navbar">
    </button>
    <p class="Path"><?= $pathText; ?></p>
</div>
