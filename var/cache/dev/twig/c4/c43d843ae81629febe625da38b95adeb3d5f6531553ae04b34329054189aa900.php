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

/* headerNav/delivery.html.twig */
class __TwigTemplate_16a9eec528385ea68fd7086a2a42f72a17b7f234362d4e6e80e695ddf4fbb7b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/delivery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/delivery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "headerNav/delivery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
        <h3 class=\"heading\">Доставка и Оплата</h3>
        <p>
        <h4 class=\"heading\">Оплата</h4>
        <h5 class=\"heading\">Способы оформления заказа:</h5>
        <ul>
            <li>Заказать товар на сайте через корзину.</li>
            <li>Заказать товар через сall-центр.</li>
        </ul><br>
        Обратите внимание! В связи с высокой загруженностью call-центра быстрее будет оформить заказ через сайт.<br>
        Менеджер в любом случае позвонит вам для подтверждения и уточнения деталей.<br>
        <h5 class=\"heading\">Способы оплаты:</h5>
        <ul>
            <li>Наличными при получении товара.</li>
            <li>Оплата картой на сайте.</li>
            <li>Безналичный расчет.</li>
            <li>Рассрочка или кредит.</li>
        </ul><br>
        Важно! При получении посылки в отделении почты или у курьера, вы оплачиваете товар и подписываете акт приема-передачи товара, свидетельствующий о том, что вы проверили содержимое посылки и претензий у вас нет.
        </p>
        <p>
        <h4 class=\"heading\">Доставка</h4>
        <ul>
            <li>самовывоз товара;</li>
            <li>экспресс доставка;</li>
            <li>доставка по Украине;</li>
        </ul>
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "headerNav/delivery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block carousel %}
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h3 class=\"heading\">Доставка и Оплата</h3>
        <p>
        <h4 class=\"heading\">Оплата</h4>
        <h5 class=\"heading\">Способы оформления заказа:</h5>
        <ul>
            <li>Заказать товар на сайте через корзину.</li>
            <li>Заказать товар через сall-центр.</li>
        </ul><br>
        Обратите внимание! В связи с высокой загруженностью call-центра быстрее будет оформить заказ через сайт.<br>
        Менеджер в любом случае позвонит вам для подтверждения и уточнения деталей.<br>
        <h5 class=\"heading\">Способы оплаты:</h5>
        <ul>
            <li>Наличными при получении товара.</li>
            <li>Оплата картой на сайте.</li>
            <li>Безналичный расчет.</li>
            <li>Рассрочка или кредит.</li>
        </ul><br>
        Важно! При получении посылки в отделении почты или у курьера, вы оплачиваете товар и подписываете акт приема-передачи товара, свидетельствующий о том, что вы проверили содержимое посылки и претензий у вас нет.
        </p>
        <p>
        <h4 class=\"heading\">Доставка</h4>
        <ul>
            <li>самовывоз товара;</li>
            <li>экспресс доставка;</li>
            <li>доставка по Украине;</li>
        </ul>
        </p>
    </div>
{% endblock %}
", "headerNav/delivery.html.twig", "/home/yaroslav/var/www/shop.ll/templates/headerNav/delivery.html.twig");
    }
}
