<?php

/* AppBundle:Advert:edit.html.twig */
class __TwigTemplate_d17b273ab05b55013506bc65279e7927bb42e592f929eb3e0527b866d5766091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_566980dc097ea753a892eb9ce569f52b8ec9cf13cb1702275dc43fcc23e6d894 = $this->env->getExtension("native_profiler");
        $__internal_566980dc097ea753a892eb9ce569f52b8ec9cf13cb1702275dc43fcc23e6d894->enter($__internal_566980dc097ea753a892eb9ce569f52b8ec9cf13cb1702275dc43fcc23e6d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566980dc097ea753a892eb9ce569f52b8ec9cf13cb1702275dc43fcc23e6d894->leave($__internal_566980dc097ea753a892eb9ce569f52b8ec9cf13cb1702275dc43fcc23e6d894_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05d7ce14a91007acb4300d199012c7a518a36b137914d3e611f3f86f99c57f0e = $this->env->getExtension("native_profiler");
        $__internal_05d7ce14a91007acb4300d199012c7a518a36b137914d3e611f3f86f99c57f0e->enter($__internal_05d7ce14a91007acb4300d199012c7a518a36b137914d3e611f3f86f99c57f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05d7ce14a91007acb4300d199012c7a518a36b137914d3e611f3f86f99c57f0e->leave($__internal_05d7ce14a91007acb4300d199012c7a518a36b137914d3e611f3f86f99c57f0e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_823353e87a3f9e97e400a7717fee8577b072332cb6d144d57710ff6ade60f8eb = $this->env->getExtension("native_profiler");
        $__internal_823353e87a3f9e97e400a7717fee8577b072332cb6d144d57710ff6ade60f8eb->enter($__internal_823353e87a3f9e97e400a7717fee8577b072332cb6d144d57710ff6ade60f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "AppBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_823353e87a3f9e97e400a7717fee8577b072332cb6d144d57710ff6ade60f8eb->leave($__internal_823353e87a3f9e97e400a7717fee8577b072332cb6d144d57710ff6ade60f8eb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("AppBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
