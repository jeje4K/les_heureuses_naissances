<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_00d88dc2baffe03f0b9d5304f813e5503d74fc24de3d3dbe315af8dee94126bf extends Twig_Template
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
        $__internal_72e87db8230e278865053e167fd981dde4a157a4112ec8202a6d2d81e6acd191 = $this->env->getExtension("native_profiler");
        $__internal_72e87db8230e278865053e167fd981dde4a157a4112ec8202a6d2d81e6acd191->enter($__internal_72e87db8230e278865053e167fd981dde4a157a4112ec8202a6d2d81e6acd191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_72e87db8230e278865053e167fd981dde4a157a4112ec8202a6d2d81e6acd191->leave($__internal_72e87db8230e278865053e167fd981dde4a157a4112ec8202a6d2d81e6acd191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
