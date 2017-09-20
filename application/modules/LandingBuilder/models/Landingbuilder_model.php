<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/******************************
    *
    * Landingbuilder_model.php for PWCMS in 
    *
    * Made by Quentin Le Bian
    * Contact   <quentin.lebian@pilotaweb.fr>
    *
    * Started on  Thu Aug 23 13:20:18 2017 quentin
    * Last update Thu Jun 29 23:22:42 2017 quentin
    *
    ******************************/
 
class Landingbuilder_Model extends PW_Model {
	/**
	* @Author		: quentpilot {Quentin Le Bian}
	* @Copyright    : MIT - Enjoy and code as you are
	* @Email		: quentin.lebian@pilotaweb.fr
	* @Web			: https://pilotaweb.fr
	* @Date			: 2017-08-24 13:20:18
	* @See			: PW_Model class
	**/

	public $messages = array();
	public $form_type = NULL;
	public $form_data = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->form_type = $this->get_form();
	}

	public function set()
	{
		$method = "valid_". $this->form_type;
		if (method_exists(__CLASS__, $method))
		{
			$this->form_data = $this->pw_forms_builder->format_post($this->form_type);
			if ($this->landingbuilder_model->$method())
				return true;
		}
		return false;
	}

	public function new()
	{
		$method = "new_".$this->form_type;
		if (method_exists(__CLASS__, $method))
			return $this->$method();
		return false;
	}

	public function edit()
	{
		$method = "edit_".$this->form_type;
		if (method_exists(__CLASS__, $method))
			return $this->$method();
		return false;
	}

	public function get_form()
	{
		$form_tab = array('header', 'nav', 'content', 'footer', 'info', 'settings');

		foreach ($_POST as $key => $value) 
		{
			$tab_name = explode('_', $key);
			if ($tab_name[0] == 'submit' && in_array($tab_name[1], $form_tab))
				return $tab_name[1];
		}
		return NULL;
	}

	public function get_active_form()
	{
		$form_tab = array('header', 'nav', 'content', 'footer', 'info', 'settings');
		$it = 1;
		$tab_info = array();
		$result = array();

		foreach ($_POST as $key => $value) 
		{
			$tab_name = explode('_', $key);
			if ($tab_name[0] == 'submit' && in_array($tab_name[1], $form_tab))
			{
				//$tab_info = array('id' => "menu$id", 'class' => 'active');
				//array_merge($result, $tab_info);
				return "menu$it";
			}
			$it++;
		}
		return "menu1";
	}

	protected function valid_header()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function valid_nav()
	{
		//debug($this->form_data);
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function valid_content()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function valid_footer()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function valid_info()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function valid_settings()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_header()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_nav()
	{
		//debug($this->form_data);
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_content()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_footer()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_info()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function new_settings()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_header()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_nav()
	{
		//debug($this->form_data);
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_content()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_footer()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_info()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}

	protected function edit_settings()
	{
		$message = array(
			'message' => "<b>Une erreur s'est produite lors de la tentative de sauvegarde.</b>",
			'class' => 'warning'
		);
		return $message;
	}
}