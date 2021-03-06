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

/* headerNav/warranty.html.twig */
class __TwigTemplate_efb4f6943f0c24dc955279ae5487c04dfc773f7a378743e6a9023c5fa44e08dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/warranty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/warranty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "headerNav/warranty.html.twig", 1);
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
        <h3 class=\"heading\">Договорные гарантийные обязательства</h3>
        <p>
        <ol>
            <li>Продавец гарантирует, что купленное изделие является работоспособным и не содержит выявленных механических и иных повреждений на момент осуществления продажи. Комплектность изделий проверяется при покупке.</li><br>
            <li>Гарантия на проданные изделия при условии соблюдения условий гарантии подразумевает под собой бесплатный ремонт изделия в течении гарантийного срока, указанного в нашем гарантийном талоне, либо его замену на аналогичное по назначению устройство в случае невозможности ремонта.</li><br>
            <li>Гарантия действительна только при наличии правильно и четко заполненных документов подтверждающих покупку (товарный чек), и данного Договорного гарантийного обязательства, подписанного Покупателем, либо фирменного гарантийного талона производителя с заполнеными полями и росписью покупателя.</li><br>
            <li>Покупатель обязан до начала ввода в эксплуатацию оборудования ознакомиться с Правилами его использования и гарантийного обслуживания, содержащимися в прилагаемых к оборудованию инструкциях и убедиться в отсутствии внешних повреждений.</li><br>
            <li>Продавец не обеспечивает гарантийное обслуживание поставленных изделий в случаях:</li><br>
            <ul>
                <li>утери гарантийного талона (если изделие им комплектуется, кроме изделий в OEM-поставке), наличия в нём записей или исправлений, сделанных не Продавцом;</li><br>
                <li>несовпадения серийных номеров комплектующих с указанными в гарантийном талоне (если изделие им комплектуется, кроме изделий в OEM-поставке);</li><br>
                <li>повреждения или отсутствия гарантийных стикеров Продавца на изделии или комплектующих;</li><br>
                <li>наличия механических повреждений (помятости, сколы, глубокие царапины, трещены, следы удара, изгиб или перелом контактных ножек, крепежных мест и т.п.), а также со стёртой маркировкой изделий, неразбочивыми серийными номерами;</li><br>
                <li>наличия признаков ремонта неуполномоченными лицами (вскрытия блоков, следов пайки, следов механических повреждений на винтах, нарушения гарантийных пломб, замены деталей и т.п.);</li><br>
                <li>наличия повреждений, полученных в результате аварий, воздействия огня, влаги, агрессивных химических веществ, а также в результате действий третьих лиц или непреодолимой силы;</li><br>
                <li>с признаками горения или дымления изделия (прогар токопроводящих элементов, микросхем, платы, корпуса, др.);</li><br>
                <li>наличия повреждений, вызванных попаданием внутрь изделия посторонних предметов, насекомых и т.п.;</li><br>
                <li>неисправности, возникшей в следствие использования неоригинальных расходных материалов;</li><br>
                <li>выхода изделия из строя по вине Покупателя (при использовании изделия не по назначению, коммерческой эксплуатации изделия бытового назначения, неправильной установке и подключении, нарушении правил эксплуатации, хранения и транспортировки, изложенных в руководстве пользователя);</li><br>
                <li>при неполной комплектации изделия, отсутствии прилагаемой документации, драйверов, соединительных кабелей, крепежа и оригинальной упаковки, либо с поврежденной комплектацией;</li><br>
                <li>работы изделия с нелицензионными, несертифицированными или зараженными компьютерным вирусом программными продуктами;</li><br>
                <li>несоответствия Государственным стандартам параметров электропитающих, телекоммуникационных и кабельных сетей и другими внешними факторами (климатическими и иными);</li><br>
                <li>некорректной работы с программно - аппаратной частью изделия (перепрограммирование Flash - Bios и т.п.);</li><br>
                <li>а также в иных случаях, предусмотренных действующим законодательством Украины.</li><br>
            </ul>
            <li>В случае необходимости Продавец вправе перед началом ремонта отправить оборудование на независимую экспертизу сроком до 14 рабочих дней, без учёта времени транспортировки, в сертифицированный Сервис-центр производителя для получения заключения о причинах возникновения неисправности.</li><br>
            <li>Замена изделия производится только в том случае, если оно не может быть отремонтировано, на основании заключения сертифицированного Сервис-центра производителя. Срок гарант. ремонта, в зависимости от его сложности, может составлять 14 рабочих дней или до 45 дней по договоренности сторон, без учёта времени транспортировки.</li><br>
            <li>Обмен и возврат товара в течении первых 14 дней со дня покупки осуществляется если:</li><br>
            <ul>
                <li>товар новый, то есть который не был в эксплуатации и не имеет следов использования: царапин, потертостей и т.п.;</li><br>
                <li>програмное обеспечение не изменялось, на счетчике телефона не больше 5 минут разговора;</li><br>
                <li>сохранены: полная комплектация, ярлыки, целостность и все компоненты упаковки, заводская маркировка.</li><br>
            </ul>
        </ol>
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "headerNav/warranty.html.twig";
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
        <h3 class=\"heading\">Договорные гарантийные обязательства</h3>
        <p>
        <ol>
            <li>Продавец гарантирует, что купленное изделие является работоспособным и не содержит выявленных механических и иных повреждений на момент осуществления продажи. Комплектность изделий проверяется при покупке.</li><br>
            <li>Гарантия на проданные изделия при условии соблюдения условий гарантии подразумевает под собой бесплатный ремонт изделия в течении гарантийного срока, указанного в нашем гарантийном талоне, либо его замену на аналогичное по назначению устройство в случае невозможности ремонта.</li><br>
            <li>Гарантия действительна только при наличии правильно и четко заполненных документов подтверждающих покупку (товарный чек), и данного Договорного гарантийного обязательства, подписанного Покупателем, либо фирменного гарантийного талона производителя с заполнеными полями и росписью покупателя.</li><br>
            <li>Покупатель обязан до начала ввода в эксплуатацию оборудования ознакомиться с Правилами его использования и гарантийного обслуживания, содержащимися в прилагаемых к оборудованию инструкциях и убедиться в отсутствии внешних повреждений.</li><br>
            <li>Продавец не обеспечивает гарантийное обслуживание поставленных изделий в случаях:</li><br>
            <ul>
                <li>утери гарантийного талона (если изделие им комплектуется, кроме изделий в OEM-поставке), наличия в нём записей или исправлений, сделанных не Продавцом;</li><br>
                <li>несовпадения серийных номеров комплектующих с указанными в гарантийном талоне (если изделие им комплектуется, кроме изделий в OEM-поставке);</li><br>
                <li>повреждения или отсутствия гарантийных стикеров Продавца на изделии или комплектующих;</li><br>
                <li>наличия механических повреждений (помятости, сколы, глубокие царапины, трещены, следы удара, изгиб или перелом контактных ножек, крепежных мест и т.п.), а также со стёртой маркировкой изделий, неразбочивыми серийными номерами;</li><br>
                <li>наличия признаков ремонта неуполномоченными лицами (вскрытия блоков, следов пайки, следов механических повреждений на винтах, нарушения гарантийных пломб, замены деталей и т.п.);</li><br>
                <li>наличия повреждений, полученных в результате аварий, воздействия огня, влаги, агрессивных химических веществ, а также в результате действий третьих лиц или непреодолимой силы;</li><br>
                <li>с признаками горения или дымления изделия (прогар токопроводящих элементов, микросхем, платы, корпуса, др.);</li><br>
                <li>наличия повреждений, вызванных попаданием внутрь изделия посторонних предметов, насекомых и т.п.;</li><br>
                <li>неисправности, возникшей в следствие использования неоригинальных расходных материалов;</li><br>
                <li>выхода изделия из строя по вине Покупателя (при использовании изделия не по назначению, коммерческой эксплуатации изделия бытового назначения, неправильной установке и подключении, нарушении правил эксплуатации, хранения и транспортировки, изложенных в руководстве пользователя);</li><br>
                <li>при неполной комплектации изделия, отсутствии прилагаемой документации, драйверов, соединительных кабелей, крепежа и оригинальной упаковки, либо с поврежденной комплектацией;</li><br>
                <li>работы изделия с нелицензионными, несертифицированными или зараженными компьютерным вирусом программными продуктами;</li><br>
                <li>несоответствия Государственным стандартам параметров электропитающих, телекоммуникационных и кабельных сетей и другими внешними факторами (климатическими и иными);</li><br>
                <li>некорректной работы с программно - аппаратной частью изделия (перепрограммирование Flash - Bios и т.п.);</li><br>
                <li>а также в иных случаях, предусмотренных действующим законодательством Украины.</li><br>
            </ul>
            <li>В случае необходимости Продавец вправе перед началом ремонта отправить оборудование на независимую экспертизу сроком до 14 рабочих дней, без учёта времени транспортировки, в сертифицированный Сервис-центр производителя для получения заключения о причинах возникновения неисправности.</li><br>
            <li>Замена изделия производится только в том случае, если оно не может быть отремонтировано, на основании заключения сертифицированного Сервис-центра производителя. Срок гарант. ремонта, в зависимости от его сложности, может составлять 14 рабочих дней или до 45 дней по договоренности сторон, без учёта времени транспортировки.</li><br>
            <li>Обмен и возврат товара в течении первых 14 дней со дня покупки осуществляется если:</li><br>
            <ul>
                <li>товар новый, то есть который не был в эксплуатации и не имеет следов использования: царапин, потертостей и т.п.;</li><br>
                <li>програмное обеспечение не изменялось, на счетчике телефона не больше 5 минут разговора;</li><br>
                <li>сохранены: полная комплектация, ярлыки, целостность и все компоненты упаковки, заводская маркировка.</li><br>
            </ul>
        </ol>
        </p>
    </div>
{% endblock %}
", "headerNav/warranty.html.twig", "/home/yaroslav/var/www/shop.ll/templates/headerNav/warranty.html.twig");
    }
}
