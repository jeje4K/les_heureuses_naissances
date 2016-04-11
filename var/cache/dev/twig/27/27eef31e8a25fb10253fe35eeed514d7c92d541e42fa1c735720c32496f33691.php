<?php

/* AppBundle:Advert:add.html.twig */
class __TwigTemplate_3c3254cf98c2977ab86a6618f7a0ec06ea9e69f42154624ddacbdbe3a28e7b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff99fc5dac1ded25a6c00c5a82ffd20f642e057984ee13ca13fd2b354fc6a126 = $this->env->getExtension("native_profiler");
        $__internal_ff99fc5dac1ded25a6c00c5a82ffd20f642e057984ee13ca13fd2b354fc6a126->enter($__internal_ff99fc5dac1ded25a6c00c5a82ffd20f642e057984ee13ca13fd2b354fc6a126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff99fc5dac1ded25a6c00c5a82ffd20f642e057984ee13ca13fd2b354fc6a126->leave($__internal_ff99fc5dac1ded25a6c00c5a82ffd20f642e057984ee13ca13fd2b354fc6a126_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b8aab9e23d1678c4d11a5be88857f795a085e32065994deb679a90b70d1be02 = $this->env->getExtension("native_profiler");
        $__internal_2b8aab9e23d1678c4d11a5be88857f795a085e32065994deb679a90b70d1be02->enter($__internal_2b8aab9e23d1678c4d11a5be88857f795a085e32065994deb679a90b70d1be02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2b8aab9e23d1678c4d11a5be88857f795a085e32065994deb679a90b70d1be02->leave($__internal_2b8aab9e23d1678c4d11a5be88857f795a085e32065994deb679a90b70d1be02_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2425e5cea69af1c6250547ac3deb916f539bf5d7dbb5e0b23dd78fc6e64c2712 = $this->env->getExtension("native_profiler");
        $__internal_2425e5cea69af1c6250547ac3deb916f539bf5d7dbb5e0b23dd78fc6e64c2712->enter($__internal_2425e5cea69af1c6250547ac3deb916f539bf5d7dbb5e0b23dd78fc6e64c2712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "AppBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
   
  </p>

";
        
        $__internal_2425e5cea69af1c6250547ac3deb916f539bf5d7dbb5e0b23dd78fc6e64c2712->leave($__internal_2425e5cea69af1c6250547ac3deb916f539bf5d7dbb5e0b23dd78fc6e64c2712_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("AppBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*    */
/*   </p>*/
/* */
/* {% endblock %}*/
