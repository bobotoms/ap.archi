<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_cd3fc4ddd2e35d451d2a57be3a27a9104aec7cbe77563bde2f900e381604e26f extends Twig_Template
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
        $__internal_a61f25347b69eaf6a680095c12f3836d9fec3aae2d3d9c1c7af5d31e0e9bf176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61f25347b69eaf6a680095c12f3836d9fec3aae2d3d9c1c7af5d31e0e9bf176->enter($__internal_a61f25347b69eaf6a680095c12f3836d9fec3aae2d3d9c1c7af5d31e0e9bf176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_image.html.twig"));

        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
        
        $__internal_a61f25347b69eaf6a680095c12f3836d9fec3aae2d3d9c1c7af5d31e0e9bf176->leave($__internal_a61f25347b69eaf6a680095c12f3836d9fec3aae2d3d9c1c7af5d31e0e9bf176_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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

<img {% for name, value in options %}{{ name }}=\"{{ value }}\" {% endfor %} />
", "SonataMediaBundle:Provider:view_image.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Provider\\view_image.html.twig");
    }
}
