<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <div class="card">
            <div class="header text-center">
                <h2>Menu de navigation</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Enregistrer</a></li>
                            <li><a href="javascript:void(0);">Aperçu de l'article</a></li>
                            <li><a href="javascript:void(0);">Réinitialiser</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="form_validation" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="material-icons">title</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Titre">
                                </div>
                            </div>
                            <?= form_error('title',
                                '<div class="container-fluid">
                                    <div class="alert alert-warning alert-dismissible text-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5>',
                                        '</h5>
                                    </div>
                                </div>') ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="1" id="subtitle" name="subtitle" class="form-control no-resize input-lg"
                                    placeholder="Description du lien..."></textarea>
                                </div>
                            </div>
                            <?= form_error('subtitle',
                                '<div class="container-fluid">
                                    <div class="alert alert-warning alert-dismissible text-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5>',
                                        '</h5>
                                    </div>
                                </div>') ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="material-icons">insert_link</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" id="url" name="url" class="form-control" placeholder="Url">
                                </div>
                            </div>
                            <?= form_error('url',
                                '<div class="container-fluid">
                                    <div class="alert alert-warning alert-dismissible text-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5>',
                                        '</h5>
                                    </div>
                                </div>') ?>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick input-lg" id="target" name="target">
                                <option value="">-- Cible du lien --</option>
                                <option value="_self">Même onglet</option>
                                <option value="_blank">Nouvel onglet</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick input-lg" id="position" name="position">
                                <option value="">-- Position du lien --</option>
                                <option value="_self">Première</option>
                                <option value="_blank">A la suite</option>
                            </select>
                        </div>
                        <br>
                    </div>
                    
                    <button class="btn btn-info btn-lg btn-block waves-effect" type="submit" name="submit_nav"><i class="fa fa-send-o fa-2x text-bold"></i>
                        <b>Enregistrer les informations</b>
                    </button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->



<!-- Colorful Panel Items With Icon -->
<!--<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
<div class="card">
    <div class="header text-center">
        <h2>
            Menu de navigation
        </h2>
        <ul class="header-dropdown m-r--5">
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">more_vert</i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);">Enregistrer</a></li>
                    <li><a href="javascript:void(0);">Aperçu de l'article</a></li>
                    <li><a href="javascript:void(0);">Réinitialiser</a></li>
                </ul>
            </li>
        </ul>
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

    

        </div>
    </div>
</div>

</div>
</div>-->