<div class="menu header-logo-center-menu-below oxy-mega-menu navbar navbar-static-top text-none" id="masthead">
    <div class="logo-navbar container-logo">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php" id="home"> <img alt="Lambda - Charity" src="assets/img/logo.png"> </a>
                <div class="logo-sidebar"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav-container clearfix">
            <nav class="collapse navbar-collapse main-navbar">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item <?php if ($page_name == 'index.php'): ?>
                            active
                        <?php endif ?>"> <a href="index.php">Home</a> </li>
                        <li class="dropdown <?php if ($page_name == 'bio.php'): ?>
                            active
                        <?php endif ?> "> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bio</a> 
                            <ul class="dropdown-menu">
                              <li style="font-size: 18px;"><a target="_self" href="bio.php">Patricia Hernández</a></li>
                              <li class="divider"></li>
                              <li style="font-size: 18px;"><a target="_self" href="bio.php">Colaboradores</a></li>
                            </ul>
                        </li>
                        <li class="menu-item <?php if ($page_name == 'portafolio.php'): ?>
                            active
                        <?php endif ?> "> <a href="portafolio.php">Portafolio</a> </li>
                        <li class="menu-item <?php if ($page_name == 'letras.php'): ?>
                            active
                        <?php endif ?> "> <a href="contacto.php">Letras</a> </li>
                        <li class="menu-item <?php if ($page_name == 'contacto.php'): ?>
                            active
                        <?php endif ?> "> <a href="contacto.php">Contacto</a> </li>
                    </ul>
                </div>
                <div class="menu-sidebar"></div>
            </nav>
        </div>
    </div>
</div>