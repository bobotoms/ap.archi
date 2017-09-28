<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_283cb2f85fc01e3a8b4ec5d26d7891fa27ac7c805ba50a4c35aeeddb771da9ff extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64c6b35086a632c8a2b02dfc468b33dec3de1e544338e40ad2e0ac9643927c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c6b35086a632c8a2b02dfc468b33dec3de1e544338e40ad2e0ac9643927c08->enter($__internal_64c6b35086a632c8a2b02dfc468b33dec3de1e544338e40ad2e0ac9643927c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c6b35086a632c8a2b02dfc468b33dec3de1e544338e40ad2e0ac9643927c08->leave($__internal_64c6b35086a632c8a2b02dfc468b33dec3de1e544338e40ad2e0ac9643927c08_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_37cc5abb9fa24179913cd2efc2b1a92e2f9c130a015a1f1b64aba3c4fc9f34f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cc5abb9fa24179913cd2efc2b1a92e2f9c130a015a1f1b64aba3c4fc9f34f7->enter($__internal_37cc5abb9fa24179913cd2efc2b1a92e2f9c130a015a1f1b64aba3c4fc9f34f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_37cc5abb9fa24179913cd2efc2b1a92e2f9c130a015a1f1b64aba3c4fc9f34f7->leave($__internal_37cc5abb9fa24179913cd2efc2b1a92e2f9c130a015a1f1b64aba3c4fc9f34f7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
", "@SonataAdmin/CRUD/list__batch.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
