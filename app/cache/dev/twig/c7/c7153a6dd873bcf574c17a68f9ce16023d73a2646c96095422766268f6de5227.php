<?php

/* @SonataMedia/Provider/thumbnail.html.twig */
class __TwigTemplate_b03243beb8a62415022b8c3e44c24bd71ad6e25114267b0a92de815473d96bf8 extends Twig_Template
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
        $__internal_31ae5581123ed95a1b54b457bb6b32f5353bf6b1d4b257d375a1df1c58b6ac4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ae5581123ed95a1b54b457bb6b32f5353bf6b1d4b257d375a1df1c58b6ac4f->enter($__internal_31ae5581123ed95a1b54b457bb6b32f5353bf6b1d4b257d375a1df1c58b6ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Provider/thumbnail.html.twig"));

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
        
        $__internal_31ae5581123ed95a1b54b457bb6b32f5353bf6b1d4b257d375a1df1c58b6ac4f->leave($__internal_31ae5581123ed95a1b54b457bb6b32f5353bf6b1d4b257d375a1df1c58b6ac4f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Provider/thumbnail.html.twig";
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

<img {% for name, value in options %}{{name}}=\"{{value}}\" {% endfor %} />
", "@SonataMedia/Provider/thumbnail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Provider\\thumbnail.html.twig");
    }
}
