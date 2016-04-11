<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9175af2bf7f161ecb6d04135a0a4b0678de92beeee8250fc7bc2ea4634d30ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5e8c70fca7e37c16ffc42a2eb650d4892a0eef453e4f5ff4768bf35f4e90075 = $this->env->getExtension("native_profiler");
        $__internal_c5e8c70fca7e37c16ffc42a2eb650d4892a0eef453e4f5ff4768bf35f4e90075->enter($__internal_c5e8c70fca7e37c16ffc42a2eb650d4892a0eef453e4f5ff4768bf35f4e90075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e8c70fca7e37c16ffc42a2eb650d4892a0eef453e4f5ff4768bf35f4e90075->leave($__internal_c5e8c70fca7e37c16ffc42a2eb650d4892a0eef453e4f5ff4768bf35f4e90075_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c0d3ecc55ca3685921fb71e45d76f17cfae0dda41e1aec5355d66922c0bb24a = $this->env->getExtension("native_profiler");
        $__internal_0c0d3ecc55ca3685921fb71e45d76f17cfae0dda41e1aec5355d66922c0bb24a->enter($__internal_0c0d3ecc55ca3685921fb71e45d76f17cfae0dda41e1aec5355d66922c0bb24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c0d3ecc55ca3685921fb71e45d76f17cfae0dda41e1aec5355d66922c0bb24a->leave($__internal_0c0d3ecc55ca3685921fb71e45d76f17cfae0dda41e1aec5355d66922c0bb24a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1870bd3a0479d2cffd9da9b25cccaa369e267faf733b3fae7ebe2597d131ea20 = $this->env->getExtension("native_profiler");
        $__internal_1870bd3a0479d2cffd9da9b25cccaa369e267faf733b3fae7ebe2597d131ea20->enter($__internal_1870bd3a0479d2cffd9da9b25cccaa369e267faf733b3fae7ebe2597d131ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1870bd3a0479d2cffd9da9b25cccaa369e267faf733b3fae7ebe2597d131ea20->leave($__internal_1870bd3a0479d2cffd9da9b25cccaa369e267faf733b3fae7ebe2597d131ea20_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
