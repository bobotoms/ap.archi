<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_47325e46c7e9a531c1928d4921c2a07ec9e9e4c8d6a777ef3a4da767933e2765 extends Twig_Template
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
        $__internal_eaa6731f91a639fd043e3a0c925c2b747ae5f3ab16d7c98ea7e0f2ba469f1ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa6731f91a639fd043e3a0c925c2b747ae5f3ab16d7c98ea7e0f2ba469f1ecf->enter($__internal_eaa6731f91a639fd043e3a0c925c2b747ae5f3ab16d7c98ea7e0f2ba469f1ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_eaa6731f91a639fd043e3a0c925c2b747ae5f3ab16d7c98ea7e0f2ba469f1ecf->leave($__internal_eaa6731f91a639fd043e3a0c925c2b747ae5f3ab16d7c98ea7e0f2ba469f1ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
