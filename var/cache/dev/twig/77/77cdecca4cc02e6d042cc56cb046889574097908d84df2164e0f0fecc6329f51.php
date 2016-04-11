<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8f00f9a2a008e271a2ded12c6f6d36b3c74a7eafd578b89bb14f01e12a696da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d0de4889da767c019b1ab715920f4cb815258229f2b80cefc1885b2e541cd94d = $this->env->getExtension("native_profiler");
        $__internal_d0de4889da767c019b1ab715920f4cb815258229f2b80cefc1885b2e541cd94d->enter($__internal_d0de4889da767c019b1ab715920f4cb815258229f2b80cefc1885b2e541cd94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0de4889da767c019b1ab715920f4cb815258229f2b80cefc1885b2e541cd94d->leave($__internal_d0de4889da767c019b1ab715920f4cb815258229f2b80cefc1885b2e541cd94d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11812a1f32698a13f4c00e767c0e9b0b5755e9fc5818b68e88845a250e731119 = $this->env->getExtension("native_profiler");
        $__internal_11812a1f32698a13f4c00e767c0e9b0b5755e9fc5818b68e88845a250e731119->enter($__internal_11812a1f32698a13f4c00e767c0e9b0b5755e9fc5818b68e88845a250e731119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_11812a1f32698a13f4c00e767c0e9b0b5755e9fc5818b68e88845a250e731119->leave($__internal_11812a1f32698a13f4c00e767c0e9b0b5755e9fc5818b68e88845a250e731119_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
