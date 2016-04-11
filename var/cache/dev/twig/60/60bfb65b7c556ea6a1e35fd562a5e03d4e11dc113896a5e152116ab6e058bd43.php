<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_23e1a37c7d47a17d92e49595836aa007e56a06f1ca87795fba1d29477332f053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_98db6341e2a2055bfb28ecdb8c428c10b366efc0fd3c5072e11108187001dfa6 = $this->env->getExtension("native_profiler");
        $__internal_98db6341e2a2055bfb28ecdb8c428c10b366efc0fd3c5072e11108187001dfa6->enter($__internal_98db6341e2a2055bfb28ecdb8c428c10b366efc0fd3c5072e11108187001dfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98db6341e2a2055bfb28ecdb8c428c10b366efc0fd3c5072e11108187001dfa6->leave($__internal_98db6341e2a2055bfb28ecdb8c428c10b366efc0fd3c5072e11108187001dfa6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2ae42b3cc60fae9eb8fa1675be4f4b3a2bb83028cbf397e54f6fb29f2cc025f = $this->env->getExtension("native_profiler");
        $__internal_f2ae42b3cc60fae9eb8fa1675be4f4b3a2bb83028cbf397e54f6fb29f2cc025f->enter($__internal_f2ae42b3cc60fae9eb8fa1675be4f4b3a2bb83028cbf397e54f6fb29f2cc025f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f2ae42b3cc60fae9eb8fa1675be4f4b3a2bb83028cbf397e54f6fb29f2cc025f->leave($__internal_f2ae42b3cc60fae9eb8fa1675be4f4b3a2bb83028cbf397e54f6fb29f2cc025f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
