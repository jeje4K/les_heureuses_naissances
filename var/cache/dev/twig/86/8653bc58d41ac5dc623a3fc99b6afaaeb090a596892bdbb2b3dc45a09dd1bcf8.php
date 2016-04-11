<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8e40763ef6fdc508126906c75aaad69666ae78dad8022069f45f2770fabc57c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64715b05cf8fdee52223a3d85912eb53ff9ad51182bcfcbbee8c1a922f98f9fd = $this->env->getExtension("native_profiler");
        $__internal_64715b05cf8fdee52223a3d85912eb53ff9ad51182bcfcbbee8c1a922f98f9fd->enter($__internal_64715b05cf8fdee52223a3d85912eb53ff9ad51182bcfcbbee8c1a922f98f9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_64715b05cf8fdee52223a3d85912eb53ff9ad51182bcfcbbee8c1a922f98f9fd->leave($__internal_64715b05cf8fdee52223a3d85912eb53ff9ad51182bcfcbbee8c1a922f98f9fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
