<?php

/* ::base.html.twig */
class __TwigTemplate_c677a9ca4958e2bea226cc92d04eb762efa30678654d4179b9527d4996219d18 extends Twig_Template
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
        $__internal_fa36b819f3e1ec38c9ed9713d8752561f596784ac75903dcd498ded3f379b7e9 = $this->env->getExtension("native_profiler");
        $__internal_fa36b819f3e1ec38c9ed9713d8752561f596784ac75903dcd498ded3f379b7e9->enter($__internal_fa36b819f3e1ec38c9ed9713d8752561f596784ac75903dcd498ded3f379b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fa36b819f3e1ec38c9ed9713d8752561f596784ac75903dcd498ded3f379b7e9->leave($__internal_fa36b819f3e1ec38c9ed9713d8752561f596784ac75903dcd498ded3f379b7e9_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a59b047f3ffce1b1ebe233be7cab408eecf8ab6a6d1598d1611192be3df7a09c = $this->env->getExtension("native_profiler");
        $__internal_a59b047f3ffce1b1ebe233be7cab408eecf8ab6a6d1598d1611192be3df7a09c->enter($__internal_a59b047f3ffce1b1ebe233be7cab408eecf8ab6a6d1598d1611192be3df7a09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a59b047f3ffce1b1ebe233be7cab408eecf8ab6a6d1598d1611192be3df7a09c->leave($__internal_a59b047f3ffce1b1ebe233be7cab408eecf8ab6a6d1598d1611192be3df7a09c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffb4160e9f443747dd3fadd8498532b7e259482dc8f88b31c42e0cea3abdc2d6 = $this->env->getExtension("native_profiler");
        $__internal_ffb4160e9f443747dd3fadd8498532b7e259482dc8f88b31c42e0cea3abdc2d6->enter($__internal_ffb4160e9f443747dd3fadd8498532b7e259482dc8f88b31c42e0cea3abdc2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ffb4160e9f443747dd3fadd8498532b7e259482dc8f88b31c42e0cea3abdc2d6->leave($__internal_ffb4160e9f443747dd3fadd8498532b7e259482dc8f88b31c42e0cea3abdc2d6_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_693147e2a82814d0a72e788cae4d6cb46b04af500669b76fbc1aa63e11bcd5fd = $this->env->getExtension("native_profiler");
        $__internal_693147e2a82814d0a72e788cae4d6cb46b04af500669b76fbc1aa63e11bcd5fd->enter($__internal_693147e2a82814d0a72e788cae4d6cb46b04af500669b76fbc1aa63e11bcd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_693147e2a82814d0a72e788cae4d6cb46b04af500669b76fbc1aa63e11bcd5fd->leave($__internal_693147e2a82814d0a72e788cae4d6cb46b04af500669b76fbc1aa63e11bcd5fd_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b30f6a5022f4988b4d57083ab98edfcf262eddc82e079e5ae09f71c44685255f = $this->env->getExtension("native_profiler");
        $__internal_b30f6a5022f4988b4d57083ab98edfcf262eddc82e079e5ae09f71c44685255f->enter($__internal_b30f6a5022f4988b4d57083ab98edfcf262eddc82e079e5ae09f71c44685255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b30f6a5022f4988b4d57083ab98edfcf262eddc82e079e5ae09f71c44685255f->leave($__internal_b30f6a5022f4988b4d57083ab98edfcf262eddc82e079e5ae09f71c44685255f_prof);

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
