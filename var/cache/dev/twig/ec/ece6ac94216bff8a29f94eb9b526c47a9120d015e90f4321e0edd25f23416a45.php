<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bc7b9ee7c6d0a9c55dcaa0644c93c43183274d04c89aafe588c0ae2f67b1c5e8 extends Twig_Template
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
        $__internal_4c32f753bf5f4869aaf800ee8e6cc1eff5c7c19bac9e936ae5c85cc3d4f5e018 = $this->env->getExtension("native_profiler");
        $__internal_4c32f753bf5f4869aaf800ee8e6cc1eff5c7c19bac9e936ae5c85cc3d4f5e018->enter($__internal_4c32f753bf5f4869aaf800ee8e6cc1eff5c7c19bac9e936ae5c85cc3d4f5e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4c32f753bf5f4869aaf800ee8e6cc1eff5c7c19bac9e936ae5c85cc3d4f5e018->leave($__internal_4c32f753bf5f4869aaf800ee8e6cc1eff5c7c19bac9e936ae5c85cc3d4f5e018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
