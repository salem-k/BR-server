<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_45060dc6f7d79311d972594380d29670fdc48f8a485c012d02a5d12d60b91a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6e2515669d44cb98b1cb0fdf1b4f6eb0a559618545999e2023819c448c53fb = $this->env->getExtension("native_profiler");
        $__internal_df6e2515669d44cb98b1cb0fdf1b4f6eb0a559618545999e2023819c448c53fb->enter($__internal_df6e2515669d44cb98b1cb0fdf1b4f6eb0a559618545999e2023819c448c53fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>


    <div class=\"container\">
      ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </div>


    <script src=\"/js/jquery-2.1.4.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/js/main.js\"></script>

    ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
  </body>
</html>
";
        
        $__internal_df6e2515669d44cb98b1cb0fdf1b4f6eb0a559618545999e2023819c448c53fb->leave($__internal_df6e2515669d44cb98b1cb0fdf1b4f6eb0a559618545999e2023819c448c53fb_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_4450f4e6728a2506acbed5f09157bba7d60fdfcb8f8145470ea1faff3ef09b72 = $this->env->getExtension("native_profiler");
        $__internal_4450f4e6728a2506acbed5f09157bba7d60fdfcb8f8145470ea1faff3ef09b72->enter($__internal_4450f4e6728a2506acbed5f09157bba7d60fdfcb8f8145470ea1faff3ef09b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4450f4e6728a2506acbed5f09157bba7d60fdfcb8f8145470ea1faff3ef09b72->leave($__internal_4450f4e6728a2506acbed5f09157bba7d60fdfcb8f8145470ea1faff3ef09b72_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0f0a3cad3e070e64b6b8fb2edad0b100eb9a1209b0aa06b04cc5a93d8c64d2b = $this->env->getExtension("native_profiler");
        $__internal_d0f0a3cad3e070e64b6b8fb2edad0b100eb9a1209b0aa06b04cc5a93d8c64d2b->enter($__internal_d0f0a3cad3e070e64b6b8fb2edad0b100eb9a1209b0aa06b04cc5a93d8c64d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap-datetimepicker.min.css\">
    <link rel=\"stylesheet\" href=\"/bootflat/css/bootflat.css\">
    <link href=\"css/backendquizz.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <style>
        h4, h5, h6 {
            margin-top: 7px;
            margin-bottom: 7px;
        }
    </style>
";
        
        $__internal_d0f0a3cad3e070e64b6b8fb2edad0b100eb9a1209b0aa06b04cc5a93d8c64d2b->leave($__internal_d0f0a3cad3e070e64b6b8fb2edad0b100eb9a1209b0aa06b04cc5a93d8c64d2b_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0e4621ae070a47bff0493f1e1dfd9ba257a721469d2966d04664d258765a9b4 = $this->env->getExtension("native_profiler");
        $__internal_e0e4621ae070a47bff0493f1e1dfd9ba257a721469d2966d04664d258765a9b4->enter($__internal_e0e4621ae070a47bff0493f1e1dfd9ba257a721469d2966d04664d258765a9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "      ss
";
        // line 48
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 51
        echo "sde
      ";
        
        $__internal_e0e4621ae070a47bff0493f1e1dfd9ba257a721469d2966d04664d258765a9b4->leave($__internal_e0e4621ae070a47bff0493f1e1dfd9ba257a721469d2966d04664d258765a9b4_prof);

    }

    // line 48
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76a714f0cae9c1bdb78489f1f243fdf0794885c8ae5330e9a6a1eacd23abea26 = $this->env->getExtension("native_profiler");
        $__internal_76a714f0cae9c1bdb78489f1f243fdf0794885c8ae5330e9a6a1eacd23abea26->enter($__internal_76a714f0cae9c1bdb78489f1f243fdf0794885c8ae5330e9a6a1eacd23abea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 49
        echo "  
";
        
        $__internal_76a714f0cae9c1bdb78489f1f243fdf0794885c8ae5330e9a6a1eacd23abea26->leave($__internal_76a714f0cae9c1bdb78489f1f243fdf0794885c8ae5330e9a6a1eacd23abea26_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a4ef3a07038e3050eda94e04e30c9580e50713f9241f5018810907487a4cf11 = $this->env->getExtension("native_profiler");
        $__internal_7a4ef3a07038e3050eda94e04e30c9580e50713f9241f5018810907487a4cf11->enter($__internal_7a4ef3a07038e3050eda94e04e30c9580e50713f9241f5018810907487a4cf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script>
        \$(document).ready(function(){
          \$('.datetimeselect').datetimepicker({
                format: \"dd MM yyyy - hh:ii:ss\"
          });
        });
    </script>
    ";
        
        $__internal_7a4ef3a07038e3050eda94e04e30c9580e50713f9241f5018810907487a4cf11->leave($__internal_7a4ef3a07038e3050eda94e04e30c9580e50713f9241f5018810907487a4cf11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  161 => 61,  153 => 49,  147 => 48,  139 => 51,  137 => 48,  134 => 47,  128 => 46,  108 => 17,  102 => 16,  90 => 13,  80 => 70,  78 => 61,  68 => 53,  66 => 46,  49 => 31,  47 => 16,  41 => 13,  27 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/* */
/* {% block stylesheets %}*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link rel="stylesheet" href="/css/bootstrap.min.css">*/
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="/css/bootstrap-theme.min.css">*/
/*     <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">*/
/*     <link rel="stylesheet" href="/bootflat/css/bootflat.css">*/
/*     <link href="css/backendquizz.css" rel="stylesheet" type="text/css"/>*/
/*     <style>*/
/*         h4, h5, h6 {*/
/*             margin-top: 7px;*/
/*             margin-bottom: 7px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/*     <!-- Custom styles for this template -->*/
/* */
/*     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/* */
/* */
/*     <div class="container">*/
/*       {% block body %}*/
/*       ss*/
/* {% block fos_user_content %}*/
/*   */
/* {% endblock %}*/
/* sde*/
/*       {% endblock %}*/
/*     </div>*/
/* */
/* */
/*     <script src="/js/jquery-2.1.4.min.js"></script>*/
/*     <script src="/js/bootstrap.min.js"></script>*/
/*     <script src="/js/bootstrap-datetimepicker.min.js"></script>*/
/*     <script src="/js/main.js"></script>*/
/* */
/*     {% block javascripts %}*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*           $('.datetimeselect').datetimepicker({*/
/*                 format: "dd MM yyyy - hh:ii:ss"*/
/*           });*/
/*         });*/
/*     </script>*/
/*     {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
