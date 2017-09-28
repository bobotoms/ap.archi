<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_56219696054d3ed11572505b007cad72b71f5b4a021b2837fdebb7fa4b772727 extends Twig_Template
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
        $__internal_e48cbde7e1fd130ac3f3da7b872479a1b754b7a0e881ad91287b105aa8b6fd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48cbde7e1fd130ac3f3da7b872479a1b754b7a0e881ad91287b105aa8b6fd1e->enter($__internal_e48cbde7e1fd130ac3f3da7b872479a1b754b7a0e881ad91287b105aa8b6fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e48cbde7e1fd130ac3f3da7b872479a1b754b7a0e881ad91287b105aa8b6fd1e->leave($__internal_e48cbde7e1fd130ac3f3da7b872479a1b754b7a0e881ad91287b105aa8b6fd1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
