<?php

/* @SonataPage/blank.html.twig */
class __TwigTemplate_d3e70d74f7432f250eca5fc74fe3ff2efe083fb0f7687f272a080c31de62b502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70743aaa441fc03ae33416d69329238665c18d27b1034f427ceeab4ef1cc1ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70743aaa441fc03ae33416d69329238665c18d27b1034f427ceeab4ef1cc1ee8->enter($__internal_70743aaa441fc03ae33416d69329238665c18d27b1034f427ceeab4ef1cc1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/blank.html.twig"));

        // line 11
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_70743aaa441fc03ae33416d69329238665c18d27b1034f427ceeab4ef1cc1ee8->leave($__internal_70743aaa441fc03ae33416d69329238665c18d27b1034f427ceeab4ef1cc1ee8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 11,);
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
{{ content|raw }}
", "@SonataPage/blank.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\blank.html.twig");
    }
}
