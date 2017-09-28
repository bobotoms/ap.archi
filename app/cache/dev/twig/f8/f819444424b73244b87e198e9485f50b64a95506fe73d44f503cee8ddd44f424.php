<?php

/* SonataPageBundle:BlockAdmin:edit.html.twig */
class __TwigTemplate_dc40ca1c35de89a6321370329a90b78a2881d0cfbaeac426d2fded6c46f4256f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'information' => array($this, 'block_information'),
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataPageBundle:BlockAdmin:edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13892feeec253644c36a8df80899aff235dee1b5604055ad4ac3daf1fd8c9be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13892feeec253644c36a8df80899aff235dee1b5604055ad4ac3daf1fd8c9be1->enter($__internal_13892feeec253644c36a8df80899aff235dee1b5604055ad4ac3daf1fd8c9be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:BlockAdmin:edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13892feeec253644c36a8df80899aff235dee1b5604055ad4ac3daf1fd8c9be1->leave($__internal_13892feeec253644c36a8df80899aff235dee1b5604055ad4ac3daf1fd8c9be1_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_7eb75425e471607c0077c92f9fcb5330a41e6eaf264434ecac43f36f59b74400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb75425e471607c0077c92f9fcb5330a41e6eaf264434ecac43f36f59b74400->enter($__internal_7eb75425e471607c0077c92f9fcb5330a41e6eaf264434ecac43f36f59b74400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 15
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "update", 1 => array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
        <p>
             ";
        // line 17
        $this->displayBlock('information', $context, $blocks);
        // line 20
        echo "        </p>

        <p>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'errors');
        echo "
        </p>

        <div>
            ";
        // line 29
        $this->displayBlock('block', $context, $blocks);
        // line 32
        echo "        </div>

        <input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button_save", array(), "SonataPageBundle"), "html", null, true);
        echo "\">

        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_7eb75425e471607c0077c92f9fcb5330a41e6eaf264434ecac43f36f59b74400->leave($__internal_7eb75425e471607c0077c92f9fcb5330a41e6eaf264434ecac43f36f59b74400_prof);

    }

    // line 17
    public function block_information($context, array $blocks = array())
    {
        $__internal_d69786cf7f5b82c64ab949baa4363fa69cb65c237cb6177f3ce8d19e52c4d1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69786cf7f5b82c64ab949baa4363fa69cb65c237cb6177f3ce8d19e52c4d1b1->enter($__internal_d69786cf7f5b82c64ab949baa4363fa69cb65c237cb6177f3ce8d19e52c4d1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "information"));

        // line 18
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type", array()), "html", null, true);
        echo "
             ";
        
        $__internal_d69786cf7f5b82c64ab949baa4363fa69cb65c237cb6177f3ce8d19e52c4d1b1->leave($__internal_d69786cf7f5b82c64ab949baa4363fa69cb65c237cb6177f3ce8d19e52c4d1b1_prof);

    }

    // line 29
    public function block_block($context, array $blocks = array())
    {
        $__internal_88b5085da2035caa8a5165dca3116056ab7321ff48eccdd5eb4d5cf39a644470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b5085da2035caa8a5165dca3116056ab7321ff48eccdd5eb4d5cf39a644470->enter($__internal_88b5085da2035caa8a5165dca3116056ab7321ff48eccdd5eb4d5cf39a644470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 30
        echo "                Custom block settings ...
            ";
        
        $__internal_88b5085da2035caa8a5165dca3116056ab7321ff48eccdd5eb4d5cf39a644470->leave($__internal_88b5085da2035caa8a5165dca3116056ab7321ff48eccdd5eb4d5cf39a644470_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:BlockAdmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  106 => 29,  96 => 18,  90 => 17,  80 => 36,  75 => 34,  71 => 32,  69 => 29,  62 => 25,  58 => 24,  54 => 23,  49 => 20,  47 => 17,  41 => 15,  35 => 14,  20 => 12,);
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

{% extends base_template %}

{% block form %}
    <form action=\"{{ admin.generateUrl('update', {'id' : object.id}) }}\" method=\"POST\">
        <p>
             {% block information %}
                {{ object.type }}
             {% endblock %}
        </p>

        <p>
            {{ form_label(form.enabled) }}
            {{ form_widget(form.enabled) }}
            {{ form_errors(form.enabled) }}
        </p>

        <div>
            {% block block %}
                Custom block settings ...
            {% endblock %}
        </div>

        <input type=\"submit\" value=\"{{ 'button_save'|trans({}, 'SonataPageBundle') }}\">

        {{ form_rest(form) }}
    </form>
{% endblock %}
", "SonataPageBundle:BlockAdmin:edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/BlockAdmin/edit.html.twig");
    }
}
