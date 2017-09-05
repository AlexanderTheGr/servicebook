<?php

/* PartsboxBundle:Order:index.html.twig */
class __TwigTemplate_01787c93326aefd169327a6ea7231e725b309cf952854d32f80d7b809e23f1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartsboxBundle:Order:index.html.twig", 1);
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
        $__internal_833ba77654baf7fc6cdc1dc8111f6a7be9589feb52edfa14ae33f1814fdef105 = $this->env->getExtension("native_profiler");
        $__internal_833ba77654baf7fc6cdc1dc8111f6a7be9589feb52edfa14ae33f1814fdef105->enter($__internal_833ba77654baf7fc6cdc1dc8111f6a7be9589feb52edfa14ae33f1814fdef105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833ba77654baf7fc6cdc1dc8111f6a7be9589feb52edfa14ae33f1814fdef105->leave($__internal_833ba77654baf7fc6cdc1dc8111f6a7be9589feb52edfa14ae33f1814fdef105_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a81da74d8d0d03ffee0f3c8c569f4cd939fc9c878ef6e1aedfee7de44dcef92 = $this->env->getExtension("native_profiler");
        $__internal_5a81da74d8d0d03ffee0f3c8c569f4cd939fc9c878ef6e1aedfee7de44dcef92->enter($__internal_5a81da74d8d0d03ffee0f3c8c569f4cd939fc9c878ef6e1aedfee7de44dcef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_5a81da74d8d0d03ffee0f3c8c569f4cd939fc9c878ef6e1aedfee7de44dcef92->leave($__internal_5a81da74d8d0d03ffee0f3c8c569f4cd939fc9c878ef6e1aedfee7de44dcef92_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acbd641f7b606f6c666e501e5cd9fecf4d6735b892636cd3f4731438793451de = $this->env->getExtension("native_profiler");
        $__internal_acbd641f7b606f6c666e501e5cd9fecf4d6735b892636cd3f4731438793451de->enter($__internal_acbd641f7b606f6c666e501e5cd9fecf4d6735b892636cd3f4731438793451de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_acbd641f7b606f6c666e501e5cd9fecf4d6735b892636cd3f4731438793451de->leave($__internal_acbd641f7b606f6c666e501e5cd9fecf4d6735b892636cd3f4731438793451de_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7899ace0dd9da64758ea9468a35e776382e8d7c6ed5d086cac59c72ae82cb67d = $this->env->getExtension("native_profiler");
        $__internal_7899ace0dd9da64758ea9468a35e776382e8d7c6ed5d086cac59c72ae82cb67d->enter($__internal_7899ace0dd9da64758ea9468a35e776382e8d7c6ed5d086cac59c72ae82cb67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7899ace0dd9da64758ea9468a35e776382e8d7c6ed5d086cac59c72ae82cb67d->leave($__internal_7899ace0dd9da64758ea9468a35e776382e8d7c6ed5d086cac59c72ae82cb67d_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:index.html.twig";
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
/* {{ render(controller('PartsboxBundle:Order:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
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
