<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fec11aac0d3eafb617bd6ffa47790abe30b688ad115e4db90c51e75fc3d70a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f32725181bd26037348d5bb57f1bf81cc6ac6e8e58437c0ff2b1d7fbf5ac295 = $this->env->getExtension("native_profiler");
        $__internal_1f32725181bd26037348d5bb57f1bf81cc6ac6e8e58437c0ff2b1d7fbf5ac295->enter($__internal_1f32725181bd26037348d5bb57f1bf81cc6ac6e8e58437c0ff2b1d7fbf5ac295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f32725181bd26037348d5bb57f1bf81cc6ac6e8e58437c0ff2b1d7fbf5ac295->leave($__internal_1f32725181bd26037348d5bb57f1bf81cc6ac6e8e58437c0ff2b1d7fbf5ac295_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a00bfe4c6b9b5d67d62417f7479b05c1c388e2a6871f8657ced0254a82dbb53 = $this->env->getExtension("native_profiler");
        $__internal_7a00bfe4c6b9b5d67d62417f7479b05c1c388e2a6871f8657ced0254a82dbb53->enter($__internal_7a00bfe4c6b9b5d67d62417f7479b05c1c388e2a6871f8657ced0254a82dbb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7a00bfe4c6b9b5d67d62417f7479b05c1c388e2a6871f8657ced0254a82dbb53->leave($__internal_7a00bfe4c6b9b5d67d62417f7479b05c1c388e2a6871f8657ced0254a82dbb53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
