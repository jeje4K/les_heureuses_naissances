<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c615e9da574ecb3cb45f6b9b57de4e883d9cd794900b4db90dacdfb456e7b73f extends Twig_Template
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
        $__internal_e4f86c85e0bf5fd0170cdedbbfec18a60e71d19a16ddd23e16f9d4cc0423fef2 = $this->env->getExtension("native_profiler");
        $__internal_e4f86c85e0bf5fd0170cdedbbfec18a60e71d19a16ddd23e16f9d4cc0423fef2->enter($__internal_e4f86c85e0bf5fd0170cdedbbfec18a60e71d19a16ddd23e16f9d4cc0423fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e4f86c85e0bf5fd0170cdedbbfec18a60e71d19a16ddd23e16f9d4cc0423fef2->leave($__internal_e4f86c85e0bf5fd0170cdedbbfec18a60e71d19a16ddd23e16f9d4cc0423fef2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
