<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_fea351e37b3d7e7ade8dbe3b7578b85a58ec7b899f021d83dbc2e2dd5c12ee10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d06b6cddf64ad2ce00c87df8b219d35f05b3affe85a677dde2344f4b0f961ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d06b6cddf64ad2ce00c87df8b219d35f05b3affe85a677dde2344f4b0f961ee->enter($__internal_0d06b6cddf64ad2ce00c87df8b219d35f05b3affe85a677dde2344f4b0f961ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_0d06b6cddf64ad2ce00c87df8b219d35f05b3affe85a677dde2344f4b0f961ee->leave($__internal_0d06b6cddf64ad2ce00c87df8b219d35f05b3affe85a677dde2344f4b0f961ee_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_05092648e9e5dc1d5b9fa8656e21e51ff3a887a6387038d8360a156548c18295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05092648e9e5dc1d5b9fa8656e21e51ff3a887a6387038d8360a156548c18295->enter($__internal_05092648e9e5dc1d5b9fa8656e21e51ff3a887a6387038d8360a156548c18295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"editable\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 16
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 19
            echo "    <div class=\"readonly\">
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 23
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_05092648e9e5dc1d5b9fa8656e21e51ff3a887a6387038d8360a156548c18295->leave($__internal_05092648e9e5dc1d5b9fa8656e21e51ff3a887a6387038d8360a156548c18295_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  66 => 23,  62 => 22,  57 => 20,  54 => 19,  52 => 18,  47 => 16,  43 => 15,  40 => 14,  38 => 13,  26 => 12,  23 => 11,);
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

{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
