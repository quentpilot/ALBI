<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <div class="card">
            <div class="header text-center">
                <h2>Articles de contenu</h2>
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
		                <div class="col-sm-8 col-sm-offset-2">
		                    <div class="input-group input-group-lg">
		                        <span class="input-group-addon">
		                            <i class="material-icons">subtitles</i>
		                        </span>
		                        <div class="form-line">
		                            <input type="text" id="subtitle" name="subtitle" class="form-control" placeholder="Sous-titre">
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
	                    <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="3" id="content" name="content" class="form-control no-resize input-lg" 
                                    placeholder="Contenu de l'article"></textarea>
                                </div>
                            </div>
                            <?= form_error('content',
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
                        <br>
                        <div class="col-sm-4">
		                    <div class="input-group input-group-lg">
		                        <span class="input-group-addon">
		                            <i class="material-icons">camera_roll</i>
		                        </span>
		                        <div class="form-line">
		                            <input type="file" id="image" name="image" class="form-control" placeholder="Image de l'article">
		                            <br />
		                            <h4>Image de l'article</h4>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-4">
                            <select class="form-control show-tick" id="img_pos" name="img_pos">
                                <option value="">-- Position de l'image --</option>
                                <option value="left">gauche</option>
                                <option value="right">droite</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick" id="bg_color" name="bg_color">
                                <option value="">-- Couleur de l'arrière plan --</option>
                                <option value="white">Blanc</option>
                                <option value="grey">Gris</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick" id="position" name="position">
                                <option value="">-- Position de l'article --</option>
                                <option value="1">Première</option>
                                <option value="0">A la suite</option>
                                <option value="-1">Dernière</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick" id="status" name="status">
                                <option value="">-- Statut --</option>
                                <option value="0">Non publié</option>
                                <option value="1">Publié</option>
                            </select>
                        </div>
	                </div>
                    
                    <button class="btn btn-info btn-lg btn-block waves-effect" type="submit" name="submit_content"><i class="fa fa-send-o fa-2x text-bold"></i> 
                    	<b>Enregistrer les informations</b>
                    </button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->