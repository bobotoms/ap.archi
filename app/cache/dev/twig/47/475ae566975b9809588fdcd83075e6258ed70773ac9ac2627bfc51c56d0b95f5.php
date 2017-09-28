<?php

/* SonataUserBundle:Resetting:request.html.twig */
class __TwigTemplate_32d1a7f5f2d6a4a9ed5e5d54750db89d21459d84f88a3637025a4a05ec775d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Resetting:request.html.twig", 12);
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
        $__internal_694dcff4f9a2a5893d5fcfc2b4b3166d2b07564e5560eb21f5f13e3c42cd599e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694dcff4f9a2a5893d5fcfc2b4b3166d2b07564e5560eb21f5f13e3c42cd599e->enter($__internal_694dcff4f9a2a5893d5fcfc2b4b3166d2b07564e5560eb21f5f13e3c42cd599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694dcff4f9a2a5893d5fcfc2b4b3166d2b07564e5560eb21f5f13e3c42cd599e->leave($__internal_694dcff4f9a2a5893d5fcfc2b4b3166d2b07564e5560eb21f5f13e3c42cd599e_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ee38a2805176da27c3e67cb50970e3b81336285d54835df646b66fb15f2aa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee38a2805176da27c3e67cb50970e3b81336285d54835df646b66fb15f2aa1e->enter($__internal_6ee38a2805176da27c3e67cb50970e3b81336285d54835df646b66fb15f2aa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 20
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "SonataUserBundle:Resetting:request.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
    </div>
";
        
        $__internal_6ee38a2805176da27c3e67cb50970e3b81336285d54835df646b66fb15f2aa1e->leave($__internal_6ee38a2805176da27c3e67cb50970e3b81336285d54835df646b66fb15f2aa1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "SonataUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
