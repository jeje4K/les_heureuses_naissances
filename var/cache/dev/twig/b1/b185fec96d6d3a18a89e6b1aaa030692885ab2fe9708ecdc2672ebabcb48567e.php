<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5052e251119e644e161399eb72250a0cfbe993d801c84ef384b8c9c9f2de0e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5dfc5beaeee2043eb815dd755a9c3388912497e9503fda13329934ecce2c39d4 = $this->env->getExtension("native_profiler");
        $__internal_5dfc5beaeee2043eb815dd755a9c3388912497e9503fda13329934ecce2c39d4->enter($__internal_5dfc5beaeee2043eb815dd755a9c3388912497e9503fda13329934ecce2c39d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfc5beaeee2043eb815dd755a9c3388912497e9503fda13329934ecce2c39d4->leave($__internal_5dfc5beaeee2043eb815dd755a9c3388912497e9503fda13329934ecce2c39d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bf07ac5034a612fc50e93241268c95ed70e2a77ffa96773ba5f07961ad55185 = $this->env->getExtension("native_profiler");
        $__internal_9bf07ac5034a612fc50e93241268c95ed70e2a77ffa96773ba5f07961ad55185->enter($__internal_9bf07ac5034a612fc50e93241268c95ed70e2a77ffa96773ba5f07961ad55185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bf07ac5034a612fc50e93241268c95ed70e2a77ffa96773ba5f07961ad55185->leave($__internal_9bf07ac5034a612fc50e93241268c95ed70e2a77ffa96773ba5f07961ad55185_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2216099520597179f2309bc8d2ef6eab04805a57c235a53b0e5cb4c963a4e3c9 = $this->env->getExtension("native_profiler");
        $__internal_2216099520597179f2309bc8d2ef6eab04805a57c235a53b0e5cb4c963a4e3c9->enter($__internal_2216099520597179f2309bc8d2ef6eab04805a57c235a53b0e5cb4c963a4e3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2216099520597179f2309bc8d2ef6eab04805a57c235a53b0e5cb4c963a4e3c9->leave($__internal_2216099520597179f2309bc8d2ef6eab04805a57c235a53b0e5cb4c963a4e3c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e6dc605c710855b0a6a4c7c1712b069058759fc64ad3506e8fd36eb045594b = $this->env->getExtension("native_profiler");
        $__internal_a8e6dc605c710855b0a6a4c7c1712b069058759fc64ad3506e8fd36eb045594b->enter($__internal_a8e6dc605c710855b0a6a4c7c1712b069058759fc64ad3506e8fd36eb045594b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8e6dc605c710855b0a6a4c7c1712b069058759fc64ad3506e8fd36eb045594b->leave($__internal_a8e6dc605c710855b0a6a4c7c1712b069058759fc64ad3506e8fd36eb045594b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
