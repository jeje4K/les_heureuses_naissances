<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c178666417fbd7e4765abf59005bd45f7fb6e3411d346af5099d0c58c56c61a8 extends Twig_Template
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
        $__internal_f21691cbaeb64837f333cf760f113dfadff7c32f39439c73503702483e56c662 = $this->env->getExtension("native_profiler");
        $__internal_f21691cbaeb64837f333cf760f113dfadff7c32f39439c73503702483e56c662->enter($__internal_f21691cbaeb64837f333cf760f113dfadff7c32f39439c73503702483e56c662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f21691cbaeb64837f333cf760f113dfadff7c32f39439c73503702483e56c662->leave($__internal_f21691cbaeb64837f333cf760f113dfadff7c32f39439c73503702483e56c662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
