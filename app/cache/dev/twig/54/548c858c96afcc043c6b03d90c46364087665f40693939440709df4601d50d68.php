<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_25dde0b82029b4fb4b88388da5b0c67b33c89b398079f726cd26e6aa953f80f8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c365b42fcf20f9ad7204618379eb19d9089be99ca1ccf674554f1640d9e62145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c365b42fcf20f9ad7204618379eb19d9089be99ca1ccf674554f1640d9e62145->enter($__internal_c365b42fcf20f9ad7204618379eb19d9089be99ca1ccf674554f1640d9e62145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c365b42fcf20f9ad7204618379eb19d9089be99ca1ccf674554f1640d9e62145->leave($__internal_c365b42fcf20f9ad7204618379eb19d9089be99ca1ccf674554f1640d9e62145_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a2ca84cbda0890c9162c010a4bf1567e4ad7328a6ebb6a62c8b99b131a6f7c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ca84cbda0890c9162c010a4bf1567e4ad7328a6ebb6a62c8b99b131a6f7c2c->enter($__internal_a2ca84cbda0890c9162c010a4bf1567e4ad7328a6ebb6a62c8b99b131a6f7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_a2ca84cbda0890c9162c010a4bf1567e4ad7328a6ebb6a62c8b99b131a6f7c2c->leave($__internal_a2ca84cbda0890c9162c010a4bf1567e4ad7328a6ebb6a62c8b99b131a6f7c2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
", "SonataBlockBundle:Block:block_core_text.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
