<?php //debug($admin_sidebar_menu) ?>

<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <a href="<?= site_url('admin/pilotaweb/app/landing/new') ?>" title="Créer un nouveau site">
                    <i class="material-icons">add_to_queue</i>
                </a>
            </div>
            <div class="content">
                <div class="text">LANDING</div>
                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <a href="<?= site_url('admin/pilotaweb/app/vitrine/new') ?>" title="Créer un nouveau site">
                    <i class="material-icons">add_to_queue</i>
                </a>
            </div>
            <div class="content">
                <div class="text">VITRINE</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <a href="<?= site_url('admin/pilotaweb/app/shop/new') ?>" title="Créer un nouveau site">
                    <i class="material-icons">add_to_queue</i>
                </a>
            </div>
            <div class="content">
                <div class="text">SHOP</div>
                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <a href="<?= site_url('admin/pilotaweb/app/blog/new') ?>" title="Créer un nouveau site">
                    <i class="material-icons">add_to_queue</i>
                </a>
            </div>
            <div class="content">
                <div class="text">BLOG</div>
                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Widgets -->


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
                    <li class="active"><a data-toggle="pill" href="#home"><h5>Aperçu</h5></a></li>
                    <li><a data-toggle="pill" href="#menu1"><h5>Navigation</h5></a></li>
                    <li><a data-toggle="pill" href="#menu2"><h5>En-tête</h5></a></li>
                    <li><a data-toggle="pill" href="#menu3"><h5>Contenu principal</h5></a></li>
                    <li><a data-toggle="pill" href="#menu4"><h5>Pied de page</h5></a></li>
                    <li><a data-toggle="pill" href="#menu5"><h5>Informations complémentaires</h5></a></li>
                    <li><a data-toggle="pill" href="#menu6"><h5>Paramètres</h5></a></li>
                </ul>
                  
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Aperçu du site</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        
                        <!-- Colorful Panel Items With Icon -->
                        
                            <div class="card">
                                <div class="header text-center">
                                    <h2>
                                        Menu de navigation
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 ol-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                                            <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-col-pink">
                                                    <div class="panel-heading" role="tab" id="headingOne_17">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
                                                                <i class="material-icons">menu</i> #1 - Hello
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-cyan">
                                                    <div class="panel-heading" role="tab" id="headingTwo_17">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                                               aria-controls="collapseTwo_17">
                                                                <i class="material-icons">menu</i> #2 - Nos services
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-teal">
                                                    <div class="panel-heading" role="tab" id="headingThree_17">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false"
                                                               aria-controls="collapseThree_17">
                                                                <i class="material-icons">menu</i> #3 - Nos tarifs
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-orange">
                                                    <div class="panel-heading" role="tab" id="headingFour_17">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseFour_17" aria-expanded="false"
                                                               aria-controls="collapseFour_17">
                                                                <i class="material-icons">menu</i> #4 - Découvrir
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-cyan">
                                                    <div class="panel-heading" role="tab" id="headingFive_17">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseFive_17" aria-expanded="false"
                                                               aria-controls="collapseFive_17">
                                                                <i class="material-icons">menu</i> #5 - Contact
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFive_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_17">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="col-xs-12 ol-sm-12 col-md-3 col-lg-3 pull-right">
                                            
                                        </div>-->

                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="header text-center">
                                    <h2>
                                        Paramètres du menu de navigation
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 ol-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                                            <div class="panel-group" id="accordion_18" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-col-pink">
                                                    <div class="panel-heading" role="tab" id="headingOne_18">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseOne_18" aria-expanded="true" aria-controls="collapseOne_18">
                                                                <i class="material-icons">menu</i> #1 - Hello
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne_18" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_18">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-cyan">
                                                    <div class="panel-heading" role="tab" id="headingTwo_18">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseTwo_18" aria-expanded="false"
                                                               aria-controls="collapseTwo_18">
                                                                <i class="material-icons">menu</i> #2 - Nos services
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_18">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-teal">
                                                    <div class="panel-heading" role="tab" id="headingThree_18">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseThree_18" aria-expanded="false"
                                                               aria-controls="collapseThree_18">
                                                                <i class="material-icons">menu</i> #3 - Nos tarifs
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_18">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-orange">
                                                    <div class="panel-heading" role="tab" id="headingFour_18">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseFour_18" aria-expanded="false"
                                                               aria-controls="collapseFour_18">
                                                                <i class="material-icons">menu</i> #4 - Découvrir
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_18">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-col-cyan">
                                                    <div class="panel-heading" role="tab" id="headingFive_18">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseFive_18" aria-expanded="false"
                                                               aria-controls="collapseFive_18">
                                                                <i class="material-icons">menu</i> #5 - Contact
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFive_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_18">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                            raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                            accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="col-xs-12 ol-sm-12 col-md-3 col-lg-3 pull-right">
                                            
                                        </div>-->

                                    </div>
                                </div>
                            </div>
                            
                        
                        <!-- #END# Colorful Panel Items With Icon -->

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Article vitrine</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Articles de contenu</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Article récapitulatif</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <h3>Données supplémentaires</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu6" class="tab-pane fade">
                        <h3>Paramètres du site</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
</div>
        