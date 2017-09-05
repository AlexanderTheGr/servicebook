<?php

/* EdiBundle:Eltreka:view.html.twig */
class __TwigTemplate_59fdd51ba1acc7c95cb83dbfd3ba337251ce25f1fd795add28cda3f4ba080c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EdiBundle:Eltreka:view.html.twig", 1);
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
        $__internal_6303034efa6c93d8e25be1d9a70f8b706a2293fe3c09c65f38ca5efbca84bc7d = $this->env->getExtension("native_profiler");
        $__internal_6303034efa6c93d8e25be1d9a70f8b706a2293fe3c09c65f38ca5efbca84bc7d->enter($__internal_6303034efa6c93d8e25be1d9a70f8b706a2293fe3c09c65f38ca5efbca84bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdiBundle:Eltreka:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6303034efa6c93d8e25be1d9a70f8b706a2293fe3c09c65f38ca5efbca84bc7d->leave($__internal_6303034efa6c93d8e25be1d9a70f8b706a2293fe3c09c65f38ca5efbca84bc7d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_78060a223eed638372b4a665a80ffcb74f96f6f7b4c278641d1cb6e9b78ee8b3 = $this->env->getExtension("native_profiler");
        $__internal_78060a223eed638372b4a665a80ffcb74f96f6f7b4c278641d1cb6e9b78ee8b3->enter($__internal_78060a223eed638372b4a665a80ffcb74f96f6f7b4c278641d1cb6e9b78ee8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "        <button ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "attr", array()), "html", null, true);
            echo " class=\"btn ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "position", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "label", array()), "html", null, true);
            echo "</button>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    
";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EdiBundle:Eltreka:content", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "content" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))));
        echo "
";
        
        $__internal_78060a223eed638372b4a665a80ffcb74f96f6f7b4c278641d1cb6e9b78ee8b3->leave($__internal_78060a223eed638372b4a665a80ffcb74f96f6f7b4c278641d1cb6e9b78ee8b3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e471fed8ed2c22729d49ffd95d132f8ccf0e5a20fea268b6843719b90d9e0e8 = $this->env->getExtension("native_profiler");
        $__internal_6e471fed8ed2c22729d49ffd95d132f8ccf0e5a20fea268b6843719b90d9e0e8->enter($__internal_6e471fed8ed2c22729d49ffd95d132f8ccf0e5a20fea268b6843719b90d9e0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e471fed8ed2c22729d49ffd95d132f8ccf0e5a20fea268b6843719b90d9e0e8->leave($__internal_6e471fed8ed2c22729d49ffd95d132f8ccf0e5a20fea268b6843719b90d9e0e8_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55a98a98ce4ff47b330f5e67d39ecc0d9d45a4e1db14b9dcdef952f324a89f15 = $this->env->getExtension("native_profiler");
        $__internal_55a98a98ce4ff47b330f5e67d39ecc0d9d45a4e1db14b9dcdef952f324a89f15->enter($__internal_55a98a98ce4ff47b330f5e67d39ecc0d9d45a4e1db14b9dcdef952f324a89f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "<script>
    \$(\".";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexTabs(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\",\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "\");
</script>

";
        
        $__internal_55a98a98ce4ff47b330f5e67d39ecc0d9d45a4e1db14b9dcdef952f324a89f15->leave($__internal_55a98a98ce4ff47b330f5e67d39ecc0d9d45a4e1db14b9dcdef952f324a89f15_prof);

    }

    public function getTemplateName()
    {
        return "EdiBundle:Eltreka:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  90 => 11,  84 => 10,  73 => 8,  64 => 6,  61 => 5,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {% for button in buttons %}*/
/*         <button {{ button.attr }} class="btn {{ button.class }} {{ button.position }}">{{ button.label }}</button>    */
/* {% endfor %}    */
/* {{ render(controller('EdiBundle:Eltreka:content', { 'ctrl': ctrl,'app':app,'url':url,'content':content }) ) }}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/*     $(".{{ctrl}}").alexTabs("{{app}}", "{{ctrl}}", "{{url}}","{{content|json_encode()}}");*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
