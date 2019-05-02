<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Styles{    
    var $CI;
    var $routes = array();
    public function __construct()
    {                
        $this->CI=& get_instance();
        $this->CI->load->helper('url_helper'); 
        // $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        // $this->CI->load->database();
    }
    public function getstyle()
    {   
        //css loader
        $this->routes['css']['bootstrap.min.css'] = "templates_failures/css/bootstrap.min.css";
        $this->routes['css']['font-awesome.min.css'] = "templates_failures/css/font-awesome.min.css";
        $this->routes['css']['google-font.css'] = "templates_failures/css/google-font.css";
        $this->routes['css']['nouislider.min.css'] = "templates_failures/css/nouislider.min.css";
        $this->routes['css']['slick.css'] = "templates_failures/css/slick.css";
        $this->routes['css']['slick-theme.css'] = "templates_failures/css/slick-theme.css";
        $this->routes['css']['style.css'] = "templates_failures/css/style.css";                

        //fonts loader
        $this->routes['fonts']['FontAwesome.otf'] = "templates_failures/fonts/FontAwesome.otf";
        $this->routes['fonts']['fontawesome-webfont.eot'] = "templates_failures/fonts/fontawesome-webfont.eot";
        $this->routes['fonts']['fontawesome-webfont.svg'] = "templates_failures/fonts/fontawesome-webfont.svg";
        $this->routes['fonts']['fontawesome-webfont.ttf'] = "templates_failures/fonts/fontawesome-webfont.ttf";
        $this->routes['fonts']['fontawesome-webfont.woff'] = "templates_failures/fonts/fontawesome-webfont.woff";
        $this->routes['fonts']['fontawesome-webfont.woff2'] = "templates_failures/fonts/fontawesome-webfont.woff2";
        $this->routes['fonts']['slick.eot'] = "templates_failures/fonts/slick.eot";
        $this->routes['fonts']['slick.svg'] = "templates_failures/fonts/slick.svg";
        $this->routes['fonts']['slick.ttf'] = "templates_failures/fonts/slick.ttf";
        $this->routes['fonts']['slick.woff'] = "templates_failures/fonts/slick.woff";

        //img loader
        $this->routes['img']['asus.png'] = "templates_failures/img/asus.png";        
        $this->routes['img']['asus2.png'] = "templates_failures/img/asus2.png";        
        $this->routes['img']['asus3.png'] = "templates_failures/img/asus3.png";
        $this->routes['img']['hotdeal.png'] = "templates_failures/img/hotdeal.png";
        $this->routes['img']['hp.jpg'] = "templates_failures/img/hp.jpg";
        $this->routes['img']['hp.png'] = "templates_failures/img/hp.png";        
        $this->routes['img']['logo.png'] = "templates_failures/img/logo.png";
        $this->routes['img']['product01.png'] = "templates_failures/img/product01.png";
        $this->routes['img']['product02.png'] = "templates_failures/img/product02.png";
        $this->routes['img']['product03.png'] = "templates_failures/img/product03.png";
        $this->routes['img']['product04.png'] = "templates_failures/img/product04.png";
        $this->routes['img']['product05.png'] = "templates_failures/img/product05.png";
        $this->routes['img']['product06.png'] = "templates_failures/img/product06.png";
        $this->routes['img']['product07.png'] = "templates_failures/img/product07.png";
        $this->routes['img']['product08.png'] = "templates_failures/img/product08.png";
        $this->routes['img']['product09.png'] = "templates_failures/img/product09.png";
        $this->routes['img']['shop01.png'] = "templates_failures/img/shop01.png";
        $this->routes['img']['shop02.png'] = "templates_failures/img/shop02.png";
        $this->routes['img']['shop03.png'] = "templates_failures/img/shop03.png";

        //js loader
        $this->routes['js']['bootstrap.min.js'] = "templates_failures/js/bootstrap.min.js";
        $this->routes['js']['jquery.min.js'] = "templates_failures/js/jquery.min.js";
        $this->routes['js']['jquery.zoom.min.js'] = "templates_failures/js/jquery.zoom.min.js";
        $this->routes['js']['main.js'] = "templates_failures/js/main.js";
        $this->routes['js']['nouislider.min.js'] = "templates_failures/js/nouislider.min.js";
        $this->routes['js']['slick.min.js'] = "templates_failures/js/slick.min.js";
        
        //screenshot loader
        $this->routes['screenshot']['Checkout.png'] = "templates_failures/screenshot/Checkout.png";        
        $this->routes['screenshot']['Index.png'] = "templates_failures/screenshot/Index.png";            
        $this->routes['screenshot']['Product.png'] = "templates_failures/screenshot/Product.png";        
        $this->routes['screenshot']['Regular.png'] = "templates_failures/screenshot/Regular.png";                
        $this->routes['screenshot']['Store.png'] = "templates_failures/screenshot/Store.png";                
        
        return $this->routes;
    }
}