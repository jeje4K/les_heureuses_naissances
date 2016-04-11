<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_19cd34627e21f382ab7775fb421380d633004b9c09f5a853e335a23c8cb78505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d03da14e5b9e16c4e60b481a07f116bb46cc3e72b386698a42afc1680848cf7 = $this->env->getExtension("native_profiler");
        $__internal_4d03da14e5b9e16c4e60b481a07f116bb46cc3e72b386698a42afc1680848cf7->enter($__internal_4d03da14e5b9e16c4e60b481a07f116bb46cc3e72b386698a42afc1680848cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d03da14e5b9e16c4e60b481a07f116bb46cc3e72b386698a42afc1680848cf7->leave($__internal_4d03da14e5b9e16c4e60b481a07f116bb46cc3e72b386698a42afc1680848cf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84e2bc338e41c0631866c4fd94494234891f449756afbfae93850cb42be5bf60 = $this->env->getExtension("native_profiler");
        $__internal_84e2bc338e41c0631866c4fd94494234891f449756afbfae93850cb42be5bf60->enter($__internal_84e2bc338e41c0631866c4fd94494234891f449756afbfae93850cb42be5bf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_84e2bc338e41c0631866c4fd94494234891f449756afbfae93850cb42be5bf60->leave($__internal_84e2bc338e41c0631866c4fd94494234891f449756afbfae93850cb42be5bf60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
