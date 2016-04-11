<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a3db19ccb153b4206e4d1a0501222bb5e215b95d0cb23682d028341db0c3c563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_bae8ab5e1b0bdaca0d6afd95d9087e13a6209d1241a7a508e950166430d63664 = $this->env->getExtension("native_profiler");
        $__internal_bae8ab5e1b0bdaca0d6afd95d9087e13a6209d1241a7a508e950166430d63664->enter($__internal_bae8ab5e1b0bdaca0d6afd95d9087e13a6209d1241a7a508e950166430d63664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae8ab5e1b0bdaca0d6afd95d9087e13a6209d1241a7a508e950166430d63664->leave($__internal_bae8ab5e1b0bdaca0d6afd95d9087e13a6209d1241a7a508e950166430d63664_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b10a3efb62af5c95cc61d0c5934b5e49ac5b7920cb32cfae62b03f9a6cb20c6 = $this->env->getExtension("native_profiler");
        $__internal_9b10a3efb62af5c95cc61d0c5934b5e49ac5b7920cb32cfae62b03f9a6cb20c6->enter($__internal_9b10a3efb62af5c95cc61d0c5934b5e49ac5b7920cb32cfae62b03f9a6cb20c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9b10a3efb62af5c95cc61d0c5934b5e49ac5b7920cb32cfae62b03f9a6cb20c6->leave($__internal_9b10a3efb62af5c95cc61d0c5934b5e49ac5b7920cb32cfae62b03f9a6cb20c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
