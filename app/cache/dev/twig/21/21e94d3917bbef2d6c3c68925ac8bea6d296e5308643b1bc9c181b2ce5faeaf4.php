<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2bc8a2281a46f71c7afaa9062d756afad00ccec8f0293d14a5448bc03866f09b extends Twig_Template
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
        $__internal_87af392549db11af63c931eef84382d9514f86a72b7ad334dddb8bbd689601ce = $this->env->getExtension("native_profiler");
        $__internal_87af392549db11af63c931eef84382d9514f86a72b7ad334dddb8bbd689601ce->enter($__internal_87af392549db11af63c931eef84382d9514f86a72b7ad334dddb8bbd689601ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87af392549db11af63c931eef84382d9514f86a72b7ad334dddb8bbd689601ce->leave($__internal_87af392549db11af63c931eef84382d9514f86a72b7ad334dddb8bbd689601ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e9ea9c4f718914fddab22bcd61c6ae5dda295410cac9598d147d202870e9462 = $this->env->getExtension("native_profiler");
        $__internal_7e9ea9c4f718914fddab22bcd61c6ae5dda295410cac9598d147d202870e9462->enter($__internal_7e9ea9c4f718914fddab22bcd61c6ae5dda295410cac9598d147d202870e9462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e9ea9c4f718914fddab22bcd61c6ae5dda295410cac9598d147d202870e9462->leave($__internal_7e9ea9c4f718914fddab22bcd61c6ae5dda295410cac9598d147d202870e9462_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cc67db5299a83406d6ba397aa0ef02b105a6a1b79ed84a92296db4ae5b6fc31 = $this->env->getExtension("native_profiler");
        $__internal_0cc67db5299a83406d6ba397aa0ef02b105a6a1b79ed84a92296db4ae5b6fc31->enter($__internal_0cc67db5299a83406d6ba397aa0ef02b105a6a1b79ed84a92296db4ae5b6fc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cc67db5299a83406d6ba397aa0ef02b105a6a1b79ed84a92296db4ae5b6fc31->leave($__internal_0cc67db5299a83406d6ba397aa0ef02b105a6a1b79ed84a92296db4ae5b6fc31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aaa1c9939147b6e4fd97e59a57665f05e62438cffd93d0fc1e69b0fe1fe26c3 = $this->env->getExtension("native_profiler");
        $__internal_0aaa1c9939147b6e4fd97e59a57665f05e62438cffd93d0fc1e69b0fe1fe26c3->enter($__internal_0aaa1c9939147b6e4fd97e59a57665f05e62438cffd93d0fc1e69b0fe1fe26c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0aaa1c9939147b6e4fd97e59a57665f05e62438cffd93d0fc1e69b0fe1fe26c3->leave($__internal_0aaa1c9939147b6e4fd97e59a57665f05e62438cffd93d0fc1e69b0fe1fe26c3_prof);

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
