<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
   Pw_items_builder.php for PWCMS
   
   Made by Quentin Le Bian
   Contact   <quentin.lebian@pilotaweb.fr>
   
   Started on  Fri Aug 18 11:03:06 2017 quentin
   Last update Fri Aug 18 11:03:42 2017 quentin
*/

class Pw_items_builder {

	/**
    * @Author       : quentpilot {Quentin Le Bian}
    * @Copyright    : MIT - Enjoy and code as you are
    * @Email        : quentin.lebian@pilotaweb.fr
    * @Web          : https://pilotaweb.fr
    * @Date         : 2017-06-30 12:55:00
    * @See          : Pw_items_builder class cms.pilotaweb.fr/doc/class/pw_items_builder
    **/

    protected $pw = NULL; // current instance
    
    /* base item data */
    public $id = 0;
    public $user_id = 0;
    public $title = NULL;
    public $subtitle = NULL;
    public $slug = NULL;
    public $show_title = 1;
    public $content = NULL;
    public $position = 0;
    public $url = NULL;
    public $target = NULL;
    public $icon = NULL;
    public $published = NULL;
    public $edited = NULL;
    public $hits = 0;
    public $status = 0;

    public $app_id = 0;
    public $cat_id = 0;
    public $group_id = 0;

    public $template_id = 0;
    public $css_class = NULL;
    public $js_class = NULL;

    /* built item data as html (ready to be print) */
    public $config = NULL;
    public $content_html = NULL;

    // todo: class which return an instance of current item to build (following config)

    function __construct()
    {
        $this->pw = &get_instance();
    }

    public function set($type = 'article', $app = 'public', $as_object = false)
    {
      $app_type = array('admin', 'public', 'landing');
      $item_type = array('article', 'widget', 'menu', 'page');
      
      if (!in_array($type, $item_type))
        return false;
      if (!in_array($app, $app_type))
        return false;
      
      $this->config['app'] = $app;
      $this->config['type'] = $type;
      $this->config['is_object'] = $as_object;
      return true;
    }

    public function build()
    {
      $builder = $this->config['app'] . '_builder';
      if (method_exists(__CLASS__, $builder))
        return $this->$builder();
      return $this->content_html;
    }

    public function landing_builder($page_id = 0)
    {
      $string = "";
      $string .= $this->pw->load->view('templates/public_master/render/article/header/header', NULL, true);
      $string .= $this->pw->load->view('templates/public_master/render/article/image/icon', NULL, true);
      $string .= $this->pw->load->view('templates/public_master/render/article/custom/custom', NULL, true);
      return $string;
    }

    public function items($type = NULL)
    {
      return "item built !";
    }
}