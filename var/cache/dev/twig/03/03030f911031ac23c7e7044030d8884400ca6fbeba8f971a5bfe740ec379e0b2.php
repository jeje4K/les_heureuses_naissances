<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_abb9afdcb5bb69b0399331d917419b3238882ee745b2ed0204e5c7af02d0a8da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0aefc36043432d8c6b7eb892802326e595b3f041a45306d9b92f128f8cc5706b = $this->env->getExtension("native_profiler");
        $__internal_0aefc36043432d8c6b7eb892802326e595b3f041a45306d9b92f128f8cc5706b->enter($__internal_0aefc36043432d8c6b7eb892802326e595b3f041a45306d9b92f128f8cc5706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aefc36043432d8c6b7eb892802326e595b3f041a45306d9b92f128f8cc5706b->leave($__internal_0aefc36043432d8c6b7eb892802326e595b3f041a45306d9b92f128f8cc5706b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e365927e234b3633eb84c7219f64ea731568ef9c6422aa9ce3d0d79228494999 = $this->env->getExtension("native_profiler");
        $__internal_e365927e234b3633eb84c7219f64ea731568ef9c6422aa9ce3d0d79228494999->enter($__internal_e365927e234b3633eb84c7219f64ea731568ef9c6422aa9ce3d0d79228494999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e365927e234b3633eb84c7219f64ea731568ef9c6422aa9ce3d0d79228494999->leave($__internal_e365927e234b3633eb84c7219f64ea731568ef9c6422aa9ce3d0d79228494999_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
