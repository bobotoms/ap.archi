<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_1e267427bb8a55a82a3ff80a535257d463f573e5fd8c40737402e68ca8dc54a9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb5c05b3187728ab6c83b20e8dbdfc1b46abf9edcff8669ae1fb615d18bfcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb5c05b3187728ab6c83b20e8dbdfc1b46abf9edcff8669ae1fb615d18bfcbb->enter($__internal_7bb5c05b3187728ab6c83b20e8dbdfc1b46abf9edcff8669ae1fb615d18bfcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb5c05b3187728ab6c83b20e8dbdfc1b46abf9edcff8669ae1fb615d18bfcbb->leave($__internal_7bb5c05b3187728ab6c83b20e8dbdfc1b46abf9edcff8669ae1fb615d18bfcbb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80891b2c743993f54561bed2c67539e51794d7f958bb8018fc30d182b42d6b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80891b2c743993f54561bed2c67539e51794d7f958bb8018fc30d182b42d6b0d->enter($__internal_80891b2c743993f54561bed2c67539e51794d7f958bb8018fc30d182b42d6b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_80891b2c743993f54561bed2c67539e51794d7f958bb8018fc30d182b42d6b0d->leave($__internal_80891b2c743993f54561bed2c67539e51794d7f958bb8018fc30d182b42d6b0d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "@SonataAdmin/CRUD/list__select.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__select.html.twig");
    }
}
