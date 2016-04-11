<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ff0fbf54c6574f0a015e37d4997d6bfdb62f7c0357ac90e3cdd46ed39afd6738 extends Twig_Template
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
        $__internal_59f96dd5519415131e2d44a48d89575c00a5d607c687f5916fd5512c7695e549 = $this->env->getExtension("native_profiler");
        $__internal_59f96dd5519415131e2d44a48d89575c00a5d607c687f5916fd5512c7695e549->enter($__internal_59f96dd5519415131e2d44a48d89575c00a5d607c687f5916fd5512c7695e549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59f96dd5519415131e2d44a48d89575c00a5d607c687f5916fd5512c7695e549->leave($__internal_59f96dd5519415131e2d44a48d89575c00a5d607c687f5916fd5512c7695e549_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
