<?php

/* @SonataUser/layout.html.twig */
class __TwigTemplate_47274c8bd6d57e998493551ef9ee09459c125b4d86718ab8f5653240e89a7700 extends Twig_Template
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
        $__internal_b79cabacbf49d4e96dcfbed8d4b3fe84c9e8659e8c63bdd1ab16fd84baea98f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79cabacbf49d4e96dcfbed8d4b3fe84c9e8659e8c63bdd1ab16fd84baea98f3->enter($__internal_b79cabacbf49d4e96dcfbed8d4b3fe84c9e8659e8c63bdd1ab16fd84baea98f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/layout.html.twig"));

        // line 11
        echo "
<div>
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_b79cabacbf49d4e96dcfbed8d4b3fe84c9e8659e8c63bdd1ab16fd84baea98f3->leave($__internal_b79cabacbf49d4e96dcfbed8d4b3fe84c9e8659e8c63bdd1ab16fd84baea98f3_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67ec73b093c9a23256489c4670c2d38ceacb4a089a39e110099b003674335a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ec73b093c9a23256489c4670c2d38ceacb4a089a39e110099b003674335a54->enter($__internal_67ec73b093c9a23256489c4670c2d38ceacb4a089a39e110099b003674335a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_67ec73b093c9a23256489c4670c2d38ceacb4a089a39e110099b003674335a54->leave($__internal_67ec73b093c9a23256489c4670c2d38ceacb4a089a39e110099b003674335a54_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/layout.html.twig";
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
", "@SonataUser/layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
