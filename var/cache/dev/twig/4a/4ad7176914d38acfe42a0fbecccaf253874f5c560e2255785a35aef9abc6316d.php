<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_64733bb7e3cd2a8650cb12d8fdb84c583b78877c4c7f9c959e89813ab9222a5e extends Twig_Template
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
        $__internal_8fcfed437edfee4ba3f863efa0c551c93186524767aa39215c0201fbaba835d0 = $this->env->getExtension("native_profiler");
        $__internal_8fcfed437edfee4ba3f863efa0c551c93186524767aa39215c0201fbaba835d0->enter($__internal_8fcfed437edfee4ba3f863efa0c551c93186524767aa39215c0201fbaba835d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8fcfed437edfee4ba3f863efa0c551c93186524767aa39215c0201fbaba835d0->leave($__internal_8fcfed437edfee4ba3f863efa0c551c93186524767aa39215c0201fbaba835d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
