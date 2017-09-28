<?php

/* @SonataSeo/Block/block_email_share_button.html.twig */
class __TwigTemplate_eb9a780b7b203f49e14959a87d6f88525bfe46967e6cf2b680b999011446af95 extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_email_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffa15af5609d149dd73ebd0e2727e8109a5bbdc8d43e96c354af3d3ced9b45e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa15af5609d149dd73ebd0e2727e8109a5bbdc8d43e96c354af3d3ced9b45e8->enter($__internal_ffa15af5609d149dd73ebd0e2727e8109a5bbdc8d43e96c354af3d3ced9b45e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_email_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa15af5609d149dd73ebd0e2727e8109a5bbdc8d43e96c354af3d3ced9b45e8->leave($__internal_ffa15af5609d149dd73ebd0e2727e8109a5bbdc8d43e96c354af3d3ced9b45e8_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_2de69b884c28cfdb765122ffc093d9c8c808983958d11b9dfa0c2db9d7f81329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de69b884c28cfdb765122ffc093d9c8c808983958d11b9dfa0c2db9d7f81329->enter($__internal_2de69b884c28cfdb765122ffc093d9c8c808983958d11b9dfa0c2db9d7f81329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"mailto:?subject=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "subject", array()), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "body", array()), "html", null, true);
        echo "\">
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sonata_seo_share_by_email", array(), "SonataSeoBundle");
        // line 18
        echo "        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2de69b884c28cfdb765122ffc093d9c8c808983958d11b9dfa0c2db9d7f81329->leave($__internal_2de69b884c28cfdb765122ffc093d9c8c808983958d11b9dfa0c2db9d7f81329_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_email_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  51 => 17,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
    {% spaceless %}

        <a href=\"mailto:?subject={{ settings.subject }}&body={{ settings.body }}\">
            {% trans from 'SonataSeoBundle' %}sonata_seo_share_by_email{% endtrans %}
        </a>

    {% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/block_email_share_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_email_share_button.html.twig");
    }
}
