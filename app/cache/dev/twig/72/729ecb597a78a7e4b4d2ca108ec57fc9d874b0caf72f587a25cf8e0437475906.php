<?php

/* @SonataUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_1c66545d51542211dee320414766cbe44b727e69de80037cf0df0cf5c1a37ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 12);
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
        $__internal_661bb83223d012bccd084f0c26a709be5ed0e3f8ed6b67748a14f6d638c35dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661bb83223d012bccd084f0c26a709be5ed0e3f8ed6b67748a14f6d638c35dbb->enter($__internal_661bb83223d012bccd084f0c26a709be5ed0e3f8ed6b67748a14f6d638c35dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_661bb83223d012bccd084f0c26a709be5ed0e3f8ed6b67748a14f6d638c35dbb->leave($__internal_661bb83223d012bccd084f0c26a709be5ed0e3f8ed6b67748a14f6d638c35dbb_prof);

    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_b689995f389c1b65389762f2655ba2bb815ddea279261cc87d44fada08344b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b689995f389c1b65389762f2655ba2bb815ddea279261cc87d44fada08344b72->enter($__internal_b689995f389c1b65389762f2655ba2bb815ddea279261cc87d44fada08344b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

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
        
        $__internal_b689995f389c1b65389762f2655ba2bb815ddea279261cc87d44fada08344b72->leave($__internal_b689995f389c1b65389762f2655ba2bb815ddea279261cc87d44fada08344b72_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61ee894b39159a0afb0dfc1b2e6a4530d45499a18270798af37b8f67a8f6eaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ee894b39159a0afb0dfc1b2e6a4530d45499a18270798af37b8f67a8f6eaf7->enter($__internal_61ee894b39159a0afb0dfc1b2e6a4530d45499a18270798af37b8f67a8f6eaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 23)->display($context);
        // line 24
        echo "            ";
        
        $__internal_61ee894b39159a0afb0dfc1b2e6a4530d45499a18270798af37b8f67a8f6eaf7->leave($__internal_61ee894b39159a0afb0dfc1b2e6a4530d45499a18270798af37b8f67a8f6eaf7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/ChangePassword/changePassword.html.twig";
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
", "@SonataUser/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
