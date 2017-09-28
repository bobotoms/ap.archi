<?php

/* @SonataMedia/Provider/view_vimeo.html.twig */
class __TwigTemplate_2d5eaa5352d7da700b83a7927b720b745364c6b67cbbac4457dceea11acbe331 extends Twig_Template
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
        $__internal_fbda9bbe317721a8a7355ca6887e23e5628ab5008e6f9b6d363ef12ff095655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbda9bbe317721a8a7355ca6887e23e5628ab5008e6f9b6d363ef12ff095655b->enter($__internal_fbda9bbe317721a8a7355ca6887e23e5628ab5008e6f9b6d363ef12ff095655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Provider/view_vimeo.html.twig"));

        // line 11
        echo "

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "id", array()), "html", null, true);
        echo "\"
    src=\"//player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "src", array()), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width", array()), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height", array()), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "frameborder", array()), "html", null, true);
        echo "\"
    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "class", array()))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "class", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_fullscreen", array())) {
            echo "allowfullscreen mozallowfullscreen webkitallowfullscreen";
        }
        echo ">
</iframe>
";
        
        $__internal_fbda9bbe317721a8a7355ca6887e23e5628ab5008e6f9b6d363ef12ff095655b->leave($__internal_fbda9bbe317721a8a7355ca6887e23e5628ab5008e6f9b6d363ef12ff095655b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Provider/view_vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  49 => 19,  45 => 18,  41 => 17,  37 => 16,  31 => 15,  27 => 14,  22 => 11,);
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


<iframe
    id=\"{{ options.id }}\"
    src=\"//player.vimeo.com/video/{{ media.providerreference }}?{{ options.src }}\"
    width=\"{{ options.width }}\"
    height=\"{{ options.height }}\"
    frameborder=\"{{ options.frameborder }}\"
    {% if options.class is not empty %}class=\"{{ options.class }}\"{% endif %}
    {% if options.allow_fullscreen %}allowfullscreen mozallowfullscreen webkitallowfullscreen{% endif %}>
</iframe>
", "@SonataMedia/Provider/view_vimeo.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Provider\\view_vimeo.html.twig");
    }
}
