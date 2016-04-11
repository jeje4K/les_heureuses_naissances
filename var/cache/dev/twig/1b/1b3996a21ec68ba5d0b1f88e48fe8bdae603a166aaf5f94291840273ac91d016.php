<?php

/* AppUserBundle:Profile:result.html.twig */
class __TwigTemplate_9a39bed9111b721f3857f16f31d37bd3f6879e608f8ccf4b8a90e8d60e6d2d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::Layout.html.twig", "AppUserBundle:Profile:result.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb4256867e730222f5e0d59ae6263d6419e426eebed103ba37678faee4ba1fe = $this->env->getExtension("native_profiler");
        $__internal_7bb4256867e730222f5e0d59ae6263d6419e426eebed103ba37678faee4ba1fe->enter($__internal_7bb4256867e730222f5e0d59ae6263d6419e426eebed103ba37678faee4ba1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Profile:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb4256867e730222f5e0d59ae6263d6419e426eebed103ba37678faee4ba1fe->leave($__internal_7bb4256867e730222f5e0d59ae6263d6419e426eebed103ba37678faee4ba1fe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_143a3a20a71696798ca420c5e69c7fbc734f38764b25c5ded11291c879cbee40 = $this->env->getExtension("native_profiler");
        $__internal_143a3a20a71696798ca420c5e69c7fbc734f38764b25c5ded11291c879cbee40->enter($__internal_143a3a20a71696798ca420c5e69c7fbc734f38764b25c5ded11291c879cbee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if (((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")) != null)) {
            // line 6
            echo "  <em><h5>Résultat de la recherche :</h5></em>
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 8
                echo "    
      <div class=\"container\">
  
    
      <div class=\"well panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 text-center\">
        ";
                // line 16
                if (($this->getAttribute($context["user"], "image", array()) != null)) {
                    // line 17
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("username" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["user"], "image", array()), "webPath", array())), "html", null, true);
                    echo "\"  class=\"center-block img-circle img-thumbnail img-responsive\">
              </a>
        ";
                } else {
                    // line 21
                    echo "        <div class=\"col-sm-2\">
          <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("username" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
                    echo "\">
            <img  class=\"img-circle  \" src= \"http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg\" >
          </a>

          </div>
        ";
                }
                // line 28
                echo "              
            </div>
            <!--/col--> 
            <div class=\"col-xs-12 col-sm-8\">
              <h2>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</h2>
              <p><strong>Nom: </strong> ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                echo " </p>
              <p><strong>Adresse Mail </strong> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo " </p>
              
            </div>
            <!--/col-->          
            
          
            <!--/col-->
            <div class=\"col-xs-12 col-sm-4\">
             
              <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("username" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-info btn-block\"><span class=\"fa fa-user\"></span> Voir mon profil </button></a>
            </div>
            <!--/col-->
            
            <!--/col-->
          
          <!--/row-->
        </div>
        <!--/panel-body-->
      </div>
      <!--/panel-->
    </div>
    <!--/col--> 
  
  <!--/row--> 
</div>
<!--/container-->
  
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "  
";
        } else {
            // line 64
            echo "  <em><h4>Recherche non aboutie<h4></em>

  ";
        }
        // line 67
        echo "
  ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
";
        
        $__internal_143a3a20a71696798ca420c5e69c7fbc734f38764b25c5ded11291c879cbee40->leave($__internal_143a3a20a71696798ca420c5e69c7fbc734f38764b25c5ded11291c879cbee40_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99116f81695ddb51c140daae000f45c75ee96edfd16de5f270a10dc20dda99f8 = $this->env->getExtension("native_profiler");
        $__internal_99116f81695ddb51c140daae000f45c75ee96edfd16de5f270a10dc20dda99f8->enter($__internal_99116f81695ddb51c140daae000f45c75ee96edfd16de5f270a10dc20dda99f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        // line 70
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_99116f81695ddb51c140daae000f45c75ee96edfd16de5f270a10dc20dda99f8->leave($__internal_99116f81695ddb51c140daae000f45c75ee96edfd16de5f270a10dc20dda99f8_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Profile:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 70,  164 => 69,  158 => 68,  150 => 73,  148 => 68,  145 => 67,  140 => 64,  136 => 62,  111 => 43,  99 => 34,  95 => 33,  91 => 32,  85 => 28,  76 => 22,  73 => 21,  67 => 18,  62 => 17,  60 => 16,  50 => 8,  46 => 7,  43 => 6,  41 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* */
/* {%extends 'AppBundle::Layout.html.twig'%}*/
/* {%block body%}*/
/* {%if listUsers!=null%}*/
/*   <em><h5>Résultat de la recherche :</h5></em>*/
/*   {% for user in listUsers %}*/
/*     */
/*       <div class="container">*/
/*   */
/*     */
/*       <div class="well panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             <div class="col-xs-12 col-sm-4 text-center">*/
/*         {%if user.image!=null%}*/
/*               <a href="{{ path('show', {'username': user.username}) }}">*/
/*                 <img src="{{asset(user.image.webPath)}}"  class="center-block img-circle img-thumbnail img-responsive">*/
/*               </a>*/
/*         {%else%}*/
/*         <div class="col-sm-2">*/
/*           <a href="{{ path('show', {'username': user.username}) }}">*/
/*             <img  class="img-circle  " src= "http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg" >*/
/*           </a>*/
/* */
/*           </div>*/
/*         {%endif%}*/
/*               */
/*             </div>*/
/*             <!--/col--> */
/*             <div class="col-xs-12 col-sm-8">*/
/*               <h2>{{user.username}}</h2>*/
/*               <p><strong>Nom: </strong> {{ user.name }} </p>*/
/*               <p><strong>Adresse Mail </strong> {{user.email}} </p>*/
/*               */
/*             </div>*/
/*             <!--/col-->          */
/*             */
/*           */
/*             <!--/col-->*/
/*             <div class="col-xs-12 col-sm-4">*/
/*              */
/*               <a href="{{path('show',{'username': user.username})}}"><button class="btn btn-info btn-block"><span class="fa fa-user"></span> Voir mon profil </button></a>*/
/*             </div>*/
/*             <!--/col-->*/
/*             */
/*             <!--/col-->*/
/*           */
/*           <!--/row-->*/
/*         </div>*/
/*         <!--/panel-body-->*/
/*       </div>*/
/*       <!--/panel-->*/
/*     </div>*/
/*     <!--/col--> */
/*   */
/*   <!--/row--> */
/* </div>*/
/* <!--/container-->*/
/*   */
/*   {% endfor %}*/
/*   */
/* {%else%}*/
/*   <em><h4>Recherche non aboutie<h4></em>*/
/* */
/*   {%endif%}*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* {%endblock%}*/
