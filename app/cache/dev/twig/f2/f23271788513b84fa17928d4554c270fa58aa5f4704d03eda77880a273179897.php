<?php

/* @SonataUser/Security/login.html.twig */
class __TwigTemplate_4b41f1161ea834254958fc4eb1c613f7085c412911f38fd1076d37dad02cd2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@SonataUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f3d354be2ae52b01f8a62f57ee3d0b286338149e1d96a7dc2dc39c25c647ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f3d354be2ae52b01f8a62f57ee3d0b286338149e1d96a7dc2dc39c25c647ce->enter($__internal_c2f3d354be2ae52b01f8a62f57ee3d0b286338149e1d96a7dc2dc39c25c647ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f3d354be2ae52b01f8a62f57ee3d0b286338149e1d96a7dc2dc39c25c647ce->leave($__internal_c2f3d354be2ae52b01f8a62f57ee3d0b286338149e1d96a7dc2dc39c25c647ce_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/login.html.twig";
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "@SonataUser/Security/login.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
