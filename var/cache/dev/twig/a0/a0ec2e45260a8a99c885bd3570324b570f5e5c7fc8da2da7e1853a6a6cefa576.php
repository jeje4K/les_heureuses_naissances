<?php

/* AppUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_e590327ef6ee9305eea7d2b3564d2640f1556fc9e9480c20a4b4201ea4d0fa31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppUserBundle:Profile:edit_content.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lesheureusesnaissancesplatform_body' => array($this, 'block_lesheureusesnaissancesplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46435bf70e43a5ef86f76767ef24f37bf92534e3dafb1490b50271da82063078 = $this->env->getExtension("native_profiler");
        $__internal_46435bf70e43a5ef86f76767ef24f37bf92534e3dafb1490b50271da82063078->enter($__internal_46435bf70e43a5ef86f76767ef24f37bf92534e3dafb1490b50271da82063078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Profile:edit_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46435bf70e43a5ef86f76767ef24f37bf92534e3dafb1490b50271da82063078->leave($__internal_46435bf70e43a5ef86f76767ef24f37bf92534e3dafb1490b50271da82063078_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04e0341875b6dad331750e2d860b7fcf6536726ba90269509d4c81bdf58f5c89 = $this->env->getExtension("native_profiler");
        $__internal_04e0341875b6dad331750e2d860b7fcf6536726ba90269509d4c81bdf58f5c89->enter($__internal_04e0341875b6dad331750e2d860b7fcf6536726ba90269509d4c81bdf58f5c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04e0341875b6dad331750e2d860b7fcf6536726ba90269509d4c81bdf58f5c89->leave($__internal_04e0341875b6dad331750e2d860b7fcf6536726ba90269509d4c81bdf58f5c89_prof);

    }

    // line 9
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_46b33e76849bf370f1c4a9012c49aab8c06beed62e37902d53eb5aa1837cbe44 = $this->env->getExtension("native_profiler");
        $__internal_46b33e76849bf370f1c4a9012c49aab8c06beed62e37902d53eb5aa1837cbe44->enter($__internal_46b33e76849bf370f1c4a9012c49aab8c06beed62e37902d53eb5aa1837cbe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  <div class=\"row\">
      <!-- left column -->
      <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <div class=\"text-center\">
  \t\t<form class=\"edit\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
  \t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) != null)) {
            // line 19
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "getWebPath", array())), "html", null, true);
            echo "\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
  \t\t";
        } else {
            // line 21
            echo "  \t\t<img src=\"http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg\" class=\"avatar img-circle img-thumbnail\">
  \t\t";
        }
        // line 23
        echo "          <h6>Upload une photo différente ...</h6>
  \t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Image"));
        echo "
  \t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
  \t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
        </div>
      </div>
  \t
      <!-- edit form column -->
      <div class=\"col-md-8 personal-info\">
        
        <h3>Info Personnelle</h3>
        <form class=\"form-horizontal\" role=\"form\">
          <div class=\"form-group\">
  \t\t\t 
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
  \t\t\t  
         <div class=\"clearfix\">
  \t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
  \t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group\">
  \t\t\t 
  \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
      ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
  \t\t
            <div class=\"clearfix\">
  \t\t\t
  \t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
          </div>
          
          <div class=\"form-group\">
  \t\t 
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Téléphone"));
        echo "
  \t\t 
            <div class=\"clearfix\">
              ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
  \t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group\">
  \t\t 
           ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Identifiant"));
        echo "
  \t\t 
            <div class=\"clearfix\">
              ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  \t\t\t      ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            </div>
          </div>
  \t\t<div class=\"form-group\">
  \t\t 
           ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo "
  \t\t 
            <div class=\"clearfix\">
              ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
  \t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
            </div>
          </div>
  \t\t </hr>
          <div class=\"form-group\">
  \t\t\t
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label" => "Mot de Passe Actuel"));
        echo "
  \t\t\t
            <div class=\"clearfix\">
              ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
  \t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group\">
        
            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datef", array()), 'label', array("label" => "Date fin de terme"));
        echo "
        
            <div class=\"clearfix\">
              ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datef", array()), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datef", array()), 'widget');
        echo "
            </div>
          </div>
          
         
  \t\t";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  \t\t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  \t\t<hr/>

        </form>
      </div>
    </div>
  </div>
  ";
        // line 114
        echo "<div class=\"well\">
  ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>

";
        // line 120
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 123
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#fos_user_profile_form_enfants');

    // On ajoute un lien pour ajouter une nouvelle catégorie
    var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter un enfant </a>');
    \$container.append(\$addLink);

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$addLink.click(function(e) {
      addCategory(\$container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire Categorie
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Enfant ' )
          .replace(/__name__/g, index));

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien
      \$deleteLink.click(function(e) {
        \$prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>




";
        
        $__internal_46b33e76849bf370f1c4a9012c49aab8c06beed62e37902d53eb5aa1837cbe44->leave($__internal_46b33e76849bf370f1c4a9012c49aab8c06beed62e37902d53eb5aa1837cbe44_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 123,  266 => 120,  260 => 115,  257 => 114,  247 => 106,  243 => 105,  235 => 100,  231 => 99,  225 => 96,  216 => 90,  212 => 89,  206 => 86,  197 => 80,  193 => 79,  187 => 76,  179 => 71,  175 => 70,  169 => 67,  161 => 62,  157 => 61,  151 => 58,  142 => 52,  135 => 48,  131 => 47,  123 => 42,  119 => 41,  113 => 38,  109 => 37,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  80 => 21,  74 => 19,  72 => 18,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block lesheureusesnaissancesplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   <div class="row">*/
