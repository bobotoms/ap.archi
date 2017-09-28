<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_a7200b5c60f906c30e95214c826ea702a69f4ef984c4d765f515b94a6d50388f extends Twig_Template
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
        $__internal_c8e20e1d678c388c6200e898be9e2d7d593203d13ac1c491e1167aaa31e11412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e20e1d678c388c6200e898be9e2d7d593203d13ac1c491e1167aaa31e11412->enter($__internal_c8e20e1d678c388c6200e898be9e2d7d593203d13ac1c491e1167aaa31e11412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_c8e20e1d678c388c6200e898be9e2d7d593203d13ac1c491e1167aaa31e11412->leave($__internal_c8e20e1d678c388c6200e898be9e2d7d593203d13ac1c491e1167aaa31e11412_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_5c8509936a4eb03af4f270139f560ff4c590a86bed22e7f44bbcd27b77674ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8509936a4eb03af4f270139f560ff4c590a86bed22e7f44bbcd27b77674ffa->enter($__internal_5c8509936a4eb03af4f270139f560ff4c590a86bed22e7f44bbcd27b77674ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_5c8509936a4eb03af4f270139f560ff4c590a86bed22e7f44bbcd27b77674ffa->leave($__internal_5c8509936a4eb03af4f270139f560ff4c590a86bed22e7f44bbcd27b77674ffa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
", "@SonataBlock/Block/block_base.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
