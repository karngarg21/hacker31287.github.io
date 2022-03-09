<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"><!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="asset/css/all.min.css">
        <link rel="stylesheet" href="asset/css/select2.min.css">
        <link rel="stylesheet" href="asset/css/style.css" id="stylesheet">

    <title>Sidebar menu responsive</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="/images/profile.jpeg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class="fa fa-h-square"></i>
                    <span class="nav__logo-name" style="font-size: 22px; font-weight: bold;">Hacker Vidish</span>
                </a>

                <div class="nav__list">
                    <a href="https://hackervidish.me" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">About</span>
                    </a>

                    <a href="https://youtube.com/channel/UCkP0aFMoHCuMrXE5OxyM40w" class="nav__link">
                        <i class="fab fa-youtube"></i>
                        <span class="nav__name">Channel</span>
                    </a>

                    <a href="https://t.me/hackworld1001" class="nav__link">
                        <i class="fab fa-telegram"></i>
                        <span class="nav__name">Telegram</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class="fab fa-instagram"></i>
                        <span class="nav__name">Data</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>
</html>