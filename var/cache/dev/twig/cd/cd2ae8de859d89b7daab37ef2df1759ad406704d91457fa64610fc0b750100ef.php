<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9f9843766a180af5ea9ff1b0adc2b10c3cdb9fbe618e2a0e4bf198df9492951e extends Twig_Template
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
        $__internal_2381c48ca2465ad02569c6f468beeae85c8193eb69f8fa0415454b404f2ebc01 = $this->env->getExtension("native_profiler");
        $__internal_2381c48ca2465ad02569c6f468beeae85c8193eb69f8fa0415454b404f2ebc01->enter($__internal_2381c48ca2465ad02569c6f468beeae85c8193eb69f8fa0415454b404f2ebc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2381c48ca2465ad02569c6f468beeae85c8193eb69f8fa0415454b404f2ebc01->leave($__internal_2381c48ca2465ad02569c6f468beeae85c8193eb69f8fa0415454b404f2ebc01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
