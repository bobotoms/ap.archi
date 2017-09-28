<?php

/* SonataFormatterBundle:Block:block_formatter.html.twig */
class __TwigTemplate_378f9060690c9ab49b0e995446912eaa5eddd04b9ff7f3536912fa1441e2c605 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataFormatterBundle:Block:block_formatter.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee45b3e316c2c56b3b6e442773896701e7cef4eded80f83c9e6532fe1e627982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee45b3e316c2c56b3b6e442773896701e7cef4eded80f83c9e6532fe1e627982->enter($__internal_ee45b3e316c2c56b3b6e442773896701e7cef4eded80f83c9e6532fe1e627982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Block:block_formatter.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee45b3e316c2c56b3b6e442773896701e7cef4eded80f83c9e6532fe1e627982->leave($__internal_ee45b3e316c2c56b3b6e442773896701e7cef4eded80f83c9e6532fe1e627982_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_66f765b288f16a4299c90a693cee91adf9ff726dd7840b944adc89b90860ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f765b288f16a4299c90a693cee91adf9ff726dd7840b944adc89b90860ad0c->enter($__internal_66f765b288f16a4299c90a693cee91adf9ff726dd7840b944adc89b90860ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_66f765b288f16a4299c90a693cee91adf9ff726dd7840b944adc89b90860ad0c->leave($__internal_66f765b288f16a4299c90a693cee91adf9ff726dd7840b944adc89b90860ad0c_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Block:block_formatter.html.twig";
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
", "SonataFormatterBundle:Block:block_formatter.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle/Resources/views/Block/block_formatter.html.twig");
    }
}
