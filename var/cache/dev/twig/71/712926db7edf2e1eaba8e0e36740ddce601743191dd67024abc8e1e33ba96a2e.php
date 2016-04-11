<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_36a51672f722cf433361a1de32f093d0c5ec158411b63f650ca13faa443d7900 extends Twig_Template
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
        $__internal_a7faf1233f0afc5d9f5c79bb34d417b54c0d82db636e8c341d049e10417d0e45 = $this->env->getExtension("native_profiler");
        $__internal_a7faf1233f0afc5d9f5c79bb34d417b54c0d82db636e8c341d049e10417d0e45->enter($__internal_a7faf1233f0afc5d9f5c79bb34d417b54c0d82db636e8c341d049e10417d0e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a7faf1233f0afc5d9f5c79bb34d417b54c0d82db636e8c341d049e10417d0e45->leave($__internal_a7faf1233f0afc5d9f5c79bb34d417b54c0d82db636e8c341d049e10417d0e45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
