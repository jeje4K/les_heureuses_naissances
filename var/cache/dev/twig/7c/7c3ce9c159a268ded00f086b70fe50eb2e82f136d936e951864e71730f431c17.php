<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0759259db377a1356bcc7a1b1abc85242e8a2c45f88bf11047ebce522017750e extends Twig_Template
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
        $__internal_3b9c11b6ea0af3746de447e2054975ed8785fcd6de49fb804e8d9e728c5578be = $this->env->getExtension("native_profiler");
        $__internal_3b9c11b6ea0af3746de447e2054975ed8785fcd6de49fb804e8d9e728c5578be->enter($__internal_3b9c11b6ea0af3746de447e2054975ed8785fcd6de49fb804e8d9e728c5578be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3b9c11b6ea0af3746de447e2054975ed8785fcd6de49fb804e8d9e728c5578be->leave($__internal_3b9c11b6ea0af3746de447e2054975ed8785fcd6de49fb804e8d9e728c5578be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
