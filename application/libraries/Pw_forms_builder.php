<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
   Pw_forms_builder.php for PWCMS
   
   Made by Quentin Le Bian
   Contact   <quentin.lebian@pilotaweb.fr>
   
   Started on  Fri Aug 18 11:03:06 2017 quentin
   Last update Fri Aug 18 11:03:42 2017 quentin
*/

class Pw_forms_builder {

	/**
    * @Author       : quentpilot {Quentin Le Bian}
    * @Copyright    : MIT - Enjoy and code as you are
    * @Email        : quentin.lebian@pilotaweb.fr
    * @Web          : https://pilotaweb.fr
    * @Date         : 2017-06-30 12:55:00
    * @See          : Pw_forms_builder class cms.pilotaweb.fr/doc/class/pw_forms_builder
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

    public function format_post($form_type = NULL)
    {
      $data = $_POST;
      $tab = array();
      
      if (is_null($form_type))
        return false;
      unset($data["submit_$form_type"]);
      $tab[$form_type] = array();
      /*foreach ($data as $key => $value) 
      {
        array_push($tab, array($key => $value));
      }*/
      $num = count($tab[$form_type]);
      $tab[$form_type] = array($num, $data);
      return $tab;
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
      $app_id = $this->pw->pw_database->get('apps', "slug = 'landing'", 'id', 1);
      $this->config['app_id'] = $app_id['id'];
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
      // get all items which is of landing app type
      // then get data and loop to each item type to built them
      $items = $this->get();
      if (!$items)
        return NULL;
      //debug($items);
      $string = "";
      $string .= $this->pw->load->view('templates/public_master/render/article/header/header', NULL, true);
      $string .= $this->pw->load->view('templates/public_master/render/article/image/icon', NULL, true);
      $string .= $this->pw->load->view('templates/public_master/render/article/custom/custom', NULL, true);
      return $string;
    }

    public function get()
    {
      if (is_null($this->config['app']) && $this->config['app_id'] > 0)
          return false;

      $req = $this->pw->db->select()
                  ->from('items_apps')
                  ->where('app_id', $this->config['app_id'])
                  ->join('items_category', 'items_category.item_id = items_apps.item_id')
                  ->join('items_groups', 'items_groups.item_id = items_apps.item_id')
                  ->join('items_style', 'items_style.item_id = items_apps.item_id')
                  ->join('items', 'items_apps.item_id = items.id')
                  ->where('items.status = 1')
                  ->order_by('items.position')
                  ->get();

      if (!($nb = $req->num_rows()))
          return false;

      $items = $req->result_array();
      return $items;
    }

    public function items($type = NULL)
    {
      return "item built !";
    }
}