<?php

/* @SonataFormatter/Block/block_formatter.html.twig */
class __TwigTemplate_3102d5880b86f84a6a4945f3fc6a04bc7f08c9d6b8d83f73e1afa1e514d69d43 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataFormatter/Block/block_formatter.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bba05c58b24e438fc2ee0034317e0a7a26135a86b99d6d9c99c07bdce9d5c075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba05c58b24e438fc2ee0034317e0a7a26135a86b99d6d9c99c07bdce9d5c075->enter($__internal_bba05c58b24e438fc2ee0034317e0a7a26135a86b99d6d9c99c07bdce9d5c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataFormatter/Block/block_formatter.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba05c58b24e438fc2ee0034317e0a7a26135a86b99d6d9c99c07bdce9d5c075->leave($__internal_bba05c58b24e438fc2ee0034317e0a7a26135a86b99d6d9c99c07bdce9d5c075_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_55cc09fc24a7f6c44ac3805860ed058c9e9e50e937f9944dd0a01eb66bed9bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cc09fc24a7f6c44ac3805860ed058c9e9e50e937f9944dd0a01eb66bed9bb2->enter($__internal_55cc09fc24a7f6c44ac3805860ed058c9e9e50e937f9944dd0a01eb66bed9bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_55cc09fc24a7f6c44ac3805860ed058c9e9e50e937f9944dd0a01eb66bed9bb2->leave($__internal_55cc09fc24a7f6c44ac3805860ed058c9e9e50e937f9944dd0a01eb66bed9bb2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataFormatter/Block/block_formatter.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "@SonataFormatter/Block/block_formatter.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle\\Resources\\views\\Block\\block_formatter.html.twig");
    }
}
