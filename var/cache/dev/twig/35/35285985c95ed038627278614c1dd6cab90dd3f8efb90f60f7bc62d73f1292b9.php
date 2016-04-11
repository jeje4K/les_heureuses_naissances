<?php

/* AppBundle:Advert:index.html.twig */
class __TwigTemplate_71bc06b74d4673e602575acfe77d15bff5cdd08b607bbb19466989149cf211b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ed5dd4d672a7a9d0f502fa2378ce9dd82669483c594c9b1619ff1be7d4529d6 = $this->env->getExtension("native_profiler");
        $__internal_6ed5dd4d672a7a9d0f502fa2378ce9dd82669483c594c9b1619ff1be7d4529d6->enter($__internal_6ed5dd4d672a7a9d0f502fa2378ce9dd82669483c594c9b1619ff1be7d4529d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed5dd4d672a7a9d0f502fa2378ce9dd82669483c594c9b1619ff1be7d4529d6->leave($__internal_6ed5dd4d672a7a9d0f502fa2378ce9dd82669483c594c9b1619ff1be7d4529d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ebfc29d6771473ac3acbd2e81fc173fce9289a6ef159b9658d27a32ae2a6158 = $this->env->getExtension("native_profiler");
        $__internal_0ebfc29d6771473ac3acbd2e81fc173fce9289a6ef159b9658d27a32ae2a6158->enter($__internal_0ebfc29d6771473ac3acbd2e81fc173fce9289a6ef159b9658d27a32ae2a6158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ebfc29d6771473ac3acbd2e81fc173fce9289a6ef159b9658d27a32ae2a6158->leave($__internal_0ebfc29d6771473ac3acbd2e81fc173fce9289a6ef159b9658d27a32ae2a6158_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a0076cd9a91cebc366e6e1903d1cd6f1b2f721bef17baf1d68a9fd0aaff4dccc = $this->env->getExtension("native_profiler");
        $__internal_a0076cd9a91cebc366e6e1903d1cd6f1b2f721bef17baf1d68a9fd0aaff4dccc->enter($__internal_a0076cd9a91cebc366e6e1903d1cd6f1b2f721bef17baf1d68a9fd0aaff4dccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_a0076cd9a91cebc366e6e1903d1cd6f1b2f721bef17baf1d68a9fd0aaff4dccc->leave($__internal_a0076cd9a91cebc366e6e1903d1cd6f1b2f721bef17baf1d68a9fd0aaff4dccc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
