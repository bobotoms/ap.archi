<?php

/* @SonataMedia/Extra/pixlr_exit.html.twig */
class __TwigTemplate_7fa447ec861ca47bd4caa80a859642426298fbd0d5c07516b87cda2331d1b598 extends Twig_Template
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
        $__internal_cddfd723d169606fa3bf5dedd12a1069061a73c2e1592328abe1382249ab1804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddfd723d169606fa3bf5dedd12a1069061a73c2e1592328abe1382249ab1804->enter($__internal_cddfd723d169606fa3bf5dedd12a1069061a73c2e1592328abe1382249ab1804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Extra/pixlr_exit.html.twig"));

        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
        
        $__internal_cddfd723d169606fa3bf5dedd12a1069061a73c2e1592328abe1382249ab1804->leave($__internal_cddfd723d169606fa3bf5dedd12a1069061a73c2e1592328abe1382249ab1804_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Extra/pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 11,);
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
<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
", "@SonataMedia/Extra/pixlr_exit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Extra\\pixlr_exit.html.twig");
    }
}
