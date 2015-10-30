<?php

/* AppBundle:Event:index.html.twig */
class __TwigTemplate_6ebfc816f3c81dcc8a357419e7c6adf5572602553dcf80dfd071590bc390e7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Event:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc7cb44e0f51db6faa5203b59aff54d6bd07d59ffefb8b4c9e1698f5a18401b = $this->env->getExtension("native_profiler");
        $__internal_1fc7cb44e0f51db6faa5203b59aff54d6bd07d59ffefb8b4c9e1698f5a18401b->enter($__internal_1fc7cb44e0f51db6faa5203b59aff54d6bd07d59ffefb8b4c9e1698f5a18401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc7cb44e0f51db6faa5203b59aff54d6bd07d59ffefb8b4c9e1698f5a18401b->leave($__internal_1fc7cb44e0f51db6faa5203b59aff54d6bd07d59ffefb8b4c9e1698f5a18401b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_efab90577ee6a933f064293e328391b6bc528958c8efcbe3ce645767584b463c = $this->env->getExtension("native_profiler");
        $__internal_efab90577ee6a933f064293e328391b6bc528958c8efcbe3ce645767584b463c->enter($__internal_efab90577ee6a933f064293e328391b6bc528958c8efcbe3ce645767584b463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Event list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Starttime</th>
                <th>Endtime</th>
                <th>Type</th>
                <th>Content</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "startTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "endTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "comment", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("event_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_efab90577ee6a933f064293e328391b6bc528958c8efcbe3ce645767584b463c->leave($__internal_efab90577ee6a933f064293e328391b6bc528958c8efcbe3ce645767584b463c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  115 => 38,  103 => 32,  97 => 29,  90 => 25,  86 => 24,  82 => 23,  76 => 22,  70 => 21,  64 => 20,  61 => 19,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body -%}*/
/*     <h1>Event list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Starttime</th>*/
/*                 <th>Endtime</th>*/
/*                 <th>Type</th>*/
/*                 <th>Content</th>*/
/*                 <th>Comment</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('event_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{% if entity.startTime %}{{ entity.startTime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.endTime %}{{ entity.endTime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.type }}</td>*/
/*                 <td>{{ entity.content }}</td>*/
/*                 <td>{{ entity.comment }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('event_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('event_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('event_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */