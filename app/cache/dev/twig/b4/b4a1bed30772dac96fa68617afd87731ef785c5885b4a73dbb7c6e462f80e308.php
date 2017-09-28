<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_afcca8507606880fedc9ee598c6d36ccb62fd892c9fd239e0015ab3c0e36fae6 extends Twig_Template
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
        $__internal_f51bc2654a92a5baac4d7330cb6bc7cb3a6de6607b5f7c51bdb52dbfca9d8e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51bc2654a92a5baac4d7330cb6bc7cb3a6de6607b5f7c51bdb52dbfca9d8e0f->enter($__internal_f51bc2654a92a5baac4d7330cb6bc7cb3a6de6607b5f7c51bdb52dbfca9d8e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f51bc2654a92a5baac4d7330cb6bc7cb3a6de6607b5f7c51bdb52dbfca9d8e0f->leave($__internal_f51bc2654a92a5baac4d7330cb6bc7cb3a6de6607b5f7c51bdb52dbfca9d8e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
