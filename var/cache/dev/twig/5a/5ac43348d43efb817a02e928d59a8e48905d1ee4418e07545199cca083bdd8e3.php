<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0712b7a4af55677fcbbb1ceedaf822f0bf91548b82398792af288b79837c8a0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a61c76215c42b1287d6179cb3e13ef4b5cf3ced9177644f8b9568786b8eb21 = $this->env->getExtension("native_profiler");
        $__internal_45a61c76215c42b1287d6179cb3e13ef4b5cf3ced9177644f8b9568786b8eb21->enter($__internal_45a61c76215c42b1287d6179cb3e13ef4b5cf3ced9177644f8b9568786b8eb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_45a61c76215c42b1287d6179cb3e13ef4b5cf3ced9177644f8b9568786b8eb21->leave($__internal_45a61c76215c42b1287d6179cb3e13ef4b5cf3ced9177644f8b9568786b8eb21_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59286c2c38b12f1ea8a10689e60d526f1fa4dc02d5afc000e618468841c4329e = $this->env->getExtension("native_profiler");
        $__internal_59286c2c38b12f1ea8a10689e60d526f1fa4dc02d5afc000e618468841c4329e->enter($__internal_59286c2c38b12f1ea8a10689e60d526f1fa4dc02d5afc000e618468841c4329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("AppUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_59286c2c38b12f1ea8a10689e60d526f1fa4dc02d5afc000e618468841c4329e->leave($__internal_59286c2c38b12f1ea8a10689e60d526f1fa4dc02d5afc000e618468841c4329e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "AppUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
