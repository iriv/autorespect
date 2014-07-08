<?php

/* service.html */
class __TwigTemplate_3c38552514349a39cae862f030cbb41a7e573a66e855efc190dfb9e623e9fa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main_c.html");

        $this->blocks = array(
            'stageservice' => array($this, 'block_stageservice'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main_c.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stageservice($context, array $blocks = array())
    {
        // line 4
        echo "class=\"active\"
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "Услуги
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "


<table class=\"table table-hover\">
\t<tr>
\t\t<th>Материал</th>
\t\t<th>Вес</th>
\t\t<th>Цена 1 км</th>
\t</tr>
\t<tr>
\t\t<td>Щебень</td>
\t\t<td>1 тонна</td>
\t\t<td>1000</td>
\t</tr>
\t<tr>
\t\t<td>Песок</td>
\t\t<td>1 тонна</td>
\t\t<td>1000</td>
\t</tr>
\t<tr>
\t\t<td>Бетон</td>
\t\t<td>1 тонна</td>
\t\t<td>1000</td>
\t</tr>\t
</table>    \t


";
    }

    public function getTemplateName()
    {
        return "service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
