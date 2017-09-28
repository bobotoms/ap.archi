<?php

/* SonataPageBundle:Block:block_shared_block.html.twig */
class __TwigTemplate_5c4cf4a85a186cec752a2b260171d662194bd8dd83cddb2b144c35119d4a95cf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataPageBundle:Block:block_shared_block.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b8b16ea64ad640e80dcf90ffefccbb0fde90955a00d5f6ae57b5449c77e16ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8b16ea64ad640e80dcf90ffefccbb0fde90955a00d5f6ae57b5449c77e16ca->enter($__internal_5b8b16ea64ad640e80dcf90ffefccbb0fde90955a00d5f6ae57b5449c77e16ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Block:block_shared_block.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8b16ea64ad640e80dcf90ffefccbb0fde90955a00d5f6ae57b5449c77e16ca->leave($__internal_5b8b16ea64ad640e80dcf90ffefccbb0fde90955a00d5f6ae57b5449c77e16ca_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fd3f20aec7a30ee1465a1285b7a0de06c3a276ff71b1d43092e8e4276411d244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3f20aec7a30ee1465a1285b7a0de06c3a276ff71b1d43092e8e4276411d244->enter($__internal_fd3f20aec7a30ee1465a1285b7a0de06c3a276ff71b1d43092e8e4276411d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["sharedBlock"]) ? $context["sharedBlock"] : $this->getContext($context, "sharedBlock"))));
        echo "
";
        
        $__internal_fd3f20aec7a30ee1465a1285b7a0de06c3a276ff71b1d43092e8e4276411d244->leave($__internal_fd3f20aec7a30ee1465a1285b7a0de06c3a276ff71b1d43092e8e4276411d244_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_shared_block.html.twig";
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
    {{ sonata_block_render(sharedBlock) }}
{% endblock %}
", "SonataPageBundle:Block:block_shared_block.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Block/block_shared_block.html.twig");
    }
}
