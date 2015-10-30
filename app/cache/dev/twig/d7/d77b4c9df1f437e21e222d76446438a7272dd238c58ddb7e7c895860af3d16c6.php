<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_374da323ec380c92f37a9cffe4429e99acc3d7930aecfca1e3987fc83448942e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58595575cf71e426363e2bdc11e685cdc31f53904eacc4485f45f31787bd9c7e = $this->env->getExtension("native_profiler");
        $__internal_58595575cf71e426363e2bdc11e685cdc31f53904eacc4485f45f31787bd9c7e->enter($__internal_58595575cf71e426363e2bdc11e685cdc31f53904eacc4485f45f31787bd9c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58595575cf71e426363e2bdc11e685cdc31f53904eacc4485f45f31787bd9c7e->leave($__internal_58595575cf71e426363e2bdc11e685cdc31f53904eacc4485f45f31787bd9c7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16b75f36fc789ea84ef8fa49a35ab026cfe34861b69cd8c14d9275c6514a8e1d = $this->env->getExtension("native_profiler");
        $__internal_16b75f36fc789ea84ef8fa49a35ab026cfe34861b69cd8c14d9275c6514a8e1d->enter($__internal_16b75f36fc789ea84ef8fa49a35ab026cfe34861b69cd8c14d9275c6514a8e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_16b75f36fc789ea84ef8fa49a35ab026cfe34861b69cd8c14d9275c6514a8e1d->leave($__internal_16b75f36fc789ea84ef8fa49a35ab026cfe34861b69cd8c14d9275c6514a8e1d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_563bf4977893eced7623d5781cc8c6395a13336d7f304ad962e304cc2f0a920f = $this->env->getExtension("native_profiler");
        $__internal_563bf4977893eced7623d5781cc8c6395a13336d7f304ad962e304cc2f0a920f->enter($__internal_563bf4977893eced7623d5781cc8c6395a13336d7f304ad962e304cc2f0a920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_563bf4977893eced7623d5781cc8c6395a13336d7f304ad962e304cc2f0a920f->leave($__internal_563bf4977893eced7623d5781cc8c6395a13336d7f304ad962e304cc2f0a920f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c219010cf3f2ab3e099bb8c906a0ebe0cb6117c9cae3d2e9cfa7060299eb57b2 = $this->env->getExtension("native_profiler");
        $__internal_c219010cf3f2ab3e099bb8c906a0ebe0cb6117c9cae3d2e9cfa7060299eb57b2->enter($__internal_c219010cf3f2ab3e099bb8c906a0ebe0cb6117c9cae3d2e9cfa7060299eb57b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c219010cf3f2ab3e099bb8c906a0ebe0cb6117c9cae3d2e9cfa7060299eb57b2->leave($__internal_c219010cf3f2ab3e099bb8c906a0ebe0cb6117c9cae3d2e9cfa7060299eb57b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
