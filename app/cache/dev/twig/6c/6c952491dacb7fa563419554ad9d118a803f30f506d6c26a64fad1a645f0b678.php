<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_da244f085bcc8cd475aa796d1a3113fa52dbdbad7cae059ccdcd4aa9441d8f8b extends Twig_Template
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
        $__internal_ecd256b78df573b03e682a9abf95b9047cfb5ff56c1056c169a33c2138ca34d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd256b78df573b03e682a9abf95b9047cfb5ff56c1056c169a33c2138ca34d2->enter($__internal_ecd256b78df573b03e682a9abf95b9047cfb5ff56c1056c169a33c2138ca34d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_ecd256b78df573b03e682a9abf95b9047cfb5ff56c1056c169a33c2138ca34d2->leave($__internal_ecd256b78df573b03e682a9abf95b9047cfb5ff56c1056c169a33c2138ca34d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 15,  29 => 13,  25 => 12,  22 => 11,);
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

<form action=\"{{ path('sonata_user_profile_edit') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
    </div>
</form>
", "SonataUserBundle:Profile:edit_profile_content.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Profile/edit_profile_content.html.twig");
    }
}
