<?php

/* @SonataMedia/Provider/view_dailymotion.html.twig */
class __TwigTemplate_24d66ec53054146a16ca6468aca66e03748da6ad78a3785ae100051f08f9eda9 extends Twig_Template
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
        $__internal_181d4fed30767863b7a70eed6a79522c544d811a99e9080dbcbddf918b7e3eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181d4fed30767863b7a70eed6a79522c544d811a99e9080dbcbddf918b7e3eaf->enter($__internal_181d4fed30767863b7a70eed6a79522c544d811a99e9080dbcbddf918b7e3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Provider/view_dailymotion.html.twig"));

        // line 11
        echo "
<object width=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height", array()), "html", null, true);
        echo "\">
    <param name=\"movie\" value=\"//www.dailymotion.com/swf/video/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters", array()), "html", null, true);
        echo "\"></param>
    <param name=\"allowFullScreen\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen", array()), "html", null, true);
        echo "\"></param>
    <param name=\"allowScriptAccess\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess", array()), "html", null, true);
        echo "\"></param>

    <embed
        type=\"application/x-shockwave-flash\"
        src=\"//www.dailymotion.com/swf/video/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters", array()), "html", null, true);
        echo "\"
        width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width", array()), "html", null, true);
        echo "\"
        height=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height", array()), "html", null, true);
        echo "\"
        allowfullscreen=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen", array()), "html", null, true);
        echo "\"
        allowscriptaccess=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess", array()), "html", null, true);
        echo "\">
    </embed>
</object>
";
        
        $__internal_181d4fed30767863b7a70eed6a79522c544d811a99e9080dbcbddf918b7e3eaf->leave($__internal_181d4fed30767863b7a70eed6a79522c544d811a99e9080dbcbddf918b7e3eaf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Provider/view_dailymotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  62 => 22,  58 => 21,  54 => 20,  48 => 19,  41 => 15,  37 => 14,  31 => 13,  25 => 12,  22 => 11,);
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

<object width=\"{{ options.width }}\" height=\"{{ options.height }}\">
    <param name=\"movie\" value=\"//www.dailymotion.com/swf/video/{{ media.providerreference }}?{{ options.player_parameters }}\"></param>
    <param name=\"allowFullScreen\" value=\"{{ options.allowFullScreen }}\"></param>
    <param name=\"allowScriptAccess\" value=\"{{ options.allowScriptAccess }}\"></param>

    <embed
        type=\"application/x-shockwave-flash\"
        src=\"//www.dailymotion.com/swf/video/{{ media.providerreference }}?{{ options.player_parameters }}\"
        width=\"{{ options.width }}\"
        height=\"{{ options.height }}\"
        allowfullscreen=\"{{ options.allowFullScreen }}\"
        allowscriptaccess=\"{{ options.allowScriptAccess }}\">
    </embed>
</object>
", "@SonataMedia/Provider/view_dailymotion.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Provider\\view_dailymotion.html.twig");
    }
}
