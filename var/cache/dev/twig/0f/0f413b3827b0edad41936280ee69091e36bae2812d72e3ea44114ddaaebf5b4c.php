<?php

/* AppBundle:Advert:connexion.html.twig */
class __TwigTemplate_5f6f15c1cd575f0181df130cd91edb28994f207e3804ba01899402ddefdf1a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:connexion.html.twig", 1);
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
        $__internal_b07351727442a3d682d4b5c003b866ff376ec71c3c34b5bd419943e429eada3e = $this->env->getExtension("native_profiler");
        $__internal_b07351727442a3d682d4b5c003b866ff376ec71c3c34b5bd419943e429eada3e->enter($__internal_b07351727442a3d682d4b5c003b866ff376ec71c3c34b5bd419943e429eada3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07351727442a3d682d4b5c003b866ff376ec71c3c34b5bd419943e429eada3e->leave($__internal_b07351727442a3d682d4b5c003b866ff376ec71c3c34b5bd419943e429eada3e_prof);

    }

    // line 3
    public function block_lesheureusesnaissancesplatform_body($context, array $blocks = array())
    {
        $__internal_7ab877b75ac1f67abd80077820926d0a8ab2d92accf3c02c77ee396cd7795aed = $this->env->getExtension("native_profiler");
        $__internal_7ab877b75ac1f67abd80077820926d0a8ab2d92accf3c02c77ee396cd7795aed->enter($__internal_7ab877b75ac1f67abd80077820926d0a8ab2d92accf3c02c77ee396cd7795aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lesheureusesnaissancesplatform_body"));

        // line 4
        echo "
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <h4 class=\"uppercase mt20\">J'ai déjà un compte</h4>
                <input type=\"text\" placeholder=\"Adresse mail\" />
                <input type=\"text\" placeholder=\"Mot de passe\" />
                <a href=\"\"><p class=\"lead pull-right\">
                                Mot de passe oublié ?
                </p></a>
                <div class=\"clearfix\"></div>
                <div>
                    <div class=\"radio-option\">
                        <div class=\"inner\"></div>
                        <input type=\"radio\" name=\"radio\" value=\"radio1\" />
                    </div>
                    <span>Se souvenir de moi</span>
                </div>
                <input type=\"submit\" value=\"Connexion\" />
            </div>
            </div>
        </div>

";
        
        $__internal_7ab877b75ac1f67abd80077820926d0a8ab2d92accf3c02c77ee396cd7795aed->leave($__internal_7ab877b75ac1f67abd80077820926d0a8ab2d92accf3c02c77ee396cd7795aed_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:connexion.html.twig";
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
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <h4 class="uppercase mt20">J'ai déjà un compte</h4>*/
/*                 <input type="text" placeholder="Adresse mail" />*/
/*                 <input type="text" placeholder="Mot de passe" />*/
/*                 <a href=""><p class="lead pull-right">*/
/*                                 Mot de passe oublié ?*/
/*                 </p></a>*/
/*                 <div class="clearfix"></div>*/
/*                 <div>*/
/*                     <div class="radio-option">*/
/*                         <div class="inner"></div>*/
/*                         <input type="radio" name="radio" value="radio1" />*/
/*                     </div>*/
/*                     <span>Se souvenir de moi</span>*/
/*                 </div>*/
/*                 <input type="submit" value="Connexion" />*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
