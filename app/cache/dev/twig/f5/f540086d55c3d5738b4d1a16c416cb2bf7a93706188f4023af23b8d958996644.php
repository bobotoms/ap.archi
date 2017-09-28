<?php

/* @SonataPage/Block/block_shared_block.html.twig */
class __TwigTemplate_16304a5c3b830fdb43bcad719d85357e5f71bd2668bd07af0b55ab2c43a24cff extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataPage/Block/block_shared_block.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38fc9e705e0716143cf47d63239324a8d789aac173facdbb2ea28eb60b49bb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fc9e705e0716143cf47d63239324a8d789aac173facdbb2ea28eb60b49bb89->enter($__internal_38fc9e705e0716143cf47d63239324a8d789aac173facdbb2ea28eb60b49bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Block/block_shared_block.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38fc9e705e0716143cf47d63239324a8d789aac173facdbb2ea28eb60b49bb89->leave($__internal_38fc9e705e0716143cf47d63239324a8d789aac173facdbb2ea28eb60b49bb89_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7270d15814b2b9d242b3905b1ac0ae1100e68ee4c84e6ba775a311b6cee2f033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7270d15814b2b9d242b3905b1ac0ae1100e68ee4c84e6ba775a311b6cee2f033->enter($__internal_7270d15814b2b9d242b3905b1ac0ae1100e68ee4c84e6ba775a311b6cee2f033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["sharedBlock"]) ? $context["sharedBlock"] : $this->getContext($context, "sharedBlock"))));
        echo "
";
        
        $__internal_7270d15814b2b9d242b3905b1ac0ae1100e68ee4c84e6ba775a311b6cee2f033->leave($__internal_7270d15814b2b9d242b3905b1ac0ae1100e68ee4c84e6ba775a311b6cee2f033_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Block/block_shared_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {{ sonata_block_render(sharedBlock) }}
{% endblock %}
", "@SonataPage/Block/block_shared_block.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_shared_block.html.twig");
    }
}
