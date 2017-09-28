<?php

/* SonataUserBundle:Security:login.html.twig */
class __TwigTemplate_ab7ce9d7f319a9eaf9f6407c56122072d42449e26acafe2bdbdf32c773c53112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "SonataUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a37d4434296a472f39b0ab534fa9ffa4b7d5b926bb3dadcdeb93cc766c4ff58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37d4434296a472f39b0ab534fa9ffa4b7d5b926bb3dadcdeb93cc766c4ff58a->enter($__internal_a37d4434296a472f39b0ab534fa9ffa4b7d5b926bb3dadcdeb93cc766c4ff58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37d4434296a472f39b0ab534fa9ffa4b7d5b926bb3dadcdeb93cc766c4ff58a->leave($__internal_a37d4434296a472f39b0ab534fa9ffa4b7d5b926bb3dadcdeb93cc766c4ff58a_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "SonataUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
