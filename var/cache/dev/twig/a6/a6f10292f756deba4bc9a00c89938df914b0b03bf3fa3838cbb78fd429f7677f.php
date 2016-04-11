<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9b774caab67471a15951a16bd251753cb109a887d1978c639d569d1377636175 extends Twig_Template
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
        $__internal_93d58b2377c7ee5a62fdf87211aff21f4b5b4107441b2e24acc2326f743e00f5 = $this->env->getExtension("native_profiler");
        $__internal_93d58b2377c7ee5a62fdf87211aff21f4b5b4107441b2e24acc2326f743e00f5->enter($__internal_93d58b2377c7ee5a62fdf87211aff21f4b5b4107441b2e24acc2326f743e00f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_93d58b2377c7ee5a62fdf87211aff21f4b5b4107441b2e24acc2326f743e00f5->leave($__internal_93d58b2377c7ee5a62fdf87211aff21f4b5b4107441b2e24acc2326f743e00f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
