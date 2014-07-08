<?php

/* order.html */
class __TwigTemplate_fa6ce8c74cf97461dbdec27e8640b14a5deacf652b5571c2b1e786a46122485f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main_c.html");

        $this->blocks = array(
            'stageorder' => array($this, 'block_stageorder'),
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
    public function block_stageorder($context, array $blocks = array())
    {
        // line 4
        echo "class=\"active\"
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "Оставить заявку
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<form>
\t<fieldset>
\t\t<legend>Заполните форму для заявки</legend>
\t\t<!-- <label>Ваш email</label> -->
\t\t<input type=\"email\" placeholder=\"Ваш email адрес...\" required>
\t\t<br>
\t\t<textarea placeholder=\"Текст сообщения...\" class=\"input-xxlarge\" name=\"\" id=\"\" cols=\"100\" rows=\"5\" required></textarea>
\t\t<br>
\t\t<button type=\"submit\" class=\"btn\">Отправить</button>
\t</fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "order.html";
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
