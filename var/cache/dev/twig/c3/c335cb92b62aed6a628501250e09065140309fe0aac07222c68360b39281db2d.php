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

/* base.html.twig */
class __TwigTemplate_9facf1c5f57c300932a26ed786beaad12751d8b79dac364f0baa62be3bedb4ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navigation' => [$this, 'block_navigation'],
            'carousel' => [$this, 'block_carousel'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"./css/main.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
<div class=\"container-fluid\">
    ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 139
        echo "    ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 193
        $this->displayBlock('body', $context, $blocks);
        // line 194
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "</div>
";
        // line 201
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 17
        echo "        <header>
            <div class=\"row topnav\">
                <div class=\"col\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traidein");
        echo "\" class=\"nav-link left topnav\">Обмен</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery");
        echo "\" class=\"nav-link left topnav\">Доставка и оплата</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warranty");
        echo "\" class=\"nav-link left topnav\">Гарантия</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\" class=\"nav-link left topnav\">Вопросы и ответы</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts");
        echo "\" class=\"nav-link left topnav\">Контакты</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Информация</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support");
        echo "\">Служба поддержки клиентов</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reviews");
        echo "\">Книга жалоб и предложений</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("refund");
        echo "\">Возврат и обмен</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase");
        echo "\">Оплата</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo "\">О нас</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-1\">
                </div>
                <div class=\"col-5\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item dropdown\">
                            <select class=\"form-control form-control-sm\">
                                <option class=\"topnav\">RU</option>
                                <option class=\"topnav\">UA</option>
                            </select>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Личный кабинет</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"#\">Войти</a>
                                <a class=\"dropdown-item topnav\" href=\"#\">Регистрация</a>
                            </div>
                        </li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Избранное</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">В сравнении</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Корзина</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row midnav\">
                <div class=\"col-2\">
                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <img class=\"w-100 p-3\" src=\"images/logo.jpg\" alt=\"Kryvulia Group\" title=\"Интернет магазин Kryvulia\">
                    </a>
                </div>
                <div class=\"col-4 tell\">
                    <ul class=\"tell\">
                        <li class=\"tell\">+38 (098) 138-72-69</li>
                        <li class=\"tell\">+38 (093) 550-80-5*</li>
                    </ul>
                </div>
                <div class=\"col-6\">
                    <form class=\"form-inline my-2 my-lg-0\">
                        <input class=\"w-75 p-3 form-control mr-sm-1\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Найти</button>
                    </form>
                </div>
            </div>
            <div class=\"botnav\">
                <div class=\"pos-f-t\">
                    <nav class=\"navbar navbar-expand navbar-dark bg-dark\">
                        <button class=\"d-flex navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"d-flex navbar-toggler-icon\"></span>
                            Каталог <br> товаров
                        </button>
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Apple</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Гаджеты и <br> аксессуары</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Мобильная <br> связь</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Ноутбуки, <br> Планшеты</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Фото, ТВ, <br> Видео, Аудио</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Для Дома и <br> Офиса</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Товары для <br> детей</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Бытовая <br> техника</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Для спорта <br> и отдыха</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Дача, сад, <br> ремонт</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                        <div class=\"bg-light p-4\">
                            <ul class=\"catalog\">
                                <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Apple</a></li>
                                <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Гаджеты и аксессуары</a></li>
                                <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Мобильная связь</a></li>
                                <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Ноутбуки, Планшеты</a></li>
                                <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Фото, ТВ, Видео, Аудио</a></li>
                                <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Для Дома и Офиса</a></li>
                                <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Товары для детей</a></li>
                                <li><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Бытовая техника</a></li>
                                <li><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Для спорта и отдыха</a></li>
                                <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\" class=\"catalog\">Дача, сад, ремонт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 140
        echo "    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"images/1.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/2.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/3.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/4.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/5.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/6.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/7.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/8.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/9.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 195
        echo "    <footer>
        <hr>
        <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">Admin panel</a>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  487 => 201,  474 => 197,  470 => 195,  460 => 194,  442 => 193,  380 => 140,  370 => 139,  353 => 132,  349 => 131,  345 => 130,  341 => 129,  337 => 128,  333 => 127,  329 => 126,  325 => 125,  321 => 124,  317 => 123,  307 => 116,  301 => 113,  295 => 110,  289 => 107,  283 => 104,  277 => 101,  271 => 98,  265 => 95,  259 => 92,  253 => 89,  224 => 63,  191 => 33,  187 => 32,  183 => 31,  179 => 30,  175 => 29,  168 => 25,  164 => 24,  160 => 23,  156 => 22,  152 => 21,  146 => 17,  136 => 16,  118 => 12,  99 => 11,  87 => 202,  85 => 201,  82 => 200,  80 => 194,  78 => 193,  75 => 139,  73 => 16,  68 => 13,  66 => 12,  62 => 11,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"./css/main.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>
