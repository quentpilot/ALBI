<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Gérer la page du site</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Enregistrer</a></li>
                            <li><a href="javascript:void(0);">Aperçu du site</a></li>
                            <li><a href="javascript:void(0);">Réinitialiser</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="pill" href="#menu1"><h5>Aperçu</h5></a></li>
                    <li><a data-toggle="pill" href="#menu2"><h5>Navigation</h5></a></li>
                    <li><a data-toggle="pill" href="#menu3"><h5>En-tête</h5></a></li>
                    <li><a data-toggle="pill" href="#menu4"><h5>Contenu principal</h5></a></li>
                    <li><a data-toggle="pill" href="#menu5"><h5>Pied de page</h5></a></li>
                    <li><a data-toggle="pill" href="#menu6"><h5>Informations complémentaires</h5></a></li>
                    <li><a data-toggle="pill" href="#menu7"><h5>Paramètres</h5></a></li>
                </ul>
                  
                <div class="tab-content">

                              <!--<?= validation_errors(
                                '<div class="container-fluid">
                                    <div class="alert alert-info alert-dismissible text-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4>',
                                        '</h4>
                                    </div>
                                </div>') ?>-->

                    <div id="menu1" class="tab-pane fade in active">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-preview.php"); ?>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-nav.php"); ?>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-header.php"); ?>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-content.php"); ?>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-footer.php"); ?>
                    </div>
                    <div id="menu6" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-info.php"); ?>
                    </div>
                    <div id="menu7" class="tab-pane fade">
                        <?php $this->load->view("templates/$template/LandingBuilder/forms/new/new-settings.php"); ?>
                    </div>
                    
                </div>

                <ul class="nav nav-tabs">
                    <li><a data-toggle="pill" href="#menu1"><h5>Aperçu</h5></a></li>
                    <li><a data-toggle="pill" href="#menu2"><h5>Navigation</h5></a></li>
                    <li><a data-toggle="pill" href="#menu3"><h5>En-tête</h5></a></li>
                    <li><a data-toggle="pill" href="#menu4"><h5>Contenu principal</h5></a></li>
                    <li><a data-toggle="pill" href="#menu5"><h5>Pied de page</h5></a></li>
                    <li><a data-toggle="pill" href="#menu6"><h5>Informations complémentaires</h5></a></li>
                    <li><a data-toggle="pill" href="#menu7"><h5>Paramètres</h5></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
</div>