<?php
include('config.php');
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="font-face.css" rel="stylesheet" media="all">
    <link href="font-awesome.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="animsition.min.css" rel="stylesheet" media="all">
    <link href="bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="animate.css" rel="stylesheet" media="all">
    <link href="hamburgers.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="theme.css" rel="stylesheet" media="all">
    <script>
        function setTitle(title){
            document.title = title;
        }
        function selectLink(id){
            document.getElementById(id).classList.add('active');
        }
    </script>
</head>
<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="logo.png" alt="Finanse Manager" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="logo.png" alt="Finanse Manager" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <?php
                    if ($_SESSION['UROLE'] == 'User') {
                        ?>
                        <li>
                            <i>Welcome, 
                                <?php
                                echo "<big style='color:green'>".$_SESSION['UNAME']."</big>";
                                if (isset($_GET['id'])) {
                                    $userId = get_safe_value('id');
                                    $username = getUserNameById($userId);
                                    echo $username ? htmlspecialchars($username, ENT_QUOTES, 'UTF-8') : 'User not found';
                                }
                                ?>
                            </i>
                        </li>
                        <li id="dashboard_link">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li id="income_link">
                            <a href="income.php">
                                <i class="fas fa-bolt"></i>Income</a>
                        </li>
                        <li id="expense_link">
                            <a href="expense.php">
                                <i class="fas fa-rupee"></i>Expense</a>
                        </li>

                        <li id="reports_link">
                            <a href="reports.php">
                                <i class="fas fa-chart-bar"></i>Reports</a>
                        </li>
                        <li id="chatbot_link">
                            <a href="chatbot.php">
                                <i class="fas fa-comments"></i>ChatBot</a>
                        </li>
                    <?php } else { ?>
                        <li id="category_link">
                            <a href="category.php">
                                <i class="fas fa-list-alt"></i>Category</a>
                        </li>
                        <li id="users_link">
                            <a href="users.php">
                                <i class="fas fa-user"></i>Users</a>
                        </li>
                        <li id="chatbot_link">
                            <a href="add_qa.php">
                                <i class="fas fa-plus-circle"></i>Q & A</a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="logout.php">
                            <i class="fas fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
            </div>
        </header>
        <!-- HEADER DESKTOP-->
