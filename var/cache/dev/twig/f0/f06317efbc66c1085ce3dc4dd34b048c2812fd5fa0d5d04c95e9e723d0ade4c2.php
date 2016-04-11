<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_feceac65c9c70960017c7da6720fc5728fa6dc6c4529cbdac88ffd4990e08308 extends Twig_Template
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
        $__internal_e90ff54a9cfda78afa4cc4c2449cd082200799b3046d5f9424d7535307fa5408 = $this->env->getExtension("native_profiler");
        $__internal_e90ff54a9cfda78afa4cc4c2449cd082200799b3046d5f9424d7535307fa5408->enter($__internal_e90ff54a9cfda78afa4cc4c2449cd082200799b3046d5f9424d7535307fa5408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e90ff54a9cfda78afa4cc4c2449cd082200799b3046d5f9424d7535307fa5408->leave($__internal_e90ff54a9cfda78afa4cc4c2449cd082200799b3046d5f9424d7535307fa5408_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8bead23bb0d99ad3679c2aa5fb949a72ff12e9dac6c85289f6782d38cad311c = $this->env->getExtension("native_profiler");
        $__internal_d8bead23bb0d99ad3679c2aa5fb949a72ff12e9dac6c85289f6782d38cad311c->enter($__internal_d8bead23bb0d99ad3679c2aa5fb949a72ff12e9dac6c85289f6782d38cad311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d8bead23bb0d99ad3679c2aa5fb949a72ff12e9dac6c85289f6782d38cad311c->leave($__internal_d8bead23bb0d99ad3679c2aa5fb949a72ff12e9dac6c85289f6782d38cad311c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a71a487da5c2307e867e9ff9eaf934d108b52db31114920870e138545e0153e8 = $this->env->getExtension("native_profiler");
        $__internal_a71a487da5c2307e867e9ff9eaf934d108b52db31114920870e138545e0153e8->enter($__internal_a71a487da5c2307e867e9ff9eaf934d108b52db31114920870e138545e0153e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a71a487da5c2307e867e9ff9eaf934d108b52db31114920870e138545e0153e8->leave($__internal_a71a487da5c2307e867e9ff9eaf934d108b52db31114920870e138545e0153e8_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_171642275362631e55b7feb8478f457e4a730556eecba34c1e203ac48091d785 = $this->env->getExtension("native_profiler");
        $__internal_171642275362631e55b7feb8478f457e4a730556eecba34c1e203ac48091d785->enter($__internal_171642275362631e55b7feb8478f457e4a730556eecba34c1e203ac48091d785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_171642275362631e55b7feb8478f457e4a730556eecba34c1e203ac48091d785->leave($__internal_171642275362631e55b7feb8478f457e4a730556eecba34c1e203ac48091d785_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
