<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_51a0fc9c83513a53bf1012f95d4f9c7bc579f2877335b34a2b89ac94e4ec1fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ed0a159d51892d153a1a73c828efb85f26db9cf4090a58e1451c45ad6da4406 = $this->env->getExtension("native_profiler");
        $__internal_6ed0a159d51892d153a1a73c828efb85f26db9cf4090a58e1451c45ad6da4406->enter($__internal_6ed0a159d51892d153a1a73c828efb85f26db9cf4090a58e1451c45ad6da4406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed0a159d51892d153a1a73c828efb85f26db9cf4090a58e1451c45ad6da4406->leave($__internal_6ed0a159d51892d153a1a73c828efb85f26db9cf4090a58e1451c45ad6da4406_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53d459c27f36467a68392544443febd0df268bb19495e9483c8a996a6717a174 = $this->env->getExtension("native_profiler");
        $__internal_53d459c27f36467a68392544443febd0df268bb19495e9483c8a996a6717a174->enter($__internal_53d459c27f36467a68392544443febd0df268bb19495e9483c8a996a6717a174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_53d459c27f36467a68392544443febd0df268bb19495e9483c8a996a6717a174->leave($__internal_53d459c27f36467a68392544443febd0df268bb19495e9483c8a996a6717a174_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfd3e3d4f14a04c0fac1fe5a2770e4abb159213a716782500753a84e9f27d3e8 = $this->env->getExtension("native_profiler");
        $__internal_dfd3e3d4f14a04c0fac1fe5a2770e4abb159213a716782500753a84e9f27d3e8->enter($__internal_dfd3e3d4f14a04c0fac1fe5a2770e4abb159213a716782500753a84e9f27d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfd3e3d4f14a04c0fac1fe5a2770e4abb159213a716782500753a84e9f27d3e8->leave($__internal_dfd3e3d4f14a04c0fac1fe5a2770e4abb159213a716782500753a84e9f27d3e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5d5efe44b0e0a2ee98f05378a8b7e5b7300888cee850a64c873bbb23fd3df43 = $this->env->getExtension("native_profiler");
        $__internal_d5d5efe44b0e0a2ee98f05378a8b7e5b7300888cee850a64c873bbb23fd3df43->enter($__internal_d5d5efe44b0e0a2ee98f05378a8b7e5b7300888cee850a64c873bbb23fd3df43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5d5efe44b0e0a2ee98f05378a8b7e5b7300888cee850a64c873bbb23fd3df43->leave($__internal_d5d5efe44b0e0a2ee98f05378a8b7e5b7300888cee850a64c873bbb23fd3df43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
