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

/* Pages/Home/home.html */
class __TwigTemplate_be97df4bc181d2fd24d241eade3d468b02fadc52468de2be4717de0c067b6d49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "not_logged_in.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("not_logged_in.html", "Pages/Home/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
      <div class=\"row\">
            <div class=\"col-md-6 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Welkom op ";
        // line 7
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "!</h4>
                        <hr>
                        <div class=\"row text-left\">
                            <div class=\"col-md-12\">
                                <form action=\"\" method=\"POST\">
                                    <label for=\"username\">Uw gebruikersnaam</label>
                                    <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\"
                                           placeholder=\"Vul hier uw gebruikersnaam in...\">
                                    <label for=\"password\" id=\"password\" class=\"pt-4\">Uw wachtwoord</label>
                                    <input type=\"password\" name=\"password\" class=\"form-control\"
                                           placeholder=\"Vul hier uw wachtwoord in...\">
                                </form>
                                <div class=\"row\">
                                    <div class=\"col-12 col-xs-12 col-md-12\">
                                        <button class=\"btn btn-outline-info w-100\">Inloggen</button>
                                    </div>
                                    <div class=\"col-12 col-xs-12 col-md-12\">
                                        <button class=\"btn btn-outline-warning w-100\">Nieuw op ";
        // line 24
        echo twig_escape_filter($this->env, ($context["hotelnaam"] ?? null), "html", null, true);
        echo "? Registreer hier!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>";
        // line 35
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Spotlight</h4>
                        <hr>
                        <div class=\"newsItem text-left mt-2\"
                             style=\"background-image: url('https://theallseeingeye.leet.ws/uploads/articles/512e7e3a2ee6445e6c44c55875a7cf620dba61611583769332.png'); background-repeat: no-repeat; background-size: cover; height: 150px; width: 100%; border-radius: 5px;\">
                            <h3 class=\"text-left text-white pl-4\"
                                style=\"padding-top: 3.5vh; text-shadow: 2px 2px black;\">Kamer van de Week #123</h3>
                            <button class=\"btn btn-outline-light ml-4\">Lees meer...</button>
                        </div>
                        <div class=\"newsItem text-left mt-3\"
                             style=\"background-image: url('https://theallseeingeye.leet.ws/uploads/articles/ff2981c0d6283ed6c8d812e8b73c4546e08a37451584998741.png'); background-repeat: no-repeat; background-size: cover; height: 150px; width: 100%; border-radius: 5px;\">
                            <h3 class=\"text-left text-white pl-4\"
                                style=\"padding-top: 3.5vh; text-shadow: 2px 2px black;\">Kamer van de Week #456</h3>
                            <button class=\"btn btn-outline-light ml-4\">Lees meer...</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Home/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  76 => 24,  56 => 7,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Pages/Home/home.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Home/home.html");
    }
}
