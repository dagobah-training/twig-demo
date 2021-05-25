<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_fa279791989825915eb05882007861b64beab004335715a8c9265e5ff1b1544a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <style>
        .flex-container {
            display: flex;
            align-items: stretch;
            background-color: #f1f1f1;
        }

        .flex-container > div {
            background-color: DodgerBlue;
            color: white;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }
    </style>
</head>
<body>
<h1>";
        // line 22
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h1>

<p>Piccola demo sull'utilizzo di Twig:</p>

<div class=\"flex-container\">
    <div style=\"flex-grow: 1\">1</div>
    <div style=\"flex-grow: 1\">2</div>
    <div style=\"flex-grow: 8\">3</div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "C:\\wamp64\\www\\twig-demo\\templates\\index.html.twig");
    }
}
