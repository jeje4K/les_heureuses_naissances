<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d450cc627dc5b197c5fc50e6fdbc88bce090ddb94d6b09dfd2f464924678a794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7a34ebe69c258f5fd9636a9d832066b1c1b54fbef843dfb653ddbdbb5d9498fb = $this->env->getExtension("native_profiler");
        $__internal_7a34ebe69c258f5fd9636a9d832066b1c1b54fbef843dfb653ddbdbb5d9498fb->enter($__internal_7a34ebe69c258f5fd9636a9d832066b1c1b54fbef843dfb653ddbdbb5d9498fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a34ebe69c258f5fd9636a9d832066b1c1b54fbef843dfb653ddbdbb5d9498fb->leave($__internal_7a34ebe69c258f5fd9636a9d832066b1c1b54fbef843dfb653ddbdbb5d9498fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7b3fd5334db595d3a0ade73a163bb6a096070a3dae9960604f5118ba0fbff7e = $this->env->getExtension("native_profiler");
        $__internal_c7b3fd5334db595d3a0ade73a163bb6a096070a3dae9960604f5118ba0fbff7e->enter($__internal_c7b3fd5334db595d3a0ade73a163bb6a096070a3dae9960604f5118ba0fbff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c7b3fd5334db595d3a0ade73a163bb6a096070a3dae9960604f5118ba0fbff7e->leave($__internal_c7b3fd5334db595d3a0ade73a163bb6a096070a3dae9960604f5118ba0fbff7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
