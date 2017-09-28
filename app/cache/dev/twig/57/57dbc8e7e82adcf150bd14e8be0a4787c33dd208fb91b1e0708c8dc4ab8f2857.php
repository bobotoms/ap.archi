<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_56b7d060bf40ac7e1c596bbdca37990f0f2120701d6d8809dfbd5e36637d9bc6 extends Twig_Template
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
        $__internal_904dd23b5e331ca3501daae5abce420251a1c0928174bfdc78b179d8f4baef51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904dd23b5e331ca3501daae5abce420251a1c0928174bfdc78b179d8f4baef51->enter($__internal_904dd23b5e331ca3501daae5abce420251a1c0928174bfdc78b179d8f4baef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_904dd23b5e331ca3501daae5abce420251a1c0928174bfdc78b179d8f4baef51->leave($__internal_904dd23b5e331ca3501daae5abce420251a1c0928174bfdc78b179d8f4baef51_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_6b9a7e515a94731ce73a08ef8f0beea822be6b174c6784d7a8233c95f971a1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9a7e515a94731ce73a08ef8f0beea822be6b174c6784d7a8233c95f971a1c5->enter($__internal_6b9a7e515a94731ce73a08ef8f0beea822be6b174c6784d7a8233c95f971a1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_6b9a7e515a94731ce73a08ef8f0beea822be6b174c6784d7a8233c95f971a1c5->leave($__internal_6b9a7e515a94731ce73a08ef8f0beea822be6b174c6784d7a8233c95f971a1c5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
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
", "@SonataAdmin/Core/user_block.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
