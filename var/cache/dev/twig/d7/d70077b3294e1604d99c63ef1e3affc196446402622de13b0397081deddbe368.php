<?php

/* AppBundle:Advert:erreur.html.twig */
class __TwigTemplate_ecd8a6772c76a99350520cadac9ca6a60ebdb4ab10623d1b38a68fbf25d39775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:erreur.html.twig", 3);
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
        $__internal_ed8d5cacc6a6c7605c6ac7e494d88c77d9435aa99ebc7f227c0473ce4379b954 = $this->env->getExtension("native_profiler");
        $__internal_ed8d5cacc6a6c7605c6ac7e494d88c77d9435aa99ebc7f227c0473ce4379b954->enter($__internal_ed8d5cacc6a6c7605c6ac7e494d88c77d9435aa99ebc7f227c0473ce4379b954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8d5cacc6a6c7605c6ac7e494d88c77d9435aa99ebc7f227c0473ce4379b954->leave($__internal_ed8d5cacc6a6c7605c6ac7e494d88c77d9435aa99ebc7f227c0473ce4379b954_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b62c616c4b8d8524edbc3f32cce19e0374f62c56d4c5ee6458609e9b3ea6ad0 = $this->env->getExtension("native_profiler");
        $__internal_0b62c616c4b8d8524edbc3f32cce19e0374f62c56d4c5ee6458609e9b3ea6ad0->enter($__internal_0b62c616c4b8d8524edbc3f32cce19e0374f62c56d4c5ee6458609e9b3ea6ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b62c616c4b8d8524edbc3f32cce19e0374f62c56d4c5ee6458609e9b3ea6ad0->leave($__internal_0b62c616c4b8d8524edbc3f32cce19e0374f62c56d4c5ee6458609e9b3ea6ad0_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d9d1a8be5453c02f209d3aa9cc89696ed8b61546b711426ccfb4a2d001cae6e0 = $this->env->getExtension("native_profiler");
        $__internal_d9d1a8be5453c02f209d3aa9cc89696ed8b61546b711426ccfb4a2d001cae6e0->enter($__internal_d9d1a8be5453c02f209d3aa9cc89696ed8b61546b711426ccfb4a2d001cae6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    
  </ul>

";
        
        $__internal_d9d1a8be5453c02f209d3aa9cc89696ed8b61546b711426ccfb4a2d001cae6e0->leave($__internal_d9d1a8be5453c02f209d3aa9cc89696ed8b61546b711426ccfb4a2d001cae6e0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     */
/*   </ul>*/
/* */
/* {% endblock %}*/
