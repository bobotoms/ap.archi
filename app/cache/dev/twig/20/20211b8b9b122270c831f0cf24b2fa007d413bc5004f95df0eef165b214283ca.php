<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e5531cd2f7a4e81f1ae66adaa10ee4faa2aa22597ab8712375dceff38271d4af extends Twig_Template
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
        $__internal_95cac251550fb02aae261246fc05c2a1e42671acc040976959e6c2b36c2044fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cac251550fb02aae261246fc05c2a1e42671acc040976959e6c2b36c2044fd->enter($__internal_95cac251550fb02aae261246fc05c2a1e42671acc040976959e6c2b36c2044fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_95cac251550fb02aae261246fc05c2a1e42671acc040976959e6c2b36c2044fd->leave($__internal_95cac251550fb02aae261246fc05c2a1e42671acc040976959e6c2b36c2044fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
