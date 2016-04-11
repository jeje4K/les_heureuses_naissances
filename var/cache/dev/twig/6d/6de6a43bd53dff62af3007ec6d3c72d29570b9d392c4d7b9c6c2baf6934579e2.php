<?php

/* ::layout.html.twig */
class __TwigTemplate_e8c3581bdd96fdf80945008549faa72a3d8b7661114fa625cb335e3f82181930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0cf6ab85817304c718edc4eff1eb9c251bfb3406ce2e479b6778247ea848d7e = $this->env->getExtension("native_profiler");
        $__internal_a0cf6ab85817304c718edc4eff1eb9c251bfb3406ce2e479b6778247ea848d7e->enter($__internal_a0cf6ab85817304c718edc4eff1eb9c251bfb3406ce2e479b6778247ea848d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>

";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 111
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_a0cf6ab85817304c718edc4eff1eb9c251bfb3406ce2e479b6778247ea848d7e->leave($__internal_a0cf6ab85817304c718edc4eff1eb9c251bfb3406ce2e479b6778247ea848d7e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c04b36678e1083b393f4aab14a896de395278c092e21665c997360e357b5f68c = $this->env->getExtension("native_profiler");
        $__internal_c04b36678e1083b393f4aab14a896de395278c092e21665c997360e357b5f68c->enter($__internal_c04b36678e1083b393f4aab14a896de395278c092e21665c997360e357b5f68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "lesheureusesnaissances Plateforme";
        
        $__internal_c04b36678e1083b393f4aab14a896de395278c092e21665c997360e357b5f68c->leave($__internal_c04b36678e1083b393f4aab14a896de395278c092e21665c997360e357b5f68c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b47bcb1948a1fb02ccecca72cbdd1c59cf9861c43d5c99182941230fe1e07f = $this->env->getExtension("native_profiler");
        $__internal_37b47bcb1948a1fb02ccecca72cbdd1c59cf9861c43d5c99182941230fe1e07f->enter($__internal_37b47bcb1948a1fb02ccecca72cbdd1c59cf9861c43d5c99182941230fe1e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/ytplayer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
  ";
        
        $__internal_37b47bcb1948a1fb02ccecca72cbdd1c59cf9861c43d5c99182941230fe1e07f->leave($__internal_37b47bcb1948a1fb02ccecca72cbdd1c59cf9861c43d5c99182941230fe1e07f_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_aa0c2bcb6c950203c3cf452a644901db927301f8fce94e88678aa58f8add149e = $this->env->getExtension("native_profiler");
        $__internal_aa0c2bcb6c950203c3cf452a644901db927301f8fce94e88678aa58f8add149e->enter($__internal_aa0c2bcb6c950203c3cf452a644901db927301f8fce94e88678aa58f8add149e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "  
  <div class=\"nav-container\">
            <a id=\"top\"></a>
            <nav>
                <div class=\"nav-bar\">
                    <div class=\"module left\">
                        <a href=\"index.html\">
                            <img class=\"logo logo-light\" alt=\"Foundry\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/img/logo-light.png"), "html", null, true);
        echo "\" />
                            <img class=\"logo logo-dark\" alt=\"Foundry\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/img/logo-dark.png"), "html", null, true);
        echo "\" />
                        </a>
                    </div>
                    <div class=\"module widget-handle mobile-toggle right visible-sm visible-xs\">
                        <i class=\"ti-menu\"></i>
                    </div>
                    <div class=\"module-group right\">
                        ";
        // line 40
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 41
            echo "                        <div class=\"module left\">
                            <ul class=\"menu\">
                                <li>
                                    <a href=\"#\">
                                        Les meet-up
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        Messagerie
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end of menu module-->
                        <div class=\"module widget-handle search-widget-handle left\">
                            <div class=\"search\">
                                <i class=\"ti-search\"></i>
                                <span class=\"title\">Search Site</span>
                            </div>
                            <div class=\"function\">
                                <form class=\"search-form\">
                                    <input type=\"text\" placeholder=\"Type Here\" />
                                </form>
                            </div>
                        </div>
                        <div class=\"module widget-handle language left\">
                            <ul class=\"menu\">
                                <li class=\"has-dropdown\">
                                    <a href=\"#\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                    <ul>
                                        <li>
                                            <a href=\"#\">Mon menu</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Mes meet-up</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Meet-up à venir</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Modifier mon profil</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Paramètres du compte</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        ";
        } else {
            // line 95
            echo "
                        <a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Connexion</button></a>
                        
                            <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Inscription</button></a>


                        ";
        }
        // line 102
        echo "
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>
";
        
        $__internal_aa0c2bcb6c950203c3cf452a644901db927301f8fce94e88678aa58f8add149e->leave($__internal_aa0c2bcb6c950203c3cf452a644901db927301f8fce94e88678aa58f8add149e_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_3372329ca3b3456bc93c9b44afdae33e05be7788e6accbfbe2ed58d2e5e33b9a = $this->env->getExtension("native_profiler");
        $__internal_3372329ca3b3456bc93c9b44afdae33e05be7788e6accbfbe2ed58d2e5e33b9a->enter($__internal_3372329ca3b3456bc93c9b44afdae33e05be7788e6accbfbe2ed58d2e5e33b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3372329ca3b3456bc93c9b44afdae33e05be7788e6accbfbe2ed58d2e5e33b9a->leave($__internal_3372329ca3b3456bc93c9b44afdae33e05be7788e6accbfbe2ed58d2e5e33b9a_prof);

    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        $__internal_389c0b1fd199e5741a9b82a7daa85a94eb6d03efffc032fa0eb75c6eeca4b198 = $this->env->getExtension("native_profiler");
        $__internal_389c0b1fd199e5741a9b82a7daa85a94eb6d03efffc032fa0eb75c6eeca4b198->enter($__internal_389c0b1fd199e5741a9b82a7daa85a94eb6d03efffc032fa0eb75c6eeca4b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 112
        echo "            <footer class=\"footer-1 bg-dark\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <img alt=\"Logo\" class=\"logo\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/img/logo-light.png"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h6 class=\"title\">Recent Posts</h6>
                                <hr>
                                <ul class=\"link-list recent-posts\">
                                    <li>
                                        <a href=\"#\">Hugging pugs is super trendy</a>
                                        <span class=\"date\">February
                                            <span class=\"number\">14, 2015</span>
                                        </span>
                                    </li>
                                    <li>
                                        <a href=\"#\">Spinning vinyl is oh so cool</a>
                                        <span class=\"date\">February
                                            <span class=\"number\">9, 2015</span>
                                        </span>
                                    </li>
                                    <li>
                                        <a href=\"#\">Superior theme design by pros</a>
                                        <span class=\"date\">January
                                            <span class=\"number\">27, 2015</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h6 class=\"title\">Latest Updates</h6>
                                <hr>
                                <div class=\"twitter-feed\">
                                    <div class=\"tweets-feed\" data-widget-id=\"492085717044981760\">
                                    </div>
                                </div>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h6 class=\"title\">Instagram</h6>
                                <hr>
                                <div class=\"instafeed\" data-user-name=\"funsizeco\">
                                    <ul></ul>
                                </div>
                            </div>
                            <!--end of widget-->
                        </div>
                    </div>
                    <!--end of row-->
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <span class=\"sub\">&copy; Copyright 2016 - Medium Rare</span>
                        </div>
                        <div class=\"col-sm-6 text-right\">
                            <ul class=\"list-inline social-list\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-dribbble\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-vimeo-alt\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of container-->
                <a class=\"btn btn-sm fade-half back-to-top inner-link\" href=\"#top\">Top</a>
            </footer>
        </div>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/flickr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/flexslider.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/masonry.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/twitterfetcher.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/spectragram.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/ytplayer.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/countdown.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/smooth-scroll.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/parallax.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/scripts.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_389c0b1fd199e5741a9b82a7daa85a94eb6d03efffc032fa0eb75c6eeca4b198->leave($__internal_389c0b1fd199e5741a9b82a7daa85a94eb6d03efffc032fa0eb75c6eeca4b198_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 214,  396 => 213,  392 => 212,  388 => 211,  384 => 210,  380 => 209,  376 => 208,  372 => 207,  368 => 206,  364 => 205,  360 => 204,  356 => 203,  352 => 202,  263 => 116,  257 => 112,  251 => 111,  240 => 109,  227 => 102,  220 => 98,  215 => 96,  212 => 95,  202 => 88,  193 => 82,  178 => 70,  147 => 41,  145 => 40,  135 => 33,  131 => 32,  117 => 25,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  78 => 13,  76 => 12,  70 => 11,  58 => 9,  51 => 111,  49 => 109,  47 => 25,  43 => 23,  41 => 11,  36 => 9,  27 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}lesheureusesnaissances Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" type="text/css" />*/
/*     <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/ytplayer.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* {% block header %}  */
/*   <div class="nav-container">*/
/*             <a id="top"></a>*/
/*             <nav>*/
/*                 <div class="nav-bar">*/
/*                     <div class="module left">*/
/*                         <a href="index.html">*/
/*                             <img class="logo logo-light" alt="Foundry" src="{{asset('front/img/logo-light.png')}}" />*/
/*                             <img class="logo logo-dark" alt="Foundry" src="{{asset('front/img/logo-dark.png')}}" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="module widget-handle mobile-toggle right visible-sm visible-xs">*/
/*                         <i class="ti-menu"></i>*/
/*                     </div>*/
/*                     <div class="module-group right">*/
/*                         {% if app.user %}*/
/*                         <div class="module left">*/
/*                             <ul class="menu">*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         Les meet-up*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         Messagerie*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <!--end of menu module-->*/
/*                         <div class="module widget-handle search-widget-handle left">*/
/*                             <div class="search">*/
/*                                 <i class="ti-search"></i>*/
/*                                 <span class="title">Search Site</span>*/
/*                             </div>*/
/*                             <div class="function">*/
/*                                 <form class="search-form">*/
/*                                     <input type="text" placeholder="Type Here" />*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="module widget-handle language left">*/
/*                             <ul class="menu">*/
/*                                 <li class="has-dropdown">*/
/*                                     <a href="#">{{app.user.username}}</a>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="#">Mon menu</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Mes meet-up</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Meet-up à venir</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{path('fos_user_profile_edit')}}">Modifier mon profil</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Paramètres du compte</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{path('fos_user_security_logout')}}">Deconnexion</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         {% else %}*/
/* */
/*                         <a href="{{path('fos_user_security_login')}}"><button type="button" class="btn btn-success">Connexion</button></a>*/
/*                         */
/*                             <a href="{{path('fos_user_registration_register')}}"><button type="button" class="btn btn-primary">Inscription</button></a>*/
/* */
/* */
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <!--end of module group-->*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*             <footer class="footer-1 bg-dark">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3 col-sm-6">*/
/*                             <img alt="Logo" class="logo" src="{{asset('front/img/logo-light.png')}}" />*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-6">*/
/*                             <div class="widget">*/
/*                                 <h6 class="title">Recent Posts</h6>*/
/*                                 <hr>*/
/*                                 <ul class="link-list recent-posts">*/
/*                                     <li>*/
/*                                         <a href="#">Hugging pugs is super trendy</a>*/
/*                                         <span class="date">February*/
/*                                             <span class="number">14, 2015</span>*/
/*                                         </span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Spinning vinyl is oh so cool</a>*/
/*                                         <span class="date">February*/
/*                                             <span class="number">9, 2015</span>*/
/*                                         </span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">Superior theme design by pros</a>*/
/*                                         <span class="date">January*/
/*                                             <span class="number">27, 2015</span>*/
/*                                         </span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <!--end of widget-->*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-6">*/
/*                             <div class="widget">*/
/*                                 <h6 class="title">Latest Updates</h6>*/
/*                                 <hr>*/
/*                                 <div class="twitter-feed">*/
/*                                     <div class="tweets-feed" data-widget-id="492085717044981760">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!--end of widget-->*/
/*                         </div>*/
/*                         <div class="col-md-3 col-sm-6">*/
/*                             <div class="widget">*/
/*                                 <h6 class="title">Instagram</h6>*/
/*                                 <hr>*/
/*                                 <div class="instafeed" data-user-name="funsizeco">*/
/*                                     <ul></ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!--end of widget-->*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--end of row-->*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6">*/
/*                             <span class="sub">&copy; Copyright 2016 - Medium Rare</span>*/
/*                         </div>*/
/*                         <div class="col-sm-6 text-right">*/
/*                             <ul class="list-inline social-list">*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="ti-twitter-alt"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="ti-facebook"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="ti-dribbble"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="ti-vimeo-alt"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--end of container-->*/
/*                 <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>*/
/*             </footer>*/
/*         </div>*/
/*         <script src="{{asset('front/js/jquery.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/flickr.js')}}"></script>*/
/*         <script src="{{asset('front/js/flexslider.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/lightbox.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/masonry.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/twitterfetcher.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/spectragram.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/ytplayer.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/countdown.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/smooth-scroll.min.js')}}"></script>*/
/*         <script src="{{asset('front/js/parallax.js')}}"></script>*/
/*         <script src="{{asset('front/js/scripts.js')}}"></script>*/
/* </html>*/
/* {% endblock %}*/
