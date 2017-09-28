<?php

/* FrontOfficeBundle:Include:slider.html.twig */
class __TwigTemplate_12bd4e601a69dd3c0984bd0590a3714ebb25d5137fe8d7d6661c139ec1436010 extends Twig_Template
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
        $__internal_408f553ce1f5696074f16cb2be47ba6611beea3e3287abdf1c28d50e313d77c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408f553ce1f5696074f16cb2be47ba6611beea3e3287abdf1c28d50e313d77c4->enter($__internal_408f553ce1f5696074f16cb2be47ba6611beea3e3287abdf1c28d50e313d77c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Include:slider.html.twig"));

        // line 1
        echo "<div class=\"fslider\" data-easing=\"easeInQuad\">
\t<div class=\"flexslider\">
\t\t<div class=\"slider-wrap\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "                ";
            if (($this->getAttribute($context["slide"], "type", array()) == "image")) {
                // line 6
                echo "\t\t\t\t\t<!-- Slide Type : Photo + Texte Prinicpal + Légende/Crédits -->
\t\t\t\t\t<div class=\"slide\" data-thumb=\"/apArchi/web/";
                // line 7
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute($context["slide"], "picture", array()), "small");
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 8
                echo "\">
\t\t\t\t\t\t\t<img src=\"/apArchi/web/";
                // line 9
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute($context["slide"], "picture", array()), "reference");
                echo "\" alt=\"Slide 2\">
\t\t\t\t\t\t\t<div class=\"flex-caption slider-caption-bg slider-caption-top-left\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "caption", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
                ";
            } else {
                // line 14
                echo "\t\t\t\t\t<!-- Slide Type : Vidéo -->
\t\t\t\t\t<div class=\"swiper-slide dark\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"slider-caption slider-caption-center\">
\t\t\t\t\t\t\t\t<h2 data-caption-animate=\"fadeInUp\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textOne", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t<p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textTwo", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"legend\">
\t\t\t\t\t\t\t\t<h2>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "caption", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t<p>Crédits : ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "credit", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"video-wrap\">
\t\t\t\t\t\t\t<video id=\"slide-video\" poster=\"/bundles/applicationsonatapage/images/videos/explore.jpg\" preload=\"auto\" loop autoplay muted>
\t\t\t\t\t\t\t\t<source src=";
                // line 28
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute($context["slide"], "movieWebm", array()), "reference");
                echo " type='video/webm' />
\t\t\t\t\t\t\t\t<source src=";
                // line 29
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute($context["slide"], "movieMpfour", array()), "reference");
                echo " type='video/mp4' />
\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t<div class=\"video-overlay\" style=\"background-color: rgba(0,0,0,0.55);\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
            }
            // line 35
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</div>
</div> <!-- end Flex Slider -->";
        
        $__internal_408f553ce1f5696074f16cb2be47ba6611beea3e3287abdf1c28d50e313d77c4->leave($__internal_408f553ce1f5696074f16cb2be47ba6611beea3e3287abdf1c28d50e313d77c4_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Include:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  96 => 35,  87 => 29,  83 => 28,  75 => 23,  71 => 22,  65 => 19,  61 => 18,  55 => 14,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fslider\" data-easing=\"easeInQuad\">
\t<div class=\"flexslider\">
\t\t<div class=\"slider-wrap\">
            {% for slide in slides %}
                {% if slide.type == 'image' %}
\t\t\t\t\t<!-- Slide Type : Photo + Texte Prinicpal + Légende/Crédits -->
\t\t\t\t\t<div class=\"slide\" data-thumb=\"/apArchi/web/{% path slide.picture, 'small' %}\">
\t\t\t\t\t\t<a href=\"{# path('species', {'slug':species.slug}) #}\">
\t\t\t\t\t\t\t<img src=\"/apArchi/web/{% path slide.picture, 'reference' %}\" alt=\"Slide 2\">
\t\t\t\t\t\t\t<div class=\"flex-caption slider-caption-bg slider-caption-top-left\">{{ slide.caption }}</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
                {% else %}
\t\t\t\t\t<!-- Slide Type : Vidéo -->
\t\t\t\t\t<div class=\"swiper-slide dark\">
\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t<div class=\"slider-caption slider-caption-center\">
\t\t\t\t\t\t\t\t<h2 data-caption-animate=\"fadeInUp\">{{ slide.textOne }}</h2>
\t\t\t\t\t\t\t\t<p data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">{{ slide.textTwo }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"legend\">
\t\t\t\t\t\t\t\t<h2>{{ slide.caption }}</h2>
\t\t\t\t\t\t\t\t<p>Crédits : {{ slide.credit }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"video-wrap\">
\t\t\t\t\t\t\t<video id=\"slide-video\" poster=\"/bundles/applicationsonatapage/images/videos/explore.jpg\" preload=\"auto\" loop autoplay muted>
\t\t\t\t\t\t\t\t<source src={% path slide.movieWebm, 'reference' %} type='video/webm' />
\t\t\t\t\t\t\t\t<source src={% path slide.movieMpfour, 'reference' %} type='video/mp4' />
\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t<div class=\"video-overlay\" style=\"background-color: rgba(0,0,0,0.55);\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                {% endif %}
            {% endfor %}
\t\t</div>
\t</div>
</div> <!-- end Flex Slider -->", "FrontOfficeBundle:Include:slider.html.twig", "C:\\wamp\\www\\Aparchi\\src\\FrontOfficeBundle/Resources/views/Include/slider.html.twig");
    }
}
