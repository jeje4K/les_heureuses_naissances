<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5cd99b0d9512f14d1b3265b5975a6cc0ad5c01ec82f96a7c8760cd42ee14bd57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53649d0bedacb57f47c27f054dd352dec18fe40e4ed98f3509b1e796cc083745 = $this->env->getExtension("native_profiler");
        $__internal_53649d0bedacb57f47c27f054dd352dec18fe40e4ed98f3509b1e796cc083745->enter($__internal_53649d0bedacb57f47c27f054dd352dec18fe40e4ed98f3509b1e796cc083745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53649d0bedacb57f47c27f054dd352dec18fe40e4ed98f3509b1e796cc083745->leave($__internal_53649d0bedacb57f47c27f054dd352dec18fe40e4ed98f3509b1e796cc083745_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e2e41b805bb66c5f8238a88f384da2200118c41061706e79da077d258545402 = $this->env->getExtension("native_profiler");
        $__internal_0e2e41b805bb66c5f8238a88f384da2200118c41061706e79da077d258545402->enter($__internal_0e2e41b805bb66c5f8238a88f384da2200118c41061706e79da077d258545402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0e2e41b805bb66c5f8238a88f384da2200118c41061706e79da077d258545402->leave($__internal_0e2e41b805bb66c5f8238a88f384da2200118c41061706e79da077d258545402_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
