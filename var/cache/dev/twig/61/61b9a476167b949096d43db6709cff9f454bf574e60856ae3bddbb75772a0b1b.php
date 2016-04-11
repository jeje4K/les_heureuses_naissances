<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ff7b6cd27aecbadf9c424dae55f85a7a6ec23ecd9345174e4d1bc48138c2fa35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_5097b1ccaa10966457bec59f339181a631598be19e129541c88c3356496d985e = $this->env->getExtension("native_profiler");
        $__internal_5097b1ccaa10966457bec59f339181a631598be19e129541c88c3356496d985e->enter($__internal_5097b1ccaa10966457bec59f339181a631598be19e129541c88c3356496d985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5097b1ccaa10966457bec59f339181a631598be19e129541c88c3356496d985e->leave($__internal_5097b1ccaa10966457bec59f339181a631598be19e129541c88c3356496d985e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a0e2df83752851b4775146d2e298dc1f1fc08db8fc0abf210171fa9b89bbe86 = $this->env->getExtension("native_profiler");
        $__internal_8a0e2df83752851b4775146d2e298dc1f1fc08db8fc0abf210171fa9b89bbe86->enter($__internal_8a0e2df83752851b4775146d2e298dc1f1fc08db8fc0abf210171fa9b89bbe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8a0e2df83752851b4775146d2e298dc1f1fc08db8fc0abf210171fa9b89bbe86->leave($__internal_8a0e2df83752851b4775146d2e298dc1f1fc08db8fc0abf210171fa9b89bbe86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
