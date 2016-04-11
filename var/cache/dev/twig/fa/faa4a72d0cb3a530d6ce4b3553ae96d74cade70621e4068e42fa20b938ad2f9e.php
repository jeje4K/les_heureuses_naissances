<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_085b59b701271819b1c9772bd6f7a62e61d65bf0331e54cabfac9ceaf5ed6bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6783c473f4e421f3cae8a571145896e0148a37ee3832db23f964fe06da0bd286 = $this->env->getExtension("native_profiler");
        $__internal_6783c473f4e421f3cae8a571145896e0148a37ee3832db23f964fe06da0bd286->enter($__internal_6783c473f4e421f3cae8a571145896e0148a37ee3832db23f964fe06da0bd286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6783c473f4e421f3cae8a571145896e0148a37ee3832db23f964fe06da0bd286->leave($__internal_6783c473f4e421f3cae8a571145896e0148a37ee3832db23f964fe06da0bd286_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cccf55aa590936a3bda4c0cea04a68d8a07a1fabc55a9cfd488f2bbecd964c84 = $this->env->getExtension("native_profiler");
        $__internal_cccf55aa590936a3bda4c0cea04a68d8a07a1fabc55a9cfd488f2bbecd964c84->enter($__internal_cccf55aa590936a3bda4c0cea04a68d8a07a1fabc55a9cfd488f2bbecd964c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cccf55aa590936a3bda4c0cea04a68d8a07a1fabc55a9cfd488f2bbecd964c84->leave($__internal_cccf55aa590936a3bda4c0cea04a68d8a07a1fabc55a9cfd488f2bbecd964c84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
