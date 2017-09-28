<?php

/* @SonataCore/Form/color.html.twig */
class __TwigTemplate_1744153076b775decdb70da404b356b2f9378de4a6a0a211c6e3867d8c49f220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6efcb7c432c3380bc46f85d76a0422fd9e35d072af3b0a241b7e64c3ca604f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6efcb7c432c3380bc46f85d76a0422fd9e35d072af3b0a241b7e64c3ca604f->enter($__internal_ea6efcb7c432c3380bc46f85d76a0422fd9e35d072af3b0a241b7e64c3ca604f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_ea6efcb7c432c3380bc46f85d76a0422fd9e35d072af3b0a241b7e64c3ca604f->leave($__internal_ea6efcb7c432c3380bc46f85d76a0422fd9e35d072af3b0a241b7e64c3ca604f_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_5d3924fb75962ebee0927eb6b13e273a8f31e9402a78315428537914914119a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3924fb75962ebee0927eb6b13e273a8f31e9402a78315428537914914119a9->enter($__internal_5d3924fb75962ebee0927eb6b13e273a8f31e9402a78315428537914914119a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5d3924fb75962ebee0927eb6b13e273a8f31e9402a78315428537914914119a9->leave($__internal_5d3924fb75962ebee0927eb6b13e273a8f31e9402a78315428537914914119a9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  23 => 11,);
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
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "@SonataCore/Form/color.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\core-bundle\\Resources\\views\\Form\\color.html.twig");
    }
}
