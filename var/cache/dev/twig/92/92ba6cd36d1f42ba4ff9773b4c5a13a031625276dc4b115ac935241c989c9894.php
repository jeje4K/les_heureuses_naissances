<?php

/* AppUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e21572055da78741f485d24c294fd91a9f67a25332632777f9e619da96799070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::Layout.html.twig", "AppUserBundle:Profile:show_content.html.twig", 1);
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
        $__internal_a2b0aa1dcb746ce34c86f5ec91812fa35cd886f11b3cdc435384b7bad4feff96 = $this->env->getExtension("native_profiler");
        $__internal_a2b0aa1dcb746ce34c86f5ec91812fa35cd886f11b3cdc435384b7bad4feff96->enter($__internal_a2b0aa1dcb746ce34c86f5ec91812fa35cd886f11b3cdc435384b7bad4feff96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Profile:show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b0aa1dcb746ce34c86f5ec91812fa35cd886f11b3cdc435384b7bad4feff96->leave($__internal_a2b0aa1dcb746ce34c86f5ec91812fa35cd886f11b3cdc435384b7bad4feff96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aaa189df27a0c75e88f8ff09b16d9ae6c7911c923ced63b0a6513539a27589a = $this->env->getExtension("native_profiler");
        $__internal_1aaa189df27a0c75e88f8ff09b16d9ae6c7911c923ced63b0a6513539a27589a->enter($__internal_1aaa189df27a0c75e88f8ff09b16d9ae6c7911c923ced63b0a6513539a27589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-10\">
             <h1 class=\"\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "
             \t";
            // line 11
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())) {
                // line 12
                echo "             \t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
                echo "
             \t";
            }
            // line 14
            echo "             </h1>
\t\t\t
\t\t\t";
            // line 16
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
                // line 17
                echo "          <a class=\"btn btn-success\" href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">Modifier mon Profil</a>  
\t\t\t";
            }
            // line 19
            echo "\t\t\t <button type=\"button\" class=\"btn btn-info\">Envoyez moi un  message</button>
\t\t\t
        </div>
\t\t
\t\t";
            // line 23
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()) != null)) {
                // line 24
                echo "      <div class=\"col-sm-2\"><img  class=\"img-circle img-responsive\" src= \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "alt", array()), "html", null, true);
                echo "\">
\t\t
\t\t</div>
\t  ";
            } else {
                // line 28
                echo "\t  <div class=\"col-sm-2\"><img  class=\"img-circle img-responsive\" src= \"http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg\" ></div>
\t\t";
            }
            // line 30
            echo "\t\t
    </div>
\t
  <br>
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <!--left col-->
            <ul class=\"list-group\">
                <li class=\"list-group-item text-muted\" contenteditable=\"false\">Profil</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Login</strong></span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Mail</strong></span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Telephone </strong></span>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
            echo "</li>
              <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Adresse</strong></span>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
            echo "</li>
\t\t\t  ";
            // line 43
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()) != null)) {
                // line 44
                echo "\t\t\t\t<li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\"> Prenom   </strong></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
                echo "</li>
\t\t\t  
\t\t\t  ";
            }
            // line 47
            echo "\t\t\t</ul>
           <div class=\"panel panel-default\">
             <div class=\"panel-heading\">Media</div>
\t\t\t <br></div>
             
\t\t\t
            </div>
          
          
           
            
        </div>
        <!--/col-3-->
        <div class=\"col-sm-9\" contenteditable=\"false\" style=\"\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t


            <div id=\"push\"></div>
        </div>
        <footer id=\"footer\">
            <div class=\"row-fluid\">
               
            </div>
        </footer>
        
        
        
</div>



";
        } else {
            // line 83
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "  ";
        
        $__internal_1aaa189df27a0c75e88f8ff09b16d9ae6c7911c923ced63b0a6513539a27589a->leave($__internal_1aaa189df27a0c75e88f8ff09b16d9ae6c7911c923ced63b0a6513539a27589a_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e20525db1cb484bdaf572fc3a3e3f19a828a7ec71cc0ca3b8340ff91996fd0b1 = $this->env->getExtension("native_profiler");
        $__internal_e20525db1cb484bdaf572fc3a3e3f19a828a7ec71cc0ca3b8340ff91996fd0b1->enter($__internal_e20525db1cb484bdaf572fc3a3e3f19a828a7ec71cc0ca3b8340ff91996fd0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    ";
        // line 88
        echo "
    <script src=\"https://code.jquery.com/jquery-1.11.2.js\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

    
  ";
        
        $__internal_e20525db1cb484bdaf572fc3a3e3f19a828a7ec71cc0ca3b8340ff91996fd0b1->leave($__internal_e20525db1cb484bdaf572fc3a3e3f19a828a7ec71cc0ca3b8340ff91996fd0b1_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 93,  202 => 91,  198 => 90,  194 => 88,  192 => 87,  186 => 86,  179 => 97,  177 => 86,  174 => 85,  168 => 83,  130 => 47,  123 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  94 => 30,  90 => 28,  80 => 24,  78 => 23,  72 => 19,  66 => 17,  64 => 16,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  43 => 7,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {%extends 'AppBundle::Layout.html.twig'%}*/
