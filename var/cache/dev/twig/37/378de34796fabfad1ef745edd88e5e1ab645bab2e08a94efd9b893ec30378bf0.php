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
class __TwigTemplate_d4642b218e415ce58f4763c1c06004d08e0b948f0b5def3e13efa82c2ef0c192 extends \Twig\Template
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

        // line 2
        echo "<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/main.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"shortcut icon\" href=\"#\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>
<div class=\"container-fluid\">
    ";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 147
        $this->displayBlock('body', $context, $blocks);
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 154
        echo "</div>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.5.1.min.js"), "html", null, true);
        echo "\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">#}</script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
";
        // line 161
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        echo "\" data-route=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product_to_cart");
        echo "\"></script>
";
        // line 162
        $this->displayBlock('javascripts', $context, $blocks);
        // line 163
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
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

    // line 10
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

    // line 14
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 15
        echo "        <>
            <div class=\"row topnav\">
                <div class=\"col\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traidein");
        echo "\" class=\"nav-link left topnav\">Обмен</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery");
        echo "\" class=\"nav-link left topnav\">Доставка и оплата</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warranty");
        echo "\" class=\"nav-link left topnav\">Гарантия</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\" class=\"nav-link left topnav\">Вопросы и ответы</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts");
        echo "\" class=\"nav-link left topnav\">Контакты</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Информация</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support");
        echo "\">Служба поддержки клиентов</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reviews");
        echo "\">Книга жалоб и предложений</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("refund");
        echo "\">Возврат и обмен</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase");
        echo "\">Оплата</a>
                                <a class=\"dropdown-item topnav\" href=\"";
        // line 31
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
                        ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            echo "</span></a>
                                <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                    <a class=\"dropdown-item topnav\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Выйти</a>
                                </div>
                            </li>
                        ";
        } else {
            // line 48
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Личный кабинет</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Войти</a>
                                <a class=\"dropdown-item topnav\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Регистрация</a>
                            </div>
                        </li>
                        ";
        }
        // line 56
        echo "                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Избранное</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">В сравнении</a></li>
                        <li class=\"nav-item\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"nav-link left topnav\">Корзина: <span class=\"badge badge-secondary\" data-id=\"cart-count\">0</span></a></li>
                        ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "                            <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\" class=\"nav-link left topnav\">Админ панель</a></li>
                        ";
        }
        // line 62
        echo "                    </ul>
                </div>
            </div>
            <div class=\"row midnav\">
                <div class=\"col-2\">
                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <img class=\"w-100 p-3\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Kryvulia Group\" title=\"Интернет магазин Kryvulia\">
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
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 92
            echo "                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo "</a>
                            </li>
                            ";
            // line 123
            echo "                        </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </nav>
                    <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                        <div class=\"bg-light p-4\">
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 129
            echo "                            <ul class=\"catalog\">
                                <li><a class=\"catalog\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 130), "html", null, true);
            echo "</a></li>
                                ";
            // line 140
            echo "                            </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                        </div>
                    </div>
                </div>
            </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
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

    // line 148
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 149
        echo "    <footer>
        <hr>

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 162,  397 => 149,  387 => 148,  369 => 147,  355 => 142,  348 => 140,  342 => 130,  339 => 129,  335 => 128,  330 => 125,  323 => 123,  316 => 94,  312 => 92,  308 => 91,  282 => 68,  278 => 67,  271 => 62,  265 => 60,  263 => 59,  259 => 58,  255 => 56,  248 => 52,  244 => 51,  239 => 48,  232 => 44,  227 => 42,  224 => 41,  222 => 40,  210 => 31,  206 => 30,  202 => 29,  198 => 28,  194 => 27,  187 => 23,  183 => 22,  179 => 21,  175 => 20,  171 => 19,  165 => 15,  155 => 14,  137 => 10,  118 => 9,  105 => 163,  103 => 162,  96 => 161,  92 => 157,  88 => 156,  84 => 155,  81 => 154,  79 => 148,  77 => 147,  75 => 14,  70 => 11,  68 => 10,  64 => 9,  60 => 8,  55 => 6,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!DOCTYPE html>#}
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('./css/main.css') }}\" type=\"text/css\">
    <link rel=\"shortcut icon\" href=\"#\" />
    <link rel=\"stylesheet\" href=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>
