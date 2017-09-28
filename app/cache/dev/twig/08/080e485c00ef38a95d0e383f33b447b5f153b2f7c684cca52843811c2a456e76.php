<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3924429f71ecb84e9e561eba1c5f6402554271dab1551f1ac59cd96397f0cf1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_695ee957a1ceb31a77a047082abfee8fb0596ccd35ae8ed916ad70580c7660aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695ee957a1ceb31a77a047082abfee8fb0596ccd35ae8ed916ad70580c7660aa->enter($__internal_695ee957a1ceb31a77a047082abfee8fb0596ccd35ae8ed916ad70580c7660aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_695ee957a1ceb31a77a047082abfee8fb0596ccd35ae8ed916ad70580c7660aa->leave($__internal_695ee957a1ceb31a77a047082abfee8fb0596ccd35ae8ed916ad70580c7660aa_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_3a8affba5185a485ac52f1515123c046f9c27e85ea58f0198d06be5f4847f9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8affba5185a485ac52f1515123c046f9c27e85ea58f0198d06be5f4847f9f6->enter($__internal_3a8affba5185a485ac52f1515123c046f9c27e85ea58f0198d06be5f4847f9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_3a8affba5185a485ac52f1515123c046f9c27e85ea58f0198d06be5f4847f9f6->leave($__internal_3a8affba5185a485ac52f1515123c046f9c27e85ea58f0198d06be5f4847f9f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
