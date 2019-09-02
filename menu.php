<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<div class="navbar desktop">
    <div class="container">
        <div class="row sample-row menu-row" style="width: 100%">
            <div class="col-md-3 menu-logo">
                <img src="assets/img/vitaone.png" alt="">
            </div>
            <div class="col-md-9 menu-itens">
                <div>
                    <a href="#0" class="navbar-link">
                        PROJETOS
                    </a>
                </div>
                <div>
                    <a href="#0" class="navbar-link">
                        SERVICE DESK
                    </a>
                </div>
                <div>
                    <a href="#0" class="navbar-link">
                        ADOPTION
                    </a>
                </div>
                <div>
                    <a href="#0" class="navbar-link">
                        HISTÓRICO
                    </a>
                </div>
                <div>
                    <a href="#0" class="navbar-link">
                        PORTAL DE UTILIZAÇÕES
                    </a>
                </div>
                <div class="dropdown menu-dropdown">
                    <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SERVIÇOS
                        <img src="assets/img/icon-triangle.png" class="menu-icon">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-container">
                            <a href="#0">
                                Link 1
                            </a>
                            <a href="#0">
                                Link 1
                            </a>
                            <a href="#0">
                                Link 1
                            </a>
                            <a href="#0">
                                Link 1
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#0" class="navbar-link">
                        <img src="assets/img/icon-user.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menumobile-content mobile">
    <section class="menumobile mobile">
        <div class="menumobile_container relative">
            <div class="menumobile_toogle" id="sidebartoggle">
                <i class="material-icons">menu</i>
            </div>


            <div class="menumobile_logo">
                <img src="assets/img/vitaone.png" alt="">
            </div>
        </div>

    </section>
</div>


<div class="pushmenu pushmenu-left textCapitalize">
    <div class="center">
        <img src="assets/img/vitaone.png" alt="">
    </div>
    <a href="#0" class="pushmenu-close">PROJETOS</a>
    <a href="#0">SERVICE DESK</a>
    <a href="#0">ADOPTION</a>
    <a href="#0">PORTAL DE UTILIZAÇÕES</a>
    <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        SERVIÇOS
    </a>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <a href="#0">
                Link 1
            </a>
            <a href="#0">
                Link 1
            </a>
            <a href="#0">
                Link 1
            </a>
            <a href="#0">
                Link 1
            </a>
        </div>
    </div>

</div>