<?php

/* SonataPageBundle:Page:redirect.html.twig */
class __TwigTemplate_7a25ebff2696a718ae536f582d41afe46a5876a8fca67ddeea6210a65e279fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "defaultTemplate", array()), "SonataPageBundle:Page:redirect.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee50b75b98ab2b51b721261dc7c572538b28c87d2c6daf89d213067377e8f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee50b75b98ab2b51b721261dc7c572538b28c87d2c6daf89d213067377e8f7e->enter($__internal_fee50b75b98ab2b51b721261dc7c572538b28c87d2c6daf89d213067377e8f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Page:redirect.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee50b75b98ab2b51b721261dc7c572538b28c87d2c6daf89d213067377e8f7e->leave($__internal_fee50b75b98ab2b51b721261dc7c572538b28c87d2c6daf89d213067377e8f7e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d724cba731fbb57cd6367215fc6ce6535d0272dea11e5167b199eaefa0f997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d724cba731fbb57cd6367215fc6ce6535d0272dea11e5167b199eaefa0f997->enter($__internal_c5d724cba731fbb57cd6367215fc6ce6535d0272dea11e5167b199eaefa0f997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_redirected", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_c5d724cba731fbb57cd6367215fc6ce6535d0272dea11e5167b199eaefa0f997->leave($__internal_c5d724cba731fbb57cd6367215fc6ce6535d0272dea11e5167b199eaefa0f997_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_d315baccba123264a5aa67a57897c0fef6c2ddbe35a420756d18c1e98d17d764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d315baccba123264a5aa67a57897c0fef6c2ddbe35a420756d18c1e98d17d764->enter($__internal_d315baccba123264a5aa67a57897c0fef6c2ddbe35a420756d18c1e98d17d764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_redirected", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        <p>
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_page_redirected", array("%url%" => $this->getAttribute($this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "headers", array()), "get", array(0 => "Location"), "method")), "SonataPageBundle");
        echo "
        </p>
    </div>
";
        
        $__internal_d315baccba123264a5aa67a57897c0fef6c2ddbe35a420756d18c1e98d17d764->leave($__internal_d315baccba123264a5aa67a57897c0fef6c2ddbe35a420756d18c1e98d17d764_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  55 => 17,  52 => 16,  46 => 15,  34 => 13,  19 => 11,);
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
{% extends sonata_page.defaultTemplate %}

{% block title %}{{ \"title_page_redirected\"|trans({}, 'SonataPageBundle')}}{% endblock %}

{% block content %}
    <div>
        <h2>{{ \"title_page_redirected\"|trans({}, 'SonataPageBundle') }}</h2>

        <p>
            {{ \"message_page_redirected\"|trans({'%url%': response.headers.get('Location')}, 'SonataPageBundle')|raw }}
        </p>
    </div>
{% endblock%}
", "SonataPageBundle:Page:redirect.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Page/redirect.html.twig");
    }
}
