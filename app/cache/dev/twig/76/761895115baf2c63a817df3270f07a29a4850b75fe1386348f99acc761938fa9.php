<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b41b2ceec808bd348560a674ca638ddfc7ceef33997a5cab5dd94c61775588a5 extends Twig_Template
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
        $__internal_056cdd724ba5b0b3c39e33c0d95ee29cb4f97678fece8b8cba83bda14793f7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056cdd724ba5b0b3c39e33c0d95ee29cb4f97678fece8b8cba83bda14793f7ff->enter($__internal_056cdd724ba5b0b3c39e33c0d95ee29cb4f97678fece8b8cba83bda14793f7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_056cdd724ba5b0b3c39e33c0d95ee29cb4f97678fece8b8cba83bda14793f7ff->leave($__internal_056cdd724ba5b0b3c39e33c0d95ee29cb4f97678fece8b8cba83bda14793f7ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
