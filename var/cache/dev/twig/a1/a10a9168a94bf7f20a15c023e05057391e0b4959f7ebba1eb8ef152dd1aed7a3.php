<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4020ad7f0658a255b57516a9b1f3fbc0f4e2e0472f3bec3cb6d179ecbeb1d7db extends Twig_Template
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
        $__internal_f87fa8de82dba8abfcffbf6df47c9d42c5a8a823105d8091ce7f5d5f3bcdeff6 = $this->env->getExtension("native_profiler");
        $__internal_f87fa8de82dba8abfcffbf6df47c9d42c5a8a823105d8091ce7f5d5f3bcdeff6->enter($__internal_f87fa8de82dba8abfcffbf6df47c9d42c5a8a823105d8091ce7f5d5f3bcdeff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f87fa8de82dba8abfcffbf6df47c9d42c5a8a823105d8091ce7f5d5f3bcdeff6->leave($__internal_f87fa8de82dba8abfcffbf6df47c9d42c5a8a823105d8091ce7f5d5f3bcdeff6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
