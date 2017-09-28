<?php

/* SonataSeoBundle:Block:_pinterest_sdk.html.twig */
class __TwigTemplate_429356ac495bd8e14a8a9993faf7c5aa0143a666ab7974dd7344380ab6a10e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pinterest_sdk' => array($this, 'block_pinterest_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0093022b8ba9e2d110c439e9c6f5dddd53db269df9809dfaa80abc0de3486a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0093022b8ba9e2d110c439e9c6f5dddd53db269df9809dfaa80abc0de3486a25->enter($__internal_0093022b8ba9e2d110c439e9c6f5dddd53db269df9809dfaa80abc0de3486a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_pinterest_sdk.html.twig"));

        // line 11
        $this->displayBlock('pinterest_sdk', $context, $blocks);
        
        $__internal_0093022b8ba9e2d110c439e9c6f5dddd53db269df9809dfaa80abc0de3486a25->leave($__internal_0093022b8ba9e2d110c439e9c6f5dddd53db269df9809dfaa80abc0de3486a25_prof);

    }

    public function block_pinterest_sdk($context, array $blocks = array())
    {
        $__internal_5c83bb1bb50bfd069a15f671bbca9ef7abbb29cc1157300fe6417e6023e0b1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c83bb1bb50bfd069a15f671bbca9ef7abbb29cc1157300fe6417e6023e0b1c7->enter($__internal_5c83bb1bb50bfd069a15f671bbca9ef7abbb29cc1157300fe6417e6023e0b1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pinterest_sdk"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "
        <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5c83bb1bb50bfd069a15f671bbca9ef7abbb29cc1157300fe6417e6023e0b1c7->leave($__internal_5c83bb1bb50bfd069a15f671bbca9ef7abbb29cc1157300fe6417e6023e0b1c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_pinterest_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  23 => 11,);
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
{% block pinterest_sdk %}
    {% spaceless %}

        <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>

    {% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:_pinterest_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/_pinterest_sdk.html.twig");
    }
}
