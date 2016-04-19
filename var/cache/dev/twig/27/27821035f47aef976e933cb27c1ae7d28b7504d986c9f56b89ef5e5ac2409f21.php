<?php

/* AppUserBundle:Profile:add_enfant.html.twig */
class __TwigTemplate_eeb4ee8b8aa59bb617d329034f21c644568ac52aefa452e5a53b72b6fcf0b3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::Layout.html.twig", "AppUserBundle:Profile:add_enfant.html.twig", 1);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2be345ad84d2ab24225331f05c9351647735b553a47fbd649e12fe301f426f8 = $this->env->getExtension("native_profiler");
        $__internal_f2be345ad84d2ab24225331f05c9351647735b553a47fbd649e12fe301f426f8->enter($__internal_f2be345ad84d2ab24225331f05c9351647735b553a47fbd649e12fe301f426f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Profile:add_enfant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2be345ad84d2ab24225331f05c9351647735b553a47fbd649e12fe301f426f8->leave($__internal_f2be345ad84d2ab24225331f05c9351647735b553a47fbd649e12fe301f426f8_prof);

    }

    // line 2
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8b25ccad4b47cf939b82c159557935b7fd64b6a8f6ae45744da3e58d3fcc6be2 = $this->env->getExtension("native_profiler");
        $__internal_8b25ccad4b47cf939b82c159557935b7fd64b6a8f6ae45744da3e58d3fcc6be2->enter($__internal_8b25ccad4b47cf939b82c159557935b7fd64b6a8f6ae45744da3e58d3fcc6be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 3
        echo "<div class=\"container\" style=\"padding-top: 60px;\">
  <h1 class=\"page-header\">Ajouter Enfant </h1>
  <div class=\"row\">
    <!-- left column -->
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
      <div class=\"text-center\">
    <form class=\"edit\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("app_user_add_enfant");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) != null)) {
            // line 13
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
    ";
        } else {
            // line 15
            echo "    <img src=\"http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg\" class=\"avatar img-circle img-thumbnail\">
    ";
        }
        // line 17
        echo "        
      </div>
    </div>
  
    <!-- edit form column -->
    <div class=\"col-md-8 col-sm-6 col-xs-12 personal-info\">
      
      <h3>Enfant Info </h3>
      <form class=\"form-horizontal\">
        <div class=\"form-group\">
       
      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
      <div class='clearfix'>
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group\">
       
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label" => "Sexe"));
        echo "
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
      
          <div class=\"clearfix\">
      
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group\">
       
      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anniversaire", array()), 'label', array("label" => "Anniversaire"));
        echo "
      ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anniversaire", array()), 'errors');
        echo "
      
          <div class=\"clearfix\">
      
      ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anniversaire", array()), 'widget');
        echo "
          </div>
        </div>
     ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 56
        echo " 
    <div class=\"form-group\">
          <div class=\"col-lg-8\">
            <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"Valider\" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "  ";
        
        $__internal_8b25ccad4b47cf939b82c159557935b7fd64b6a8f6ae45744da3e58d3fcc6be2->leave($__internal_8b25ccad4b47cf939b82c159557935b7fd64b6a8f6ae45744da3e58d3fcc6be2_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_793c4a6851790e8b529ae9ee950c42e4a9e1269f95d335f9be1071b25ffa437b = $this->env->getExtension("native_profiler");
        $__internal_793c4a6851790e8b529ae9ee950c42e4a9e1269f95d335f9be1071b25ffa437b->enter($__internal_793c4a6851790e8b529ae9ee950c42e4a9e1269f95d335f9be1071b25ffa437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    ";
        // line 69
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_793c4a6851790e8b529ae9ee950c42e4a9e1269f95d335f9be1071b25ffa437b->leave($__internal_793c4a6851790e8b529ae9ee950c42e4a9e1269f95d335f9be1071b25ffa437b_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Profile:add_enfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  170 => 68,  164 => 67,  157 => 72,  155 => 67,  142 => 56,  138 => 54,  132 => 51,  125 => 47,  121 => 46,  113 => 41,  106 => 37,  102 => 36,  94 => 31,  89 => 29,  85 => 28,  72 => 17,  68 => 15,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {%extends 'AppBundle::Layout.html.twig'%}*/
/* {%block ocplatform_body %}*/
/* <div class="container" style="padding-top: 60px;">*/
/*   <h1 class="page-header">Ajouter Enfant </h1>*/
/*   <div class="row">*/
/*     <!-- left column -->*/
/*     <div class="col-md-4 col-sm-6 col-xs-12">*/
/*       <div class="text-center">*/
/*     <form class="edit" action="{{ path('app_user_add_enfant') }}" method="post" {{form_enctype(form)}}>*/
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/*     {%if (app.user.image)!=null%}*/
/*         <img src="{{asset(app.user.image.webPath)}}" class="avatar img-circle img-thumbnail" alt="avatar">*/
/*     {%else%}*/
/*     <img src="http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg" class="avatar img-circle img-thumbnail">*/
/*     {%endif%}*/
/*         */
/*       </div>*/
/*     </div>*/
/*   */
/*     <!-- edit form column -->*/
/*     <div class="col-md-8 col-sm-6 col-xs-12 personal-info">*/
/*       */
/*       <h3>Enfant Info </h3>*/
/*       <form class="form-horizontal">*/
/*         <div class="form-group">*/
/*        */
/*       {{ form_label(form.prenom, "Prénom") }}*/
/*       {{ form_errors(form.prenom) }}*/
/*       <div class='clearfix'>*/
/*       {{ form_widget(form.prenom) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*        */
/*       {{ form_label(form.sexe, "Sexe") }}*/
/*       {{ form_errors(form.sexe) }}*/
/*       */
/*           <div class="clearfix">*/
/*       */
/*       {{ form_widget(form.sexe) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*        */
/*       {{ form_label(form.anniversaire, "Anniversaire") }}*/
/*       {{ form_errors(form.anniversaire) }}*/
/*       */
/*           <div class="clearfix">*/
/*       */
/*       {{ form_widget(form.anniversaire) }}*/
/*           </div>*/
/*         </div>*/
/*      {{ form_rest(form) }}*/
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*  */
/*     <div class="form-group">*/
/*           <div class="col-lg-8">*/
/*             <input type="submit" id="_submit" class="btn btn-primary" name="_submit" value="Valider" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/*   {%endblock%}*/
/* */
