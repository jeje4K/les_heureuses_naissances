<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_797e5d30380358a1bd332bd94f23da30c00e89fae7edf10e6ac3265b40b6d915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7036c1d6dbd589ff969f724bcc61d3f4b6dacdf11ce57084e6b184e063b0ed20 = $this->env->getExtension("native_profiler");
        $__internal_7036c1d6dbd589ff969f724bcc61d3f4b6dacdf11ce57084e6b184e063b0ed20->enter($__internal_7036c1d6dbd589ff969f724bcc61d3f4b6dacdf11ce57084e6b184e063b0ed20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7036c1d6dbd589ff969f724bcc61d3f4b6dacdf11ce57084e6b184e063b0ed20->leave($__internal_7036c1d6dbd589ff969f724bcc61d3f4b6dacdf11ce57084e6b184e063b0ed20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */