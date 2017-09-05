<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_4ee4a4434732d2d498ea7a7dac8b2e2cf1e8836ca989462e28429fad3083a8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a8a64fe3cc74fdfd1d366f3e75094bd78a235ba4e251296d4c2dcf6fdb4a8e8 = $this->env->getExtension("native_profiler");
        $__internal_0a8a64fe3cc74fdfd1d366f3e75094bd78a235ba4e251296d4c2dcf6fdb4a8e8->enter($__internal_0a8a64fe3cc74fdfd1d366f3e75094bd78a235ba4e251296d4c2dcf6fdb4a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a8a64fe3cc74fdfd1d366f3e75094bd78a235ba4e251296d4c2dcf6fdb4a8e8->leave($__internal_0a8a64fe3cc74fdfd1d366f3e75094bd78a235ba4e251296d4c2dcf6fdb4a8e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06d073673d3136d9695c093d2ae9ba57edaa62120892a1c3b709e569e13f6db7 = $this->env->getExtension("native_profiler");
        $__internal_06d073673d3136d9695c093d2ae9ba57edaa62120892a1c3b709e569e13f6db7->enter($__internal_06d073673d3136d9695c093d2ae9ba57edaa62120892a1c3b709e569e13f6db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_06d073673d3136d9695c093d2ae9ba57edaa62120892a1c3b709e569e13f6db7->leave($__internal_06d073673d3136d9695c093d2ae9ba57edaa62120892a1c3b709e569e13f6db7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88999015833833652e636d4864565a95cf038ae6598f4df3a170594868e35257 = $this->env->getExtension("native_profiler");
        $__internal_88999015833833652e636d4864565a95cf038ae6598f4df3a170594868e35257->enter($__internal_88999015833833652e636d4864565a95cf038ae6598f4df3a170594868e35257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_88999015833833652e636d4864565a95cf038ae6598f4df3a170594868e35257->leave($__internal_88999015833833652e636d4864565a95cf038ae6598f4df3a170594868e35257_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdb8cfbef2199b3988fc42fcd997e76bcaef5767581cf1078b50d28531d1d984 = $this->env->getExtension("native_profiler");
        $__internal_bdb8cfbef2199b3988fc42fcd997e76bcaef5767581cf1078b50d28531d1d984->enter($__internal_bdb8cfbef2199b3988fc42fcd997e76bcaef5767581cf1078b50d28531d1d984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_bdb8cfbef2199b3988fc42fcd997e76bcaef5767581cf1078b50d28531d1d984->leave($__internal_bdb8cfbef2199b3988fc42fcd997e76bcaef5767581cf1078b50d28531d1d984_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_df789d758424eb3312a2ef0988ca854c973284c016086c99c1b628f5ec79a345 = $this->env->getExtension("native_profiler");
        $__internal_df789d758424eb3312a2ef0988ca854c973284c016086c99c1b628f5ec79a345->enter($__internal_df789d758424eb3312a2ef0988ca854c973284c016086c99c1b628f5ec79a345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_df789d758424eb3312a2ef0988ca854c973284c016086c99c1b628f5ec79a345->leave($__internal_df789d758424eb3312a2ef0988ca854c973284c016086c99c1b628f5ec79a345_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
