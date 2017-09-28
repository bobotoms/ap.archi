<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4bc58b8befff9d8ad1c6b41367d4e54578fb91725096e6d578a967d4c699015d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b77ee60eca3bb82e84db7d8068fb9d690c79f8d5554b9d55592c8413e3c3993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b77ee60eca3bb82e84db7d8068fb9d690c79f8d5554b9d55592c8413e3c3993->enter($__internal_7b77ee60eca3bb82e84db7d8068fb9d690c79f8d5554b9d55592c8413e3c3993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b77ee60eca3bb82e84db7d8068fb9d690c79f8d5554b9d55592c8413e3c3993->leave($__internal_7b77ee60eca3bb82e84db7d8068fb9d690c79f8d5554b9d55592c8413e3c3993_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39d7c592d33997bab2f34c033c605b7d8f4d4de8412cfe65166c7c9ad64a7630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d7c592d33997bab2f34c033c605b7d8f4d4de8412cfe65166c7c9ad64a7630->enter($__internal_39d7c592d33997bab2f34c033c605b7d8f4d4de8412cfe65166c7c9ad64a7630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_39d7c592d33997bab2f34c033c605b7d8f4d4de8412cfe65166c7c9ad64a7630->leave($__internal_39d7c592d33997bab2f34c033c605b7d8f4d4de8412cfe65166c7c9ad64a7630_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
