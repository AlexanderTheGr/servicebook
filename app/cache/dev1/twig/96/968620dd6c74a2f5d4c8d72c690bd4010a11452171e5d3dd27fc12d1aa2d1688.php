<?php

/* supplier/index.html.twig */
class __TwigTemplate_fc396bc5d95c04b43b425fca3404b11aa9b6cb959500d38ac34bcbe8295213ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "supplier/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e929593d3c81765d5c4a105bb92cdaf5400c82efe2d7ad56173376d652f3e48 = $this->env->getExtension("native_profiler");
        $__internal_7e929593d3c81765d5c4a105bb92cdaf5400c82efe2d7ad56173376d652f3e48->enter($__internal_7e929593d3c81765d5c4a105bb92cdaf5400c82efe2d7ad56173376d652f3e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "supplier/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e929593d3c81765d5c4a105bb92cdaf5400c82efe2d7ad56173376d652f3e48->leave($__internal_7e929593d3c81765d5c4a105bb92cdaf5400c82efe2d7ad56173376d652f3e48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2750ff84fc9df510692e84523ce0009394a98f887731aee0153339c8a40a5a = $this->env->getExtension("native_profiler");
        $__internal_7e2750ff84fc9df510692e84523ce0009394a98f887731aee0153339c8a40a5a->enter($__internal_7e2750ff84fc9df510692e84523ce0009394a98f887731aee0153339c8a40a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoftoneBundle:Supplier:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_7e2750ff84fc9df510692e84523ce0009394a98f887731aee0153339c8a40a5a->leave($__internal_7e2750ff84fc9df510692e84523ce0009394a98f887731aee0153339c8a40a5a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72946ecc942d40526e416786cc1aedb560462fea41873f45250a6b61469d5b77 = $this->env->getExtension("native_profiler");
        $__internal_72946ecc942d40526e416786cc1aedb560462fea41873f45250a6b61469d5b77->enter($__internal_72946ecc942d40526e416786cc1aedb560462fea41873f45250a6b61469d5b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_72946ecc942d40526e416786cc1aedb560462fea41873f45250a6b61469d5b77->leave($__internal_72946ecc942d40526e416786cc1aedb560462fea41873f45250a6b61469d5b77_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8526a5d4435f48f97b5426ca5c5001419e2ffff79efc815ab0df91aa5ea4882 = $this->env->getExtension("native_profiler");
        $__internal_a8526a5d4435f48f97b5426ca5c5001419e2ffff79efc815ab0df91aa5ea4882->enter($__internal_a8526a5d4435f48f97b5426ca5c5001419e2ffff79efc815ab0df91aa5ea4882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexDataTable(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_a8526a5d4435f48f97b5426ca5c5001419e2ffff79efc815ab0df91aa5ea4882->leave($__internal_a8526a5d4435f48f97b5426ca5c5001419e2ffff79efc815ab0df91aa5ea4882_prof);

    }

    public function getTemplateName()
    {
        return "supplier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 11,  57 => 8,  51 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ render(controller('SoftoneBundle:Supplier:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>$(".{{ctrl}}").alexDataTable("{{app}}", "{{ctrl}}", "{{url}}", "{{view}}");</script>*/
/* {% endblock %}*/
/* */
