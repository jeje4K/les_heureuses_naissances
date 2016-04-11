<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_efb57d5aac5d31ffd81701a679ec1199c6ab2c65867125df0c0d130076b1b45d extends Twig_Template
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
        $__internal_bb8c94448699b41dd9d02ccdf86e6d9d9df4c8374a7d54d83e15541910e4012d = $this->env->getExtension("native_profiler");
        $__internal_bb8c94448699b41dd9d02ccdf86e6d9d9df4c8374a7d54d83e15541910e4012d->enter($__internal_bb8c94448699b41dd9d02ccdf86e6d9d9df4c8374a7d54d83e15541910e4012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bb8c94448699b41dd9d02ccdf86e6d9d9df4c8374a7d54d83e15541910e4012d->leave($__internal_bb8c94448699b41dd9d02ccdf86e6d9d9df4c8374a7d54d83e15541910e4012d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
