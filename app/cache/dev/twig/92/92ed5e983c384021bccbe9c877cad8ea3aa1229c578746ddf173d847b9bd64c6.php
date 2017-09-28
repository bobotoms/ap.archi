<?php

/* SonataPageBundle::blank.html.twig */
class __TwigTemplate_73f3c20ea284714071a509f541fb084feb6db44996239fbb045e669e6f3be4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de2050714328f62f9b5b05cd8b89dd5d0751e13cd73624942809897079bac67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2050714328f62f9b5b05cd8b89dd5d0751e13cd73624942809897079bac67a->enter($__internal_de2050714328f62f9b5b05cd8b89dd5d0751e13cd73624942809897079bac67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::blank.html.twig"));

        // line 11
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_de2050714328f62f9b5b05cd8b89dd5d0751e13cd73624942809897079bac67a->leave($__internal_de2050714328f62f9b5b05cd8b89dd5d0751e13cd73624942809897079bac67a_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle::blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 11,);
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
{{ content|raw }}
", "SonataPageBundle::blank.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/blank.html.twig");
    }
}
