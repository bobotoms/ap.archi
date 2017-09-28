<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_dead64cb415475a1ab9d157ab74499d1a77311d9320ce13e4dfc3c985f3f9a73 extends Twig_Template
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
        $__internal_c738b6e5e6b0fc321768db24a306ef1f4eaf6b0283dc69f285d1b7e51dfdaaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c738b6e5e6b0fc321768db24a306ef1f4eaf6b0283dc69f285d1b7e51dfdaaa0->enter($__internal_c738b6e5e6b0fc321768db24a306ef1f4eaf6b0283dc69f285d1b7e51dfdaaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c738b6e5e6b0fc321768db24a306ef1f4eaf6b0283dc69f285d1b7e51dfdaaa0->leave($__internal_c738b6e5e6b0fc321768db24a306ef1f4eaf6b0283dc69f285d1b7e51dfdaaa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
