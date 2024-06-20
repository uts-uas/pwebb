<body>
    
<!-- navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- logo -->
 <img src="<?= BURL ?>/img/logo.png" alt="" width="50px">


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

   

    
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link" href="#" id="messagesDropdown" >
            test
        </a>
    </li>

    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link" href="#" id="messagesDropdown" >
            test
        </a>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button class="btn btn-primary">Login</button>
        </a>
        
    </li>

</ul>
</nav>

<!-- main -->
 <section style="margin : -24px;">
    <div class="position-relative h-100">
        <img class="position-absolute top-0 z-0" src="<?= BURL ?>/img/bordertop.png" alt="" width="100%" height="400px">
        <div class="position-absolute z-1 d-flex justify-content-between flex-row w-100 h-100" style="margin-top : 20rem">
            <div style="margin-top : 6rem; margin-left : 10rem; font-size: 42px;" class="main-text">
                <p class="text-dark">Learn One Thing on Many Ways</p>
                <p class="text-dark">'cause</p>
                <p class="text-primary"><strong>"You don't understand anything until you learn it more than one way"</strong></p>
                <p class="text-primary">-Marvin Minsky</p>
            </div>
            <img style="width : 791px; height : 487px; margin-right : 50px"src="<?= BURL ?>/img/maingraphic.png" alt="">
        </div>
    </div>
 </section>
<!-- end of main -->
</body>