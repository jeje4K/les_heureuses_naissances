<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a3ad0ed8fabb2ae93840cd99b2796409bd6f571266727cc0d109bf8622efd1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_45dd72e52c6f625db1acaa1b8494df8c7bc254dc6afdf0c2dcefbea69cfc83b4 = $this->env->getExtension("native_profiler");
        $__internal_45dd72e52c6f625db1acaa1b8494df8c7bc254dc6afdf0c2dcefbea69cfc83b4->enter($__internal_45dd72e52c6f625db1acaa1b8494df8c7bc254dc6afdf0c2dcefbea69cfc83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45dd72e52c6f625db1acaa1b8494df8c7bc254dc6afdf0c2dcefbea69cfc83b4->leave($__internal_45dd72e52c6f625db1acaa1b8494df8c7bc254dc6afdf0c2dcefbea69cfc83b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7e729f7dcedcfc0fb38e21ce679f8fcdcbb2ae259d49aa65e8a8401b0ecf23c = $this->env->getExtension("native_profiler");
        $__internal_f7e729f7dcedcfc0fb38e21ce679f8fcdcbb2ae259d49aa65e8a8401b0ecf23c->enter($__internal_f7e729f7dcedcfc0fb38e21ce679f8fcdcbb2ae259d49aa65e8a8401b0ecf23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f7e729f7dcedcfc0fb38e21ce679f8fcdcbb2ae259d49aa65e8a8401b0ecf23c->leave($__internal_f7e729f7dcedcfc0fb38e21ce679f8fcdcbb2ae259d49aa65e8a8401b0ecf23c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
