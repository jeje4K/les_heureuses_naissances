<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ab479114790cbfa7facab8aa03f5a4a361f97767c6a791a14a331e000df5c610 extends Twig_Template
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
        $__internal_dad8f7be22d341964f5457b7d665c8741ab2d02f38cdc0ed84cebc37867b5697 = $this->env->getExtension("native_profiler");
        $__internal_dad8f7be22d341964f5457b7d665c8741ab2d02f38cdc0ed84cebc37867b5697->enter($__internal_dad8f7be22d341964f5457b7d665c8741ab2d02f38cdc0ed84cebc37867b5697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_dad8f7be22d341964f5457b7d665c8741ab2d02f38cdc0ed84cebc37867b5697->leave($__internal_dad8f7be22d341964f5457b7d665c8741ab2d02f38cdc0ed84cebc37867b5697_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
