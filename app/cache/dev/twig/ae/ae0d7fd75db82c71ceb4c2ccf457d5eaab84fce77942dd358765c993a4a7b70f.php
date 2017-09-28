<?php

/* BackOfficeBundle:Block:map.html.twig */
class __TwigTemplate_91273e16fc8f2df03faf94f1c333d025c3f90af22cc1300de18c8252f13633a9 extends Twig_Template
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
        $__internal_041b54acab390079032be610f04efad36a8351981056ac596daea5439f2b5929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041b54acab390079032be610f04efad36a8351981056ac596daea5439f2b5929->enter($__internal_041b54acab390079032be610f04efad36a8351981056ac596daea5439f2b5929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Block:map.html.twig"));

        // line 1
        echo "Yo c'est la carte !";
        
        $__internal_041b54acab390079032be610f04efad36a8351981056ac596daea5439f2b5929->leave($__internal_041b54acab390079032be610f04efad36a8351981056ac596daea5439f2b5929_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Block:map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Yo c'est la carte !", "BackOfficeBundle:Block:map.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/Block/map.html.twig");
    }
}
