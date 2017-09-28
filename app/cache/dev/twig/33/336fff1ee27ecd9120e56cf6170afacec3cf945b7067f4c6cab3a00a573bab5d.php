<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_5e0d19cd5f91b379219e72bf86b1d48563166b2936ff6502a99742a25107bd55 extends Twig_Template
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
        $__internal_cd7349ba5f39b345819241ec3710e28366ac5bc24360865d262a950d9aa59e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7349ba5f39b345819241ec3710e28366ac5bc24360865d262a950d9aa59e64->enter($__internal_cd7349ba5f39b345819241ec3710e28366ac5bc24360865d262a950d9aa59e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7349ba5f39b345819241ec3710e28366ac5bc24360865d262a950d9aa59e64->leave($__internal_cd7349ba5f39b345819241ec3710e28366ac5bc24360865d262a950d9aa59e64_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_c4968d4a75a8dc5ffdbebfebd7dda1f8039b9451a82b9b1ab7f938b28db67f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4968d4a75a8dc5ffdbebfebd7dda1f8039b9451a82b9b1ab7f938b28db67f59->enter($__internal_c4968d4a75a8dc5ffdbebfebd7dda1f8039b9451a82b9b1ab7f938b28db67f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_c4968d4a75a8dc5ffdbebfebd7dda1f8039b9451a82b9b1ab7f938b28db67f59->leave($__internal_c4968d4a75a8dc5ffdbebfebd7dda1f8039b9451a82b9b1ab7f938b28db67f59_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_cc951f197a2151abb21d8b233fa3f2e93d300346e5ffa1a11c182b361c49bc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc951f197a2151abb21d8b233fa3f2e93d300346e5ffa1a11c182b361c49bc0b->enter($__internal_cc951f197a2151abb21d8b233fa3f2e93d300346e5ffa1a11c182b361c49bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_cc951f197a2151abb21d8b233fa3f2e93d300346e5ffa1a11c182b361c49bc0b->leave($__internal_cc951f197a2151abb21d8b233fa3f2e93d300346e5ffa1a11c182b361c49bc0b_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_b4176e6fa853ad87efd7b27b040d435006681a6e66f46ec998c4336679a79d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4176e6fa853ad87efd7b27b040d435006681a6e66f46ec998c4336679a79d6c->enter($__internal_b4176e6fa853ad87efd7b27b040d435006681a6e66f46ec998c4336679a79d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_b4176e6fa853ad87efd7b27b040d435006681a6e66f46ec998c4336679a79d6c->leave($__internal_b4176e6fa853ad87efd7b27b040d435006681a6e66f46ec998c4336679a79d6c_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_9bce3e5fadd4bc98e94b6ceb8719acd6def7237b25397b8211300667d2d7075d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bce3e5fadd4bc98e94b6ceb8719acd6def7237b25397b8211300667d2d7075d->enter($__internal_9bce3e5fadd4bc98e94b6ceb8719acd6def7237b25397b8211300667d2d7075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_9bce3e5fadd4bc98e94b6ceb8719acd6def7237b25397b8211300667d2d7075d->leave($__internal_9bce3e5fadd4bc98e94b6ceb8719acd6def7237b25397b8211300667d2d7075d_prof);

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
", "SonataBlockBundle:Block:block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
