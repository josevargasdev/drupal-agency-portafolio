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

/* themes/custom/agency_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_74c01c97f68c9508b5e51f7bfd4e003f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            yield "    <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

      ";
            // line 56
            yield "      <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
        <div class=\"site-header__initial\">
          <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\"
            aria-controls=\"site-header__inner\" aria-label=\"";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
            yield "\" aria-checked=\"false\">
            <span class=\"sticky-header-toggle__icon\">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </div>

        ";
            // line 69
            yield "        <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
          <div class=\"site-header__inner__container\">

            ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), "html", null, true);
            yield "

            ";
            // line 74
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 74) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74))) {
                // line 75
                yield "            <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
              <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\"
                aria-label=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                <span class=\"mobile-nav-button__label\">";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                yield "</span>
                <span class=\"mobile-nav-button__icon\"></span>
              </button>
            </div>

            <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
              ";
                // line 84
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 84), "html", null, true);
                yield "
              ";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 85), "html", null, true);
                yield "
            </div>
            ";
            }
            // line 88
            yield "          </div>
        </div>
      </div>
    </header>
    ";
        }
        // line 93
        yield "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 98), "html", null, true);
        yield "
          <div class=\"main-content__container\">
            ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 100), "html", null, true);
        yield "
            ";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 101), "html", null, true);
        yield "

            ";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "            <div class=\"sidebar-grid grid-full\">
              <main role=\"main\" class=\"site-main\">
                ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 106), "html", null, true);
            yield "
                ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 107), "html", null, true);
            yield "
              </main>

              ";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 110), "html", null, true);
            yield "
            </div>
            ";
        } else {
            // line 113
            yield "            <main role=\"main\">
              <div class=\"hero\">
                <div class=\"hero__inner\">
                  <h1 class=\"hero__title\">Full Stack Development<br>& CMS Solutions</h1>
                  <p class=\"hero__subtitle\">We build scalable web applications, custom Drupal & WordPress
                    implementations, and backend systems that help businesses grow.</p>
                  <div class=\"hero__cta\">
                    <a href=\"/projects\" class=\"btn-primary\">View Projects</a>
                    <a href=\"/services\" class=\"btn-secondary\">Our Services</a>
                  </div>
                </div>
              </div>
              <div class=\"home-sections\">
                <div class=\"home-card\">
                  <span class=\"home-card__icon\">🚀</span>
                  <h3><a href=\"/projects\">Projects</a></h3>
                  <p>Real-world applications across banking, ERP, betting platforms, and more.</p>
                </div>
                <div class=\"home-card\">
                  <span class=\"home-card__icon\">👥</span>
                  <h3><a href=\"/team\">Team</a></h3>
                  <p>Experienced developers specialized in PHP, .NET, Drupal, and WordPress.</p>
                </div>
                <div class=\"home-card\">
                  <span class=\"home-card__icon\">⚙️</span>
                  <h3><a href=\"/services\">Services</a></h3>
                  <p>From custom web apps to ERP systems and CMS implementations.</p>
                </div>
              </div>
            </main>
            ";
        }
        // line 144
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 144), "html", null, true);
        yield "
          </div>
        </div>
 
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner\">
        ";
        // line 153
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 153), "html", null, true);
        yield "
        ";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 154), "html", null, true);
        yield "
        ";
        // line 155
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 155), "html", null, true);
        yield "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/agency_theme/templates/layout/page--front.html.twig";
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
        return array (  215 => 155,  211 => 154,  207 => 153,  194 => 144,  161 => 113,  155 => 110,  149 => 107,  145 => 106,  141 => 104,  139 => 103,  134 => 101,  130 => 100,  125 => 98,  118 => 93,  111 => 88,  105 => 85,  101 => 84,  92 => 78,  88 => 77,  84 => 75,  82 => 74,  77 => 72,  72 => 69,  60 => 59,  55 => 56,  51 => 53,  49 => 52,  43 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/agency_theme/templates/layout/page--front.html.twig", "/var/www/html/web/themes/custom/agency_theme/templates/layout/page--front.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 52];
        static $filters = ["t" => 59, "escape" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "t", 1 => "escape"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
