<?php

/* @SonataPage/internal_error.html.twig */
class __TwigTemplate_c7c90684bc217ccad3e1f5514de0bdb89ef4e369d851c13ecd5d3f89c0fcf932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::base_error.html.twig", "@SonataPage/internal_error.html.twig", 11);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::base_error.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfc7bdf49cb135bcc566d38dac4109114e309a79b2e01069b6ba71a9576897e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc7bdf49cb135bcc566d38dac4109114e309a79b2e01069b6ba71a9576897e3->enter($__internal_dfc7bdf49cb135bcc566d38dac4109114e309a79b2e01069b6ba71a9576897e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/internal_error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc7bdf49cb135bcc566d38dac4109114e309a79b2e01069b6ba71a9576897e3->leave($__internal_dfc7bdf49cb135bcc566d38dac4109114e309a79b2e01069b6ba71a9576897e3_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_297619449efc9bfc91773283373fcbf56935668ba42b9c9974a623c7eeb0b86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297619449efc9bfc91773283373fcbf56935668ba42b9c9974a623c7eeb0b86b->enter($__internal_297619449efc9bfc91773283373fcbf56935668ba42b9c9974a623c7eeb0b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "
";
        
        $__internal_297619449efc9bfc91773283373fcbf56935668ba42b9c9974a623c7eeb0b86b->leave($__internal_297619449efc9bfc91773283373fcbf56935668ba42b9c9974a623c7eeb0b86b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  34 => 13,  11 => 11,);
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
{% extends 'SonataPageBundle::base_error.html.twig' %}

{% block content %}
    {{ exception.message }}
{% endblock %}
", "@SonataPage/internal_error.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\internal_error.html.twig");
    }
}
