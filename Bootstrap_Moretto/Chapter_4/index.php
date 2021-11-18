<!doctype html>
<html lang="ru">
<head class="h-100">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap - Chapter 4</title>
    <!-- CSS SECTION -------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <!-- END OF CSS SECTION ------------------------------------------------------------------------------- -->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER SECTION -------------------------------------------------------------------------------------- -->
<header class="section_header">
    <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top sticky-top">
        <div class="container-fluid">
            <a href="#" role="button" class="navbar-brand">
                <img src="img/logo.png" class="navbar-brand-image" alt="navbar-brand" />
            </a>
            <button role="button" class="btn navbar-toggler" aria-expanded="false" data-bs-toggle="collapse"
                    data-bs-target="#nav_main_menu_container" aria-controls="nav_main_menu_container"
                    aria-label="Toggle Button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="nav_main_menu_container">
                <ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Menu Item</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Menu Item</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Subitem1</a></li>
                            <li><a href="#" class="dropdown-item">Subitem2</a></li>
                            <li><hr> </li>
                            <li><a href="#" class="dropdown-item">Subitem3</a></li>
                            <li><a href="#" class="dropdown-item">Subitem4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Menu Item</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
<!-- END OF HEADER SECTION ------------------------------------------------------------------------------- -->
<!-- CSS SECTION -------------------------------------------------------------------------------------- -->
<main class="section_main flex-shrink-0">

</main>
<!-- END OF CSS SECTION ------------------------------------------------------------------------------- -->
<!-- CSS SECTION -------------------------------------------------------------------------------------- -->
<footer class="footer mt-auto">

</footer>
<!-- END OF CSS SECTION ------------------------------------------------------------------------------- -->
<!-- JAVASCRIPT SECTION -------------------------------------------------------------------------------------- -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<!-- END OF JAVASCRIPT SECTION ------------------------------------------------------------------------------- -->
</body>
</html>