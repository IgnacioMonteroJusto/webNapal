<?php
class Pages extends MX_Controller 
{

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $data['module'] = "pages";
        /* Content es la pantalla principal
         * Se le tienen que pasar las noticias y los videos que 
         * hay en la web.Tendran que ser consultas separadas para cada parte del
         * contenido.
         */
             
        $data['view_file'] = "inicio";
        $data['title'] = "Developers";
        //$this->load->view('tasks/display',$data);
        echo Modules::run('template/web_template',$data);
    }
    
    
    function contact(){
        
        if(!isset($data['view_file'])){
            $data['view_file'] = "contact";
        }
        $data['title'] = "CONTACTO";
        echo Modules::run('template/web_template',$data);
    }
    
    function aboutus(){
        
        if(!isset($data['view_file'])){
            $data['view_file'] = "aboutus";
        }
        $data['title'] = "About Us";
        echo Modules::run('template/web_template',$data);
    }
    
    function whatdo(){
        
        if(!isset($data['view_file'])){
            $data['view_file'] = "whatdo";
        }
        $data['title'] = "What we do";
        echo Modules::run('template/web_template',$data);
    }
    
    function howwork(){
        
        if(!isset($data['view_file'])){
            $data['view_file'] = "howwork";
        }
        $data['title'] = "How We Work";
        echo Modules::run('template/web_template',$data);
    }
    
        
    function noticias(){
        
        if(!isset($data['view_file'])){
            $data['view_file'] = "noticias";
        }
        
        $data['title'] = "Noticias";
        
        echo Modules::run('template/web_template',$data);
    }


}
