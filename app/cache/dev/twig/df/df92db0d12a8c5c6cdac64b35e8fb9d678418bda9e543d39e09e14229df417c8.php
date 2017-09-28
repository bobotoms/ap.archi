<?php

/* SonataPageBundle:PageAdmin:list_tab_menu.html.twig */
class __TwigTemplate_1a7a4b515de5ddd80f0285c984359299488e493764e39d28a2ba95c2caae2938 extends Twig_Template
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
        $__internal_42d896aaad107b49f001dda0da8bf927b21311f19accea1871efe61181da863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d896aaad107b49f001dda0da8bf927b21311f19accea1871efe61181da863b->enter($__internal_42d896aaad107b49f001dda0da8bf927b21311f19accea1871efe61181da863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:PageAdmin:list_tab_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        echo "
<p>
    <div class=\"btn-group\">
        <a type=\"button\" class=\"btn ";
        // line 4
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "list")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => array("site" => array("value" => (($this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : null), "id", array()), "")) : ("")))))), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-list\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.list_mode", array(), "SonataPageBundle"), "html", null, true);
        echo "
        </a>
        <a type=\"button\" class=\"btn ";
        // line 7
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "tree")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree"), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-sitemap\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.tree_mode", array(), "SonataPageBundle"), "html", null, true);
        echo "
        </a>
    </div>
</p>";
        
        $__internal_42d896aaad107b49f001dda0da8bf927b21311f19accea1871efe61181da863b->leave($__internal_42d896aaad107b49f001dda0da8bf927b21311f19accea1871efe61181da863b_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:list_tab_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  43 => 7,  38 => 5,  28 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}
<p>
    <div class=\"btn-group\">
        <a type=\"button\" class=\"btn {% if mode == 'list' %}btn-info active{% else %}btn-default{% endif %}\" href=\"{{ admin.generateUrl('list', { 'filter': { 'site': { 'value': currentSite.id|default('') }}}) }}\">
            <i class=\"fa fa-list\"></i> {{ 'pages.list_mode'|trans({}, 'SonataPageBundle') }}
        </a>
        <a type=\"button\" class=\"btn {% if mode == 'tree' %}btn-info active{% else %}btn-default{% endif %}\" href=\"{{ admin.generateUrl('tree') }}\">
            <i class=\"fa fa-sitemap\"></i> {{ 'pages.tree_mode'|trans({}, 'SonataPageBundle') }}
        </a>
    </div>
</p>", "SonataPageBundle:PageAdmin:list_tab_menu.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/PageAdmin/list_tab_menu.html.twig");
    }
}
