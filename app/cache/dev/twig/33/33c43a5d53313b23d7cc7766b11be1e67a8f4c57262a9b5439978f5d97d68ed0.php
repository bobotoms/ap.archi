<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_0a7c2730d60bd76f279d57e53cb122e30948b4bcb2ef151096dcdec16e04b71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb587fe387ccb7c4b06168ab2746a13eae0a0b65f537d7a71b84f7da529775af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb587fe387ccb7c4b06168ab2746a13eae0a0b65f537d7a71b84f7da529775af->enter($__internal_fb587fe387ccb7c4b06168ab2746a13eae0a0b65f537d7a71b84f7da529775af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb587fe387ccb7c4b06168ab2746a13eae0a0b65f537d7a71b84f7da529775af->leave($__internal_fb587fe387ccb7c4b06168ab2746a13eae0a0b65f537d7a71b84f7da529775af_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_0e8a9d9abdcca2eab371c18ea68322183fe35c90d6975406c2bd14d1d1da53ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8a9d9abdcca2eab371c18ea68322183fe35c90d6975406c2bd14d1d1da53ca->enter($__internal_0e8a9d9abdcca2eab371c18ea68322183fe35c90d6975406c2bd14d1d1da53ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_0e8a9d9abdcca2eab371c18ea68322183fe35c90d6975406c2bd14d1d1da53ca->leave($__internal_0e8a9d9abdcca2eab371c18ea68322183fe35c90d6975406c2bd14d1d1da53ca_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_ff1120b925c726561a042b63d2a0ddc26fd636a740df87b36a2a5e1f74e69f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1120b925c726561a042b63d2a0ddc26fd636a740df87b36a2a5e1f74e69f6f->enter($__internal_ff1120b925c726561a042b63d2a0ddc26fd636a740df87b36a2a5e1f74e69f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_ff1120b925c726561a042b63d2a0ddc26fd636a740df87b36a2a5e1f74e69f6f->leave($__internal_ff1120b925c726561a042b63d2a0ddc26fd636a740df87b36a2a5e1f74e69f6f_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_2a5e57104679e230cdf53488f0cea70f3f519d0a126cd643bee3ac326a874406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5e57104679e230cdf53488f0cea70f3f519d0a126cd643bee3ac326a874406->enter($__internal_2a5e57104679e230cdf53488f0cea70f3f519d0a126cd643bee3ac326a874406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_2a5e57104679e230cdf53488f0cea70f3f519d0a126cd643bee3ac326a874406->leave($__internal_2a5e57104679e230cdf53488f0cea70f3f519d0a126cd643bee3ac326a874406_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_90c2a83aa88c464aa01d0626dd5adb0df0eb327afdfd9bf4f620e669fb1b9d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c2a83aa88c464aa01d0626dd5adb0df0eb327afdfd9bf4f620e669fb1b9d9a->enter($__internal_90c2a83aa88c464aa01d0626dd5adb0df0eb327afdfd9bf4f620e669fb1b9d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_90c2a83aa88c464aa01d0626dd5adb0df0eb327afdfd9bf4f620e669fb1b9d9a->leave($__internal_90c2a83aa88c464aa01d0626dd5adb0df0eb327afdfd9bf4f620e669fb1b9d9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
