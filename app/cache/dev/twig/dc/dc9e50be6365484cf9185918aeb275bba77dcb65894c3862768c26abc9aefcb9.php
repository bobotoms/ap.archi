<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ebe8871ac06c992a1309acd33846787cd9c4f9c92d18d59d1025c4ea59d9ea3a extends Twig_Template
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
        $__internal_adce2c1e7d83ed1993bb2ff2881c93591a16287229f44b4b6ddd340d683e4186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adce2c1e7d83ed1993bb2ff2881c93591a16287229f44b4b6ddd340d683e4186->enter($__internal_adce2c1e7d83ed1993bb2ff2881c93591a16287229f44b4b6ddd340d683e4186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_adce2c1e7d83ed1993bb2ff2881c93591a16287229f44b4b6ddd340d683e4186->leave($__internal_adce2c1e7d83ed1993bb2ff2881c93591a16287229f44b4b6ddd340d683e4186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
