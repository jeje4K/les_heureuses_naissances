<?php

/* AppBundle:Advert:delete.html.twig */
class __TwigTemplate_268046d7e6bcccb9164e15435a43ce67fe4e4456bb64170124db0d186afff9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:delete.html.twig", 3);
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
        $__internal_284c3935e0ee753610dec6c567e82d356ec8a60da17b8a9779a36cc68e6020f1 = $this->env->getExtension("native_profiler");
        $__internal_284c3935e0ee753610dec6c567e82d356ec8a60da17b8a9779a36cc68e6020f1->enter($__internal_284c3935e0ee753610dec6c567e82d356ec8a60da17b8a9779a36cc68e6020f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284c3935e0ee753610dec6c567e82d356ec8a60da17b8a9779a36cc68e6020f1->leave($__internal_284c3935e0ee753610dec6c567e82d356ec8a60da17b8a9779a36cc68e6020f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b7bfb3a19ad67fb81be04d143973868bec9fbde82b4fa7fb30d192924191272 = $this->env->getExtension("native_profiler");
        $__internal_9b7bfb3a19ad67fb81be04d143973868bec9fbde82b4fa7fb30d192924191272->enter($__internal_9b7bfb3a19ad67fb81be04d143973868bec9fbde82b4fa7fb30d192924191272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b7bfb3a19ad67fb81be04d143973868bec9fbde82b4fa7fb30d192924191272->leave($__internal_9b7bfb3a19ad67fb81be04d143973868bec9fbde82b4fa7fb30d192924191272_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f7195d58fd052503c4442cce25c0ca49eebf19b4522eb7440da0ed4f62ede025 = $this->env->getExtension("native_profiler");
        $__internal_f7195d58fd052503c4442cce25c0ca49eebf19b4522eb7440da0ed4f62ede025->enter($__internal_f7195d58fd052503c4442cce25c0ca49eebf19b4522eb7440da0ed4f62ede025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_f7195d58fd052503c4442cce25c0ca49eebf19b4522eb7440da0ed4f62ede025->leave($__internal_f7195d58fd052503c4442cce25c0ca49eebf19b4522eb7440da0ed4f62ede025_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('oc_platform_delete', {'id': advert.id}) }}" method="post">*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
