<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_69258c52d72f4475dbe7132ba7016cdb8faeef8bc3c62a77e8e7da9967bdc524 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd4c684fc7116d732d57606847567e3e0c989618b6cfc52c997111b585d6984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd4c684fc7116d732d57606847567e3e0c989618b6cfc52c997111b585d6984->enter($__internal_4fd4c684fc7116d732d57606847567e3e0c989618b6cfc52c997111b585d6984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd4c684fc7116d732d57606847567e3e0c989618b6cfc52c997111b585d6984->leave($__internal_4fd4c684fc7116d732d57606847567e3e0c989618b6cfc52c997111b585d6984_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d88ee0491e9ff17d02f9d8272593edf070fd6cc5fb360b664a2fc2b007fef9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88ee0491e9ff17d02f9d8272593edf070fd6cc5fb360b664a2fc2b007fef9b8->enter($__internal_d88ee0491e9ff17d02f9d8272593edf070fd6cc5fb360b664a2fc2b007fef9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_d88ee0491e9ff17d02f9d8272593edf070fd6cc5fb360b664a2fc2b007fef9b8->leave($__internal_d88ee0491e9ff17d02f9d8272593edf070fd6cc5fb360b664a2fc2b007fef9b8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
", "@SonataBlock/Block/block_core_action.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
