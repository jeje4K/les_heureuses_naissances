<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0e2ae07e5c8746788c0f4e0ac7a38009a5fb456da4bfa83ed4dcdd275ac2f5fe extends Twig_Template
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
        $__internal_fe09dca1e558069b34f2e16cb666f257a29b1126f45e09fbbd3ad4f238ff3159 = $this->env->getExtension("native_profiler");
        $__internal_fe09dca1e558069b34f2e16cb666f257a29b1126f45e09fbbd3ad4f238ff3159->enter($__internal_fe09dca1e558069b34f2e16cb666f257a29b1126f45e09fbbd3ad4f238ff3159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fe09dca1e558069b34f2e16cb666f257a29b1126f45e09fbbd3ad4f238ff3159->leave($__internal_fe09dca1e558069b34f2e16cb666f257a29b1126f45e09fbbd3ad4f238ff3159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
