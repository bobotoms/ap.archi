<?php

/* @SonataUser/Resetting/request.html.twig */
class __TwigTemplate_16e7091b34892cd43dbc4da471b947d0ff2fa25d0562248fa534e4c3ff682419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/request.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22fec8cde6c72c8a99f59a1af52f83a09088ce97de2796cc7fd2ff191537f198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fec8cde6c72c8a99f59a1af52f83a09088ce97de2796cc7fd2ff191537f198->enter($__internal_22fec8cde6c72c8a99f59a1af52f83a09088ce97de2796cc7fd2ff191537f198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22fec8cde6c72c8a99f59a1af52f83a09088ce97de2796cc7fd2ff191537f198->leave($__internal_22fec8cde6c72c8a99f59a1af52f83a09088ce97de2796cc7fd2ff191537f198_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d293e29055484b264132d2d0eb06cd7f0b0fd5127171279a807170ca8db5bc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d293e29055484b264132d2d0eb06cd7f0b0fd5127171279a807170ca8db5bc9b->enter($__internal_d293e29055484b264132d2d0eb06cd7f0b0fd5127171279a807170ca8db5bc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 20
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@SonataUser/Resetting/request.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
    </div>
";
        
        $__internal_d293e29055484b264132d2d0eb06cd7f0b0fd5127171279a807170ca8db5bc9b->leave($__internal_d293e29055484b264132d2d0eb06cd7f0b0fd5127171279a807170ca8db5bc9b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "@SonataUser/Resetting/request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
