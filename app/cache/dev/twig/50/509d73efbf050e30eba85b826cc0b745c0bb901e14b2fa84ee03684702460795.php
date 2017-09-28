<?php

/* SonataUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b8ac1de45c9e8057c100ddde8abef8a9212789b1601904e0f32a77eabeafac44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eea6551f066054add5b67844fcbdd01639d7c2c6c125ef21ef5d490480912e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea6551f066054add5b67844fcbdd01639d7c2c6c125ef21ef5d490480912e03->enter($__internal_eea6551f066054add5b67844fcbdd01639d7c2c6c125ef21ef5d490480912e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea6551f066054add5b67844fcbdd01639d7c2c6c125ef21ef5d490480912e03->leave($__internal_eea6551f066054add5b67844fcbdd01639d7c2c6c125ef21ef5d490480912e03_prof);

    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_3426ef242dd172a63c9f54ca511cff672005c50ddd9f029fbf26ab88fd429d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426ef242dd172a63c9f54ca511cff672005c50ddd9f029fbf26ab88fd429d05->enter($__internal_3426ef242dd172a63c9f54ca511cff672005c50ddd9f029fbf26ab88fd429d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        </div>
    </div>
";
        
        $__internal_3426ef242dd172a63c9f54ca511cff672005c50ddd9f029fbf26ab88fd429d05->leave($__internal_3426ef242dd172a63c9f54ca511cff672005c50ddd9f029fbf26ab88fd429d05_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8461005d41d9b77c889ed881240d520c0c5ee763b541efae4f6f799b066245d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8461005d41d9b77c889ed881240d520c0c5ee763b541efae4f6f799b066245d3->enter($__internal_8461005d41d9b77c889ed881240d520c0c5ee763b541efae4f6f799b066245d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "SonataUserBundle:ChangePassword:changePassword.html.twig", 23)->display($context);
        // line 24
        echo "            ";
        
        $__internal_8461005d41d9b77c889ed881240d520c0c5ee763b541efae4f6f799b066245d3->leave($__internal_8461005d41d9b77c889ed881240d520c0c5ee763b541efae4f6f799b066245d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  72 => 23,  66 => 22,  57 => 25,  55 => 22,  49 => 19,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
", "SonataUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
