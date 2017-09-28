<?php

/* @SonataMedia/Gallery/index.html.twig */
class __TwigTemplate_dec87eaf180fb6adaa67b637f47b7536a931182391c48f6db7c65e72cde5a46d extends Twig_Template
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
        $__internal_b706ecde6aebb7fa559b6d58b978b08d3a0ffbf96ffdea32f2e6cfabc144d016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b706ecde6aebb7fa559b6d58b978b08d3a0ffbf96ffdea32f2e6cfabc144d016->enter($__internal_b706ecde6aebb7fa559b6d58b978b08d3a0ffbf96ffdea32f2e6cfabc144d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Gallery/index.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery index template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<ul>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_gallery_view", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier($context["gallery"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
        
        $__internal_b706ecde6aebb7fa559b6d58b978b08d3a0ffbf96ffdea32f2e6cfabc144d016->leave($__internal_b706ecde6aebb7fa559b6d58b978b08d3a0ffbf96ffdea32f2e6cfabc144d016_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Gallery/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  37 => 16,  33 => 15,  29 => 13,  25 => 12,  22 => 11,);
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

{% sonata_template_box 'This is the gallery index template. Feel free to override it.' %}

<ul>
    {% for gallery in galleries %}
        <li><a href=\"{{ url('sonata_media_gallery_view', {'id' : gallery|sonata_urlsafeid }) }}\">{{ gallery.name }}</a></li>
    {% endfor %}
</ul>
", "@SonataMedia/Gallery/index.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Gallery\\index.html.twig");
    }
}
