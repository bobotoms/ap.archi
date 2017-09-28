<?php

/* @SonataPage/Page/redirect.html.twig */
class __TwigTemplate_f0e1be86f8901468b53263628e13e83be238182b86e8747bc8a09df3889497bb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "defaultTemplate", array()), "@SonataPage/Page/redirect.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee9a471513995fe27190c4d7ec3328e7f618b4fc0e1adf730c0055328a49486f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9a471513995fe27190c4d7ec3328e7f618b4fc0e1adf730c0055328a49486f->enter($__internal_ee9a471513995fe27190c4d7ec3328e7f618b4fc0e1adf730c0055328a49486f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Page/redirect.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee9a471513995fe27190c4d7ec3328e7f618b4fc0e1adf730c0055328a49486f->leave($__internal_ee9a471513995fe27190c4d7ec3328e7f618b4fc0e1adf730c0055328a49486f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d0f5cfa9e7353f55f773b28819a95858827cd348ace12d361f3441149a67237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0f5cfa9e7353f55f773b28819a95858827cd348ace12d361f3441149a67237->enter($__internal_7d0f5cfa9e7353f55f773b28819a95858827cd348ace12d361f3441149a67237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_redirected", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_7d0f5cfa9e7353f55f773b28819a95858827cd348ace12d361f3441149a67237->leave($__internal_7d0f5cfa9e7353f55f773b28819a95858827cd348ace12d361f3441149a67237_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9e1f6966210ef30519de20f4dae47395006b11fa36d3870858a1c0b7a7cea6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e1f6966210ef30519de20f4dae47395006b11fa36d3870858a1c0b7a7cea6d->enter($__internal_c9e1f6966210ef30519de20f4dae47395006b11fa36d3870858a1c0b7a7cea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c9e1f6966210ef30519de20f4dae47395006b11fa36d3870858a1c0b7a7cea6d->leave($__internal_c9e1f6966210ef30519de20f4dae47395006b11fa36d3870858a1c0b7a7cea6d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Page/redirect.html.twig";
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
", "@SonataPage/Page/redirect.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Page\\redirect.html.twig");
    }
}
