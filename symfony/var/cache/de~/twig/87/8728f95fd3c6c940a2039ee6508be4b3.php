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

/* contact/new.html.twig */
class __TwigTemplate_75cd205f15be0f100734979c4781d387 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

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

        yield "Nous contacter - Restaurant Le Dôme";
        
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
    <div class=\"row\">
        <div class=\"col-lg-6 mb-4\">
            <h1 class=\"mb-4\">
                <i class=\"bi bi-envelope\"></i> Nous Contacter
            </h1>
            
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><i class=\"bi bi-geo-alt\"></i> Adresse</h5>
                    <p>10 rue chemin petit<br>69300 Caluire, France</p>
                    <h5 class=\"card-title\"><i class=\"bi bi-clock\"></i> Horaires</h5>
                    <p>
                        <strong>Lundi - Samedi</strong><br>
                        Déjeuner : 12h00 - 14h00<br>
                        <small class=\"text-muted\">Fermé le dimanche</small>
                    </p>
                </div>
            </div>

        </div>

        <div class=\"col-lg-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-4\">
                    <h4 class=\"card-title mb-4\">Envoyez-nous un message</h4>
                    
                    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "firstName", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "lastName", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lastName", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lastName", [], "any", false, false, false, 44), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "votre@email.com"]]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'errors');
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "message", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message"]);
        yield "
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "message", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Votre message..."]]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57), 'errors');
        yield "
                    </div>

                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-send\"></i> Envoyer le message
                        </button>
                    </div>

                    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
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
        return "contact/new.html.twig";
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
        return array (  201 => 66,  189 => 57,  185 => 56,  181 => 55,  174 => 51,  170 => 50,  166 => 49,  158 => 44,  154 => 43,  150 => 42,  144 => 39,  140 => 38,  136 => 37,  129 => 33,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nous contacter - Restaurant Le Dôme{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-lg-6 mb-4\">
            <h1 class=\"mb-4\">
                <i class=\"bi bi-envelope\"></i> Nous Contacter
            </h1>
            
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><i class=\"bi bi-geo-alt\"></i> Adresse</h5>
                    <p>10 rue chemin petit<br>69300 Caluire, France</p>
                    <h5 class=\"card-title\"><i class=\"bi bi-clock\"></i> Horaires</h5>
                    <p>
                        <strong>Lundi - Samedi</strong><br>
                        Déjeuner : 12h00 - 14h00<br>
                        <small class=\"text-muted\">Fermé le dimanche</small>
                    </p>
                </div>
            </div>

        </div>

        <div class=\"col-lg-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-4\">
                    <h4 class=\"card-title mb-4\">Envoyez-nous un message</h4>
                    
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

                    <div class=\"mb-3\">
                        {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'votre@email.com'}}) }}
                        {{ form_errors(form.email) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.message, 'Message', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.message, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Votre message...'}}) }}
                        {{ form_errors(form.message) }}
                    </div>

                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-send\"></i> Envoyer le message
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "contact/new.html.twig", "/var/www/symfony/templates/contact/new.html.twig");
    }
}
