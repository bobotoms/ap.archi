<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c683acad8d686b1f59320d2f713cd554ce9768024a6a84a921c95aa41fb4150a extends Twig_Template
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
        $__internal_810dfca415ac39f643eeadbeabfbf4f54a25f1e11a977ae654e1bb29807a16a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810dfca415ac39f643eeadbeabfbf4f54a25f1e11a977ae654e1bb29807a16a4->enter($__internal_810dfca415ac39f643eeadbeabfbf4f54a25f1e11a977ae654e1bb29807a16a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_810dfca415ac39f643eeadbeabfbf4f54a25f1e11a977ae654e1bb29807a16a4->leave($__internal_810dfca415ac39f643eeadbeabfbf4f54a25f1e11a977ae654e1bb29807a16a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
