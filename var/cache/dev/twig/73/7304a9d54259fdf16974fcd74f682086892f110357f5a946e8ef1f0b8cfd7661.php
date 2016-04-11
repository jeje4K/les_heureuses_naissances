<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_273427628e3527810f734f2f7e0d23bd9c39567b8ab19ba4a307dd4e66b2a168 extends Twig_Template
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
        $__internal_4810cb3ad7ad16cc611994bedcb615cf01d15df841c4ad259a4af527157604e1 = $this->env->getExtension("native_profiler");
        $__internal_4810cb3ad7ad16cc611994bedcb615cf01d15df841c4ad259a4af527157604e1->enter($__internal_4810cb3ad7ad16cc611994bedcb615cf01d15df841c4ad259a4af527157604e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4810cb3ad7ad16cc611994bedcb615cf01d15df841c4ad259a4af527157604e1->leave($__internal_4810cb3ad7ad16cc611994bedcb615cf01d15df841c4ad259a4af527157604e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
