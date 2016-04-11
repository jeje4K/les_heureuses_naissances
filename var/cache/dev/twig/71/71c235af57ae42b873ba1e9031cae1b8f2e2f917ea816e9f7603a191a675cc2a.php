<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_af0110d864f2541b9e1113c435dbc481eec32c810da935463b77473b2494e323 extends Twig_Template
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
        $__internal_bcf1bbfac9d15b103d7ceba8d41b452796805d52f24f805592cb3437df0f09be = $this->env->getExtension("native_profiler");
        $__internal_bcf1bbfac9d15b103d7ceba8d41b452796805d52f24f805592cb3437df0f09be->enter($__internal_bcf1bbfac9d15b103d7ceba8d41b452796805d52f24f805592cb3437df0f09be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bcf1bbfac9d15b103d7ceba8d41b452796805d52f24f805592cb3437df0f09be->leave($__internal_bcf1bbfac9d15b103d7ceba8d41b452796805d52f24f805592cb3437df0f09be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
