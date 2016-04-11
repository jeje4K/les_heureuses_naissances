<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e3667a1f08e7ea955df8af8ea99c28faa968400e46f696d70ed2656257cec480 extends Twig_Template
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
        $__internal_ec034f8e1eb615d098685d5eddd85f55851ced37aa6c6bd735fe4f101183ae9d = $this->env->getExtension("native_profiler");
        $__internal_ec034f8e1eb615d098685d5eddd85f55851ced37aa6c6bd735fe4f101183ae9d->enter($__internal_ec034f8e1eb615d098685d5eddd85f55851ced37aa6c6bd735fe4f101183ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec034f8e1eb615d098685d5eddd85f55851ced37aa6c6bd735fe4f101183ae9d->leave($__internal_ec034f8e1eb615d098685d5eddd85f55851ced37aa6c6bd735fe4f101183ae9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