/*       <!-- left column -->*/
/*       <div class="col-md-4 col-sm-6 col-xs-12">*/
/*         <div class="text-center">*/
/*   		<form class="edit" action="{{ path('fos_user_profile_edit') }}" method="post" {{form_enctype(form)}}>*/
/*   		{%if (app.user.image)!=null%}*/
/*           <img src="{{asset(app.user.image.getWebPath)}}" class="avatar img-circle img-thumbnail" alt="avatar">*/
/*   		{%else%}*/
/*   		<img src="http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg" class="avatar img-circle img-thumbnail">*/
/*   		{%endif%}*/
/*           <h6>Upload une photo différente ...</h6>*/
/*   			{{ form_label(form.image, "Image") }}*/
/*   			{{ form_errors(form.image) }}*/
/*   			{{ form_widget(form.image) }}*/
/*         </div>*/
/*       </div>*/
/*   	*/
/*       <!-- edit form column -->*/
/*       <div class="col-md-8 personal-info">*/
/*         */
/*         <h3>Info Personnelle</h3>*/
/*         <form class="form-horizontal" role="form">*/
/*           <div class="form-group">*/
/*   			 */
/*             {{ form_label(form.nom, "Nom") }}*/
/*             {{ form_errors(form.nom) }}*/
/*   			  */
/*          <div class="clearfix">*/
/*   			{{ form_errors(form.nom) }}*/
/*   			{{ form_widget(form.nom) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*   			 */
/*   		{{ form_label(form.email, "Email") }}*/
/*       {{ form_errors(form.email) }}*/
/*   		*/
/*             <div class="clearfix">*/
/*   			*/
/*   			{{ form_widget(form.email) }}*/
/*             </div>*/
/*           </div>*/
/*           */
/*           <div class="form-group">*/
/*   		 */
/*           {{ form_label(form.telephone, "Téléphone") }}*/
/*   		 */
/*             <div class="clearfix">*/
/*               {{ form_errors(form.telephone) }}*/
/*   			{{ form_widget(form.telephone) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*   		 */
/*            {{ form_label(form.username, "Identifiant") }}*/
/*   		 */
/*             <div class="clearfix">*/
/*               {{ form_errors(form.username) }}*/
/*   			      {{ form_widget(form.username) }}*/
/*             </div>*/
/*           </div>*/
/*   		<div class="form-group">*/
/*   		 */
/*            {{ form_label(form.adresse, "Adresse") }}*/
/*   		 */
/*             <div class="clearfix">*/
/*               {{ form_errors(form.adresse) }}*/
/*   			{{ form_widget(form.adresse) }}*/
/*             </div>*/
/*           </div>*/
/*   		 </hr>*/
/*           <div class="form-group">*/
/*   			*/
/*             {{form_label(form.current_password,"Mot de Passe Actuel")}}*/
/*   			*/
/*             <div class="clearfix">*/
/*               {{form_errors(form.current_password)}}*/
/*   			{{form_widget(form.current_password)}}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*         */
/*             {{form_label(form.datef,"Date fin de terme")}}*/
/*         */
/*             <div class="clearfix">*/
/*               {{form_errors(form.datef)}}*/
/*         {{form_widget(form.datef)}}*/
/*             </div>*/
/*           </div>*/
/*           */
/*          */
/*   		{{ form_errors(form) }}*/
/*   		{{ form_rest(form) }}*/
/*   		<hr/>*/
/* */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {# Le formulaire reste inchangé #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
/* {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google*/
/*    mais si vous l'avez en local, changez simplement l'adresse. #}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/* {# Voici le script en question : #}*/
/* <script type="text/javascript">*/
/*   $(document).ready(function() {*/
/*     // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/*     var $container = $('div#fos_user_profile_form_enfants');*/
/* */
/*     // On ajoute un lien pour ajouter une nouvelle catégorie*/
/*     var $addLink = $('<a href="#" id="add_category" class="btn btn-default">Ajouter un enfant </a>');*/
/*     $container.append($addLink);*/
/* */
/*     // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*     $addLink.click(function(e) {*/
/*       addCategory($container);*/
/*       e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*       return false;*/
/*     });*/
/* */
/*     // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*     var index = $container.find(':input').length;*/
/* */
/*     // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).*/
/*     if (index == 0) {*/
/*       addCategory($container);*/
/*     } else {*/
/*       // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/*       $container.children('div').each(function() {*/
/*         addDeleteLink($(this));*/
/*       });*/
/*     }*/
/* */
/*     // La fonction qui ajoute un formulaire Categorie*/
/*     function addCategory($container) {*/
/*       // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*       // - le texte "__name__label__" qu'il contient par le label du champ*/
/*       // - le texte "__name__" qu'il contient par le numéro du champ*/
/*       var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Enfant ' )*/
/*           .replace(/__name__/g, index));*/
/* */
/*       // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*       addDeleteLink($prototype);*/
/* */
/*       // On ajoute le prototype modifié à la fin de la balise <div>*/
/*       $container.append($prototype);*/
/* */
/*       // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*       index++;*/
/*     }*/
/* */
/*     // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*     function addDeleteLink($prototype) {*/
/*       // Création du lien*/
/*       $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*       // Ajout du lien*/
/*       $prototype.append($deleteLink);*/
/* */
/*       // Ajout du listener sur le clic du lien*/
/*       $deleteLink.click(function(e) {*/
/*         $prototype.remove();*/
/*         e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*         return false;*/
/*       });*/
/*     }*/
/*   });*/
/* </script>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
