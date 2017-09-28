<?php

/* SonataPageBundle:Block:block_container.html.twig */
class __TwigTemplate_c1e1a2ca4d79e45b97545e3c4152714bda774c0b5e430af68c67a413b14c6158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_container.html.twig", "SonataPageBundle:Block:block_container.html.twig", 12);
        $this->blocks = array(
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderBlock((isset($context["child"]) ? $context["child"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataPageBundle:Block:block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Block/block_container.html.twig");
    }
}
