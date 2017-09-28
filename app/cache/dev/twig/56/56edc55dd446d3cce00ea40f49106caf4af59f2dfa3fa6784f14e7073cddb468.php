<?php

/* SonataPageBundle:BlockAdmin:block_core_container_edit.html.twig */
class __TwigTemplate_a7ba1c3cfabaaa92332f93651eadb3aade1293eacf0f55db9da97c4127583996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataPageBundle:BlockAdmin:edit.html.twig", "SonataPageBundle:BlockAdmin:block_core_container_edit.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle:BlockAdmin:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2446aa37a3b4daa193fc1fcaa99789fdf5de699e3a4436964d6e779a73750195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2446aa37a3b4daa193fc1fcaa99789fdf5de699e3a4436964d6e779a73750195->enter($__internal_2446aa37a3b4daa193fc1fcaa99789fdf5de699e3a4436964d6e779a73750195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:BlockAdmin:block_core_container_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2446aa37a3b4daa193fc1fcaa99789fdf5de699e3a4436964d6e779a73750195->leave($__internal_2446aa37a3b4daa193fc1fcaa99789fdf5de699e3a4436964d6e779a73750195_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_50fc3d6187d329f45ec060e20aa9ed39cd98fe3f88737fc505a9035c1592b81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fc3d6187d329f45ec060e20aa9ed39cd98fe3f88737fc505a9035c1592b81f->enter($__internal_50fc3d6187d329f45ec060e20aa9ed39cd98fe3f88737fc505a9035c1592b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "
";
        
        $__internal_50fc3d6187d329f45ec060e20aa9ed39cd98fe3f88737fc505a9035c1592b81f->leave($__internal_50fc3d6187d329f45ec060e20aa9ed39cd98fe3f88737fc505a9035c1592b81f_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:BlockAdmin:block_core_container_edit.html.twig";
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

{% extends 'SonataPageBundle:BlockAdmin:edit.html.twig' %}

{% block block %}

{% endblock %}
", "SonataPageBundle:BlockAdmin:block_core_container_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/BlockAdmin/block_core_container_edit.html.twig");
    }
}
