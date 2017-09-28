<?php

/* SonataSeoBundle:Block:block_email_share_button.html.twig */
class __TwigTemplate_b768c84c1b757d359db80d67aafd1c86b374b53757cfd4a1949fd3675125abfa extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_email_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4d4b87dbae6c7a6eca8fa6b4033de2a7382bd6b8eb1e2719164761360e87de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4d4b87dbae6c7a6eca8fa6b4033de2a7382bd6b8eb1e2719164761360e87de->enter($__internal_9a4d4b87dbae6c7a6eca8fa6b4033de2a7382bd6b8eb1e2719164761360e87de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_email_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4d4b87dbae6c7a6eca8fa6b4033de2a7382bd6b8eb1e2719164761360e87de->leave($__internal_9a4d4b87dbae6c7a6eca8fa6b4033de2a7382bd6b8eb1e2719164761360e87de_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_89017a9e690a68fc2c0075da5617d654eb0a258ac2d1d2a1246b57be81774f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89017a9e690a68fc2c0075da5617d654eb0a258ac2d1d2a1246b57be81774f2c->enter($__internal_89017a9e690a68fc2c0075da5617d654eb0a258ac2d1d2a1246b57be81774f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_89017a9e690a68fc2c0075da5617d654eb0a258ac2d1d2a1246b57be81774f2c->leave($__internal_89017a9e690a68fc2c0075da5617d654eb0a258ac2d1d2a1246b57be81774f2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_email_share_button.html.twig";
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
", "SonataSeoBundle:Block:block_email_share_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_email_share_button.html.twig");
    }
}
