<?php

/* @SonataSeo/Block/block_facebook_share_button.html.twig */
class __TwigTemplate_323994878d012cb45ee49fe1ae8c5051b1b69247d603029df28bb12e6c156ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_facebook_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0830e5e2d8a87a6dda43830ca2f5f8525284fc0d0393b44fbdfdb8d098aa1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0830e5e2d8a87a6dda43830ca2f5f8525284fc0d0393b44fbdfdb8d098aa1fe->enter($__internal_b0830e5e2d8a87a6dda43830ca2f5f8525284fc0d0393b44fbdfdb8d098aa1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_facebook_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0830e5e2d8a87a6dda43830ca2f5f8525284fc0d0393b44fbdfdb8d098aa1fe->leave($__internal_b0830e5e2d8a87a6dda43830ca2f5f8525284fc0d0393b44fbdfdb8d098aa1fe_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_614e5f8912b48075c839ced6ad5320d96ba7e363b6c70f12b8884d52741fa20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614e5f8912b48075c839ced6ad5320d96ba7e363b6c70f12b8884d52741fa20d->enter($__internal_614e5f8912b48075c839ced6ad5320d96ba7e363b6c70f12b8884d52741fa20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "layout", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_614e5f8912b48075c839ced6ad5320d96ba7e363b6c70f12b8884d52741fa20d->leave($__internal_614e5f8912b48075c839ced6ad5320d96ba7e363b6c70f12b8884d52741fa20d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_facebook_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
{% extends sonata_block.templates.block_base %}

{% block block %}
{% spaceless %}

    <div class=\"fb-share-button\"
        {% if settings.url %}data-href=\"{{ settings.url }}\"{% endif %}
        {% if settings.width %}data-width=\"{{ settings.width }}\"{% endif %}
        data-type=\"{{ settings.layout }}\">
    </div>

{% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/block_facebook_share_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_facebook_share_button.html.twig");
    }
}