<body>
<div class=\"container-fluid\">
    {% block navigation %}
        <>
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
                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span>{{ app.user.username }}</span></a>
                                <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                    <a class=\"dropdown-item topnav\" href=\"{{ path('fos_user_security_logout') }}\">Выйти</a>
                                </div>
                            </li>
                        {% else %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle topnav\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Личный кабинет</a>
                            <div class=\"dropdown-menu topnav\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item topnav\" href=\"{{ path('fos_user_security_login') }}\">Войти</a>
                                <a class=\"dropdown-item topnav\" href=\"{{ path('fos_user_registration_register') }}\">Регистрация</a>
                            </div>
                        </li>
                        {% endif %}
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">Избранное</a></li>
                        <li class=\"nav-item\"><a href=\"\" class=\"nav-link left topnav\">В сравнении</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path ('cart') }}\" class=\"nav-link left topnav\">Корзина: <span class=\"badge badge-secondary\" data-id=\"cart-count\">0</span></a></li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item\"><a href=\"{{ path ('admin_dashboard') }}\" class=\"nav-link left topnav\">Админ панель</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
            <div class=\"row midnav\">
                <div class=\"col-2\">
                    <a href=\"{{ path('home') }}\">
                        <img class=\"w-100 p-3\" src=\"{{ asset('images/logo.jpg')}}\" alt=\"Kryvulia Group\" title=\"Интернет магазин Kryvulia\">
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
                        {% for category in categories %}
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"{{ path('categories', {id: category.id}) }}\">{{ category.name }}</a>
                            </li>
                            {#<li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Гаджеты и <br> аксессуары</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Мобильная <br> связь</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Ноутбуки, <br> Планшеты</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Фото, ТВ, <br> Видео, Аудио</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Для Дома и <br> Офиса</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Товары для <br> детей</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Бытовая <br> техника</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Для спорта <br> и отдыха</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link botnav\" href=\"#\">Дача, сад, <br> ремонт</a>
                            </li>#}
                        </ul>
                        {% endfor %}
                    </nav>
                    <div class=\"collapse\" id=\"navbarToggleExternalContent\">
                        <div class=\"bg-light p-4\">
                            {% for category in categories %}
                            <ul class=\"catalog\">
                                <li><a class=\"catalog\" href=\"{{ path('categories', {id: category.id}) }}\">{{ category.name }}</a></li>
                                {#<li><a href=\"#\" class=\"catalog\">Гаджеты и аксессуары</a></li>
                                <li><a href=\"#\" class=\"catalog\">Мобильная связь</a></li>
                                <li><a href=\"#\" class=\"catalog\">Ноутбуки, Планшеты</a></li>
                                <li><a href=\"#\" class=\"catalog\">Фото, ТВ, Видео, Аудио</a></li>
                                <li><a href=\"#\" class=\"catalog\">Для Дома и Офиса</a></li>
                                <li><a href=\"#\" class=\"catalog\">Товары для детей</a></li>
                                <li><a href=\"#\" class=\"catalog\">Бытовая техника</a></li>
                                <li><a href=\"#\" class=\"catalog\">Для спорта и отдыха</a></li>
                                <li><a href=\"#\" class=\"catalog\">Дача, сад, ремонт</a></li>#}
                            </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
    {% endblock %}
{% block body %}{% endblock %}
{% block footer %}
    <footer>
        <hr>

    </footer>
{% endblock %}
</div>
<script src=\"{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js') }}\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">#}</script>
<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
{#
<script src=\"/js/main.js\" data-route=\"{{ path('add_product_to_cart') }}></script>
#}
<script src=\"{{ asset('js/cart.js') }}\" data-route=\"{{ path('add_product_to_cart') }}\"></script>
{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "/home/yaroslav/var/www/shop.ll/templates/base.html.twig");
    }
}
