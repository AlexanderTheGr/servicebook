<?php

/* PartsboxBundle:Order:view.html.twig */
class __TwigTemplate_6e7b67d4c99c4bc433f2e5ec91a2f38fed265b39f4e60fd7ee242c6ab5781db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartsboxBundle:Order:view.html.twig", 1);
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
        $__internal_caf708f6d9ab405bf495a350d8ab90cdd3e1c439f722f76783c66ee13ea3ecfb = $this->env->getExtension("native_profiler");
        $__internal_caf708f6d9ab405bf495a350d8ab90cdd3e1c439f722f76783c66ee13ea3ecfb->enter($__internal_caf708f6d9ab405bf495a350d8ab90cdd3e1c439f722f76783c66ee13ea3ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf708f6d9ab405bf495a350d8ab90cdd3e1c439f722f76783c66ee13ea3ecfb->leave($__internal_caf708f6d9ab405bf495a350d8ab90cdd3e1c439f722f76783c66ee13ea3ecfb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c8bfb2bf763181f4f4384dd789c7beb15c18ebf9cefc053bb4d9cb88d76cb1 = $this->env->getExtension("native_profiler");
        $__internal_c0c8bfb2bf763181f4f4384dd789c7beb15c18ebf9cefc053bb4d9cb88d76cb1->enter($__internal_c0c8bfb2bf763181f4f4384dd789c7beb15c18ebf9cefc053bb4d9cb88d76cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "tabs" => (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")))));
        echo "
";
        
        $__internal_c0c8bfb2bf763181f4f4384dd789c7beb15c18ebf9cefc053bb4d9cb88d76cb1->leave($__internal_c0c8bfb2bf763181f4f4384dd789c7beb15c18ebf9cefc053bb4d9cb88d76cb1_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0cce37159b77b029a90c1683f1f9c7c8e52ffb533fd006fcaea4f092e8987d3 = $this->env->getExtension("native_profiler");
        $__internal_d0cce37159b77b029a90c1683f1f9c7c8e52ffb533fd006fcaea4f092e8987d3->enter($__internal_d0cce37159b77b029a90c1683f1f9c7c8e52ffb533fd006fcaea4f092e8987d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0cce37159b77b029a90c1683f1f9c7c8e52ffb533fd006fcaea4f092e8987d3->leave($__internal_d0cce37159b77b029a90c1683f1f9c7c8e52ffb533fd006fcaea4f092e8987d3_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f346933d7e01d092c466794f7ac544d2ebcd14331a391e7472517c28acdccf8b = $this->env->getExtension("native_profiler");
        $__internal_f346933d7e01d092c466794f7ac544d2ebcd14331a391e7472517c28acdccf8b->enter($__internal_f346933d7e01d092c466794f7ac544d2ebcd14331a391e7472517c28acdccf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "
<script>
\$(\".";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexTabs(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\",\"";
        echo twig_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), "html", null, true);
        echo "\");    
</script>
";
        
        $__internal_f346933d7e01d092c466794f7ac544d2ebcd14331a391e7472517c28acdccf8b->leave($__internal_f346933d7e01d092c466794f7ac544d2ebcd14331a391e7472517c28acdccf8b_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  68 => 8,  62 => 7,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Order:tabs', { 'ctrl': ctrl,'app':app,'url':url,'tabs':tabs }) ) }}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/* <script>*/
/* $(".{{ctrl}}").alexTabs("{{app}}", "{{ctrl}}", "{{url}}","{{tabs}}");    */
/* </script>*/
/* {% endblock %}*/
/* */
