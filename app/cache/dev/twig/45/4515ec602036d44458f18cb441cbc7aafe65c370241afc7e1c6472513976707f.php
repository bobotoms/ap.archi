<?php

/* @SonataPage/BlockAdmin/block_core_action_edit.html.twig */
class __TwigTemplate_0af20e8822fa6ef725710dcf79ee7c2f99133da3f1a25c86e8c58fc69a24c2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataPageBundle:BlockAdmin:edit.html.twig", "@SonataPage/BlockAdmin/block_core_action_edit.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle:BlockAdmin:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_742175b6e2adac47e4aff718f874b204fba397768512e7e57804848ee8890da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742175b6e2adac47e4aff718f874b204fba397768512e7e57804848ee8890da3->enter($__internal_742175b6e2adac47e4aff718f874b204fba397768512e7e57804848ee8890da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/BlockAdmin/block_core_action_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_742175b6e2adac47e4aff718f874b204fba397768512e7e57804848ee8890da3->leave($__internal_742175b6e2adac47e4aff718f874b204fba397768512e7e57804848ee8890da3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9af8864cf45150371aab57796924e520e92aadae89f4616ebccb02227f923c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af8864cf45150371aab57796924e520e92aadae89f4616ebccb02227f923c5b->enter($__internal_9af8864cf45150371aab57796924e520e92aadae89f4616ebccb02227f923c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "
    <div>
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "action", array()), 'label');
        echo " <br>
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "action", array()), 'widget', array("attr" => array("class" => "title")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "action", array()), 'errors');
        echo "
    </div>

    <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_parameters", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>
    <table>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 25
            echo "
                <tr>
                    <td>";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["parameter"], 'label');
            echo "</td>
                    <td>";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["parameter"], 'widget', array("attr" => array("class" => "title")));
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["parameter"], 'errors');
            echo "</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>
";
        
        $__internal_9af8864cf45150371aab57796924e520e92aadae89f4616ebccb02227f923c5b->leave($__internal_9af8864cf45150371aab57796924e520e92aadae89f4616ebccb02227f923c5b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/BlockAdmin/block_core_action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  75 => 28,  71 => 27,  67 => 25,  63 => 24,  58 => 22,  52 => 19,  48 => 18,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataPageBundle:BlockAdmin:edit.html.twig' %}

{% block block %}

    <div>
        {{ form_label(form.settings.action) }} <br>
        {{ form_widget(form.settings.action, {'attr': {'class' : 'title'}}) }}
        {{ form_errors(form.settings.action) }}
    </div>

    <h2>{{ 'title_parameters'|trans({}, 'SonataPageBundle') }}</h2>
    <table>
        {% for parameter in form.settings.parameters %}

                <tr>
                    <td>{{ form_label(parameter) }}</td>
                    <td>{{ form_widget(parameter, {'attr': {'class' : 'title'}}) }} {{ form_errors(parameter) }}</td>
                </tr>
        {% endfor %}
    </table>
{% endblock %}
", "@SonataPage/BlockAdmin/block_core_action_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\BlockAdmin\\block_core_action_edit.html.twig");
    }
}
