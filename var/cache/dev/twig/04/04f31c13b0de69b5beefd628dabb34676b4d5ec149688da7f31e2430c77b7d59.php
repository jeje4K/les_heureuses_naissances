<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_45930ca225208640c087764827bd5d03fe13208a2c1e80f1f92ff425b45dd14a extends Twig_Template
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
        $__internal_14e8f001c2c2f60d3be14d0771f0f16ad88079c60a9062dbea82ab0739cd941e = $this->env->getExtension("native_profiler");
        $__internal_14e8f001c2c2f60d3be14d0771f0f16ad88079c60a9062dbea82ab0739cd941e->enter($__internal_14e8f001c2c2f60d3be14d0771f0f16ad88079c60a9062dbea82ab0739cd941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_14e8f001c2c2f60d3be14d0771f0f16ad88079c60a9062dbea82ab0739cd941e->leave($__internal_14e8f001c2c2f60d3be14d0771f0f16ad88079c60a9062dbea82ab0739cd941e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
