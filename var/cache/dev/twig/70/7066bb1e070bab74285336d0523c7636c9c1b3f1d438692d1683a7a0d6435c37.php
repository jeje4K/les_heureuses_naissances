<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c6f8addada11e9c77e89e8fad61d97f511de1ffad1df2f1d4670c6c30e84a21e extends Twig_Template
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
        $__internal_346bb09d09c9d7f7c9d88b4cc6a2afad5ebe225fe8a8e9417a13debeb388063c = $this->env->getExtension("native_profiler");
        $__internal_346bb09d09c9d7f7c9d88b4cc6a2afad5ebe225fe8a8e9417a13debeb388063c->enter($__internal_346bb09d09c9d7f7c9d88b4cc6a2afad5ebe225fe8a8e9417a13debeb388063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_346bb09d09c9d7f7c9d88b4cc6a2afad5ebe225fe8a8e9417a13debeb388063c->leave($__internal_346bb09d09c9d7f7c9d88b4cc6a2afad5ebe225fe8a8e9417a13debeb388063c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
