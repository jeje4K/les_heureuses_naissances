<?php

/* AppUserBundle:Profile:show.html.twig */
class __TwigTemplate_c9628c5e0ff5c5bcccad8ca3319439be2681ee31c3e26caae3b91511372e82a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb44d4a586f68b460f62dccc0252ad1e4a7920b0729a5d5b0b3ebec28d6d0a3 = $this->env->getExtension("native_profiler");
        $__internal_1eb44d4a586f68b460f62dccc0252ad1e4a7920b0729a5d5b0b3ebec28d6d0a3->enter($__internal_1eb44d4a586f68b460f62dccc0252ad1e4a7920b0729a5d5b0b3ebec28d6d0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Profile:show.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1eb44d4a586f68b460f62dccc0252ad1e4a7920b0729a5d5b0b3ebec28d6d0a3->leave($__internal_1eb44d4a586f68b460f62dccc0252ad1e4a7920b0729a5d5b0b3ebec28d6d0a3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22d89bb83aa48f1f487fcc68efa085657c31099c14742b9c741cdbdb502fdbeb = $this->env->getExtension("native_profiler");
        $__internal_22d89bb83aa48f1f487fcc68efa085657c31099c14742b9c741cdbdb502fdbeb->enter($__internal_22d89bb83aa48f1f487fcc68efa085657c31099c14742b9c741cdbdb502fdbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("AppUserBundle:Profile:show_content.html.twig", "AppUserBundle:Profile:show.html.twig", 2)->display($context);
        
        $__internal_22d89bb83aa48f1f487fcc68efa085657c31099c14742b9c741cdbdb502fdbeb->leave($__internal_22d89bb83aa48f1f487fcc68efa085657c31099c14742b9c741cdbdb502fdbeb_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "AppUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
