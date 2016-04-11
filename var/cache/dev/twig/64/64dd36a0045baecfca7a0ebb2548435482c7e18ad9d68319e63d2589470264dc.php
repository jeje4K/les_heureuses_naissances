<?php

/* AppUserBundle:Security:login.html.twig */
class __TwigTemplate_433cdda3ad435877e18e8a6964169ce662486f365632b4bb58c2f52e1708c600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'lesheureusesnaissancesplatform_body' => array($this, 'block_lesheureusesnaissancesplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e282eebfd7f835b99c4ca640c5e58a1e36a9fd94ba096ff850cc58d392a0751 = $this->env->getExtension("native_profiler");
        $__internal_4e282eebfd7f835b99c4ca640c5e58a1e36a9fd94ba096ff850cc58d392a0751->enter($__internal_4e282eebfd7f835b99c4ca640c5e58a1e36a9fd94ba096ff850cc58d392a0751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e282eebfd7f835b99c4ca640c5e58a1e36a9fd94ba096ff850cc58d392a0751->leave($__internal_4e282eebfd7f835b99c4ca640c5e58a1e36a9fd94ba096ff850cc58d392a0751_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36de20b94c6a13da593184ba09508ed12962597a2645476e056dab3e0ff51821 = $this->env->getExtension("native_profiler");
        $__internal_36de20b94c6a13da593184ba09508ed12962597a2645476e056dab3e0ff51821->enter($__internal_36de20b94c6a13da593184ba09508ed12962597a2645476e056dab3e0ff51821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        $this->displayBlock('lesheureusesnaissancesplatform_body', $context, $blocks);
        // line 31
        echo "
";
        
        $__internal_36de20b94c6a13da593184ba09508ed12962597a2645476e056dab3e0ff51821->leave($__internal_36de20b94c6a13da593184ba09508ed12962597a2645476e056dab3e0ff51821_prof);

    }

    // line 7
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_58a05003c836ed3183378ac69e124b2084a73aa24cbbba5cfbb2e98dc2b1f229 = $this->env->getExtension("native_profiler");
        $__internal_58a05003c836ed3183378ac69e124b2084a73aa24cbbba5cfbb2e98dc2b1f229->enter($__internal_58a05003c836ed3183378ac69e124b2084a73aa24cbbba5cfbb2e98dc2b1f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 8
        echo "<div class=\"container\">
            <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <h4 class=\"uppercase mt20\">J'ai déjà un compte</h4>
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

</div>
            </div>
        </div>
";
        
        $__internal_58a05003c836ed3183378ac69e124b2084a73aa24cbbba5cfbb2e98dc2b1f229->leave($__internal_58a05003c836ed3183378ac69e124b2084a73aa24cbbba5cfbb2e98dc2b1f229_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 22,  89 => 18,  84 => 16,  80 => 15,  75 => 13,  71 => 12,  65 => 8,  59 => 7,  51 => 31,  49 => 7,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* {% block lesheureusesnaissancesplatform_body %}*/
/* <div class="container">*/
/*             <div class="row">*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <h4 class="uppercase mt20">J'ai déjà un compte</h4>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* </form>*/
/* */
/* </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
