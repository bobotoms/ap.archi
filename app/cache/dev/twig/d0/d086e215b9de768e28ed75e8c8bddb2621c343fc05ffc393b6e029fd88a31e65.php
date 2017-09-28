<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_f24d794c167ac5d0c7031795e943616a6e9964af40ac59da76a3544acf317994 extends Twig_Template
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
        $__internal_99cc36232bfd570c43519cbc6fb7d545e09831bba4c44b428f1f22c58a64ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cc36232bfd570c43519cbc6fb7d545e09831bba4c44b428f1f22c58a64ccf9->enter($__internal_99cc36232bfd570c43519cbc6fb7d545e09831bba4c44b428f1f22c58a64ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99cc36232bfd570c43519cbc6fb7d545e09831bba4c44b428f1f22c58a64ccf9->leave($__internal_99cc36232bfd570c43519cbc6fb7d545e09831bba4c44b428f1f22c58a64ccf9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_133ca2e204bace73a35020d53e6e01607ee4c348598854abd869ae8f912c38c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133ca2e204bace73a35020d53e6e01607ee4c348598854abd869ae8f912c38c2->enter($__internal_133ca2e204bace73a35020d53e6e01607ee4c348598854abd869ae8f912c38c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_133ca2e204bace73a35020d53e6e01607ee4c348598854abd869ae8f912c38c2->leave($__internal_133ca2e204bace73a35020d53e6e01607ee4c348598854abd869ae8f912c38c2_prof);

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
", "SonataBlockBundle:Block:block_core_menu.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
