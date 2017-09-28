<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_15f72c0a5a702dbbc3aa6952d1ccb60b9c88357eab242a44dfc1bc260a5185f9 extends Twig_Template
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
        $__internal_53f2126588075a2945e7d4d6fff38c65825ffba5d94f60ac7ed9901a3e82e3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f2126588075a2945e7d4d6fff38c65825ffba5d94f60ac7ed9901a3e82e3d2->enter($__internal_53f2126588075a2945e7d4d6fff38c65825ffba5d94f60ac7ed9901a3e82e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_53f2126588075a2945e7d4d6fff38c65825ffba5d94f60ac7ed9901a3e82e3d2->leave($__internal_53f2126588075a2945e7d4d6fff38c65825ffba5d94f60ac7ed9901a3e82e3d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
