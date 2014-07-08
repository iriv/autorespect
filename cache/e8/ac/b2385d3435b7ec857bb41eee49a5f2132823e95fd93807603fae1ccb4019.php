<?php

/* contacts.html */
class __TwigTemplate_e8acb2385d3435b7ec857bb41eee49a5f2132823e95fd93807603fae1ccb4019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main_c.html");

        $this->blocks = array(
            'stagecontacts' => array($this, 'block_stagecontacts'),
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
    public function block_stagecontacts($context, array $blocks = array())
    {
        // line 4
        echo "class=\"active\"
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "Контакты
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
191123, г. Санкт-Петербург, ул. Шпалерная, 40 литера А

";
    }

    public function getTemplateName()
    {
        return "contacts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  46 => 13,  41 => 9,  38 => 8,  33 => 4,  30 => 3,);
    }
}
