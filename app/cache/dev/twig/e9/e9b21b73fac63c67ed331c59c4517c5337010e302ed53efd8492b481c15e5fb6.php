<?php

/* @SonataSeo/Block/_pinterest_sdk.html.twig */
class __TwigTemplate_7556a5687bb5ac6144ad9b20758eb0154fc818de0c3a12de23ad57f039be6ab5 extends Twig_Template
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
        $__internal_5b1048c1aa1478c19f8598d444e9f9d011d9883ab87b56d1564ab49110477fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1048c1aa1478c19f8598d444e9f9d011d9883ab87b56d1564ab49110477fdf->enter($__internal_5b1048c1aa1478c19f8598d444e9f9d011d9883ab87b56d1564ab49110477fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/_pinterest_sdk.html.twig"));

        // line 11
        $this->displayBlock('pinterest_sdk', $context, $blocks);
        
        $__internal_5b1048c1aa1478c19f8598d444e9f9d011d9883ab87b56d1564ab49110477fdf->leave($__internal_5b1048c1aa1478c19f8598d444e9f9d011d9883ab87b56d1564ab49110477fdf_prof);

    }

    public function block_pinterest_sdk($context, array $blocks = array())
    {
        $__internal_0d3ff44abfa1930afb25b781a34de91c275e7f715433e443e4cbb9825e0da293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3ff44abfa1930afb25b781a34de91c275e7f715433e443e4cbb9825e0da293->enter($__internal_0d3ff44abfa1930afb25b781a34de91c275e7f715433e443e4cbb9825e0da293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pinterest_sdk"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "
        <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d3ff44abfa1930afb25b781a34de91c275e7f715433e443e4cbb9825e0da293->leave($__internal_0d3ff44abfa1930afb25b781a34de91c275e7f715433e443e4cbb9825e0da293_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/_pinterest_sdk.html.twig";
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
", "@SonataSeo/Block/_pinterest_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\_pinterest_sdk.html.twig");
    }
}
