<?php

/* @SonataPage/Block/block_base.html.twig */
class __TwigTemplate_8898f1d388e8ec9ef325989ac51ab36f5365b10dee35bec06b59ba00434334d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e15b0d4cf7d966b095ad8d962b11116882b231e22e63288b228af6073e8f7da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15b0d4cf7d966b095ad8d962b11116882b231e22e63288b228af6073e8f7da8->enter($__internal_e15b0d4cf7d966b095ad8d962b11116882b231e22e63288b228af6073e8f7da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Block/block_base.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array())) {
            // line 13
            echo "    <div id=\"cms-block-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
            echo "\"
         class=\"cms-block";
            // line 14
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
                echo " cms-block-element";
            }
            $this->displayBlock('block_class', $context, $blocks);
            echo "\"
        ";
            // line 15
            if ((($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) && $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "page", array(), "any", true, true)) &&  !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "page", array())))) {
                // line 16
                echo "            data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
                echo "\"
            data-name=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
                echo "\"
            data-role=\"";
                // line 18
                $this->displayBlock('block_role', $context, $blocks);
                echo "\"
            data-page-id=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "page", array()), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 21
            echo "        >
";
        } elseif ($this->getAttribute(        // line 22
(isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array(), "method")) {
            // line 23
            echo "    <!-- start rendering, block.id: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
            echo " - page.id: ";
            if ((($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "page", array()), false)) : (false))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "page", array()), "id", array()), "html", null, true);
            } else {
                echo "no related page";
            }
            echo " - name: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
            echo " -->
";
        }
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('block', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array())) {
            // line 29
            echo "    </div>
";
        } elseif ($this->getAttribute(        // line 30
(isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array(), "method")) {
            // line 31
            echo "    <!-- end rendering, block.id: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
            echo " - page.id: ";
            if ((($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "page", array()), false)) : (false))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "page", array()), "id", array()), "html", null, true);
            } else {
                echo "no related page";
            }
            echo "  - name: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
            echo " -->
";
        }
        
        $__internal_e15b0d4cf7d966b095ad8d962b11116882b231e22e63288b228af6073e8f7da8->leave($__internal_e15b0d4cf7d966b095ad8d962b11116882b231e22e63288b228af6073e8f7da8_prof);

    }

    // line 14
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_6fe38eed093b2b11e9613b4794486c8e76b9d835b69ed9b0974c911e3fd182d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe38eed093b2b11e9613b4794486c8e76b9d835b69ed9b0974c911e3fd182d5->enter($__internal_6fe38eed093b2b11e9613b4794486c8e76b9d835b69ed9b0974c911e3fd182d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        
        $__internal_6fe38eed093b2b11e9613b4794486c8e76b9d835b69ed9b0974c911e3fd182d5->leave($__internal_6fe38eed093b2b11e9613b4794486c8e76b9d835b69ed9b0974c911e3fd182d5_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_d8cb60d303e839a7c10d6ed0e337b6b63a1c4f731f7b9aa5f3937081cccb7e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cb60d303e839a7c10d6ed0e337b6b63a1c4f731f7b9aa5f3937081cccb7e2c->enter($__internal_d8cb60d303e839a7c10d6ed0e337b6b63a1c4f731f7b9aa5f3937081cccb7e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "block";
        
        $__internal_d8cb60d303e839a7c10d6ed0e337b6b63a1c4f731f7b9aa5f3937081cccb7e2c->leave($__internal_d8cb60d303e839a7c10d6ed0e337b6b63a1c4f731f7b9aa5f3937081cccb7e2c_prof);

    }

    // line 26
    public function block_block($context, array $blocks = array())
    {
        $__internal_abbb90b4a80e62d10b0385c3ffa03c5dd9713faf2228b2ab69a81006be8f9cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbb90b4a80e62d10b0385c3ffa03c5dd9713faf2228b2ab69a81006be8f9cf4->enter($__internal_abbb90b4a80e62d10b0385c3ffa03c5dd9713faf2228b2ab69a81006be8f9cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_abbb90b4a80e62d10b0385c3ffa03c5dd9713faf2228b2ab69a81006be8f9cf4->leave($__internal_abbb90b4a80e62d10b0385c3ffa03c5dd9713faf2228b2ab69a81006be8f9cf4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 26,  126 => 18,  115 => 14,  96 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  67 => 23,  65 => 22,  62 => 21,  57 => 19,  53 => 18,  49 => 17,  44 => 16,  42 => 15,  35 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if sonata_page.isInlineEditionOn %}
    <div id=\"cms-block-{{ block.id }}\"
         class=\"cms-block{% if block.hasParent() %} cms-block-element{% endif %}{% block block_class %}{% endblock %}\"
        {% if sonata_page.isEditor and block.page is defined and block.page is not null %}
            data-id=\"{{ block.id }}\"
            data-name=\"{{ block.name }}\"
            data-role=\"{% block block_role %}block{% endblock %}\"
            data-page-id=\"{{ block.page.id }}\"
        {% endif %}
        >
{% elseif sonata_page.isEditor() %}
    <!-- start rendering, block.id: {{ block.id }} - page.id: {% if block.page|default(false) %}{{ block.page.id }}{% else %}no related page{% endif %} - name: {{ block.name }} -->
{% endif %}

{% block block %}EMPTY CONTENT{% endblock %}

{% if sonata_page.isInlineEditionOn %}
    </div>
{% elseif sonata_page.isEditor() %}
    <!-- end rendering, block.id: {{ block.id }} - page.id: {% if block.page|default(false) %}{{ block.page.id }}{% else %}no related page{% endif %}  - name: {{ block.name }} -->
{% endif %}
", "@SonataPage/Block/block_base.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
