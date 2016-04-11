<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ad6f7b77149832f9477cd7eb0cf97ccdc293fadd27bdf5dad44104c57a836d8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_63cc88247c7b0547d39e40e46ca73d30275d066ba61952c6009617e32514181b = $this->env->getExtension("native_profiler");
        $__internal_63cc88247c7b0547d39e40e46ca73d30275d066ba61952c6009617e32514181b->enter($__internal_63cc88247c7b0547d39e40e46ca73d30275d066ba61952c6009617e32514181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63cc88247c7b0547d39e40e46ca73d30275d066ba61952c6009617e32514181b->leave($__internal_63cc88247c7b0547d39e40e46ca73d30275d066ba61952c6009617e32514181b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67c4ddb67ac59065bfaaebe6290232961dddf7258c998f226fbc3e486ba40dbe = $this->env->getExtension("native_profiler");
        $__internal_67c4ddb67ac59065bfaaebe6290232961dddf7258c998f226fbc3e486ba40dbe->enter($__internal_67c4ddb67ac59065bfaaebe6290232961dddf7258c998f226fbc3e486ba40dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_67c4ddb67ac59065bfaaebe6290232961dddf7258c998f226fbc3e486ba40dbe->leave($__internal_67c4ddb67ac59065bfaaebe6290232961dddf7258c998f226fbc3e486ba40dbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
