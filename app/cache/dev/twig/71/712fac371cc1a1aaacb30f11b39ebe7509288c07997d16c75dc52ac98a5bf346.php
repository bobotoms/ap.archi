<?php

/* SonataPageBundle:Block:block_container.html.twig */
class __TwigTemplate_dc43d522670db4262bf91ba03c426f37e762f59b4e8ba7140fde7c9cbce296b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_container.html.twig", "SonataPageBundle:Block:block_container.html.twig", 12);
        $this->blocks = array(
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e95f9deddd0174276d96464b833e21a16b97453f3e1bbf445434de0132dc8d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95f9deddd0174276d96464b833e21a16b97453f3e1bbf445434de0132dc8d46->enter($__internal_e95f9deddd0174276d96464b833e21a16b97453f3e1bbf445434de0132dc8d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Block:block_container.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95f9deddd0174276d96464b833e21a16b97453f3e1bbf445434de0132dc8d46->leave($__internal_e95f9deddd0174276d96464b833e21a16b97453f3e1bbf445434de0132dc8d46_prof);

    }

    // line 14
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_f8c61347d344a1aa5d134f021f7cacd8b57d94b0e75194141255a402be11d150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c61347d344a1aa5d134f021f7cacd8b57d94b0e75194141255a402be11d150->enter($__internal_f8c61347d344a1aa5d134f021f7cacd8b57d94b0e75194141255a402be11d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
        echo "
";
        
        $__internal_f8c61347d344a1aa5d134f021f7cacd8b57d94b0e75194141255a402be11d150->leave($__internal_f8c61347d344a1aa5d134f021f7cacd8b57d94b0e75194141255a402be11d150_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_container.html.twig\" %}

{% block block_child_render %}
    {{ sonata_page_render_block(child) }}
{% endblock %}", "SonataPageBundle:Block:block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
