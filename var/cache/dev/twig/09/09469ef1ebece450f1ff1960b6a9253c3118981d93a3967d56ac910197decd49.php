<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_582077137e90cbb8bfaefe3c27fff4d71a94ecd57851b780d98e5b889777267d extends Twig_Template
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
        $__internal_f029ebf25527990044124c3425a694d77e97af116eebc61cb8bd98bd05a4a0a9 = $this->env->getExtension("native_profiler");
        $__internal_f029ebf25527990044124c3425a694d77e97af116eebc61cb8bd98bd05a4a0a9->enter($__internal_f029ebf25527990044124c3425a694d77e97af116eebc61cb8bd98bd05a4a0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f029ebf25527990044124c3425a694d77e97af116eebc61cb8bd98bd05a4a0a9->leave($__internal_f029ebf25527990044124c3425a694d77e97af116eebc61cb8bd98bd05a4a0a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
