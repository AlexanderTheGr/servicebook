<?php

/* PartsboxBundle:Order:search.html.twig */
class __TwigTemplate_b8e9735d58b5938a7cf8e458cfea0c9e0e60011f257619cb173e6b2f1e8761f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc09b5221bea345132b48813c2c16e305c5dfbb5605f8ba06c796b5340a4f14 = $this->env->getExtension("native_profiler");
        $__internal_adc09b5221bea345132b48813c2c16e305c5dfbb5605f8ba06c796b5340a4f14->enter($__internal_adc09b5221bea345132b48813c2c16e305c5dfbb5605f8ba06c796b5340a4f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:search.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_adc09b5221bea345132b48813c2c16e305c5dfbb5605f8ba06c796b5340a4f14->leave($__internal_adc09b5221bea345132b48813c2c16e305c5dfbb5605f8ba06c796b5340a4f14_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_11a9d7d00127af75ad2ae33d4b33438381566d1d4516c3083b0b9254df33b4fc = $this->env->getExtension("native_profiler");
        $__internal_11a9d7d00127af75ad2ae33d4b33438381566d1d4516c3083b0b9254df33b4fc->enter($__internal_11a9d7d00127af75ad2ae33d4b33438381566d1d4516c3083b0b9254df33b4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div>   
    <div class=\"\" style=\"float:left;  width: 100%; margin: 0; padding: 0\"> 
        <div class=\"col-lg-6 \">
            <div class=\"col-lg-12 \">
                <div class=\"height-2 form\" style=\"float:left;  width: 100%; margin: 0; padding: 0\">
                    <input id=\"productfreesearch\" class='form-control productfreesearch' placeholder=\"Ελεύθερη Αναζήτηση\" type=\"text\">  
                    <input id=\"productitem\" class='form-control productitem' placeholder=\"Αναζήτηση με Κωδικό\" type=\"text\">        
                </div> 
            </div>
            <div class=\"col-lg-12 \">

            </div>    
        </div>
        <div class=\"col-lg-6 \">
            <div class='categories'></div>    
        </div>
    </div>    
</div>
";
        
        $__internal_11a9d7d00127af75ad2ae33d4b33438381566d1d4516c3083b0b9254df33b4fc->leave($__internal_11a9d7d00127af75ad2ae33d4b33438381566d1d4516c3083b0b9254df33b4fc_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* <div>   */
/*     <div class="" style="float:left;  width: 100%; margin: 0; padding: 0"> */
/*         <div class="col-lg-6 ">*/
/*             <div class="col-lg-12 ">*/
/*                 <div class="height-2 form" style="float:left;  width: 100%; margin: 0; padding: 0">*/
/*                     <input id="productfreesearch" class='form-control productfreesearch' placeholder="Ελεύθερη Αναζήτηση" type="text">  */
/*                     <input id="productitem" class='form-control productitem' placeholder="Αναζήτηση με Κωδικό" type="text">        */
/*                 </div> */
/*             </div>*/
/*             <div class="col-lg-12 ">*/
/* */
/*             </div>    */
/*         </div>*/
/*         <div class="col-lg-6 ">*/
/*             <div class='categories'></div>    */
/*         </div>*/
/*     </div>    */
/* </div>*/
/* {% endblock %}*/
