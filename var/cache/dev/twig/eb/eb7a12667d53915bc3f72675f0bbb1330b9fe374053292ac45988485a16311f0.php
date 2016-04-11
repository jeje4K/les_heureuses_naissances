<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_22fd77ad897dce39285e1f2a18f81e553b3fefd584768846c553bd683f94edfa extends Twig_Template
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
        $__internal_1fbe4afd6fcbd5d17a1920d249420018f9f39e13c06d2173792cd966e9a1bbe2 = $this->env->getExtension("native_profiler");
        $__internal_1fbe4afd6fcbd5d17a1920d249420018f9f39e13c06d2173792cd966e9a1bbe2->enter($__internal_1fbe4afd6fcbd5d17a1920d249420018f9f39e13c06d2173792cd966e9a1bbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1fbe4afd6fcbd5d17a1920d249420018f9f39e13c06d2173792cd966e9a1bbe2->leave($__internal_1fbe4afd6fcbd5d17a1920d249420018f9f39e13c06d2173792cd966e9a1bbe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
