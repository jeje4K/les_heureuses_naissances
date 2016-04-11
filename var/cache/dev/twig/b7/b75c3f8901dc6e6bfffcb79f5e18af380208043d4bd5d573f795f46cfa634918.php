<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3ed7977599704f73172e0a864071f325638f056bed7cf82fb0b8403c8a372ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_39543e6291e4cb9ff8553c35874e8896d540c2f085cd20139031184db1e1df22 = $this->env->getExtension("native_profiler");
        $__internal_39543e6291e4cb9ff8553c35874e8896d540c2f085cd20139031184db1e1df22->enter($__internal_39543e6291e4cb9ff8553c35874e8896d540c2f085cd20139031184db1e1df22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39543e6291e4cb9ff8553c35874e8896d540c2f085cd20139031184db1e1df22->leave($__internal_39543e6291e4cb9ff8553c35874e8896d540c2f085cd20139031184db1e1df22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d77ce49a88cb7d0434ef27052d3b9569479f9a63c6869132620efa7771196f5 = $this->env->getExtension("native_profiler");
        $__internal_6d77ce49a88cb7d0434ef27052d3b9569479f9a63c6869132620efa7771196f5->enter($__internal_6d77ce49a88cb7d0434ef27052d3b9569479f9a63c6869132620efa7771196f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6d77ce49a88cb7d0434ef27052d3b9569479f9a63c6869132620efa7771196f5->leave($__internal_6d77ce49a88cb7d0434ef27052d3b9569479f9a63c6869132620efa7771196f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
