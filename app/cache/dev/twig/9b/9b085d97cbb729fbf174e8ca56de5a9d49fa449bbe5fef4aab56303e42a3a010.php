<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_d8b0bcfb28acf4890f3558ace8281d2a8c65c6b15223ec44a97b5366727defed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3080d0ed82dfff260321b95767c70fcd16d8ac7eb2132c52c92dd223ca82528f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3080d0ed82dfff260321b95767c70fcd16d8ac7eb2132c52c92dd223ca82528f->enter($__internal_3080d0ed82dfff260321b95767c70fcd16d8ac7eb2132c52c92dd223ca82528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3080d0ed82dfff260321b95767c70fcd16d8ac7eb2132c52c92dd223ca82528f->leave($__internal_3080d0ed82dfff260321b95767c70fcd16d8ac7eb2132c52c92dd223ca82528f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b70f450f19d9766437cdff70880ec1b27c2a04f29393b38660facd825b60e46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70f450f19d9766437cdff70880ec1b27c2a04f29393b38660facd825b60e46e->enter($__internal_b70f450f19d9766437cdff70880ec1b27c2a04f29393b38660facd825b60e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_b70f450f19d9766437cdff70880ec1b27c2a04f29393b38660facd825b60e46e->leave($__internal_b70f450f19d9766437cdff70880ec1b27c2a04f29393b38660facd825b60e46e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
