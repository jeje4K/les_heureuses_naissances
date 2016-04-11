<?php

/* AppBundle:Advert:inscription.html.twig */
class __TwigTemplate_72527726e8f6a0cfa754b55bd3d1688787ef88454d1cf3b49374e31457f1c71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:inscription.html.twig", 1);
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
        $__internal_32cca0a10f6a57b8565fa4ca57d4b1b8a9c66780b62661441e9a9ccffd6eab77 = $this->env->getExtension("native_profiler");
        $__internal_32cca0a10f6a57b8565fa4ca57d4b1b8a9c66780b62661441e9a9ccffd6eab77->enter($__internal_32cca0a10f6a57b8565fa4ca57d4b1b8a9c66780b62661441e9a9ccffd6eab77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cca0a10f6a57b8565fa4ca57d4b1b8a9c66780b62661441e9a9ccffd6eab77->leave($__internal_32cca0a10f6a57b8565fa4ca57d4b1b8a9c66780b62661441e9a9ccffd6eab77_prof);

    }

    // line 3
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_fa4b8e566a166fd28c6fc869fcd4cfcdcfb8d2076b9f1edc67ff811a3408fea8 = $this->env->getExtension("native_profiler");
        $__internal_fa4b8e566a166fd28c6fc869fcd4cfcdcfb8d2076b9f1edc67ff811a3408fea8->enter($__internal_fa4b8e566a166fd28c6fc869fcd4cfcdcfb8d2076b9f1edc67ff811a3408fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 4
        echo "
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h4 class=\"uppercase mt20\">Créer un compte</h4>
                <input type=\"text\" placeholder=\"Pseudo\" />
                <input type=\"email\" placeholder=\"Adresse mail\" />
                <input type=\"text\" placeholder=\"Mot de passe\" />
                <input type=\"text\" placeholder=\"Confirmer votre mot de passe\" />
                <input type=\"text\" placeholder=\"Adresse mail du parrain\" />
                <input type=\"submit\" value=\"S'incrire\" />
            </div>
            </div>
        </div>

";
        
        $__internal_fa4b8e566a166fd28c6fc869fcd4cfcdcfb8d2076b9f1edc67ff811a3408fea8->leave($__internal_fa4b8e566a166fd28c6fc869fcd4cfcdcfb8d2076b9f1edc67ff811a3408fea8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block lesheureusesnaissancesplatform_body %}*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*             <div class="col-md-8 col-md-offset-2">*/
/*                 <h4 class="uppercase mt20">Créer un compte</h4>*/
/*                 <input type="text" placeholder="Pseudo" />*/
/*                 <input type="email" placeholder="Adresse mail" />*/
/*                 <input type="text" placeholder="Mot de passe" />*/
/*                 <input type="text" placeholder="Confirmer votre mot de passe" />*/
/*                 <input type="text" placeholder="Adresse mail du parrain" />*/
/*                 <input type="submit" value="S'incrire" />*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
