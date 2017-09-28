<?php

/* @SonataMedia/Provider/view_image.html.twig */
class __TwigTemplate_b79add9682ef6eeb1c9a2b60fa556b1b2c43222db839eb808791926f396441f1 extends Twig_Template
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
        $__internal_a2b48f8c9f3e8c42d8f4836b423d90f3792aff1686d93991d1256834dc5c3269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b48f8c9f3e8c42d8f4836b423d90f3792aff1686d93991d1256834dc5c3269->enter($__internal_a2b48f8c9f3e8c42d8f4836b423d90f3792aff1686d93991d1256834dc5c3269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Provider/view_image.html.twig"));

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
        
        $__internal_a2b48f8c9f3e8c42d8f4836b423d90f3792aff1686d93991d1256834dc5c3269->leave($__internal_a2b48f8c9f3e8c42d8f4836b423d90f3792aff1686d93991d1256834dc5c3269_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Provider/view_image.html.twig";
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
", "@SonataMedia/Provider/view_image.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Provider\\view_image.html.twig");
    }
}
