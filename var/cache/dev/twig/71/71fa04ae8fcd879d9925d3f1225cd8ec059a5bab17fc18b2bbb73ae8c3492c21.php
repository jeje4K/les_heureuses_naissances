<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7fe090623204afc646aaf30592a6931c9cc8e3bc5bc7c743fb157bdcd13be04d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e495370ea0a54a4b46aae203c4261f40adc39da0df3562ba6be3cd889a2c3a7d = $this->env->getExtension("native_profiler");
        $__internal_e495370ea0a54a4b46aae203c4261f40adc39da0df3562ba6be3cd889a2c3a7d->enter($__internal_e495370ea0a54a4b46aae203c4261f40adc39da0df3562ba6be3cd889a2c3a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e495370ea0a54a4b46aae203c4261f40adc39da0df3562ba6be3cd889a2c3a7d->leave($__internal_e495370ea0a54a4b46aae203c4261f40adc39da0df3562ba6be3cd889a2c3a7d_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab80406a1791230375639aed89baff23bd31fc19eaa179304db0bd8b05d4ffe0 = $this->env->getExtension("native_profiler");
        $__internal_ab80406a1791230375639aed89baff23bd31fc19eaa179304db0bd8b05d4ffe0->enter($__internal_ab80406a1791230375639aed89baff23bd31fc19eaa179304db0bd8b05d4ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab80406a1791230375639aed89baff23bd31fc19eaa179304db0bd8b05d4ffe0->leave($__internal_ab80406a1791230375639aed89baff23bd31fc19eaa179304db0bd8b05d4ffe0_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7749ee74b3054a5e487fa00944bc498b2871616ecacda5a593ecc236a1b0127 = $this->env->getExtension("native_profiler");
        $__internal_b7749ee74b3054a5e487fa00944bc498b2871616ecacda5a593ecc236a1b0127->enter($__internal_b7749ee74b3054a5e487fa00944bc498b2871616ecacda5a593ecc236a1b0127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7749ee74b3054a5e487fa00944bc498b2871616ecacda5a593ecc236a1b0127->leave($__internal_b7749ee74b3054a5e487fa00944bc498b2871616ecacda5a593ecc236a1b0127_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_50ba7230988c71403b56fdd2b501ad737b497a4bbc890e2657727e0a39e20e0b = $this->env->getExtension("native_profiler");
        $__internal_50ba7230988c71403b56fdd2b501ad737b497a4bbc890e2657727e0a39e20e0b->enter($__internal_50ba7230988c71403b56fdd2b501ad737b497a4bbc890e2657727e0a39e20e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_50ba7230988c71403b56fdd2b501ad737b497a4bbc890e2657727e0a39e20e0b->leave($__internal_50ba7230988c71403b56fdd2b501ad737b497a4bbc890e2657727e0a39e20e0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
