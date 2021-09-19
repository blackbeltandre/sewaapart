<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    /**
         * Project : Jual ,Beli ,Sewa Apartemen Kalibata City 
         * Founder & CEO , Developer : PT. Payung Anak Bangsa , Andre Marbun M.TI, PMP
         * @mail : developerpdak@gmail.com
         * Contack Phone : 085206451636
         * Build date on : 03-08-2020
         */
        public function __construct()
    {
    parent::__construct();      
        header("Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT"); 
        header("Expires: " . gmdate( "D, j M Y H:i:s", time() ) . " GMT"); 
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", FALSE);
        header("Pragma: no-cache");
        $this->load->helper('text');
        $this->load->database();
        $this->load->helper(array('url','html','form','text'));
    $this->load->library(array('form_validation','upload','session'));
        $this->load->model('welcome_model');   
        $this->load->database();
    }
    function save_message()
   {
               
                $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters("<div class='alert alert-dismissable alert-danger'><button type='button' class='close' data-dismiss='alert'>
                                                        x
                                                   </button>", "</button></div>");
        $this->form_validation->set_rules('nama', 'Name', 'required|min_length[3]|max_length[225]');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('description', 'Messages', 'required');

         if ($this->form_validation->run() == FALSE)
        {
                    $data['menu_product'] = $this->welcome_model->show_all_gallery();

             $data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
            $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
            $data['main']= "faq";
            $this->load->view('main_v',$data);
        }
        else
        {
           $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                 'date_post' => date("Y/m/d H:i:s"),
                'website' => $this->input->post('website'),
                'status' => 0

            );
        $create  = $this->db->insert('faq',$data);
        if ($create) $this->session->set_flashdata('message', "<div class='alert alert-dismissable alert-info'><button type='button' class='close' data-dismiss='alert'>
                                            <font size ='2' color='black'>
                                                <strong>x</strong>
                                            </font></button><strong><p align='center'>Message sent, we'll review Your message asap, thankyou!</button></p></strong></div>");
     
        else
             $this->session->set_flashdata('message', "<div class='alert alert-info alert-block'><button type='button' class='close' data-dismiss='alert'>
                                            <font size ='2' color='black'>
                                                <strong>x</strong>
                                            </font></button><strong><p align='center'>Something Wrong!</button></p></strong></div>");
                redirect('page/faq');   
            }
        }
    public function blog()
    {
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $config['base_url'] = site_url('article/index');
        $config['total_rows'] = $this->welcome_model->count_data_article();
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['list_article'] = $this->welcome_model->show_data_article($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
            $data['menu_product'] = $this->welcome_model->show_all_gallery();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "blog";
    $this->load->view('main_v',$data);
    }
    public function gallery()
    {
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $config['base_url'] = site_url('product/index');
        $config['total_rows'] = $this->welcome_model->count_data_gallery();
        $config['per_page'] = "3";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['list_gallery'] = $this->welcome_model->show_data_gallery($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['menu_product'] = $this->welcome_model->show_all_gallery();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "gallery";
    $this->load->view('main_v',$data);
    }
     public function unit($id_category){
  $data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
$config['base_url'] = site_url('unit/'.$id_category."/");
$this->db->select("a.*,b.*");
             $this->db->from("gallery a");
        $this->db->join("category_gallery b","a.id_category=b.id_category","left");
        $this->db->where("a.id_category",$id_category);
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = "12";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['list_article'] = $this->welcome_model->show_data_article($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
            $data['menu_product'] = $this->welcome_model->show_all_gallery();
        $data['show_room_category_detail'] = $this->welcome_model->show_room_category_detail($config["per_page"], $data['page'],$id_category);
       $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Unit";
    $data['main']= "Unit";
    $this->load->view('main_v',$data);
    }
	public function index()
	{
$data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['show_room_by_cat_jual'] = $this->welcome_model->show_room_by_cat_jual();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
	$data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    // $data['about'] = $this->welcome_model->about();
	
	$data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "home_v";
    $this->load->view('main_template',$data);
	}
    public function detail($slug_sub_page){
 $data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['page_detail'] = $this->welcome_model->show_page_detail($slug_sub_page);  
    $this->db->set('counter', 'coalesce(counter, 0)+1', FALSE);
    $this->db->where("slug_sub_page",$slug_sub_page);
    $this->db->update('sub_page');  
    $data['title'] = "About Us";
    $data['main']= "page_detail";
    $this->load->view('main_v',$data);
    }
    public function faq()
    {
     $data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "faq";
    $this->load->view('main_v',$data);
    }
    public function search_article(){
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $title = $this->input->post('title');
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $data['list_article'] = $this->welcome_model->show_list_article();
    $data['list_category'] = $this->welcome_model->show_list_category();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['trending_article'] = $this->welcome_model->trending_article();
    $data['article_detail'] = $this->welcome_model->search_article($title); 
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "search_article";
    $this->load->view('main_v',$data);
    }
	public function article_by_tag($tag)
    {
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $pattern = '/-/i';
    $tag = preg_replace($pattern, ' ', $tag);
    // var_dump($category_article);
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $data['list_article'] = $this->welcome_model->show_list_article();
    $data['list_category'] = $this->welcome_model->show_list_category();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['trending_article'] = $this->welcome_model->trending_article();
    $data['article_detail'] = $this->welcome_model->show_article_by_tag($tag); 
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "article_by_tag";
    $this->load->view('main_v',$data);
    }
    public function category_article($category_article)
    {
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $pattern = '/-/i';
    $category_article = preg_replace($pattern, ' ', $category_article);
    // var_dump($category_article);
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $data['list_article'] = $this->welcome_model->show_list_article();
    $data['list_category'] = $this->welcome_model->show_list_category();
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['trending_article'] = $this->welcome_model->trending_article();
    $data['article_detail'] = $this->welcome_model->show_category_article($category_article); 
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "article_category";
    $this->load->view('main_v',$data);
    }
    public function article_detail($slug_article)
    {
    $data['menu_product'] = $this->welcome_model->show_all_gallery();    
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();    
    $data['menu_footer'] = $this->welcome_model->show_menu()->result_array();
    $data['list_article'] = $this->welcome_model->show_list_article();
    $data['list_category'] = $this->welcome_model->show_list_category();
    $data['header_article_detail'] = $this->welcome_model->show_article_detail($slug_article); 
    $data['all_tags_article'] = $this->welcome_model->show_all_tags_article();
    $data['trending_article'] = $this->welcome_model->trending_article();
    $data['article_detail'] = $this->welcome_model->show_article_detail($slug_article); 
    $this->db->set('counter', 'coalesce(counter, 0)+1', FALSE);
    $this->db->where("slug_article",$slug_article);
    $this->db->update('master_article');
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
    $data['all_tags'] = $this->welcome_model->show_all_tags_article();
    $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "article_detail";
    $this->load->view('main_v',$data);
    }
    public function unit_detail($id_gallery,$id_category)
    {
   
    $this->db->set('counter', 'coalesce(counter, 0)+1', FALSE);
    $this->db->where("id_gallery",$id_gallery);
    $this->db->update('gallery');
    $data['unit_detail'] = $this->welcome_model->show_gallery_detail($id_gallery);    
     $data['related_unit'] = $this->welcome_model->show_related_unit($id_gallery,$id_category);    
     $data['not_related_unit'] = $this->welcome_model->show_not_related_unit($id_gallery,$id_category);   
   $data['mobile_room_category'] = $this->welcome_model->show_room_category();
    $data['mobile_menu'] = $this->welcome_model->show_menu()->result_array();
    $data['show_room_by_cat'] = $this->welcome_model->show_room_by_cat();
    $data['show_room_by_cat_jual'] = $this->welcome_model->show_room_by_cat_jual();
    $data['about'] = $this->welcome_model->show_page_about();
    $data['room_category'] = $this->welcome_model->show_room_category();
    $data['menu'] = $this->welcome_model->show_menu()->result_array();
    $data['slide_active'] = $this->welcome_model->slide_active();
    $data['slide_item'] = $this->welcome_model->slide_item();
    $data['latest_article'] = $this->welcome_model->show_latest_article();
     $data['title'] = "Jual ,Beli ,Sewa Apartemen Kalibata City";
    $data['main']= "Unit_detail";
    $this->load->view('main_unit',$data);
    }
}

