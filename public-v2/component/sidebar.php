<?php
define('BASE_URL', '/CST5-FieldServiceAppl/public-v2');
define('SPECIFIC_URL', '/CST5-FieldServiceAppl')
?>

<link rel="stylesheet" href="<?= BASE_URL ?>/css/sidebar.css">
<script src="<?= BASE_URL ?>/js/sidebar.js" defer></script>

<div class="sidebar" id="sidebar">

    <a href="<?= SPECIFIC_URL ?>/indexv2.php" class="logo" id="logo">
        <img class="logo_icon" src="<?= BASE_URL ?>/assets/Firefly.png">
        <span class="logo-text">FSA</span>
    </a>

    <div class="menu">
        <div class="menu-item" onclick="toggleSubmenu(1)">
            <img src="<?= BASE_URL ?>/assets/job-scheduling.svg">
            <span class="menu-text">Job Scheduling</span>
        </div>
        <div class="submenu" id="submenu-1">
            <a href="<?= BASE_URL ?>/webpage/job-scheduling/Sub1.php">JS - Sub 1</a>
            <a href="#">Sub 2</a>
            <a href="#">Sub 3</a>
        </div>
        <div class="menu-item" onclick="toggleSubmenu(2)">
            <img src="<?= BASE_URL ?>/assets/inventory-management.svg">
            <span class="menu-text">Inventory Management</span>
        </div>
        <div class="submenu" id="submenu-2">
            <a href="<?= BASE_URL ?>/webpage/inventory-management/Sub1.php">IM - Sub1</a>
            <a href="#">Sub 2</a>
            <a href="#">Sub 3</a>
        </div>
        <div class="menu-item" onclick="toggleSubmenu(3)">
            <img src="<?= BASE_URL ?>/assets/customer-information.svg">
            <span class="menu-text">Customer Information</span>
        </div>
        <div class="submenu" id="submenu-3">
            <a href="<?= BASE_URL ?>/webpage/customer-information/Sub1.php">CI - Sub 1</a>
            <a href="#">Sub 2</a>
            <a href="#">Sub 3</a>
        </div>
    </div>
</div>