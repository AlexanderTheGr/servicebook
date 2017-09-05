<?php

/* customer/view.html.twig */
class __TwigTemplate_3815537d74fb5a11b681a43b3386c59aec799f7e746f6c24a048a61fbc320f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/view.html.twig", 1);
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
        $__internal_fd83ab4c0c1a1dc859b6e9a0783c047a29d4bc195f625b0940bb821892b73c70 = $this->env->getExtension("native_profiler");
        $__internal_fd83ab4c0c1a1dc859b6e9a0783c047a29d4bc195f625b0940bb821892b73c70->enter($__internal_fd83ab4c0c1a1dc859b6e9a0783c047a29d4bc195f625b0940bb821892b73c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd83ab4c0c1a1dc859b6e9a0783c047a29d4bc195f625b0940bb821892b73c70->leave($__internal_fd83ab4c0c1a1dc859b6e9a0783c047a29d4bc195f625b0940bb821892b73c70_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8cc0255c7a970df77796dc9f9ef069ec3d67772ed40879a7a65be6eaefa4b02 = $this->env->getExtension("native_profiler");
        $__internal_a8cc0255c7a970df77796dc9f9ef069ec3d67772ed40879a7a65be6eaefa4b02->enter($__internal_a8cc0255c7a970df77796dc9f9ef069ec3d67772ed40879a7a65be6eaefa4b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_a8cc0255c7a970df77796dc9f9ef069ec3d67772ed40879a7a65be6eaefa4b02->leave($__internal_a8cc0255c7a970df77796dc9f9ef069ec3d67772ed40879a7a65be6eaefa4b02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_392381c3148955777669b2d73199fe48f0d5a3950b06173ec117d13b6dc5f3f4 = $this->env->getExtension("native_profiler");
        $__internal_392381c3148955777669b2d73199fe48f0d5a3950b06173ec117d13b6dc5f3f4->enter($__internal_392381c3148955777669b2d73199fe48f0d5a3950b06173ec117d13b6dc5f3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_392381c3148955777669b2d73199fe48f0d5a3950b06173ec117d13b6dc5f3f4->leave($__internal_392381c3148955777669b2d73199fe48f0d5a3950b06173ec117d13b6dc5f3f4_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0d58443e8c7cae6cfe877f1945f4c3dba79b06060ac443261d1bd542107631d = $this->env->getExtension("native_profiler");
        $__internal_f0d58443e8c7cae6cfe877f1945f4c3dba79b06060ac443261d1bd542107631d->enter($__internal_f0d58443e8c7cae6cfe877f1945f4c3dba79b06060ac443261d1bd542107631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f0d58443e8c7cae6cfe877f1945f4c3dba79b06060ac443261d1bd542107631d->leave($__internal_f0d58443e8c7cae6cfe877f1945f4c3dba79b06060ac443261d1bd542107631d_prof);

    }

    public function getTemplateName()
    {
        return "customer/view.html.twig";
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
