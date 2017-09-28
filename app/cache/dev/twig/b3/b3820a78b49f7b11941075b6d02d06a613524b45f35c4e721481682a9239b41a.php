<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_08548a1b8da4ea810a07472574608a54070d83f69712cecbfc06f666117980c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52571cf9a4c12c1c7464e561d2b276069b9fa5e495c0bd0fc04d9e0fdc9fd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52571cf9a4c12c1c7464e561d2b276069b9fa5e495c0bd0fc04d9e0fdc9fd0b->enter($__internal_b52571cf9a4c12c1c7464e561d2b276069b9fa5e495c0bd0fc04d9e0fdc9fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52571cf9a4c12c1c7464e561d2b276069b9fa5e495c0bd0fc04d9e0fdc9fd0b->leave($__internal_b52571cf9a4c12c1c7464e561d2b276069b9fa5e495c0bd0fc04d9e0fdc9fd0b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_aa2d2ac56369e6ad21f06e53bc74fa1322a72575b9f2abfcd911e55219e2e58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2d2ac56369e6ad21f06e53bc74fa1322a72575b9f2abfcd911e55219e2e58c->enter($__internal_aa2d2ac56369e6ad21f06e53bc74fa1322a72575b9f2abfcd911e55219e2e58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_aa2d2ac56369e6ad21f06e53bc74fa1322a72575b9f2abfcd911e55219e2e58c->leave($__internal_aa2d2ac56369e6ad21f06e53bc74fa1322a72575b9f2abfcd911e55219e2e58c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
