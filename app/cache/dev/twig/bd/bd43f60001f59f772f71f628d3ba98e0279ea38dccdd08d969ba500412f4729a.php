<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_559b6e26c47734bdfc0c0c8ddbb73862c370cbe2f539ba8f348fb2475cf4fec9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_808160af98b5d0375e056fd0a5125724d9b64c09dc4ce6956c1b0a4060cec592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808160af98b5d0375e056fd0a5125724d9b64c09dc4ce6956c1b0a4060cec592->enter($__internal_808160af98b5d0375e056fd0a5125724d9b64c09dc4ce6956c1b0a4060cec592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808160af98b5d0375e056fd0a5125724d9b64c09dc4ce6956c1b0a4060cec592->leave($__internal_808160af98b5d0375e056fd0a5125724d9b64c09dc4ce6956c1b0a4060cec592_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5ec334610b65c562c7bd963885885feb5add501362cb13ea911a181c0139ee79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec334610b65c562c7bd963885885feb5add501362cb13ea911a181c0139ee79->enter($__internal_5ec334610b65c562c7bd963885885feb5add501362cb13ea911a181c0139ee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_5ec334610b65c562c7bd963885885feb5add501362cb13ea911a181c0139ee79->leave($__internal_5ec334610b65c562c7bd963885885feb5add501362cb13ea911a181c0139ee79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
", "@SonataBlock/Block/block_core_text.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