<body>
<div class=\"container-fluid\">
    {% block navigation %}
        <header>
            <div class=\"row topnav\">
                <div class=\"col\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a href=\"{{ path('traidein') }}\" class=\"nav-link left topnav\">Обмен</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('delivery') }}\" class=\"nav-link left topnav\">Доставка и оплата</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('warranty') }}\" class=\"nav-link left topnav\">Гарантия</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('faq') }}\" class=\"nav-link left topnav\">Вопросы и ответы</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('contacts') }}\" class=\"nav-link left topnav\">Контакты</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Информация</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"{{ path('support') }}\">Служба поддержки клиентов</a>
                                <a class=\"dropdown-item topnav\" href=\"{{ path('reviews') }}\">Книга жалоб и предложений</a>
                                <a class=\"dropdown-item topnav\" href=\"{{ path('refund') }}\">Возврат и обмен</a>
                                <a class=\"dropdown-item topnav\" href=\"{{ path('purchase') }}\">Оплата</a>
                                <a class=\"dropdown-item topnav\" href=\"{{ path('aboutus') }}\">О нас</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-1\">
                </div>
                <div class=\"col-5\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item dropdown\">
                            <select class=\"form-control form-control-sm\">
                                <option class=\"topnav\">RU</option>
                                <option class=\"topnav\">UA</option>
                            </select>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Личный кабинет</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"#\">Войти</a>
                                <a class=\"dropdown-item topnav\" href=\"#\">Регистрация</a>
                            </div>
                        </li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Избранное</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">В сравнении</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Корзина</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row midnav\">
                <div class=\"col-2\">
                    <a href=\"{{ path('home') }}\">
                        <img class=\"w-100 p-3\" src=\"images/logo.jpg\" alt=\"Kryvulia Group\" title=\"Интернет магазин Kryvulia\">
                    </a>
                </div>
                <div class=\"col-4 tell\">
                    <ul class=\"tell\">
                        <li class=\"tell\">+38 (098) 138-72-69</li>
                        <li class=\"tell\">+38 (093) 550-80-5*</li>
                    </ul>
                </div>
                <div class=\"col-6\">
                    <form class=\"form-inline my-2 my-lg-0\">
                        <input class=\"w-75 p-3 form-control mr-sm-1\" type=\"search\" placeholder=\"Поиск\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Найти</button>
                    </form>
                </div>
            </div>
            <div class=\"botnav\">
                <div class=\"pos-f-t\">
                    <nav class=\"navbar navbar-expand navbar-dark bg-dark\">
                        <button class=\"d-flex navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"d-flex navbar-toggler-icon\"></span>
                            Каталог <br> товаров
                        </button>
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Apple</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Гаджеты и <br> аксессуары</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Мобильная <br> связь</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Ноутбуки, <br> Планшеты</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Фото, ТВ, <br> Видео, Аудио</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Для Дома и <br> Офиса</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Товары для <br> детей</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Бытовая <br> техника</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Для спорта <br> и отдыха</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories') }}\">Дача, сад, <br> ремонт</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                        <div class=\"bg-light p-4\">
                            <ul class=\"catalog\">
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Apple</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Гаджеты и аксессуары</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Мобильная связь</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Ноутбуки, Планшеты</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Фото, ТВ, Видео, Аудио</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Для Дома и Офиса</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Товары для детей</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Бытовая техника</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Для спорта и отдыха</a></li>
                                <li><a href=\"{{ path('categories') }}\" class=\"catalog\">Дача, сад, ремонт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </header>
    {% endblock %}
    {% block carousel %}
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"images/1.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/2.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/3.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/4.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/5.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/6.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/7.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/8.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/9.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
{% endblock %}
{% block body %}{% endblock %}
{% block footer %}
    <footer>
        <hr>
        <a href=\"{{ path ('admin_dashboard') }}\">Admin panel</a>
    </footer>
{% endblock %}
</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/yaroslav/var/www/shop.ll/templates/base.html.twig");
    }
}
