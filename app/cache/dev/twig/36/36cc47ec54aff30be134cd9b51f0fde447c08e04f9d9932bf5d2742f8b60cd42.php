<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_5d66c22c215f74959b6e6c2f2fab34a1c85c7f5364c06b3fcc5f3a2034d0ea8a extends Twig_Template
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
        $__internal_442de5b5ac9ce40be5311ade985989bf8e50ed4df5abded5e4b151a9475a7447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442de5b5ac9ce40be5311ade985989bf8e50ed4df5abded5e4b151a9475a7447->enter($__internal_442de5b5ac9ce40be5311ade985989bf8e50ed4df5abded5e4b151a9475a7447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442de5b5ac9ce40be5311ade985989bf8e50ed4df5abded5e4b151a9475a7447->leave($__internal_442de5b5ac9ce40be5311ade985989bf8e50ed4df5abded5e4b151a9475a7447_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0dc7999d33b1495fd677d347bcc81e2babfece78fd8da6e81f9098f2c571dc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc7999d33b1495fd677d347bcc81e2babfece78fd8da6e81f9098f2c571dc99->enter($__internal_0dc7999d33b1495fd677d347bcc81e2babfece78fd8da6e81f9098f2c571dc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_0dc7999d33b1495fd677d347bcc81e2babfece78fd8da6e81f9098f2c571dc99->leave($__internal_0dc7999d33b1495fd677d347bcc81e2babfece78fd8da6e81f9098f2c571dc99_prof);

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
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
