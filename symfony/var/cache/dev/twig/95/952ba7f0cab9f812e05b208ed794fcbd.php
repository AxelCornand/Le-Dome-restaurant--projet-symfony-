<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* reservation/new.html.twig */
class __TwigTemplate_0491a48a065e9b93fe5af8df034972fb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Réserver une table - Restaurant Le Dôme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"text-center mb-2\">
                <i class=\"bi bi-calendar-check\"></i> Réserver une table
            </h1>

            <div class=\"card shadow\">
                <div class=\"card-body p-4\">
                    <div class=\"alert alert-info\">
                        <h5><i class=\"bi bi-info-circle\"></i> Horaires de réservation</h5>
                        <p class=\"mb-0\">
                            <strong>Du lundi au samedi</strong> de 12h00 à 14h00<br>
                        </p>
                    </div>

                    ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "firstName", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]]);
        yield "
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "lastName", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastName", [], "any", false, false, false, 33), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "votre@email.com"]]);
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "06 12 34 56 78"]]);
        yield "
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "phone", [], "any", false, false, false, 46), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "reservationDate", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date et heure"]);
        yield "
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reservationDate", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "reservationDate", [], "any", false, false, false, 54), 'errors');
        yield "
                            <small class=\"text-muted\">Du lundi au samedi, entre 12h00 et 14h00</small>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "numberOfPeople", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de personnes"]);
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "numberOfPeople", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "min" => 1, "max" => 20]]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "numberOfPeople", [], "any", false, false, false, 60), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"d-grid gap-2 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> Confirmer ma réservation
                        </button>
                        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                        </a>
                    </div>

                    ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  229 => 73,  221 => 68,  210 => 60,  206 => 59,  202 => 58,  195 => 54,  191 => 53,  187 => 52,  178 => 46,  174 => 45,  170 => 44,  164 => 41,  160 => 40,  156 => 39,  147 => 33,  143 => 32,  139 => 31,  133 => 28,  129 => 27,  125 => 26,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver une table - Restaurant Le Dôme{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"text-center mb-2\">
                <i class=\"bi bi-calendar-check\"></i> Réserver une table
            </h1>

            <div class=\"card shadow\">
                <div class=\"card-body p-4\">
                    <div class=\"alert alert-info\">
                        <h5><i class=\"bi bi-info-circle\"></i> Horaires de réservation</h5>
                        <p class=\"mb-0\">
                            <strong>Du lundi au samedi</strong> de 12h00 à 14h00<br>
                        </p>
                    </div>

                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.firstName, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Votre prénom'}}) }}
                            {{ form_errors(form.firstName) }}
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.lastName, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
                            {{ form_errors(form.lastName) }}
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'votre@email.com'}}) }}
                            {{ form_errors(form.email) }}
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.phone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control', 'placeholder': '06 12 34 56 78'}}) }}
                            {{ form_errors(form.phone) }}
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.reservationDate, 'Date et heure', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.reservationDate, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.reservationDate) }}
                            <small class=\"text-muted\">Du lundi au samedi, entre 12h00 et 14h00</small>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.numberOfPeople, 'Nombre de personnes', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.numberOfPeople, {'attr': {'class': 'form-control', 'min': 1, 'max': 20}}) }}
                            {{ form_errors(form.numberOfPeople) }}
                        </div>
                    </div>

                    <div class=\"d-grid gap-2 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> Confirmer ma réservation
                        </button>
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                        </a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "reservation/new.html.twig", "/var/www/symfony/templates/reservation/new.html.twig");
    }
}
