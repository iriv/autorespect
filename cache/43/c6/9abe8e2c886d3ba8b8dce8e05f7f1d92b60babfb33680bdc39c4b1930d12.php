<?php

/* main_cr.html */
class __TwigTemplate_43c69abe8e2c886d3ba8b8dce8e05f7f1d92b60babfb33680bdc39c4b1930d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stagemain' => array($this, 'block_stagemain'),
            'stageabout' => array($this, 'block_stageabout'),
            'stageservice' => array($this, 'block_stageservice'),
            'stagecontacts' => array($this, 'block_stagecontacts'),
            'stageorder' => array($this, 'block_stageorder'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
\t<title>Грузоперевозки</title>
\t<meta charset=\"UTF-8\">\t\t\t\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/dev.css\">
</head>
<body>

\t<div class=\"container\">

\t\t<header class=\"row\">
\t\t\t<div class=\"span8\">
\t\t\t\t<a href=\"index.php\" ><img width=\"150px\" src=\"assets/img/logo1.jpg\"  alt=\"\"></a>
\t\t\t</div>
\t\t\t<div class=\"span4\" align=\"right\">
\t\t\t\t<span>Грузоперевозки по России</span>
\t\t\t</div>
\t\t\t<!-- <div class=\"span10\" align=\"right\">Грузоперевозки по России</div> -->
\t\t\t<!-- <div align=\"right\">Грузоперевозки по России</div> -->
\t\t\t
\t\t</header>

\t\t

\t\t<div class=\"row\" id=\"menu\">
\t\t\t<div class=\"span12\">
\t\t\t    <ul class=\"nav nav-pills\">
<!-- \t\t\t\t    <li ";
        // line 30
        $this->displayBlock('stagemain', $context, $blocks);
        echo ">
\t\t\t\t    \t<a href=\"index.php\">Главная</a>
\t\t\t\t    </li> -->
\t\t\t\t    <li ";
        // line 33
        $this->displayBlock('stageabout', $context, $blocks);
        echo "><a href=\"?page=about\">О компании</a></li>
\t\t\t\t    <li ";
        // line 34
        $this->displayBlock('stageservice', $context, $blocks);
        echo "><a href=\"?page=service\">Услуги</a></li>
\t\t\t\t    <li ";
        // line 35
        $this->displayBlock('stagecontacts', $context, $blocks);
        echo "><a href=\"?page=contacts\">Контакты</a></li>
\t\t\t\t    <li ";
        // line 36
        $this->displayBlock('stageorder', $context, $blocks);
        echo "><a href=\"?page=order\">Сделать заказ</a></li>
\t\t\t    </ul>
\t\t    \t<hr>
\t\t\t</div>

\t\t</div>


\t\t<article class=\"row\" >
\t\t\t<div class=\"span9\" id=\"content\">
\t\t\t\tСпасибо что выбрали нашу компанию!
\t\t\t</div>
\t\t\t<div class=\"span3\" id=\"reklama\"></div>
\t\t</article>



<!-- \t\t<footer class=\"navbar-fixed-bottom row\">\t
\t\t\t<div class=\"span12\" align=\"center\">
\t\t\t\tDesigned by RIV 2014 &copy; All rights reserved
\t\t\t</div>
\t\t</footer> -->

\t</div>


\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"bootstrap/js/bootstrap.min.js\"></script>

</body>
</html>";
    }

    // line 30
    public function block_stagemain($context, array $blocks = array())
    {
        echo " ";
    }

    // line 33
    public function block_stageabout($context, array $blocks = array())
    {
        echo " ";
    }

    // line 34
    public function block_stageservice($context, array $blocks = array())
    {
        echo " ";
    }

    // line 35
    public function block_stagecontacts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_stageorder($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "main_cr.html";
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  120 => 34,  114 => 33,  108 => 30,  73 => 36,  69 => 35,  65 => 34,  61 => 33,  55 => 30,  24 => 1,);
    }
}
