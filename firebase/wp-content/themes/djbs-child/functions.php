<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//Custom CSS On Login Page
function my_login_page_remove_back_to_link() { ?>
    <style type="text/css">
        body.wp-core-ui{
          background: white;
        }
        .login #loginform{
          box-shadow: none;
        }
        .login form .input{
          border-radius: 25px;
        }
        .login form input[type=text],
        .login form input[type=password]{
          width: 300px;
          background: white;
          padding-left:10px;
          background-image:none;
        }
        .login .button-primary {
          float: left;
        }
        .login .forgetmenot,
        #nav,
        #backtoblog{
          display:none;
        }
        .login form input[type=text]:focus,
        .login form input[type=password]:focus{ 
          outline: none;
          border-color: none;
          box-shadow: 0 0 10px #e8e9eb;
          border:none;
        }
        #wp-submit{
          float:left;
          margin:10px 110px;
          background: #e8e9eb;
          border:none;
          text-shadow:none;
          color:black;
          box-shadow: none;
          border: 1px solid #f2f2f2;
          border-radius: 4px;
          color: #5F6368;
          font-size: 14px;
   
          
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_page_remove_back_to_link' );

// Set Custom Logo 
function custome_logo_change() { ?>
  <style type="text/css">
       #login > h1 > a{
           background-image: url('<?php echo site_url();?>/wp-content/themes/djbs-child/assets/images/download.jpeg');/
  height:65px;
  width:320px;
  background-size: 320px 65px;
  background-repeat: no-repeat;
        padding-bottom: 30px;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'custome_logo_change' );