<?php

/* AppBundle:Advert:menu.html.twig */
class __TwigTemplate_bcd4619e3eb8db99e30e634f8159e641b50f290d3eac9dce5db95914d473d175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30650513f94744fe2da335765a458d4bf77c2f07806eeb1cbc0444d43ae0e5e4 = $this->env->getExtension("native_profiler");
        $__internal_30650513f94744fe2da335765a458d4bf77c2f07806eeb1cbc0444d43ae0e5e4->enter($__internal_30650513f94744fe2da335765a458d4bf77c2f07806eeb1cbc0444d43ae0e5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_30650513f94744fe2da335765a458d4bf77c2f07806eeb1cbc0444d43ae0e5e4->leave($__internal_30650513f94744fe2da335765a458d4bf77c2f07806eeb1cbc0444d43ae0e5e4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/