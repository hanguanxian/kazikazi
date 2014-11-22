<?php

/* data.html.twig */
class __TwigTemplate_4dc63364fc66ab9bf04366869d1f7d41848f2b07902979c294489627f470f75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style>
    
</style>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<div>
   <a href=\"#\" id=\"sub\">查看当天数据</a>
   ";
        // line 14
        echo "</div>

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "
<script type=\"text/javascript\">

\$(function(){
    \$(\"#sub\").click(function(){
        \$.ajax({
            type : \"post\",
            url : \"getdata.php\",
            data : {a:'a'},
            success : function(result) {
                    console.log(result);
                }
            });
        });
});
</script>

";
    }

    public function getTemplateName()
    {
        return "data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  54 => 18,  48 => 14,  43 => 10,  40 => 9,  33 => 4,  30 => 3,);
    }
}
