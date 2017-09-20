<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
        <div class="card">
            <div class="header text-center">
                <h2>Article informatif de bas de page</h2>
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
		                
	                    <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="3" id="content" name="content" class="form-control no-resize" 
                                    placeholder="&copy; Copyright du site">&copy;</textarea>
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
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email de contact">
                                </div>
                            </div>
                            <?= form_error('email',
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
	                </div>
                    
                    <button class="btn btn-info btn-lg btn-block waves-effect" type="submit" name="submit_footer"><i class="fa fa-send-o fa-2x text-bold"></i> 
                    	<b>Enregistrer les informations</b>
                    </button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->