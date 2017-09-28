<?php

/* SonataSeoBundle:Block:breadcrumb.html.twig */
class __TwigTemplate_a5d736e4ca44fcc7a425e57c4892a848cd87e5044257f26965b8181e5889744a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu_ordered.html.twig", "SonataSeoBundle:Block:breadcrumb.html.twig", 12);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_ordered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_domain", 1 => "SonataSeoBundle"), "method");
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 17
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array());
        } elseif ((        // line 18
(isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true);
        } else {
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        }
    }

    // line 25
    public function block_list($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    <div class=\"sonata_breadcrumb\">
        ";
        // line 28
        $this->displayParentBlock("list", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  55 => 27,  53 => 26,  50 => 25,  45 => 21,  42 => 19,  40 => 18,  38 => 17,  35 => 16,  32 => 15,  29 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataSeoBundle:Block:breadcrumb.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/breadcrumb.html.twig");
    }
}
