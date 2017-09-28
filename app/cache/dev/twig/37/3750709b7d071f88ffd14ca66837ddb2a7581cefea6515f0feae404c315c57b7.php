<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_6ae65eecfc2a2e6be807f573ccb69c38176e936588e9714e9f87f6089855ef07 extends Twig_Template
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
        $__internal_02fe0ef79927f3815cd7f6d822f03d3c1233832a5d1825411d6a8eaf0a4078f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fe0ef79927f3815cd7f6d822f03d3c1233832a5d1825411d6a8eaf0a4078f2->enter($__internal_02fe0ef79927f3815cd7f6d822f03d3c1233832a5d1825411d6a8eaf0a4078f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_vimeo.html.twig"));

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
        
        $__internal_02fe0ef79927f3815cd7f6d822f03d3c1233832a5d1825411d6a8eaf0a4078f2->leave($__internal_02fe0ef79927f3815cd7f6d822f03d3c1233832a5d1825411d6a8eaf0a4078f2_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
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
", "SonataMediaBundle:Provider:view_vimeo.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle/Resources/views/Provider/view_vimeo.html.twig");
    }
}
