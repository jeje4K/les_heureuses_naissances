<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a5f1232463273215e84e13bb43349d17f01df0b1133d0aabe1c43e150ea886b1 extends Twig_Template
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
        $__internal_956d5eebfb7fd2547911de91d6a1d4e393839597ae92861827260df82b753075 = $this->env->getExtension("native_profiler");
        $__internal_956d5eebfb7fd2547911de91d6a1d4e393839597ae92861827260df82b753075->enter($__internal_956d5eebfb7fd2547911de91d6a1d4e393839597ae92861827260df82b753075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_956d5eebfb7fd2547911de91d6a1d4e393839597ae92861827260df82b753075->leave($__internal_956d5eebfb7fd2547911de91d6a1d4e393839597ae92861827260df82b753075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
