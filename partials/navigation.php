<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <div class="navbar-logo-wrapper">
                <a class="navbar-logo" href="/">
                    <?php include('components/logo.php'); ?>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-language dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Lithuanian</a>
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Russian</a>
                        </div>
                    </li>
                    <?php include('menu.php'); ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
