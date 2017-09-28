<?php

/* SonataPageBundle:BlockAdmin:compose_preview.html.twig */
class __TwigTemplate_21f069ca715942de58150b9ec4e73f169710d9dd8f2deff13f15831de2668ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b854c5581ddb11bde33a66342742c92906265dd530921aaa8926a6c9af6321df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b854c5581ddb11bde33a66342742c92906265dd530921aaa8926a6c9af6321df->enter($__internal_b854c5581ddb11bde33a66342742c92906265dd530921aaa8926a6c9af6321df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:BlockAdmin:compose_preview.html.twig"));

        // line 1
        echo "<li class=\"page-composer__container__child\"
    data-block-id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "\"
    data-parent-block-id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
        echo "\"
    data-block-enabled=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "enabled", array()), "0")) : ("0")), "html", null, true);
        echo "\"
    data-block-type=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "type", array()), "html", null, true);
        echo "\"
>
    <a class=\"page-composer__container__child__edit\"
       href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getAdminByAdminCode", array(0 => "sonata.page.admin.block"), "method"), "generateUrl", array(0 => "edit", 1 => array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "composer" => true)), "method"), "html", null, true);
        echo "\"
    >
        ";
        // line 10
        $context["service"] = $this->getAttribute((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "type", array()));
        // line 11
        echo "        <h4 class=\"page-composer__container__child__name\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "name", array()), $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "name", array()))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "name", array()))), "html", null, true);
        echo "</h4>
        <div>[#";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "]</div>
        ";
        // line 13
        if ( !$this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "blockMetadata", array()), "image", array())) {
            // line 14
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "blockMetadata", array()), "option", array(0 => "class"), "method"), "html", null, true);
            echo "\" ></i>
        ";
        } else {
            // line 16
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "blockMetadata", array()), "image", array())), "html", null, true);
            echo "\" style=\"max-height: 20px; max-width: 100px;\"/>
        ";
        }
        // line 18
        echo "        <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "blockMetadata", array()), "title", array()), array(), (($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "blockMetadata", array(), "any", false, true), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "blockMetadata", array(), "any", false, true), "domain", array()), "SonataPageBundle")) : ("SonataPageBundle"))), "html", null, true);
        echo "</small>
        <span class=\"page-composer__container__child__toggle\">
            <i class=\"fa fa-chevron-down\"></i>
            <i class=\"fa fa-chevron-up\"></i>
        </span>
    </a>

    <div class=\"page-composer__container__child__right\">
        <div class=\"page-composer__container__child__remove\">
            <a class=\"badge\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getAdminByAdminCode", array(0 => "sonata.page.admin.block"), "method"), "generateUrl", array(0 => "delete", 1 => array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.remove", array(), "SonataPageBundle"), "html", null, true);
        echo " <i class=\"fa fa-times\"></i> </a>
        </div>

        <div class=\"page-composer__container__child__switch-enabled\"
             data-label-enable=\"";
        // line 31
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.enable", array(), "SonataPageBundle") . " <i class=\"fa fa-toggle-on\"></i>"));
        echo "\"
             data-label-disable=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.disable", array(), "SonataPageBundle") . " <i class=\"fa fa-toggle-off\"></i>"));
        echo "\">
            <a class=\"badge bg-";
        // line 33
        echo (($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "enabled", array())) ? ("yellow") : ("green"));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", array("objectId" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "context" => "list", "field" => "enabled", "code" => "sonata.page.admin.block")), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "enabled", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.disable", array(), "SonataPageBundle"), "html", null, true);
            echo " <i class=\"fa fa-toggle-off\"></i>";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.enable", array(), "SonataPageBundle"), "html", null, true);
            echo " <i class=\"fa fa-toggle-on\"></i>";
        }
        echo "</a>
        </div>

        <div class=\"page-composer__container__child__enabled\">
            <small class=\"badge bg-";
        // line 37
        echo (($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "enabled", array())) ? ("green") : ("yellow"));
        echo "\"><i class=\"fa fa-";
        echo (($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "enabled", array())) ? ("check") : ("times"));
        echo "\"></i></small>
        </div>
    </div>

    <div class=\"page-composer__container__child__content\">
    </div>

    <div class=\"page-composer__container__child__loader\">
        <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading", array(), "SonataPageBundle"), "html", null, true);
        echo "</span>
    </div>
