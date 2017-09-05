<?php

/* :supplier:view.html.twig */
class __TwigTemplate_a6bcbc6c0ef70357fd3e7b6dd182fa737db526eb70dd9aa36f1970e21935fda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":supplier:view.html.twig", 1);
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
        $__internal_4fbece11471014423e5e8dd51772bbfd73b6f5b13f11e8aa3255707235198525 = $this->env->getExtension("native_profiler");
        $__internal_4fbece11471014423e5e8dd51772bbfd73b6f5b13f11e8aa3255707235198525->enter($__internal_4fbece11471014423e5e8dd51772bbfd73b6f5b13f11e8aa3255707235198525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":supplier:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fbece11471014423e5e8dd51772bbfd73b6f5b13f11e8aa3255707235198525->leave($__internal_4fbece11471014423e5e8dd51772bbfd73b6f5b13f11e8aa3255707235198525_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f797002e7bdaad1f28ebd48cc7714038f84fb883b7972bd7ad1bbb3800826fd = $this->env->getExtension("native_profiler");
        $__internal_5f797002e7bdaad1f28ebd48cc7714038f84fb883b7972bd7ad1bbb3800826fd->enter($__internal_5f797002e7bdaad1f28ebd48cc7714038f84fb883b7972bd7ad1bbb3800826fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "tabs" => (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")))));
        echo "
";
        
        $__internal_5f797002e7bdaad1f28ebd48cc7714038f84fb883b7972bd7ad1bbb3800826fd->leave($__internal_5f797002e7bdaad1f28ebd48cc7714038f84fb883b7972bd7ad1bbb3800826fd_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ef550cf066a50451b0ecc3f4f2ebd08b5118ba4417bf99f390ca3f50c42d4b3 = $this->env->getExtension("native_profiler");
        $__internal_7ef550cf066a50451b0ecc3f4f2ebd08b5118ba4417bf99f390ca3f50c42d4b3->enter($__internal_7ef550cf066a50451b0ecc3f4f2ebd08b5118ba4417bf99f390ca3f50c42d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ef550cf066a50451b0ecc3f4f2ebd08b5118ba4417bf99f390ca3f50c42d4b3->leave($__internal_7ef550cf066a50451b0ecc3f4f2ebd08b5118ba4417bf99f390ca3f50c42d4b3_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1944550e1fb5da930d731726fae0c7c4fbb62cfd48663f3f34089a8f54776b6 = $this->env->getExtension("native_profiler");
        $__internal_b1944550e1fb5da930d731726fae0c7c4fbb62cfd48663f3f34089a8f54776b6->enter($__internal_b1944550e1fb5da930d731726fae0c7c4fbb62cfd48663f3f34089a8f54776b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b1944550e1fb5da930d731726fae0c7c4fbb62cfd48663f3f34089a8f54776b6->leave($__internal_b1944550e1fb5da930d731726fae0c7c4fbb62cfd48663f3f34089a8f54776b6_prof);

    }

    public function getTemplateName()
    {
        return ":supplier:view.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Order:tabs', { 'ctrl': ctrl,'app':app,'url':url,'tabs':tabs }) ) }}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>$(".{{ctrl}}").alexTabs("{{app}}", "{{ctrl}}", "{{url}}","{{tabs}}");</script>*/
/* {% endblock %}*/
/* */
