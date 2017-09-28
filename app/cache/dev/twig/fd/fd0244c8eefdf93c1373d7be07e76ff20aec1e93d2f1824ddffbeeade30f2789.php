<?php

/* @SonataSeo/Block/block_pinterest_pin_button.html.twig */
class __TwigTemplate_08d606983f1a0398522caa81c0eada3e73df9d545d4818049d4cf2e669406b05 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_pinterest_pin_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8647b42679d41944d2890d78cc7da9a211bf1b419b51a118b240251e1ec35f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8647b42679d41944d2890d78cc7da9a211bf1b419b51a118b240251e1ec35f1->enter($__internal_e8647b42679d41944d2890d78cc7da9a211bf1b419b51a118b240251e1ec35f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_pinterest_pin_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8647b42679d41944d2890d78cc7da9a211bf1b419b51a118b240251e1ec35f1->leave($__internal_e8647b42679d41944d2890d78cc7da9a211bf1b419b51a118b240251e1ec35f1_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_40cf3f6cfadd98917f55eae83c97fe82fb472897a471036d2918f01f92f68a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cf3f6cfadd98917f55eae83c97fe82fb472897a471036d2918f01f92f68a46->enter($__internal_40cf3f6cfadd98917f55eae83c97fe82fb472897a471036d2918f01f92f68a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"//www.pinterest.com/pin/create/button/?url=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
        echo "&media=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "image", array()), "html", null, true);
        echo "&description=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "description", array()), "html", null, true);
        echo "\"
           data-pin-do=\"buttonPin\"
           ";
        // line 18
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array())) {
            echo "data-pin-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "           ";
        if (("round" == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()))) {
            echo "data-pin-shape=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()), "html", null, true);
            echo "\"";
        }
        echo ">
            <img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" />
        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_40cf3f6cfadd98917f55eae83c97fe82fb472897a471036d2918f01f92f68a46->leave($__internal_40cf3f6cfadd98917f55eae83c97fe82fb472897a471036d2918f01f92f68a46_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_pinterest_pin_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 18,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

        <a href=\"//www.pinterest.com/pin/create/button/?url={{ settings.url }}&media={{ settings.image }}&description={{ settings.description }}\"
           data-pin-do=\"buttonPin\"
           {% if settings.size %}data-pin-height=\"{{ settings.size }}\"{% endif %}
           {% if 'round' == settings.shape %}data-pin-shape=\"{{ settings.shape }}\"{% endif %}>
            <img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" />
        </a>

    {% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/block_pinterest_pin_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_pinterest_pin_button.html.twig");
    }
}
