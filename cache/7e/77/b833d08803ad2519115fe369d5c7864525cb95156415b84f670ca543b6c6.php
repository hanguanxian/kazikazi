<?php

/* base.html.twig */
class __TwigTemplate_7e77b833d08803ad2519115fe369d5c7864525cb95156415b84f670ca543b6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <style>
        html, h1, h2, h3, h4 { margin:0; padding:0; }
        ul, ol { margin-left:0; list-style: none; text-align:center; }
        a { text-decoration:none; color:#333; border:none; }
        img { border:none; }
        form, table { margin:0px; padding:0; }
        body, #body { margin: 0 auto; max-width: 360px; min-height: 568px; }
        body, h1, h2, h3, h4, a { font-family:'MHeiPRC-Bold', '微软雅黑', 'Microsoft YaHei'; }
        
        #body {
            position: relative;
            background: transparent url('web/images/bg.jpg') no-repeat center top;
            background-size: 100% auto;
        }
        
        </style>
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        
        <script src=\"http://libs.baidu.com/jquery/2.0.3/jquery.min.js\"></script>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "联系我们";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "
        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  89 => 31,  84 => 27,  81 => 26,  76 => 23,  70 => 4,  64 => 33,  62 => 31,  58 => 29,  56 => 26,  52 => 24,  50 => 23,  28 => 4,  23 => 1,  75 => 38,  72 => 37,  49 => 16,  46 => 15,  33 => 4,  30 => 3,);
    }
}
