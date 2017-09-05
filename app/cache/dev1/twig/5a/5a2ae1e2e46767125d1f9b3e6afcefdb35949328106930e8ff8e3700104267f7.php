<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_64d9d57bc5476b5e1af2d0266bbe10f430c77f25d193d9380eb5dbfb6c820585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5caa375adf1fa22d3085034f04ff7ea09b9dcda8536d328640925f149ff15c5 = $this->env->getExtension("native_profiler");
        $__internal_c5caa375adf1fa22d3085034f04ff7ea09b9dcda8536d328640925f149ff15c5->enter($__internal_c5caa375adf1fa22d3085034f04ff7ea09b9dcda8536d328640925f149ff15c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5caa375adf1fa22d3085034f04ff7ea09b9dcda8536d328640925f149ff15c5->leave($__internal_c5caa375adf1fa22d3085034f04ff7ea09b9dcda8536d328640925f149ff15c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7366995d87192fc387a21951077ecc3bc22d3f33cc4fb8e3662bd38618c5dacb = $this->env->getExtension("native_profiler");
        $__internal_7366995d87192fc387a21951077ecc3bc22d3f33cc4fb8e3662bd38618c5dacb->enter($__internal_7366995d87192fc387a21951077ecc3bc22d3f33cc4fb8e3662bd38618c5dacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7366995d87192fc387a21951077ecc3bc22d3f33cc4fb8e3662bd38618c5dacb->leave($__internal_7366995d87192fc387a21951077ecc3bc22d3f33cc4fb8e3662bd38618c5dacb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cabebd4a2954dca2bdede49626bc0a7f70073035bc2f14d63aec8eba3508f5aa = $this->env->getExtension("native_profiler");
        $__internal_cabebd4a2954dca2bdede49626bc0a7f70073035bc2f14d63aec8eba3508f5aa->enter($__internal_cabebd4a2954dca2bdede49626bc0a7f70073035bc2f14d63aec8eba3508f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cabebd4a2954dca2bdede49626bc0a7f70073035bc2f14d63aec8eba3508f5aa->leave($__internal_cabebd4a2954dca2bdede49626bc0a7f70073035bc2f14d63aec8eba3508f5aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
