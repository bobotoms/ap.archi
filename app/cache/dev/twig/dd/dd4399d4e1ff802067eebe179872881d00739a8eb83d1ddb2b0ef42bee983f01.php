<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_7960e49038f7006b7ff89f69329def1a047cecc8e3f858181c60f56dd4567717 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92566b5959948e45588b167510857275e3fdd55825be3305fca728d651bb9067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92566b5959948e45588b167510857275e3fdd55825be3305fca728d651bb9067->enter($__internal_92566b5959948e45588b167510857275e3fdd55825be3305fca728d651bb9067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92566b5959948e45588b167510857275e3fdd55825be3305fca728d651bb9067->leave($__internal_92566b5959948e45588b167510857275e3fdd55825be3305fca728d651bb9067_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_30632f6e81d90376e72ed6db0e6c19edaa8e3c4cf64f82a4427650e9146edb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30632f6e81d90376e72ed6db0e6c19edaa8e3c4cf64f82a4427650e9146edb4a->enter($__internal_30632f6e81d90376e72ed6db0e6c19edaa8e3c4cf64f82a4427650e9146edb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_30632f6e81d90376e72ed6db0e6c19edaa8e3c4cf64f82a4427650e9146edb4a->leave($__internal_30632f6e81d90376e72ed6db0e6c19edaa8e3c4cf64f82a4427650e9146edb4a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
