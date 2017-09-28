<?php

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_131dc24a9324a1c5fa12e94f6ebb0271f7ccc05a67b3d2b8c69078be0913dc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:GalleryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a04d7259eccb35b766fece51f36662aafaa1784f3410b0ff6371628bc35bb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a04d7259eccb35b766fece51f36662aafaa1784f3410b0ff6371628bc35bb27->enter($__internal_4a04d7259eccb35b766fece51f36662aafaa1784f3410b0ff6371628bc35bb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:GalleryAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a04d7259eccb35b766fece51f36662aafaa1784f3410b0ff6371628bc35bb27->leave($__internal_4a04d7259eccb35b766fece51f36662aafaa1784f3410b0ff6371628bc35bb27_prof);

    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        $__internal_3b95a79929d7e680c36d09cd895cb360c8b32790464b26a0855d0b68fa3956ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b95a79929d7e680c36d09cd895cb360c8b32790464b26a0855d0b68fa3956ac->enter($__internal_3b95a79929d7e680c36d09cd895cb360c8b32790464b26a0855d0b68fa3956ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 15
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 25
            echo "                            <li>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 27
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 28
                echo "                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    ";
            }
            // line 32
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </h1>
        </div>
    </div>
";
        
        $__internal_3b95a79929d7e680c36d09cd895cb360c8b32790464b26a0855d0b68fa3956ac->leave($__internal_3b95a79929d7e680c36d09cd895cb360c8b32790464b26a0855d0b68fa3956ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  76 => 32,  70 => 28,  68 => 27,  64 => 26,  61 => 25,  57 => 24,  51 => 21,  45 => 18,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}

{% block preview %}
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                {{ \"label.select_context\"|trans({}, 'SonataMediaBundle') }}
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">{{ persistent_parameters.context }}</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        {% for name, context in media_pool.contexts %}
                            <li>
                                <a href=\"{{ admin.generateUrl('list', {'context' : name }) }}\">
                                    {% if name == persistent_parameters.context %}
                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    {% endif %}
                                    {{ name|trans({}, 'SonataMediaBundle') }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </h1>
        </div>
    </div>
{% endblock %}
", "SonataMediaBundle:GalleryAdmin:list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle/Resources/views/GalleryAdmin/list.html.twig");
    }
}