/* */
/* */
/* */
/* {%block body%}*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-10">*/
/*              <h1 class="">{{user.nom}}*/
/*              	{%if user.prenom%}*/
/*              	{{user.prenom}}*/
/*              	{%endif%}*/
/*              </h1>*/
/* 			*/
/* 			{%if app.user.id==user.id%}*/
/*           <a class="btn btn-success" href="{{path('fos_user_profile_edit')}}">Modifier mon Profil</a>  */
/* 			{%endif%}*/
/* 			 <button type="button" class="btn btn-info">Envoyez moi un  message</button>*/
/* 			*/
/*         </div>*/
/* 		*/
/* 		{%if (user.image)!=null%}*/
/*       <div class="col-sm-2"><img  class="img-circle img-responsive" src= "{{ asset(user.image.webPath) }}" alt="{{ user.image.alt }}">*/
/* 		*/
/* 		</div>*/
/* 	  {%else%}*/
/* 	  <div class="col-sm-2"><img  class="img-circle img-responsive" src= "http://i57.servimg.com/u/f57/16/18/15/10/1866.jpg" ></div>*/
/* 		{%endif%}*/
/* 		*/
/*     </div>*/
/* 	*/
/*   <br>*/
/*     <div class="row">*/
/*         <div class="col-sm-3">*/
/*             <!--left col-->*/
/*             <ul class="list-group">*/
/*                 <li class="list-group-item text-muted" contenteditable="false">Profil</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong class="">Login</strong></span>{{ user.username }}</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong class="">Mail</strong></span>{{ user.email }}</li>*/
/*                     <li class="list-group-item text-right"><span class="pull-left"><strong class="">Telephone </strong></span>{{ user.telephone }}</li>*/
/*               <li class="list-group-item text-right"><span class="pull-left"><strong class="">Adresse</strong></span>{{ user.adresse }}</li>*/
/* 			  {% if user.prenom!=null%}*/
/* 				<li class="list-group-item text-right"><span class="pull-left"><strong class=""> Prenom   </strong></span> {{ user.prenom }}</li>*/
/* 			  */
/* 			  {% endif %}*/
/* 			</ul>*/
/*            <div class="panel panel-default">*/
/*              <div class="panel-heading">Media</div>*/
/* 			 <br></div>*/
/*              */
/* 			*/
/*             </div>*/
/*           */
/*           */
/*            */
/*             */
/*         </div>*/
/*         <!--/col-3-->*/
/*         <div class="col-sm-9" contenteditable="false" style="">*/
/* 			<div class="panel panel-default">*/
/* 				*/
/* 			</div>*/
/* 			*/
/* 			*/
/* */
/* */
/*             <div id="push"></div>*/
/*         </div>*/
/*         <footer id="footer">*/
/*             <div class="row-fluid">*/
/*                */
/*             </div>*/
/*         </footer>*/
/*         */
/*         */
/*         */
/* </div>*/
/* */
/* */
/* */
/* {% else %}*/
/*     <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/* {% endif %}*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/* */
/*     <script src="https://code.jquery.com/jquery-1.11.2.js"></script>*/
/*     <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>*/
/*     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>*/
/*     <script src="{{asset('js/main.js')}}"></script>*/
/* */
/*     */
/*   {% endblock %}*/
/*   {% endblock %}*/
/* */
