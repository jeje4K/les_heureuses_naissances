<?php

/* AppUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_68aff1d72b592c3e7c7cf3e19c17710fd07931a5aaa1c2fce2851d85a654c76a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
            'lesheureusesnaissancesplatform_body' => array($this, 'block_lesheureusesnaissancesplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a396a4f6a50e6ecf78315d321557a973cdf6179512ca626fb62371eb68ceab6 = $this->env->getExtension("native_profiler");
        $__internal_8a396a4f6a50e6ecf78315d321557a973cdf6179512ca626fb62371eb68ceab6->enter($__internal_8a396a4f6a50e6ecf78315d321557a973cdf6179512ca626fb62371eb68ceab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a396a4f6a50e6ecf78315d321557a973cdf6179512ca626fb62371eb68ceab6->leave($__internal_8a396a4f6a50e6ecf78315d321557a973cdf6179512ca626fb62371eb68ceab6_prof);

    }

    // line 3
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_65334315ee3c75d5d74406b51b3af95bf34ac4e5a4619ef53774620190767fb3 = $this->env->getExtension("native_profiler");
        $__internal_65334315ee3c75d5d74406b51b3af95bf34ac4e5a4619ef53774620190767fb3->enter($__internal_65334315ee3c75d5d74406b51b3af95bf34ac4e5a4619ef53774620190767fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 4
        echo "\t<div class=\"container\">
            <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
            <h4 class=\"uppercase mt20\">Créer un compte</h4>
\t\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">


    \t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
        \t<input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
    </div>
            </div>
        </div>
</form>

";
        
        $__internal_65334315ee3c75d5d74406b51b3af95bf34ac4e5a4619ef53774620190767fb3->leave($__internal_65334315ee3c75d5d74406b51b3af95bf34ac4e5a4619ef53774620190767fb3_prof);

    }

    public function getTemplateName()
    {
        return "AppUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  54 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block lesheureusesnaissancesplatform_body %}*/
/* 	<div class="container">*/
/*             <div class="row">*/
/*             <div class="col-md-8 col-md-offset-2">*/
/*             <h4 class="uppercase mt20">Créer un compte</h4>*/
/* 			<form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/* */
/* */
/*     		{{ form_widget(form) }}*/
/*     */
/*         	<input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     */
/*     </div>*/
/*             </div>*/
/*         </div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
