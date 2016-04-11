<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_35dc6835aa8c91b1a65bc5ef83822bbddb5abf9b0f3bfe06fa1c05c677684cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ae4d50a6bb0b9807fedf05348dbd1e0ee8ca59c437a47ba6c30cd1fc919761 = $this->env->getExtension("native_profiler");
        $__internal_e5ae4d50a6bb0b9807fedf05348dbd1e0ee8ca59c437a47ba6c30cd1fc919761->enter($__internal_e5ae4d50a6bb0b9807fedf05348dbd1e0ee8ca59c437a47ba6c30cd1fc919761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ae4d50a6bb0b9807fedf05348dbd1e0ee8ca59c437a47ba6c30cd1fc919761->leave($__internal_e5ae4d50a6bb0b9807fedf05348dbd1e0ee8ca59c437a47ba6c30cd1fc919761_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d47038ff506c0e095514fdc9b0dbe999e35989ae0414e4099aff01a153f7fa6 = $this->env->getExtension("native_profiler");
        $__internal_2d47038ff506c0e095514fdc9b0dbe999e35989ae0414e4099aff01a153f7fa6->enter($__internal_2d47038ff506c0e095514fdc9b0dbe999e35989ae0414e4099aff01a153f7fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "


  ";
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 15
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
      ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
  ";
        // line 21
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "
";
        
        $__internal_2d47038ff506c0e095514fdc9b0dbe999e35989ae0414e4099aff01a153f7fa6->leave($__internal_2d47038ff506c0e095514fdc9b0dbe999e35989ae0414e4099aff01a153f7fa6_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40ea8df3bd7833d00bb9304f6dcb8d09e56b8de99913d9740edee8a9033c8619 = $this->env->getExtension("native_profiler");
        $__internal_40ea8df3bd7833d00bb9304f6dcb8d09e56b8de99913d9740edee8a9033c8619->enter($__internal_40ea8df3bd7833d00bb9304f6dcb8d09e56b8de99913d9740edee8a9033c8619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "  ";
        
        $__internal_40ea8df3bd7833d00bb9304f6dcb8d09e56b8de99913d9740edee8a9033c8619->leave($__internal_40ea8df3bd7833d00bb9304f6dcb8d09e56b8de99913d9740edee8a9033c8619_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  79 => 21,  71 => 23,  68 => 21,  65 => 19,  56 => 16,  51 => 15,  46 => 14,  41 => 10,  35 => 9,  11 => 4,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* */
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/* */
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, messages in app.session.flashbag.all() %}*/
/*     <div class="alert alert-{{ key }}">*/
/*       {{ message|trans({}, 'FOSUserBundle') }}*/
/*     </div>*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
