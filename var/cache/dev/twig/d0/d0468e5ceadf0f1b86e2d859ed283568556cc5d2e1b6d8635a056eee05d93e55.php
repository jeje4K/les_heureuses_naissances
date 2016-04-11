<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_8186c8c20b381a1cd41521be7af120f10e476f3089681f26d5515208579ee327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'lesheureusesnaissancesplatform_body' => array($this, 'block_lesheureusesnaissancesplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f645b96f95377d7614fad69a9800caf1979784ecdfd5b993ccb54624b3862a89 = $this->env->getExtension("native_profiler");
        $__internal_f645b96f95377d7614fad69a9800caf1979784ecdfd5b993ccb54624b3862a89->enter($__internal_f645b96f95377d7614fad69a9800caf1979784ecdfd5b993ccb54624b3862a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f645b96f95377d7614fad69a9800caf1979784ecdfd5b993ccb54624b3862a89->leave($__internal_f645b96f95377d7614fad69a9800caf1979784ecdfd5b993ccb54624b3862a89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbd0fd37cae6dc0d4d2c6c87678f0a20adac37a189bb3f9060899421551d1ccb = $this->env->getExtension("native_profiler");
        $__internal_bbd0fd37cae6dc0d4d2c6c87678f0a20adac37a189bb3f9060899421551d1ccb->enter($__internal_bbd0fd37cae6dc0d4d2c6c87678f0a20adac37a189bb3f9060899421551d1ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bbd0fd37cae6dc0d4d2c6c87678f0a20adac37a189bb3f9060899421551d1ccb->leave($__internal_bbd0fd37cae6dc0d4d2c6c87678f0a20adac37a189bb3f9060899421551d1ccb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ced5ea5629705ac57ca7466204f9891f17cd2cfbbc91c0b5b25ca527ee95095 = $this->env->getExtension("native_profiler");
        $__internal_2ced5ea5629705ac57ca7466204f9891f17cd2cfbbc91c0b5b25ca527ee95095->enter($__internal_2ced5ea5629705ac57ca7466204f9891f17cd2cfbbc91c0b5b25ca527ee95095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<div class=\"col-md-12 bandeau\">
\t<h1 class=\"text-center\">Annonces</h1>
</div>
  ";
        // line 14
        echo "  ";
        $this->displayBlock('lesheureusesnaissancesplatform_body', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_2ced5ea5629705ac57ca7466204f9891f17cd2cfbbc91c0b5b25ca527ee95095->leave($__internal_2ced5ea5629705ac57ca7466204f9891f17cd2cfbbc91c0b5b25ca527ee95095_prof);

    }

    // line 14
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_688c00c5d798dcdaedf4f2cbae729b49b2278466b1fefcff9f5268aaf389f706 = $this->env->getExtension("native_profiler");
        $__internal_688c00c5d798dcdaedf4f2cbae729b49b2278466b1fefcff9f5268aaf389f706->enter($__internal_688c00c5d798dcdaedf4f2cbae729b49b2278466b1fefcff9f5268aaf389f706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 15
        echo "  ";
        
        $__internal_688c00c5d798dcdaedf4f2cbae729b49b2278466b1fefcff9f5268aaf389f706->leave($__internal_688c00c5d798dcdaedf4f2cbae729b49b2278466b1fefcff9f5268aaf389f706_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  70 => 14,  62 => 16,  59 => 14,  53 => 9,  47 => 8,  36 => 5,  11 => 3,);
    }
}
/* {# src/lesheureusesnaissances/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-12 bandeau">*/
/* 	<h1 class="text-center">Annonces</h1>*/
/* </div>*/
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block lesheureusesnaissancesplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
