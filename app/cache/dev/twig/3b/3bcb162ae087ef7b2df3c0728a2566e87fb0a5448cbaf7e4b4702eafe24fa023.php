<?php

/* AppBundle:Index:index.html.twig */
class __TwigTemplate_0b31a9359a83218e5e91e53b434a8428560415d2deb20509675e6991bd11bfb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Index:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42ad0d27dcae122b002582ef5d456b1bcdccb0cca82b897248cbf73581d846e4 = $this->env->getExtension("native_profiler");
        $__internal_42ad0d27dcae122b002582ef5d456b1bcdccb0cca82b897248cbf73581d846e4->enter($__internal_42ad0d27dcae122b002582ef5d456b1bcdccb0cca82b897248cbf73581d846e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42ad0d27dcae122b002582ef5d456b1bcdccb0cca82b897248cbf73581d846e4->leave($__internal_42ad0d27dcae122b002582ef5d456b1bcdccb0cca82b897248cbf73581d846e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1bf764c687eaf4bb0ef206d0668186b57a96b106ed2a6e7e83fe410f7f86903 = $this->env->getExtension("native_profiler");
        $__internal_f1bf764c687eaf4bb0ef206d0668186b57a96b106ed2a6e7e83fe410f7f86903->enter($__internal_f1bf764c687eaf4bb0ef206d0668186b57a96b106ed2a6e7e83fe410f7f86903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Index:index";
        
        $__internal_f1bf764c687eaf4bb0ef206d0668186b57a96b106ed2a6e7e83fe410f7f86903->leave($__internal_f1bf764c687eaf4bb0ef206d0668186b57a96b106ed2a6e7e83fe410f7f86903_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df99980579a96ecf80ea59392ccd35d83e9b11b8f503a30bb845154055b3989 = $this->env->getExtension("native_profiler");
        $__internal_7df99980579a96ecf80ea59392ccd35d83e9b11b8f503a30bb845154055b3989->enter($__internal_7df99980579a96ecf80ea59392ccd35d83e9b11b8f503a30bb845154055b3989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["Quizzs"]) ? $context["Quizzs"] : $this->getContext($context, "Quizzs")));
        echo "



<div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 my-treeview\">
              <ul>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Quizzs"]) ? $context["Quizzs"] : $this->getContext($context, "Quizzs")));
        foreach ($context['_seq'] as $context["_key"] => $context["Quizz"]) {
            // line 18
            echo "                <li role=\"button\" >
                      <p class=\"my-treeview-collapse\" data-toggle=\"collapse\" data-target=\"#Quizz";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["Quizz"], "id", array()), "html", null, true);
            echo "\">
                          <i class=\"glyphicon glyphicon glyphicon-arrow-down\"></i>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["Quizz"], "name", array()), "html", null, true);
            echo "
                          <footer>
                            <a type=\"button\"  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_new", array("id" => $this->getAttribute($context["Quizz"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"glyphicon glyphicon-plus\"></i></a>
                            <a type=\"button\"  href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quizz_edit", array("id" => $this->getAttribute($context["Quizz"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                            <a type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                          </footer>
                      </p>
                      ";
            // line 29
            echo "
                    <!-- Nested media object -->
                    <ul  class=\"collapse\" id=\"Quizz";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Quizz"], "id", array()), "html", null, true);
            echo "\">
";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Quizz"], "getQuestions", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["Question"]) {
                // line 33
                echo "                    <li>
                        <p data-toggle=\"collapse\" data-target=\"#Question";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["Question"], "id", array()), "html", null, true);
                echo "\">
                            <i class=\"glyphicon glyphicon glyphicon-arrow-down\"></i>
                            ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["Question"], "content", array()), "html", null, true);
                echo "
                            <a type=\"button\"  href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_new", array("id" => $this->getAttribute($context["Question"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"glyphicon glyphicon-plus\"></i></a>
                            <a type=\"button\"  href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute($context["Question"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                            <a type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                        </p>
                        <ul id=\"Question";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["Question"], "id", array()), "html", null, true);
                echo "\">
";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Question"], "getResponses", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["Response"]) {
                    // line 43
                    echo "                        <li>
                          <div class=\"form-group\">
                            ";
                    // line 45
                    if (($this->getAttribute($context["Question"], "type", array()) == "Option")) {
                        // line 46
                        echo "                                <div class=\"radio\">
                                    <input type=\"radio\" id=\"flat-radio-2\" disabled checked>
                                    <label for=\"flat-radio-2\">";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Response"], "content", array()), "html", null, true);
                        echo "</label>
                            ";
                    } else {
                        // line 50
                        echo "                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" disabled checked value=\"\">
                                        ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Response"], "content", array()), "html", null, true);
                        echo "
                                    </label>
                            ";
                    }
                    // line 56
                    echo "                                    ";
                    // line 57
                    echo "                                    <a type=\"button\" class=\"btn btn-warning btn-xs\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_edit", array("id" => $this->getAttribute($context["Response"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                                    <a type=\"button\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                                </div>
                        </div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Response'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                      </ul>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </ul>
              </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </ul>
        </div>
    </div>
</div>

";
        
        $__internal_7df99980579a96ecf80ea59392ccd35d83e9b11b8f503a30bb845154055b3989->leave($__internal_7df99980579a96ecf80ea59392ccd35d83e9b11b8f503a30bb845154055b3989_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 68,  190 => 65,  182 => 62,  170 => 57,  168 => 56,  162 => 53,  157 => 50,  152 => 48,  148 => 46,  146 => 45,  142 => 43,  138 => 42,  134 => 41,  128 => 38,  124 => 37,  120 => 36,  115 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 29,  93 => 24,  89 => 23,  84 => 21,  79 => 19,  76 => 18,  72 => 17,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Index:index{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% render controller("FOSUserBundle:Security:login") %}*/
/* */
/* {{ dump(Quizzs) }}*/
/* */
/* */
/* */
/* <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-md-12 my-treeview">*/
/*               <ul>*/
/* {% for Quizz in Quizzs %}*/
/*                 <li role="button" >*/
/*                       <p class="my-treeview-collapse" data-toggle="collapse" data-target="#Quizz{{Quizz.id}}">*/
/*                           <i class="glyphicon glyphicon glyphicon-arrow-down"></i>*/
/*                             {{Quizz.name}}*/
/*                           <footer>*/
/*                             <a type="button"  href="{{ path('question_new', { 'id': Quizz.id }) }}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></a>*/
/*                             <a type="button"  href="{{ path('quizz_edit', { 'id': Quizz.id }) }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>*/
/*                             <a type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                           </footer>*/
/*                       </p>*/
/*                       {#<p>{{Quizz.description}}</p>#}*/
/* */
/*                     <!-- Nested media object -->*/
/*                     <ul  class="collapse" id="Quizz{{Quizz.id}}">*/
/* {% for Question in Quizz.getQuestions() %}*/
/*                     <li>*/
/*                         <p data-toggle="collapse" data-target="#Question{{Question.id}}">*/
/*                             <i class="glyphicon glyphicon glyphicon-arrow-down"></i>*/
/*                             {{Question.content}}*/
/*                             <a type="button"  href="{{ path('response_new', { 'id': Question.id }) }}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></a>*/
/*                             <a type="button"  href="{{ path('question_edit', { 'id': Question.id }) }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>*/
/*                             <a type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                         </p>*/
/*                         <ul id="Question{{Question.id}}">*/
/* {% for Response in Question.getResponses() %}*/
/*                         <li>*/
/*                           <div class="form-group">*/
/*                             {% if Question.type == 'Option' %}*/
/*                                 <div class="radio">*/
/*                                     <input type="radio" id="flat-radio-2" disabled checked>*/
/*                                     <label for="flat-radio-2">{{Response.content}}</label>*/
/*                             {% else %}*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox" disabled checked value="">*/
/*                                         {{Response.content}}*/
/*                                     </label>*/
/*                             {% endif %}*/
/*                                     {#Mincheck : {{ Question.minCheck }}#}*/
/*                                     <a type="button" class="btn btn-warning btn-xs" href="{{ path('response_edit', { 'id': Response.id }) }}"><i class="glyphicon glyphicon-edit"></i></a>*/
/*                                     <a type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                                 </div>*/
/*                         </div>*/
/* {% endfor %}*/
/*                       </ul>*/
/*                     </li>*/
/* {% endfor %}*/
/*                 </ul>*/
/*               </li>*/
/* {% endfor %}*/
/*               </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
