<?php

/* SonataPageBundle:Block:block_base.html.twig */
class __TwigTemplate_0956873ab6d0913fccec3f8dae9879ea7dcaf8b5b714acb2ed1626856e8415ad extends Twig_Template
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
        $__internal_3c380fe2a3915084db0f5d495a9e0a8e267025b331f92413e6788728c5ae540e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c380fe2a3915084db0f5d495a9e0a8e267025b331f92413e6788728c5ae540e->enter($__internal_3c380fe2a3915084db0f5d495a9e0a8e267025b331f92413e6788728c5ae540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Block:block_base.html.twig"));

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
        
        $__internal_3c380fe2a3915084db0f5d495a9e0a8e267025b331f92413e6788728c5ae540e->leave($__internal_3c380fe2a3915084db0f5d495a9e0a8e267025b331f92413e6788728c5ae540e_prof);

    }

    // line 14
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_31a1f64152576b48d5d4a6b559494e5d01cec3cadcaf7915491a1193f0f07ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a1f64152576b48d5d4a6b559494e5d01cec3cadcaf7915491a1193f0f07ae6->enter($__internal_31a1f64152576b48d5d4a6b559494e5d01cec3cadcaf7915491a1193f0f07ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        
        $__internal_31a1f64152576b48d5d4a6b559494e5d01cec3cadcaf7915491a1193f0f07ae6->leave($__internal_31a1f64152576b48d5d4a6b559494e5d01cec3cadcaf7915491a1193f0f07ae6_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_ded7c76e3302f6524a9336e277ed0cfa5de283e0c0facd524d7b3b4ad9e1f42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded7c76e3302f6524a9336e277ed0cfa5de283e0c0facd524d7b3b4ad9e1f42b->enter($__internal_ded7c76e3302f6524a9336e277ed0cfa5de283e0c0facd524d7b3b4ad9e1f42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "block";
        
        $__internal_ded7c76e3302f6524a9336e277ed0cfa5de283e0c0facd524d7b3b4ad9e1f42b->leave($__internal_ded7c76e3302f6524a9336e277ed0cfa5de283e0c0facd524d7b3b4ad9e1f42b_prof);

    }

    // line 26
    public function block_block($context, array $blocks = array())
    {
        $__internal_b34d5aa693050e9576fb14a1ff6fc39f9e2558267004a34c115eee4221b24d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34d5aa693050e9576fb14a1ff6fc39f9e2558267004a34c115eee4221b24d65->enter($__internal_b34d5aa693050e9576fb14a1ff6fc39f9e2558267004a34c115eee4221b24d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_b34d5aa693050e9576fb14a1ff6fc39f9e2558267004a34c115eee4221b24d65->leave($__internal_b34d5aa693050e9576fb14a1ff6fc39f9e2558267004a34c115eee4221b24d65_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_base.html.twig";
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
", "SonataPageBundle:Block:block_base.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
