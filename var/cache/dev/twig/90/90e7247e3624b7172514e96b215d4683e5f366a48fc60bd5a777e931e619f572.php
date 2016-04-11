<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_de0e18276dd35d8bb969594e5e11a6c0929083a05a228845ebba48e754dbdcc5 extends Twig_Template
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
        $__internal_c053d5bf4c58fe37fb04c10d3a05f2bdfdfebf417fb6ce539b54cd653a4a0366 = $this->env->getExtension("native_profiler");
        $__internal_c053d5bf4c58fe37fb04c10d3a05f2bdfdfebf417fb6ce539b54cd653a4a0366->enter($__internal_c053d5bf4c58fe37fb04c10d3a05f2bdfdfebf417fb6ce539b54cd653a4a0366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c053d5bf4c58fe37fb04c10d3a05f2bdfdfebf417fb6ce539b54cd653a4a0366->leave($__internal_c053d5bf4c58fe37fb04c10d3a05f2bdfdfebf417fb6ce539b54cd653a4a0366_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
