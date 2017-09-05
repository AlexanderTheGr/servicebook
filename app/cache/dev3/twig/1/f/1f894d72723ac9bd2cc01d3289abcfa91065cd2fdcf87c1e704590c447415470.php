<?php

/* elements/tabs.twig */
class __TwigTemplate_1f894d72723ac9bd2cc01d3289abcfa91065cd2fdcf87c1e704590c447415470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75ad751d28e4bf0e6aef07be06bbdf744a41392b97df04876cfccfab84f5a92c = $this->env->getExtension("native_profiler");
        $__internal_75ad751d28e4bf0e6aef07be06bbdf744a41392b97df04876cfccfab84f5a92c->enter($__internal_75ad751d28e4bf0e6aef07be06bbdf744a41392b97df04876cfccfab84f5a92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elements/tabs.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_75ad751d28e4bf0e6aef07be06bbdf744a41392b97df04876cfccfab84f5a92c->leave($__internal_75ad751d28e4bf0e6aef07be06bbdf744a41392b97df04876cfccfab84f5a92c_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_656a5b16d999d3c5d469886181af44782882b52af4ca39958bd485ea18340929 = $this->env->getExtension("native_profiler");
        $__internal_656a5b16d999d3c5d469886181af44782882b52af4ca39958bd485ea18340929->enter($__internal_656a5b16d999d3c5d469886181af44782882b52af4ca39958bd485ea18340929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<div class=\"alexander ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\" ng-app=\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo " as vm\">

    <form ng-submit=\"vm.onSubmit()\" name=\"vm.form\" class=\"form\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\" novalidate>      
        <button type=\"submit\" class=\"btn btn-primary submit-button\" ng-disabled=\"vm.form.\$invalid\">Submit</button>
        <button type=\"button\" class=\"btn btn-default\" ng-click=\"vm.resetAllForms()\">Reset</button>          
        <tabset>
            <tab ng-repeat=\"tab in vm.tabs\" heading=\"[[ tab.title ]]\" active=\"tab.active\" disable=\"tab.disable\">
                <formly-form model=\"tab.form.model\" fields=\"tab.form.fields\" form=\"vm.form\" options=\"tab.form.options\"></formly-form>
            </tab>
        </tabset>  
    </form>
</div>    
";
        
        $__internal_656a5b16d999d3c5d469886181af44782882b52af4ca39958bd485ea18340929->leave($__internal_656a5b16d999d3c5d469886181af44782882b52af4ca39958bd485ea18340929_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f627dff2828940a0184f63fb999ec8549a30ca2da1f9bd653096442b465b84c = $this->env->getExtension("native_profiler");
        $__internal_1f627dff2828940a0184f63fb999ec8549a30ca2da1f9bd653096442b465b84c->enter($__internal_1f627dff2828940a0184f63fb999ec8549a30ca2da1f9bd653096442b465b84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "
";
        
        $__internal_1f627dff2828940a0184f63fb999ec8549a30ca2da1f9bd653096442b465b84c->leave($__internal_1f627dff2828940a0184f63fb999ec8549a30ca2da1f9bd653096442b465b84c_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_239860659ab5c3004dca76d92d04b160de1abbc9d7e0ddf491d8ab4f37f9104c = $this->env->getExtension("native_profiler");
        $__internal_239860659ab5c3004dca76d92d04b160de1abbc9d7e0ddf491d8ab4f37f9104c->enter($__internal_239860659ab5c3004dca76d92d04b160de1abbc9d7e0ddf491d8ab4f37f9104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "
";
        
        $__internal_239860659ab5c3004dca76d92d04b160de1abbc9d7e0ddf491d8ab4f37f9104c->leave($__internal_239860659ab5c3004dca76d92d04b160de1abbc9d7e0ddf491d8ab4f37f9104c_prof);

    }

    public function getTemplateName()
    {
        return "elements/tabs.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  92 => 21,  84 => 18,  78 => 17,  60 => 5,  51 => 3,  48 => 2,  42 => 1,  35 => 21,  32 => 20,  30 => 17,  27 => 16,  25 => 1,);
    }
}
