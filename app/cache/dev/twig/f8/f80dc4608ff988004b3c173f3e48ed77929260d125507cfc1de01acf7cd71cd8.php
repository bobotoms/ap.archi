<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_fde642ff0b7ae0782e50e3aed33310b77e4935926c7266090bb462de63590162 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25cb854739ccedfc11737d25e6c9f7f84927ecb5a212c81117ee731a5b921237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cb854739ccedfc11737d25e6c9f7f84927ecb5a212c81117ee731a5b921237->enter($__internal_25cb854739ccedfc11737d25e6c9f7f84927ecb5a212c81117ee731a5b921237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25cb854739ccedfc11737d25e6c9f7f84927ecb5a212c81117ee731a5b921237->leave($__internal_25cb854739ccedfc11737d25e6c9f7f84927ecb5a212c81117ee731a5b921237_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c2fed26b01bb4017412ed9b2bab985c7f8f6365045b762d03b0a08b36ccab5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fed26b01bb4017412ed9b2bab985c7f8f6365045b762d03b0a08b36ccab5c5->enter($__internal_c2fed26b01bb4017412ed9b2bab985c7f8f6365045b762d03b0a08b36ccab5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_c2fed26b01bb4017412ed9b2bab985c7f8f6365045b762d03b0a08b36ccab5c5->leave($__internal_c2fed26b01bb4017412ed9b2bab985c7f8f6365045b762d03b0a08b36ccab5c5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception.html.twig");
    }
}
