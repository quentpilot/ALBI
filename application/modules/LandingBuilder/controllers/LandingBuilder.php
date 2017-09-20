<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	/******************************
    *
    * LandingBuilder.php for PWCMS in 
    *
    * Made by Quentin Le Bian
    * Contact   <quentin.lebian@pilotaweb.fr>
    *
    * Started on  Wed Jul 5 17:20:30 2017 quentin
    * Last update Thu Jul 6 09:22:42 2017 quentin
    *
    ******************************/

class LandingBuilder extends Builder_Controller {
	/**
	* @Author		: quentpilot {Quentin Le Bian}
	* @Copyright    : MIT - Enjoy and code as you are
	* @Email		: quentin.lebian@pilotaweb.fr
	* @Web			: https://pilotaweb.fr
	* @Date			: 2017-07-05 17:20:30
	* @See			: Builder_Controller class
	**/

	public function __construct()
	{
		// set parameters for '$render_path' var
		// used for render() method when calling view to application/views/templates/
		parent::__construct('LandingBuilder');
	}

	public function index()
	{
		$this->data['page_title'] = 'PWCMS - Pilot A Web Landing';
		$this->data['module_title'] = 'Welcome to your custom Landing Page dashboard';
		$this->render($this->data['render_path'] . 'dashboard');
	}

	public function dashboard()
	{
		$this->data['page_title'] = 'PWCMS - Pilot A Web Landing';
		$this->data['module_title'] = 'Welcome to your custom Landing Page dashboard';
		$this->render($this->data['render_path'] . 'dashboard');
	}

	public function new()
	{
		$this->load->model('landingbuilder_model');
		// valid forms
		$form_sent = $this->landingbuilder_model->form_type;
		$form_message = array();
		
		if ($this->form_validation->run('admin_edit_landing_page_builder_'.$form_sent))
		{
			if (!$this->landingbuilder_model->set())
				$form_message = $this->landingbuilder_model->messages;
			elseif (!$this->landingbuilder_model->new())
				$form_message = $this->landingbuilder_model->messages;
			else
				$form_message = $this->landingbuilder_model->messages;
		}

		$this->session->set_flashdata($form_message);

		// load view
		$this->data['page_title'] = 'PWCMS - Nouveau site';
		$this->data['module_title'] = 'Création d\'une landing page.';
		$this->render($this->data['render_path'] . 'forms/new/new.php');
	}

	public function edit()
	{
		$this->data['page_title'] = 'PWCMS - Edition du site';
		$this->data['module_title'] = 'Edition d\'une landing page.';
		$this->render($this->data['render_path'] . 'forms/new/new.php');
	}
}