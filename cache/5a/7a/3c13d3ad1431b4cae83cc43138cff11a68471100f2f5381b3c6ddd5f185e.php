<?php

/* main.html */
class __TwigTemplate_5a7a3c13d3ad1431b4cae83cc43138cff11a68471100f2f5381b3c6ddd5f185e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
\t\t\t\t    <li class=\"active\">
\t\t\t\t    \t<a href=\"index.php\">Главная</a>
\t\t\t\t    </li>
\t\t\t\t    <li><a href=\"?page=about\">О компании</a></li>
\t\t\t\t    <li><a href=\"?page=service\">Услуги</a></li>
\t\t\t\t    <li><a href=\"?page=contacts\">Контакты</a></li>
\t\t\t\t    <li><a href=\"?page=order\">Сделать заказ</a></li>
\t\t\t    </ul>
\t\t    \t<hr>
\t\t\t</div>

\t\t</div>


\t\t<article class=\"row\" >
\t\t\t<div class=\"span9\" id=\"content\">

\t\t\t<h3>";
        // line 47
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
\t\t\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
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

    // line 47
    public function block_title($context, array $blocks = array())
    {
        echo "main";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "\t\t\t\t <p>Равным образом постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки систем массового участия. Товарищи! новая модель организационной деятельности в значительной степени обуславливает создание систем массового участия. Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Товарищи! начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании модели развития.</p>\t

\t\t\t\t<p>\tРавным образом начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Задача организации, в особенности же укрепление и развитие структуры в значительной степени обуславливает создание дальнейших направлений развития. </p>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  105 => 48,  99 => 47,  75 => 53,  73 => 48,  69 => 47,  21 => 1,);
    }
}
