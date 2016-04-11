<?php

/* AppBundle::Layout.html.twig */
class __TwigTemplate_28f716029bd850b5d893e62fe56476032b7291e0cc209b412a994b872be98c40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle::Layout.html.twig", 3);
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
        $__internal_5e3c78246d5cc6ec8fbc5b26ae4b9715e62d773464f0936b252f44aa2313fcd4 = $this->env->getExtension("native_profiler");
        $__internal_5e3c78246d5cc6ec8fbc5b26ae4b9715e62d773464f0936b252f44aa2313fcd4->enter($__internal_5e3c78246d5cc6ec8fbc5b26ae4b9715e62d773464f0936b252f44aa2313fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3c78246d5cc6ec8fbc5b26ae4b9715e62d773464f0936b252f44aa2313fcd4->leave($__internal_5e3c78246d5cc6ec8fbc5b26ae4b9715e62d773464f0936b252f44aa2313fcd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_280aa37a84be8c8a2238c65a4edaf90e6e9d1d3e1e4ea65752ba8748a2ada2f9 = $this->env->getExtension("native_profiler");
        $__internal_280aa37a84be8c8a2238c65a4edaf90e6e9d1d3e1e4ea65752ba8748a2ada2f9->enter($__internal_280aa37a84be8c8a2238c65a4edaf90e6e9d1d3e1e4ea65752ba8748a2ada2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_280aa37a84be8c8a2238c65a4edaf90e6e9d1d3e1e4ea65752ba8748a2ada2f9->leave($__internal_280aa37a84be8c8a2238c65a4edaf90e6e9d1d3e1e4ea65752ba8748a2ada2f9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d3b5caebcb0a92b030ec19aaea47cef88d107b67ecdd9c86d1af2cfdf421b2b = $this->env->getExtension("native_profiler");
        $__internal_3d3b5caebcb0a92b030ec19aaea47cef88d107b67ecdd9c86d1af2cfdf421b2b->enter($__internal_3d3b5caebcb0a92b030ec19aaea47cef88d107b67ecdd9c86d1af2cfdf421b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d3b5caebcb0a92b030ec19aaea47cef88d107b67ecdd9c86d1af2cfdf421b2b->leave($__internal_3d3b5caebcb0a92b030ec19aaea47cef88d107b67ecdd9c86d1af2cfdf421b2b_prof);

    }

    // line 14
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_3fd328df26ce9b3d46d49f01439422703092e7b20c80dedc4bb79c6c27e499a3 = $this->env->getExtension("native_profiler");
        $__internal_3fd328df26ce9b3d46d49f01439422703092e7b20c80dedc4bb79c6c27e499a3->enter($__internal_3fd328df26ce9b3d46d49f01439422703092e7b20c80dedc4bb79c6c27e499a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 15
        echo "  ";
        
        $__internal_3fd328df26ce9b3d46d49f01439422703092e7b20c80dedc4bb79c6c27e499a3->leave($__internal_3fd328df26ce9b3d46d49f01439422703092e7b20c80dedc4bb79c6c27e499a3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::Layout.html.twig";
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
