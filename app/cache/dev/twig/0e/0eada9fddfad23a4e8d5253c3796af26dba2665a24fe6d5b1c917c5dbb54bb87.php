<?php

/* ::base.html.twig */
class __TwigTemplate_39a92147b382e5d6dedff88d2e00df15bbdcbc85909851707ddac03c2c19a6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d6e62efb043e540c636d1f9177e672fb8868c6607e5314de806c9fe07e8799b = $this->env->getExtension("native_profiler");
        $__internal_8d6e62efb043e540c636d1f9177e672fb8868c6607e5314de806c9fe07e8799b->enter($__internal_8d6e62efb043e540c636d1f9177e672fb8868c6607e5314de806c9fe07e8799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 47
        echo "    </div>


    <script src=\"/js/jquery-2.1.4.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/js/main.js\"></script>

    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    
  </body>
</html>
";
        
        $__internal_8d6e62efb043e540c636d1f9177e672fb8868c6607e5314de806c9fe07e8799b->leave($__internal_8d6e62efb043e540c636d1f9177e672fb8868c6607e5314de806c9fe07e8799b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d5c97e71c2f8d2782de526751f2613a097bbedd28962ce6f037913ada8549a1 = $this->env->getExtension("native_profiler");
        $__internal_4d5c97e71c2f8d2782de526751f2613a097bbedd28962ce6f037913ada8549a1->enter($__internal_4d5c97e71c2f8d2782de526751f2613a097bbedd28962ce6f037913ada8549a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d5c97e71c2f8d2782de526751f2613a097bbedd28962ce6f037913ada8549a1->leave($__internal_4d5c97e71c2f8d2782de526751f2613a097bbedd28962ce6f037913ada8549a1_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b28c972151dd1f0c8ab6f860024cf2ce088e17eaad3fd5a73c31db86af011174 = $this->env->getExtension("native_profiler");
        $__internal_b28c972151dd1f0c8ab6f860024cf2ce088e17eaad3fd5a73c31db86af011174->enter($__internal_b28c972151dd1f0c8ab6f860024cf2ce088e17eaad3fd5a73c31db86af011174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b28c972151dd1f0c8ab6f860024cf2ce088e17eaad3fd5a73c31db86af011174->leave($__internal_b28c972151dd1f0c8ab6f860024cf2ce088e17eaad3fd5a73c31db86af011174_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f78b92af67cc5f4b253a6cc5fb830aede9be2fe32057cb6f53cf835c02d12ba = $this->env->getExtension("native_profiler");
        $__internal_9f78b92af67cc5f4b253a6cc5fb830aede9be2fe32057cb6f53cf835c02d12ba->enter($__internal_9f78b92af67cc5f4b253a6cc5fb830aede9be2fe32057cb6f53cf835c02d12ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f78b92af67cc5f4b253a6cc5fb830aede9be2fe32057cb6f53cf835c02d12ba->leave($__internal_9f78b92af67cc5f4b253a6cc5fb830aede9be2fe32057cb6f53cf835c02d12ba_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4499b568f15505d81ab12584c683b1cbf7629823266058d93c5a3606d497fcac = $this->env->getExtension("native_profiler");
        $__internal_4499b568f15505d81ab12584c683b1cbf7629823266058d93c5a3606d497fcac->enter($__internal_4499b568f15505d81ab12584c683b1cbf7629823266058d93c5a3606d497fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script>
        \$(document).ready(function(){
        alert(1);
          \$('.datetimeselect').datetimepicker({
                format: \"dd MM yyyy - hh:ii:ss\"
          });
        });
    </script>
    ";
        
        $__internal_4499b568f15505d81ab12584c683b1cbf7629823266058d93c5a3606d497fcac->leave($__internal_4499b568f15505d81ab12584c683b1cbf7629823266058d93c5a3606d497fcac_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  138 => 55,  127 => 46,  107 => 17,  101 => 16,  89 => 13,  79 => 65,  77 => 55,  67 => 47,  65 => 46,  48 => 31,  46 => 16,  40 => 13,  26 => 1,);
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
/*       {% block body %}{% endblock %}*/
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
/*         alert(1);*/
/*           $('.datetimeselect').datetimepicker({*/
/*                 format: "dd MM yyyy - hh:ii:ss"*/
/*           });*/
/*         });*/
/*     </script>*/
/*     {% endblock %}*/
/*     */
/*   </body>*/
/* </html>*/
/* */
