<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ac3cc9133c4efd3c7d44d68f2238965489e48e209f334554bf0d42f6ff90cc02 extends Twig_Template
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
        $__internal_a22e3e0a1953d3d95cf7c712ab850b76bda9be046c23c64f4c146f8abc9f548b = $this->env->getExtension("native_profiler");
        $__internal_a22e3e0a1953d3d95cf7c712ab850b76bda9be046c23c64f4c146f8abc9f548b->enter($__internal_a22e3e0a1953d3d95cf7c712ab850b76bda9be046c23c64f4c146f8abc9f548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a22e3e0a1953d3d95cf7c712ab850b76bda9be046c23c64f4c146f8abc9f548b->leave($__internal_a22e3e0a1953d3d95cf7c712ab850b76bda9be046c23c64f4c146f8abc9f548b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
