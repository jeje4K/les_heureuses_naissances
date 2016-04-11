<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a23eb77033b30993cca18d8eba480366360fee8bf0100d77759fe440ebea75c2 extends Twig_Template
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
        $__internal_8deb2d4766da4d1ac5f5865e490e9271e9353d48bd392494ee15b930f6b924d8 = $this->env->getExtension("native_profiler");
        $__internal_8deb2d4766da4d1ac5f5865e490e9271e9353d48bd392494ee15b930f6b924d8->enter($__internal_8deb2d4766da4d1ac5f5865e490e9271e9353d48bd392494ee15b930f6b924d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8deb2d4766da4d1ac5f5865e490e9271e9353d48bd392494ee15b930f6b924d8->leave($__internal_8deb2d4766da4d1ac5f5865e490e9271e9353d48bd392494ee15b930f6b924d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
