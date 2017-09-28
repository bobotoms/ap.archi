<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_1b554304dc67ee2319622f3a158f4293ce43cd104e616d901ae37a6c54081854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759885af28a0ddfb9a0ae249a7afd2ae9bd45cc7582bc062eb30937cf1fea979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759885af28a0ddfb9a0ae249a7afd2ae9bd45cc7582bc062eb30937cf1fea979->enter($__internal_759885af28a0ddfb9a0ae249a7afd2ae9bd45cc7582bc062eb30937cf1fea979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_759885af28a0ddfb9a0ae249a7afd2ae9bd45cc7582bc062eb30937cf1fea979->leave($__internal_759885af28a0ddfb9a0ae249a7afd2ae9bd45cc7582bc062eb30937cf1fea979_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_a7ab09ab1e0e83f44d4d699adfada425ffe6e401a643f3a363c05c7a49f3f7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ab09ab1e0e83f44d4d699adfada425ffe6e401a643f3a363c05c7a49f3f7ca->enter($__internal_a7ab09ab1e0e83f44d4d699adfada425ffe6e401a643f3a363c05c7a49f3f7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_a7ab09ab1e0e83f44d4d699adfada425ffe6e401a643f3a363c05c7a49f3f7ca->leave($__internal_a7ab09ab1e0e83f44d4d699adfada425ffe6e401a643f3a363c05c7a49f3f7ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
