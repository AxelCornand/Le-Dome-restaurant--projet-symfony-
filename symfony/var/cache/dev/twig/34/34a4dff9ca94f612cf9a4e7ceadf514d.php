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

/* registration/register.html.twig */
class __TwigTemplate_3a616e81417608872825102f5ac7e490 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Inscription - Administration";
        
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
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-4\">
                        <i class=\"bi bi-person-plus\"></i> Créer un compte Admin
                    </h1>

                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'errors');
        yield "

                    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "admin@legourmet.fr"]]);
        yield "
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre mot de passe"]]);
        yield "
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'errors');
        yield "
                            <small class=\"text-muted\">Le mot de passe doit contenir au moins 6 caractères</small>
                        </div>

                        ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", true, true, false, 31)) {
            // line 32
            yield "                        <div class=\"mb-3 form-check\">
                            ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "agreeTerms", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                            ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "agreeTerms", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                            ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "agreeTerms", [], "any", false, false, false, 35), 'errors');
            yield "
                        </div>
                        ";
        }
        // line 38
        yield "
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i class=\"bi bi-person-plus\"></i> S'inscrire
                            </button>
                        </div>
                    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_end');
        yield "

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <p class=\"mb-0\">Vous avez déjà un compte ?</p>
                        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-secondary mt-2\">
                            <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted\">
                    <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                </a>
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
        return "registration/register.html.twig";
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
        return array (  198 => 58,  187 => 50,  178 => 44,  170 => 38,  164 => 35,  160 => 34,  156 => 33,  153 => 32,  151 => 31,  144 => 27,  140 => 26,  136 => 25,  129 => 21,  125 => 20,  121 => 19,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - Administration{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-4\">
                        <i class=\"bi bi-person-plus\"></i> Créer un compte Admin
                    </h1>

                    {{ form_errors(registrationForm) }}

                    {{ form_start(registrationForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'admin@legourmet.fr'}}) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.plainPassword, 'Mot de passe', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre mot de passe'}}) }}
                            {{ form_errors(registrationForm.plainPassword) }}
                            <small class=\"text-muted\">Le mot de passe doit contenir au moins 6 caractères</small>
                        </div>

                        {% if registrationForm.agreeTerms is defined %}
                        <div class=\"mb-3 form-check\">
                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                            {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            {{ form_errors(registrationForm.agreeTerms) }}
                        </div>
                        {% endif %}

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i class=\"bi bi-person-plus\"></i> S'inscrire
                            </button>
                        </div>
                    {{ form_end(registrationForm) }}

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <p class=\"mb-0\">Vous avez déjà un compte ?</p>
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-secondary mt-2\">
                            <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"{{ path('app_home') }}\" class=\"text-muted\">
                    <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/register.html.twig", "/var/www/symfony/templates/registration/register.html.twig");
    }
}
