<?php

/* AppUserBundle::login.html.twig */
class __TwigTemplate_e689ca87c551ee72b43f3b830c9073930f1375e98a61e4570236176e19d489c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppUserBundle::login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7401f41a2efe00292118b09360a59ca290689924c4da57201f74e6d26142dad8 = $this->env->getExtension("native_profiler");
        $__internal_7401f41a2efe00292118b09360a59ca290689924c4da57201f74e6d26142dad8->enter($__internal_7401f41a2efe00292118b09360a59ca290689924c4da57201f74e6d26142dad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle::login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7401f41a2efe00292118b09360a59ca290689924c4da57201f74e6d26142dad8->leave($__internal_7401f41a2efe00292118b09360a59ca290689924c4da57201f74e6d26142dad8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a654cc2a9b1f485298dc7574eede1ee5d71540761d55e2702ba20e73d51a44 = $this->env->getExtension("native_profiler");
        $__internal_06a654cc2a9b1f485298dc7574eede1ee5d71540761d55e2702ba20e73d51a44->enter($__internal_06a654cc2a9b1f485298dc7574eede1ee5d71540761d55e2702ba20e73d51a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 8
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "
  ";
        // line 13
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_06a654cc2a9b1f485298dc7574eede1ee5d71540761d55e2702ba20e73d51a44->leave($__internal_06a654cc2a9b1f485298dc7574eede1ee5d71540761d55e2702ba20e73d51a44_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 13,  52 => 11,  46 => 9,  43 => 8,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/UserBundle/Resources/views/Security/login.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
