<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5c8022acd6e5ef85796dbd86b80bb94629d894cd6d29506dfe7383db9ca2f94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7a43ce089b1d4bb07097e868e58d9f8f66094ac73384481c8a2cb9722211417 = $this->env->getExtension("native_profiler");
        $__internal_e7a43ce089b1d4bb07097e868e58d9f8f66094ac73384481c8a2cb9722211417->enter($__internal_e7a43ce089b1d4bb07097e868e58d9f8f66094ac73384481c8a2cb9722211417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e7a43ce089b1d4bb07097e868e58d9f8f66094ac73384481c8a2cb9722211417->leave($__internal_e7a43ce089b1d4bb07097e868e58d9f8f66094ac73384481c8a2cb9722211417_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ebbc00b73171659981d83d41ee4c5a92c9d43bdd50db5aa64d7ed984541e16b = $this->env->getExtension("native_profiler");
        $__internal_2ebbc00b73171659981d83d41ee4c5a92c9d43bdd50db5aa64d7ed984541e16b->enter($__internal_2ebbc00b73171659981d83d41ee4c5a92c9d43bdd50db5aa64d7ed984541e16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2ebbc00b73171659981d83d41ee4c5a92c9d43bdd50db5aa64d7ed984541e16b->leave($__internal_2ebbc00b73171659981d83d41ee4c5a92c9d43bdd50db5aa64d7ed984541e16b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
