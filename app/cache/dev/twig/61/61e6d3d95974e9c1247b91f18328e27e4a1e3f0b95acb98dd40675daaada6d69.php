<?php

/* @SonataUser/Resetting/reset.html.twig */
class __TwigTemplate_12988692a0d2f6e67d8b6a8f5d649f5808cbb709dbe70b7f5fab0844b9046d80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/reset.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df46fddad8db63c91ef106cfe65be4dd293ef271f494f622514ecd13d2238ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df46fddad8db63c91ef106cfe65be4dd293ef271f494f622514ecd13d2238ecd->enter($__internal_df46fddad8db63c91ef106cfe65be4dd293ef271f494f622514ecd13d2238ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df46fddad8db63c91ef106cfe65be4dd293ef271f494f622514ecd13d2238ecd->leave($__internal_df46fddad8db63c91ef106cfe65be4dd293ef271f494f622514ecd13d2238ecd_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec75333a36c0a4319fc1cf8adcde340bfc2f4b58fa194e4e57ec36646c99a1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec75333a36c0a4319fc1cf8adcde340bfc2f4b58fa194e4e57ec36646c99a1f4->enter($__internal_ec75333a36c0a4319fc1cf8adcde340bfc2f4b58fa194e4e57ec36646c99a1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 22
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@SonataUser/Resetting/reset.html.twig", 22)->display($context);
        // line 23
        echo "        </div>
    </div>
";
        
        $__internal_ec75333a36c0a4319fc1cf8adcde340bfc2f4b58fa194e4e57ec36646c99a1f4->leave($__internal_ec75333a36c0a4319fc1cf8adcde340bfc2f4b58fa194e4e57ec36646c99a1f4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  54 => 22,  48 => 19,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "@SonataUser/Resetting/reset.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
