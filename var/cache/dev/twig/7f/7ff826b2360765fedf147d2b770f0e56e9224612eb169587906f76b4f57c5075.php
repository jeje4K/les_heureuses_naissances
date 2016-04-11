<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_780c4acd5584036e0dcb8ebe6d194dcccb3ef3720c1209f386aad6dcc8e0d0b3 extends Twig_Template
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
        $__internal_581dd156cc0a5da24dbf91add70c8f769940016cfeceecc0abe238284bb5dd99 = $this->env->getExtension("native_profiler");
        $__internal_581dd156cc0a5da24dbf91add70c8f769940016cfeceecc0abe238284bb5dd99->enter($__internal_581dd156cc0a5da24dbf91add70c8f769940016cfeceecc0abe238284bb5dd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_581dd156cc0a5da24dbf91add70c8f769940016cfeceecc0abe238284bb5dd99->leave($__internal_581dd156cc0a5da24dbf91add70c8f769940016cfeceecc0abe238284bb5dd99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
