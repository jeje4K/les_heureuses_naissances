<?php

/* ::base.html.twig */
class __TwigTemplate_afe76e48d29d37810f9ef53b9299ffc34b06cf463387441a8532fb038746b526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f75ca3da45e0aa297addc4666d7de176b1c1fbcecbc5cf33b7fd5c08223894f = $this->env->getExtension("native_profiler");
        $__internal_7f75ca3da45e0aa297addc4666d7de176b1c1fbcecbc5cf33b7fd5c08223894f->enter($__internal_7f75ca3da45e0aa297addc4666d7de176b1c1fbcecbc5cf33b7fd5c08223894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f75ca3da45e0aa297addc4666d7de176b1c1fbcecbc5cf33b7fd5c08223894f->leave($__internal_7f75ca3da45e0aa297addc4666d7de176b1c1fbcecbc5cf33b7fd5c08223894f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cec2dc4593ab304d034e30c52b7a8132b80aa6ff9c718dab8fe26d6d48ab34b = $this->env->getExtension("native_profiler");
        $__internal_3cec2dc4593ab304d034e30c52b7a8132b80aa6ff9c718dab8fe26d6d48ab34b->enter($__internal_3cec2dc4593ab304d034e30c52b7a8132b80aa6ff9c718dab8fe26d6d48ab34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cec2dc4593ab304d034e30c52b7a8132b80aa6ff9c718dab8fe26d6d48ab34b->leave($__internal_3cec2dc4593ab304d034e30c52b7a8132b80aa6ff9c718dab8fe26d6d48ab34b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0467c871b54b795335849172b50b3252a03c922ff3747191b3099cc7a937fd14 = $this->env->getExtension("native_profiler");
        $__internal_0467c871b54b795335849172b50b3252a03c922ff3747191b3099cc7a937fd14->enter($__internal_0467c871b54b795335849172b50b3252a03c922ff3747191b3099cc7a937fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0467c871b54b795335849172b50b3252a03c922ff3747191b3099cc7a937fd14->leave($__internal_0467c871b54b795335849172b50b3252a03c922ff3747191b3099cc7a937fd14_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_010d62883e7d5ed0ccd4b5f8ac50eb4ca0c553c72218fe9149d696099b1dcfc6 = $this->env->getExtension("native_profiler");
        $__internal_010d62883e7d5ed0ccd4b5f8ac50eb4ca0c553c72218fe9149d696099b1dcfc6->enter($__internal_010d62883e7d5ed0ccd4b5f8ac50eb4ca0c553c72218fe9149d696099b1dcfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_010d62883e7d5ed0ccd4b5f8ac50eb4ca0c553c72218fe9149d696099b1dcfc6->leave($__internal_010d62883e7d5ed0ccd4b5f8ac50eb4ca0c553c72218fe9149d696099b1dcfc6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8768fd74952137cfc92bf717010e8d9edf8dac3cdd01732c5e9e6a1a854d1e81 = $this->env->getExtension("native_profiler");
        $__internal_8768fd74952137cfc92bf717010e8d9edf8dac3cdd01732c5e9e6a1a854d1e81->enter($__internal_8768fd74952137cfc92bf717010e8d9edf8dac3cdd01732c5e9e6a1a854d1e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8768fd74952137cfc92bf717010e8d9edf8dac3cdd01732c5e9e6a1a854d1e81->leave($__internal_8768fd74952137cfc92bf717010e8d9edf8dac3cdd01732c5e9e6a1a854d1e81_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