</li>
";
        
        $__internal_b854c5581ddb11bde33a66342742c92906265dd530921aaa8926a6c9af6321df->leave($__internal_b854c5581ddb11bde33a66342742c92906265dd530921aaa8926a6c9af6321df_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:BlockAdmin:compose_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  120 => 37,  103 => 33,  99 => 32,  95 => 31,  86 => 27,  73 => 18,  67 => 16,  61 => 14,  59 => 13,  55 => 12,  50 => 11,  48 => 10,  43 => 8,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"page-composer__container__child\"
    data-block-id=\"{{ child.id }}\"
    data-parent-block-id=\"{{ container.id }}\"
    data-block-enabled=\"{{ child.enabled|default('0') }}\"
    data-block-type=\"{{ child.type }}\"
>
    <a class=\"page-composer__container__child__edit\"
       href=\"{{ admin_pool.getAdminByAdminCode('sonata.page.admin.block').generateUrl('edit', { 'id': child.id, 'composer': true }) }}\"
    >
        {% set service = attribute(blockServices, child.type) %}
        <h4 class=\"page-composer__container__child__name\">{{ child.name|default(service.name) }}</h4>
        <div>[#{{child.id}}]</div>
        {% if not service.blockMetadata.image %}
            <i class=\"{{ service.blockMetadata.option('class') }}\" ></i>
        {% else %}
            <img src=\"{{ asset(service.blockMetadata.image) }}\" style=\"max-height: 20px; max-width: 100px;\"/>
        {% endif %}
        <small>{{ service.blockMetadata.title|trans({}, service.blockMetadata.domain|default('SonataPageBundle')) }}</small>
        <span class=\"page-composer__container__child__toggle\">
            <i class=\"fa fa-chevron-down\"></i>
            <i class=\"fa fa-chevron-up\"></i>
        </span>
    </a>

    <div class=\"page-composer__container__child__right\">
        <div class=\"page-composer__container__child__remove\">
            <a class=\"badge\" href=\"{{ admin_pool.getAdminByAdminCode('sonata.page.admin.block').generateUrl('delete', { 'id': child.id }) }}\">{{ 'composer.remove'|trans({}, 'SonataPageBundle') }} <i class=\"fa fa-times\"></i> </a>
        </div>

        <div class=\"page-composer__container__child__switch-enabled\"
             data-label-enable=\"{{ ('composer.enable'|trans({}, 'SonataPageBundle') ~ ' <i class=\"fa fa-toggle-on\"></i>')|e }}\"
             data-label-disable=\"{{ ('composer.disable'|trans({}, 'SonataPageBundle') ~ ' <i class=\"fa fa-toggle-off\"></i>')|e }}\">
            <a class=\"badge bg-{{ child.enabled ? 'yellow' : 'green' }}\" href=\"{{ path('sonata_admin_set_object_field_value', {'objectId': child.id, 'context': 'list', 'field': 'enabled', 'code': 'sonata.page.admin.block'}) }}\">{% if child.enabled %}{{ 'composer.disable'|trans({}, 'SonataPageBundle') }} <i class=\"fa fa-toggle-off\"></i>{% else %}{{ 'composer.enable'|trans({}, 'SonataPageBundle') }} <i class=\"fa fa-toggle-on\"></i>{% endif %}</a>
        </div>

        <div class=\"page-composer__container__child__enabled\">
            <small class=\"badge bg-{{ child.enabled ? 'green' : 'yellow' }}\"><i class=\"fa fa-{{ child.enabled ? 'check' : 'times' }}\"></i></small>
        </div>
    </div>

    <div class=\"page-composer__container__child__content\">
    </div>

    <div class=\"page-composer__container__child__loader\">
        <span>{{ 'loading'|trans({}, 'SonataPageBundle') }}</span>
    </div>
</li>
", "SonataPageBundle:BlockAdmin:compose_preview.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle/Resources/views/BlockAdmin/compose_preview.html.twig");
    }
}
