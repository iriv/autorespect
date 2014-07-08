<?php

/* about.html */
class __TwigTemplate_927fef0cb50a582a5977be03439fc6feabc56ed773064efcf37acbe9e3dd4c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("/main_c.html");

        $this->blocks = array(
            'stageabout' => array($this, 'block_stageabout'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/main_c.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stageabout($context, array $blocks = array())
    {
        // line 4
        echo "class=\"active\"
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "О нас
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
\tОсновным видом деятельности является: \"Организация перевозок грузов\".

";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  46 => 16,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
