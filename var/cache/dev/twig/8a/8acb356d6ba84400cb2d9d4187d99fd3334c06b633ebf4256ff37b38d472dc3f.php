<?php

/* AppUserBundle:Registration:register.html.twig */
class __TwigTemplate_6326da50e389f22b119938ccbf8e8feb43eabecde131ea9ccf67e6e63af51aa8 extends Twig_Template
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
        $__internal_e230f824975826234be777ffdfda9395f729781a82578a23d74a8355204c30d7 = $this->env->getExtension("native_profiler");
        $__internal_e230f824975826234be777ffdfda9395f729781a82578a23d74a8355204c30d7->enter($__internal_e230f824975826234be777ffdfda9395f729781a82578a23d74a8355204c30d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Registration:register.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e230f824975826234be777ffdfda9395f729781a82578a23d74a8355204c30d7->leave($__internal_e230f824975826234be777ffdfda9395f729781a82578a23d74a8355204c30d7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f24554b19d429220e9ef1e606ade27ee934a5a4fb2a8f3673c33054d05cf164 = $this->env->getExtension("native_profiler");
        $__internal_7f24554b19d429220e9ef1e606ade27ee934a5a4fb2a8f3673c33054d05cf164->enter($__internal_7f24554b19d429220e9ef1e606ade27ee934a5a4fb2a8f3673c33054d05cf164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("AppUserBundle:Registration:register_content.html.twig", "AppUserBundle:Registration:register.html.twig", 2)->display($context);
        
        $__internal_7f24554b19d429220e9ef1e606ade27ee934a5a4fb2a8f3673c33054d05cf164->leave($__internal_7f24554b19d429220e9ef1e606ade27ee934a5a4fb2a8f3673c33054d05cf164_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "AppUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
