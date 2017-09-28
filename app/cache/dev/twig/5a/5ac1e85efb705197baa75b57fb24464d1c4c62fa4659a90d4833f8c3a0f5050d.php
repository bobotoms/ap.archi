<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_f54d8b721626a185f439f6c21c07e178e992f8ad415e61c01f78043985698712 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d49af2e04e58c31306e296f0c762fba9046f83424452a7d755531a72973fe7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d49af2e04e58c31306e296f0c762fba9046f83424452a7d755531a72973fe7d->enter($__internal_3d49af2e04e58c31306e296f0c762fba9046f83424452a7d755531a72973fe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d49af2e04e58c31306e296f0c762fba9046f83424452a7d755531a72973fe7d->leave($__internal_3d49af2e04e58c31306e296f0c762fba9046f83424452a7d755531a72973fe7d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bf4e786f340ee28703129dc7e1ee8a705937e5c008dab7a96c8f8b9a3fb80131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4e786f340ee28703129dc7e1ee8a705937e5c008dab7a96c8f8b9a3fb80131->enter($__internal_bf4e786f340ee28703129dc7e1ee8a705937e5c008dab7a96c8f8b9a3fb80131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_bf4e786f340ee28703129dc7e1ee8a705937e5c008dab7a96c8f8b9a3fb80131->leave($__internal_bf4e786f340ee28703129dc7e1ee8a705937e5c008dab7a96c8f8b9a3fb80131_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
", "@SonataBlock/Block/block_core_menu.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
