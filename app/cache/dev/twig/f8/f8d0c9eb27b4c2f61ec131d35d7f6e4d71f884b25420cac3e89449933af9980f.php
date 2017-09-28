<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_76d34740a81c10f544deaebe39c59ebd0ee290e33997871a316b9c34b43d4b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8f8cc65d7f20fe8f4fa3befe284560cbfff80189e69a82ad769fc656e834cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f8cc65d7f20fe8f4fa3befe284560cbfff80189e69a82ad769fc656e834cbf->enter($__internal_f8f8cc65d7f20fe8f4fa3befe284560cbfff80189e69a82ad769fc656e834cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 11
        echo "
<div>
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_f8f8cc65d7f20fe8f4fa3befe284560cbfff80189e69a82ad769fc656e834cbf->leave($__internal_f8f8cc65d7f20fe8f4fa3befe284560cbfff80189e69a82ad769fc656e834cbf_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91d61e1bea414b28f59b1b65f3ec2958833fd73487162fc30b73cd7e41f26a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d61e1bea414b28f59b1b65f3ec2958833fd73487162fc30b73cd7e41f26a3e->enter($__internal_91d61e1bea414b28f59b1b65f3ec2958833fd73487162fc30b73cd7e41f26a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_91d61e1bea414b28f59b1b65f3ec2958833fd73487162fc30b73cd7e41f26a3e->leave($__internal_91d61e1bea414b28f59b1b65f3ec2958833fd73487162fc30b73cd7e41f26a3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  37 => 13,  29 => 15,  27 => 13,  23 => 11,);
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

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
", "SonataUserBundle::layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/layout.html.twig");
    }
}
