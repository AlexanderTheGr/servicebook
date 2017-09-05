<?php

/* product/view.html.twig */
class __TwigTemplate_fd15f1dac8b97b1d28d2d2a97d0f3ead1e3e627be2c11ee19529bfced870e4e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/view.html.twig", 1);
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
        $__internal_9ce9b906055ad733b6be195b07517a63cb85f9a10a95ae9ebe007d0903d9f2d1 = $this->env->getExtension("native_profiler");
        $__internal_9ce9b906055ad733b6be195b07517a63cb85f9a10a95ae9ebe007d0903d9f2d1->enter($__internal_9ce9b906055ad733b6be195b07517a63cb85f9a10a95ae9ebe007d0903d9f2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce9b906055ad733b6be195b07517a63cb85f9a10a95ae9ebe007d0903d9f2d1->leave($__internal_9ce9b906055ad733b6be195b07517a63cb85f9a10a95ae9ebe007d0903d9f2d1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_98af738845703b57ccaa17c2d8ba75ed66a6daffbfda334c8df5fb5dfdbb157f = $this->env->getExtension("native_profiler");
        $__internal_98af738845703b57ccaa17c2d8ba75ed66a6daffbfda334c8df5fb5dfdbb157f->enter($__internal_98af738845703b57ccaa17c2d8ba75ed66a6daffbfda334c8df5fb5dfdbb157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Product:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_98af738845703b57ccaa17c2d8ba75ed66a6daffbfda334c8df5fb5dfdbb157f->leave($__internal_98af738845703b57ccaa17c2d8ba75ed66a6daffbfda334c8df5fb5dfdbb157f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_958d9f2da58ee4d6e43bb97ee8bb7fb9b8b8f3ae45b8bf961bf651e297970c6f = $this->env->getExtension("native_profiler");
        $__internal_958d9f2da58ee4d6e43bb97ee8bb7fb9b8b8f3ae45b8bf961bf651e297970c6f->enter($__internal_958d9f2da58ee4d6e43bb97ee8bb7fb9b8b8f3ae45b8bf961bf651e297970c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_958d9f2da58ee4d6e43bb97ee8bb7fb9b8b8f3ae45b8bf961bf651e297970c6f->leave($__internal_958d9f2da58ee4d6e43bb97ee8bb7fb9b8b8f3ae45b8bf961bf651e297970c6f_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_915424568c6c2f64d5d5c8190f14f10a20f294394deb0a694fbd26bcbf368791 = $this->env->getExtension("native_profiler");
        $__internal_915424568c6c2f64d5d5c8190f14f10a20f294394deb0a694fbd26bcbf368791->enter($__internal_915424568c6c2f64d5d5c8190f14f10a20f294394deb0a694fbd26bcbf368791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexTabs(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\",\"";
        echo twig_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_915424568c6c2f64d5d5c8190f14f10a20f294394deb0a694fbd26bcbf368791->leave($__internal_915424568c6c2f64d5d5c8190f14f10a20f294394deb0a694fbd26bcbf368791_prof);

    }

    public function getTemplateName()
    {
        return "product/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  62 => 7,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
