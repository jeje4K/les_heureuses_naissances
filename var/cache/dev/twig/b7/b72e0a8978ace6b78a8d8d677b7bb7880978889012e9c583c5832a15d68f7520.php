<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e05ade67891fafda5bafdef58001bb49574990c65df536c8e22444f208a7c2f8 extends Twig_Template
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
        $__internal_146579b70798b0c7fff4047d56f4d196417bc13630957ba253bef6d1051fb25c = $this->env->getExtension("native_profiler");
        $__internal_146579b70798b0c7fff4047d56f4d196417bc13630957ba253bef6d1051fb25c->enter($__internal_146579b70798b0c7fff4047d56f4d196417bc13630957ba253bef6d1051fb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_146579b70798b0c7fff4047d56f4d196417bc13630957ba253bef6d1051fb25c->leave($__internal_146579b70798b0c7fff4047d56f4d196417bc13630957ba253bef6d1051fb25c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
