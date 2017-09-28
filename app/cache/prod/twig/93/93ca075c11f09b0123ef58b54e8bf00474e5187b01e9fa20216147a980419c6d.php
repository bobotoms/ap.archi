<?php

/* SonataPageBundle:Page:create.html.twig */
class __TwigTemplate_0b069dbca3fdd6089a962f407acb0249055a7545f584aa17809d30ba06d2a46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::layout.html.twig", "SonataPageBundle:Page:create.html.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_not_found", array(), "SonataPageBundle"), "html", null, true);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_not_found", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : null)), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        ";
        // line 19
        if ((isset($context["creatable"]) ? $context["creatable"] : null)) {
            // line 20
            echo "            <p>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "url", array(0 => "sonata.page.admin.page", 1 => "create", 2 => array("url" => (isset($context["pathInfo"]) ? $context["pathInfo"] : null), "siteId" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "id", array()))), "method"), "html", null, true);
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_page", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : null)), "SonataPageBundle"), "html", null, true);
            echo "
                </a>
            </p>
        ";
        } else {
            // line 26
            echo "            <p>
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_page_does_not_exist", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : null)), "SonataPageBundle"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 30
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  65 => 27,  62 => 26,  55 => 22,  51 => 21,  48 => 20,  46 => 19,  41 => 17,  38 => 16,  35 => 15,  29 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataPageBundle:Page:create.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Page/create.html.twig");
    }
}
