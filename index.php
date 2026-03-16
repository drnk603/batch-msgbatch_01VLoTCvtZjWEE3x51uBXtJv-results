<!doctype html>
<html lang="lv">
 <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://domain.com/#org",
      "name": "domain",
      "url": "https://domain.com",
      "email": "partners@domain.com",
      "telephone": "+371 6 6490484",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Skanste City, Skanstes iela 50, Floor 9, Office 302, LV-1013 Rīga"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "email": "partners@domain.com",
        "telephone": "+371 6 6490484"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://domain.com/#website",
      "url": "https://domain.com",
      "name": "domain",
      "publisher": {
        "@id": "https://domain.com/#org"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://domain.com#webpage",
      "url": "https://domain.com",
      "name": "&lt;?php echo htmlspecialchars($page_title); ?&gt;",
      "isPartOf": {
        "@id": "https://domain.com/#website"
      },
      "about": {
        "@id": "https://domain.com/#org"
      },
      "inLanguage": "lv",
      "description": "&lt;?php echo htmlspecialchars($page_desc); ?&gt;"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://domain.com#breadcrumbs",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://domain.com"
        }
      ]
    }
  ]
}
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--?php
        $brand_name     = 'AutoDrošs';
        $primary_domain = 'autodross.lv';
        $support_email  = 'info@' . $primary_domain;
        $current_year   = date('Y');
        $page_title     = $brand_name . ' — Auto Apdrošināšana Latvijā';
        $page_desc      = 'AutoDrošs piedāvā visaptverošus auto apdrošināšanas risinājumus Latvijā. Salīdziniet piedāvājumus, aprēķiniet cenu un noformējiet polisi tiešsaistē.';
        $og_image       = 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1200&h=630&fit=crop';
        $canonical_url  = 'https://domain.com/';
    ?-->
  <title>&lt;?php echo htmlspecialchars($page_title); ?&gt;</title>
  <meta name="description" content="&lt;?php echo htmlspecialchars($page_desc); ?&gt;">
  <meta name="keywords" content="auto apdrošināšana, OCTA, KASKO, Latvija, apdrošināšana online">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="&lt;?php echo $canonical_url; ?&gt;">
  <meta property="og:type" content="website">
  <meta property="og:title" content="&lt;?php echo htmlspecialchars($page_title); ?&gt;">
  <meta property="og:description" content="&lt;?php echo htmlspecialchars($page_desc); ?&gt;">
  <meta property="og:url" content="&lt;?php echo $canonical_url; ?&gt;">
  <meta property="og:image" content="&lt;?php echo $og_image; ?&gt;">
  <meta property="og:site_name" content="&lt;?php echo htmlspecialchars($brand_name); ?&gt;">
  <meta property="og:locale" content="lv_LV">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="&lt;?php echo htmlspecialchars($page_title); ?&gt;">
  <meta name="twitter:description" content="&lt;?php echo htmlspecialchars($page_desc); ?&gt;">
  <meta name="twitter:image" content="&lt;?php echo $og_image; ?&gt;">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
<link rel="stylesheet" href="./header-footer.css">
<link rel="stylesheet" href="./consent.css">
<script src="./consent.js"></script>
</head>
 <body>
<header class="dr-header" data-dr-variant="v1">
  <div class="dr-header-inner">
    <a class="dr-logo" href="./index.html" aria-label="domain">domain</a>

    <nav class="dr-nav" aria-label="Primary navigation">
      <ul class="dr-nav-list">
        <li class="dr-nav-item"><a class="dr-nav-link" href="./index.php">Home</a></li>
      </ul>
    </nav>

    <button class="dr-burger" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="dr-mobile-menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
<nav class="dr-mobile-menu" id="dr-mobile-menu" aria-label="Mobile navigation">
  <ul class="dr-mobile-nav-list">
    <li class="dr-nav-item"><a class="dr-nav-link" href="./index.php">Home</a></li>
  </ul>
</nav>

  <!-- ===== HEADER / NAVIGATION ===== -->
  <!-- ===== MAIN CONTENT ===== -->
  <main id="main-content">
   <!-- ===== HERO SECTION ===== -->
   <section class="hero-section py-5 py-md-0" aria-labelledby="hero-heading" id="hero" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row align-items-center min-vh-hero">
      <div class="col-12 col-md-6 col-lg-5 order-2 order-md-1 py-5">
       <p class="hero-eyebrow" data-aos="fade-up" data-aos-delay="0">Auto apdrošināšana Latvijā</p>
       <h1 id="hero-heading" data-aos="fade-up" data-aos-delay="80">Droša braukšana — <span class="text-fuchsia">vienkārši un ātri</span></h1>
       <p class="hero-lead" data-aos="fade-up" data-aos-delay="160">Salīdziniet labākos OCTA un KASKO piedāvājumus, noformējiet polisi dažu minūšu laikā un brauciet ar mieru.</p>
       <div class="hero-cta-group" data-aos="fade-up" data-aos-delay="240">
        <a href="/#quote" class="btn btn-fuchsia btn-lg"> Aprēķināt cenu </a> <a href="/#services" class="btn btn-outline-gunmetal btn-lg"> Uzzināt vairāk </a>
       </div>
       <div class="hero-trust" data-aos="fade-up" data-aos-delay="320">
        <div class="hero-trust-item">
         <span class="trust-number">12 000+</span> <span class="trust-label">apdrošināto klientu</span>
        </div>
        <div class="hero-trust-divider" aria-hidden="true"></div>
        <div class="hero-trust-item">
         <span class="trust-number">4.9 ★</span> <span class="trust-label">vidējais vērtējums</span>
        </div>
        <div class="hero-trust-divider" aria-hidden="true"></div>
        <div class="hero-trust-item">
         <span class="trust-number">3 min</span> <span class="trust-label">polises noformēšana</span>
        </div>
       </div>
      </div>
      <div class="col-12 col-md-6 col-lg-7 order-1 order-md-2" data-aos="fade-left" data-aos-delay="100">
       <div class="hero-illustration-wrap">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900&amp;h=675&amp;fit=crop" alt="Moderna automašīna ceļā — auto apdrošināšanas simbols" width="900" height="675" class="img-fluid hero-img" fetchpriority="high">
        </div>
        <div class="hero-badge-floating" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
         </svg>
         <span>Licencēts brokeris</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== SERVICES SECTION ===== -->
   <section class="py-4 py-md-5 section-services" id="services" aria-labelledby="services-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Mūsu pakalpojumi</p>
      <h2 id="services-heading">Viss nepieciešamais
       <br class="d-none d-md-block">
       vienā vietā</h2>
      <p class="section-lead">Izvēlieties piemērotāko apdrošināšanas veidu un noformējiet to tiešsaistē.</p>
     </div>
     <div class="row g-4 mt-2">
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
       <div class="service-card h-100">
        <div class="service-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="11" width="20" height="11" rx="2" /><path d="M7 11V7a5 5 0 0 1 10 0v4" />
         </svg>
        </div>
        <h3 class="service-title">OCTA</h3>
        <p class="service-desc">Obligātā civiltiesiskā apdrošināšana — prasīta pēc likuma katram transportlīdzeklim Latvijā.</p>
        <a href="/#quote" class="service-link">Noformēt OCTA</a>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
       <div class="service-card service-card--featured h-100">
        <div class="service-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
         </svg>
        </div>
        <h3 class="service-title">KASKO</h3>
        <p class="service-desc">Visaptverošā auto apdrošināšana — aizsargā gan bojājumu, gan zādzības, gan dabas katastrofu gadījumos.</p>
        <a href="/#quote" class="service-link">Noformēt KASKO</a>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
       <div class="service-card h-100">
        <div class="service-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" />
         </svg>
        </div>
        <h3 class="service-title">Ceļojumu apdrošināšana</h3>
        <p class="service-desc">Brauciet uz ārzemēm droši — segums medicīniskiem izdevumiem un ceļojuma atcelšanai.</p>
        <a href="/#quote" class="service-link">Noformēt polisi</a>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
       <div class="service-card h-100">
        <div class="service-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" /><path d="M12 8v4l3 3" />
         </svg>
        </div>
        <h3 class="service-title">Ārkārtas palīdzība</h3>
        <p class="service-desc">Tehniskā palīdzība uz ceļa 24/7 — palīdzēsim jebkurā situācijā Latvijā un Eiropā.</p>
        <a href="/#quote" class="service-link">Uzzināt vairāk</a>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== HOW IT WORKS ===== -->
   <section class="py-4 py-md-5 section-how" id="how-it-works" aria-labelledby="how-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Vienkāršs process</p>
      <h2 id="how-heading">Kā tas darbojas?</h2>
      <p class="section-lead">Tikai 3 soļi līdz pilnvērtīgai aizsardzībai.</p>
     </div>
     <div class="row g-4 mt-2 justify-content-center">
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="0">
       <div class="how-card text-center">
        <div class="how-step" aria-label="1. solis">1</div>
        <div class="how-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="3" width="18" height="18" rx="2" /><path d="M9 9h6M9 12h6M9 15h4" />
         </svg>
        </div>
        <h3 class="how-title">Aizpildiet anketu</h3>
        <p class="how-desc">Ievadiet transportlīdzekļa datus un saņemiet personalizētus piedāvājumus dažu sekunžu laikā.</p>
       </div>
      </div>
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
       <div class="how-card text-center">
        <div class="how-step" aria-label="2. solis">2</div>
        <div class="how-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 11l3 3L22 4" /><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
         </svg>
        </div>
        <h3 class="how-title">Izvēlieties piedāvājumu</h3>
        <p class="how-desc">Salīdziniet cenas un nosacījumus no vadošajiem apdrošinātājiem Latvijā un izvēlieties sev piemērotāko.</p>
       </div>
      </div>
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
       <div class="how-card text-center">
        <div class="how-step" aria-label="3. solis">3</div>
        <div class="how-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 12V22H4V12" /><path d="M22 7H2v5h20V7z" /><path d="M12 22V7" /><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" /><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
         </svg>
        </div>
        <h3 class="how-title">Saņemiet polisi</h3>
        <p class="how-desc">Apmaksājiet droši tiešsaistē un saņemiet polisi uz e-pastu uzreiz — gatavs braukšanai!</p>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== QUOTE FORM ===== -->
   <section class="py-4 py-md-5 section-quote" id="quote" aria-labelledby="quote-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
       <div class="quote-card" data-aos="fade-up">
        <div class="quote-card__header text-center">
         <p class="section-eyebrow mb-1">Bezmaksas aprēķins</p>
         <h2 id="quote-heading">Aprēķiniet apdrošināšanas cenu</h2>
         <p class="section-lead">Aizpildiet formu un mēs sazināsimies ar Jums 15 minūšu laikā.</p>
        </div>
        <!--?php
                                $form_success = false;
                                $form_errors  = [];
                                $form_data    = ['name' =-->
        '', 'email' =&gt; '', 'phone' =&gt; '', 'car_reg' =&gt; '', 'insurance_type' =&gt; '', 'message' =&gt; '']; if ($_SERVER['REQUEST_METHOD'] === 'POST' &amp;&amp; isset($_POST['quote_form'])) { $form_data['name'] = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8')); $form_data['email'] = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)); $form_data['phone'] = trim(htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8')); $form_data['car_reg'] = trim(htmlspecialchars($_POST['car_reg'] ?? '', ENT_QUOTES, 'UTF-8')); $form_data['insurance_type'] = trim(htmlspecialchars($_POST['insurance_type'] ?? '', ENT_QUOTES, 'UTF-8')); $form_data['message'] = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8')); if (empty($form_data['name'])) { $form_errors['name'] = 'Lūdzu, ievadiet savu vārdu un uzvārdu.'; } if (empty($form_data['email']) || !filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) { $form_errors['email'] = 'Lūdzu, ievadiet derīgu e-pasta adresi.'; } if (empty($form_data['phone'])) { $form_errors['phone'] = 'Lūdzu, ievadiet tālruņa numuru.'; } if (empty($form_data['car_reg'])) { $form_errors['car_reg'] = 'Lūdzu, ievadiet automašīnas reģistrācijas numuru.'; } if (empty($form_data['insurance_type'])) { $form_errors['insurance_type'] = 'Lūdzu, izvēlieties apdrošināšanas veidu.'; } if (!isset($_POST['privacy_consent'])) { $form_errors['privacy_consent'] = 'Lūdzu, apstipriniet privātuma politiku.'; } if (empty($form_errors)) { $form_success = true; } } ?&gt; <!--?php if ($form_success): ?-->
        <div class="quote-success" role="alert" aria-live="polite">
         <div class="quote-success__icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
           <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" /><polyline points="22 4 12 14.01 9 11.01" />
          </svg>
         </div>
         <h3>Paldies, <!--?php echo htmlspecialchars($form_data['name']); ?-->!</h3>
         <p>Jūsu pieteikums ir saņemts. Mūsu speciālists sazināsies ar Jums 15 minūšu laikā.</p>
        </div>
        <!--?php else: ?-->
        <form method="POST" action="/#quote" class="quote-form needs-validation" novalidate aria-label="Apdrošināšanas cenas aprēķināšanas forma">
         <input type="hidden" name="quote_form" value="1">
         <div class="row g-3">
          <div class="col-12 col-sm-6">
           <label for="name" class="form-label">Vārds, uzvārds <span class="required-mark" aria-hidden="true">*</span><span class="visually-hidden">(obligāts lauks)</span></label> <input type="text" class="form-control &lt;?php echo isset($form_errors['name']) ? 'is-invalid' : ''; ?&gt;" id="name" name="name" value="&lt;?php echo htmlspecialchars($form_data['name']); ?&gt;" autocomplete="name" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['name']) ? 'name-error' : ''; ?&gt;" placeholder="Jānis Bērziņš"> <!--?php if (isset($form_errors['name'])): ?-->
           <div class="invalid-feedback" id="name-error" role="alert">
            <!--?php echo $form_errors['name']; ?-->
           </div>
           <!--?php endif; ?-->
          </div>
          <div class="col-12 col-sm-6">
           <label for="email" class="form-label">E-pasta adrese <span class="required-mark" aria-hidden="true">*</span><span class="visually-hidden">(obligāts lauks)</span></label> <input type="email" class="form-control &lt;?php echo isset($form_errors['email']) ? 'is-invalid' : ''; ?&gt;" id="email" name="email" value="&lt;?php echo htmlspecialchars($form_data['email']); ?&gt;" autocomplete="email" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['email']) ? 'email-error' : ''; ?&gt;" placeholder="partners@domain.com"> <!--?php if (isset($form_errors['email'])): ?-->
           <div class="invalid-feedback" id="email-error" role="alert">
            <!--?php echo $form_errors['email']; ?-->
           </div>
           <!--?php endif; ?-->
          </div>
          <div class="col-12 col-sm-6">
           <label for="phone" class="form-label">Tālrunis <span class="required-mark" aria-hidden="true">*</span><span class="visually-hidden">(obligāts lauks)</span></label> <input type="tel" class="form-control &lt;?php echo isset($form_errors['phone']) ? 'is-invalid' : ''; ?&gt;" id="phone" name="phone" value="&lt;?php echo htmlspecialchars($form_data['phone']); ?&gt;" autocomplete="tel" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['phone']) ? 'phone-error' : ''; ?&gt;" placeholder="+371 2X XXX XXX"> <!--?php if (isset($form_errors['phone'])): ?-->
           <div class="invalid-feedback" id="phone-error" role="alert">
            <!--?php echo $form_errors['phone']; ?-->
           </div>
           <!--?php endif; ?-->
          </div>
          <div class="col-12 col-sm-6">
           <label for="car_reg" class="form-label">Auto reģistr. numurs <span class="required-mark" aria-hidden="true">*</span><span class="visually-hidden">(obligāts lauks)</span></label> <input type="text" class="form-control &lt;?php echo isset($form_errors['car_reg']) ? 'is-invalid' : ''; ?&gt;" id="car_reg" name="car_reg" value="&lt;?php echo htmlspecialchars($form_data['car_reg']); ?&gt;" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['car_reg']) ? 'car-reg-error' : ''; ?&gt;" placeholder="AB-1234"> <!--?php if (isset($form_errors['car_reg'])): ?-->
           <div class="invalid-feedback" id="car-reg-error" role="alert">
            <!--?php echo $form_errors['car_reg']; ?-->
           </div>
           <!--?php endif; ?-->
          </div>
          <div class="col-12">
           <label for="insurance_type" class="form-label">Apdrošināšanas veids <span class="required-mark" aria-hidden="true">*</span><span class="visually-hidden">(obligāts lauks)</span></label> <select class="form-select &lt;?php echo isset($form_errors['insurance_type']) ? 'is-invalid' : ''; ?&gt;" id="insurance_type" name="insurance_type" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['insurance_type']) ? 'insurance-type-error' : ''; ?&gt;"> <option value="" disabled <?php echo empty($form_data[_insurance_type_]) ? _selected_ : _;>&gt;Izvēlieties veidu</option> <option value="octa" <?php echo $form_data[_insurance_type_]="==" _octa_ ? _selected_ : _;>&gt;OCTA — Obligātā civiltiesiskā</option> <option value="kasko" <?php echo $form_data[_insurance_type_]="==" _kasko_ ? _selected_ : _;>&gt;KASKO — Visaptverošā</option> <option value="travel" <?php echo $form_data[_insurance_type_]="==" _travel_ ? _selected_ : _;>&gt;Ceļojumu apdrošināšana</option> <option value="assistance" <?php echo $form_data[_insurance_type_]="==" _assistance_ ? _selected_ : _;>&gt;Ārkārtas palīdzība 24/7</option> </select> <!--?php if (isset($form_errors['insurance_type'])): ?-->
           <div class="invalid-feedback" id="insurance-type-error" role="alert">
            <!--?php echo $form_errors['insurance_type']; ?-->
           </div>
           <!--?php endif; ?-->
          </div>
          <div class="col-12">
           <label for="message" class="form-label">Komentārs (neobligāts)</label> <textarea class="form-control" id="message" name="message" rows="3" placeholder="Papildu informācija par Jūsu transportlīdzekli vai vēlmēm...">&lt;?php echo htmlspecialchars($form_data['message']); ?&gt;</textarea>
          </div>
          <div class="col-12">
           <div class="form-check privacy-check">
            <input type="checkbox" class="form-check-input &lt;?php echo isset($form_errors['privacy_consent']) ? 'is-invalid' : ''; ?&gt;" id="privacy_consent" name="privacy_consent" required aria-required="true" aria-describedby="&lt;?php echo isset($form_errors['privacy_consent']) ? 'privacy-error' : ''; ?&gt;"> <label class="form-check-label" for="privacy_consent"> Esmu izlasījis un piekrītu <a href="/privatuma-politika" class="link-fuchsia">Privātuma politikai</a> un piekrītu personas datu apstrādei. </label> <!--?php if (isset($form_errors['privacy_consent'])): ?-->
            <div class="invalid-feedback" id="privacy-error" role="alert">
             <!--?php echo $form_errors['privacy_consent']; ?-->
            </div>
            <!--?php endif; ?-->
           </div>
          </div>
          <div class="col-12">
           <button type="submit" class="btn btn-fuchsia btn-lg w-100">Nosūtīt pieteikumu</button>
          </div>
         </div>
        </form>
        <!--?php endif; ?-->
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== CASE STUDIES / CASES ===== -->
   <section class="py-4 py-md-5 section-cases" id="cases" aria-labelledby="cases-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Gadījumu izpēte</p>
      <h2 id="cases-heading">Kā mēs palīdzējām klientiem</h2>
      <p class="section-lead">Reāli piemēri, kur AutoDrošs apdrošināšana ir atmaksājusies.</p>
     </div>
     <!--?php
                    $cases = [
                        [
                            'img'   =-->
     'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=600&amp;h=400&amp;fit=crop', 'alt' =&gt; 'Bojāta automašīna pēc avārijas', 'tag' =&gt; 'KASKO', 'title' =&gt; 'Pilnīgs zaudējums pēc avārijas', 'desc' =&gt; 'Klients Rīgā saskārās ar nopietnu ceļu satiksmes negadījumu. Pateicoties KASKO apdrošināšanai, saņēma pilnu automašīnas atlīdzību 5000 EUR apmērā.', 'result'=&gt; '5 000 EUR atlīdzība', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&amp;h=400&amp;fit=crop', 'alt' =&gt; 'Automašīna ar iespiestu durvju pusi', 'tag' =&gt; 'OCTA', 'title' =&gt; 'Trešās puses kaitējums autostāvvietā', 'desc' =&gt; 'Mūsu klientam autostāvvietā uztriecās cita automašīna. OCTA apdrošināšana segā remonta izmaksas vainīgā autovadītāja pusē — bez papildu izdevumiem klientam.', 'result'=&gt; 'Bezmaksas remonts', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1617196034183-421b4040ed20?w=600&amp;h=400&amp;fit=crop', 'alt' =&gt; 'Ceļu palīdzības mašīna velk automašīnu', 'tag' =&gt; 'Ārkārtas palīdzība', 'title' =&gt; 'Motora bojājums ārzemēs', 'desc' =&gt; 'Ceļojuma laikā uz Vāciju klientam notika motora avārija. Ārkārtas palīdzības polise nodrošināja evakuatoru un alternatīvo transportu mājas ceļam.', 'result'=&gt; 'Evakuācija no 450 km', ], ]; ?&gt;
     <div class="row g-4 mt-2">
      <!--?php foreach ($cases as $index =-->
      $case): ?&gt;
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="&lt;?php echo $index * 80; ?&gt;">
       <article class="case-card card h-100 d-flex flex-column">
        <div class="ratio ratio-16x9">
         <img src="&lt;?php echo $case['img']; ?&gt;" alt="&lt;?php echo htmlspecialchars($case['alt']); ?&gt;" width="600" height="400" loading="lazy" class="img-fluid">
        </div>
        <div class="card-body d-flex flex-column">
         <span class="case-tag"><!--?php echo htmlspecialchars($case['tag']); ?--></span>
         <h3 class="case-title"><!--?php echo htmlspecialchars($case['title']); ?--></h3>
         <p class="case-desc flex-grow-1"><!--?php echo htmlspecialchars($case['desc']); ?--></p>
         <div class="case-result mt-auto">
          <span class="case-result__label">Rezultāts:</span> <span class="case-result__value"><!--?php echo htmlspecialchars($case['result']); ?--></span>
         </div>
        </div>
       </article>
      </div>
      <!--?php endforeach; ?-->
     </div>
    </div>
   </section>
   <!-- ===== FAQ ACCORDION ===== -->
   <section class="py-4 py-md-5 section-faq" id="faq" aria-labelledby="faq-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
       <div class="section-header text-center" data-aos="fade-up">
        <p class="section-eyebrow">Biežāk uzdotie jautājumi</p>
        <h2 id="faq-heading">Mums jautā — mēs atbildam</h2>
       </div>
       <div class="accordion faq-accordion mt-4" id="faqAccordion" role="list" data-aos="fade-up" data-aos-delay="80">
        <!--?php
                                $faqs = [
                                    [
                                        'q' =-->
        'Kāda ir atšķirība starp OCTA un KASKO?', 'a' =&gt; 'OCTA (Obligātā civiltiesiskā apdrošināšana) ir likumā noteikta prasība visiem transportlīdzekļiem. Tā sedz Jūsu nodarītos zaudējumus trešajām personām. KASKO ir brīvprātīga apdrošināšana, kas papildus sedz arī Jūsu paša automašīnas bojājumus.', ], [ 'q' =&gt; 'Cik ātri varu saņemt apdrošināšanas polisi?', 'a' =&gt; 'Pēc pieteikuma iesniegšanas mūsu speciālists sazināsies ar Jums 15 minūšu laikā darba laikā. Polisi var noformēt un nosūtīt uz e-pastu tajā pašā dienā.', ], [ 'q' =&gt; 'Ko darīt ceļu satiksmes negadījuma gadījumā?', 'a' =&gt; 'Vispirms pārliecinieties par cilvēku drošību un izsauciet policiju (112). Fotografējiet notikuma vietu un savāciet otras puses kontaktdatus. Pēc tam sazinieties ar mums — mūsu konsultanti palīdzēs nokārtot bojājumu pieteikumu.', ], [ 'q' =&gt; 'Vai varu apdrošināt vecāku automašīnu?', 'a' =&gt; 'Jā! OCTA apdrošināšana ir pieejama visiem transportlīdzekļiem neatkarīgi no vecuma. KASKO nosacījumi var atšķirties atkarībā no automašīnas vecuma un stāvokļa — sazinieties ar mums, lai saņemtu individuālu piedāvājumu.', ], [ 'q' =&gt; 'Kādas ir maksājumu iespējas?', 'a' =&gt; 'Piedāvājam dažādas apmaksas iespējas: vienreizēju gada maksājumu (ar atlaidi), ceturkšņa vai ikmēneša maksājumus. Pieņemam maksājumus ar bankas pārskaitījumu, maksājumu kartēm un internetbanku.', ], ]; ?&gt; <!--?php foreach ($faqs as $fi =-->
         $faq): ?&gt;
        <div class="accordion-item faq-item" role="listitem">
         <h3 class="accordion-header" id="faq-h-&lt;?php echo $fi; ?&gt;">
          <button class="accordion-button faq-btn &lt;?php echo $fi &gt; 0 ? 'collapsed' : ''; ?&gt;" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-&lt;?php echo $fi; ?&gt;" aria-expanded="&lt;?php echo $fi === 0 ? 'true' : 'false'; ?&gt;" aria-controls="faq-c-&lt;?php echo $fi; ?&gt;"><!--?php echo htmlspecialchars($faq['q']); ?--></button>
         </h3>
         <div id="faq-c-&lt;?php echo $fi; ?&gt;" class="accordion-collapse collapse &lt;?php echo $fi === 0 ? 'show' : ''; ?&gt;" role="region" aria-labelledby="faq-h-&lt;?php echo $fi; ?&gt;">
          <div class="accordion-body faq-body">
           <!--?php echo htmlspecialchars($faq['a']); ?-->
          </div>
         </div>
        </div>
        <!--?php endforeach; ?-->
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== TEAM SECTION ===== -->
   <section class="py-4 py-md-5 section-team" id="team" aria-labelledby="team-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Mūsu komanda</p>
      <h2 id="team-heading">Speciālisti, kuriem uzticaties</h2>
      <p class="section-lead">Mūsu pieredzējušie konsultanti ir vienmēr gatavi palīdzēt.</p>
     </div>
     <!--?php
                    $team = [
                        [
                            'img'  =-->
     'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&amp;h=400&amp;fit=crop&amp;crop=face', 'name' =&gt; 'Andris Kalniņš', 'role' =&gt; 'Galvenais apdrošināšanas brokeris', 'bio' =&gt; '15 gadu pieredze auto apdrošināšanas jomā Latvijā un Baltijā.', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&amp;h=400&amp;fit=crop&amp;crop=face', 'name' =&gt; 'Ilze Ozola', 'role' =&gt; 'Klientu attiecību vadītāja', 'bio' =&gt; 'Nodrošina personalizētu pieeju katram klientam ar empātiju un profesionalitāti.', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&amp;h=400&amp;fit=crop&amp;crop=face', 'name' =&gt; 'Mārtiņš Zariņš', 'role' =&gt; 'Zaudējumu atlīdzību specialists', 'bio' =&gt; 'Ekspertīze bojājumu novērtēšanā un atlīdzību pieteikumu apstrādē.', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&amp;h=400&amp;fit=crop&amp;crop=face', 'name' =&gt; 'Laura Vīksna', 'role' =&gt; 'Digitālo pakalpojumu vadītāja', 'bio' =&gt; 'Atbild par tiešsaistes platformas attīstību un digitālo klientu pieredzi.', ], ]; ?&gt;
     <div class="row g-4 mt-2">
      <!--?php foreach ($team as $ti =-->
      $member): ?&gt;
      <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="&lt;?php echo $ti * 80; ?&gt;">
       <div class="team-card card h-100 d-flex flex-column text-center">
        <div class="team-avatar-wrap">
         <div class="ratio ratio-1x1 team-avatar-ratio">
          <img src="&lt;?php echo $member['img']; ?&gt;" alt="&lt;?php echo htmlspecialchars($member['name']); ?&gt; — &lt;?php echo htmlspecialchars($member['role']); ?&gt;" width="400" height="400" loading="lazy" class="team-avatar">
         </div>
        </div>
        <div class="card-body d-flex flex-column">
         <h3 class="team-name"><!--?php echo htmlspecialchars($member['name']); ?--></h3>
         <p class="team-role"><!--?php echo htmlspecialchars($member['role']); ?--></p>
         <p class="team-bio flex-grow-1"><!--?php echo htmlspecialchars($member['bio']); ?--></p>
         <a href="/#contact" class="btn btn-outline-fuchsia btn-sm mt-auto">Sazināties</a>
        </div>
       </div>
      </div>
      <!--?php endforeach; ?-->
     </div>
    </div>
   </section>
   <!-- ===== BLOG POSTS ===== -->
   <section class="py-4 py-md-5 section-blog" id="blog" aria-labelledby="blog-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Jaunākais blogā</p>
      <h2 id="blog-heading">Noderīgi padomi un jaunumi</h2>
      <p class="section-lead">Aktuāla informācija par auto apdrošināšanu Latvijā.</p>
     </div>
     <!--?php
                    $posts = [
                        [
                            'img'   =-->
     'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&amp;h=380&amp;fit=crop', 'alt' =&gt; 'Automašīna uz nakts ceļa — braukšanas drošība', 'date' =&gt; '2025-05-20', 'tag' =&gt; 'OCTA', 'title' =&gt; 'OCTA 2025: Kas mainīsies šogad?', 'desc' =&gt; 'Uzziniet par jaunākajām izmaiņām obligātajā civiltiesiskajā apdrošināšanā un kā tās ietekmēs Jūsu automašīnas izmaksas.', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=600&amp;h=380&amp;fit=crop', 'alt' =&gt; 'Moderns auto stāvvietā', 'date' =&gt; '2025-05-10', 'tag' =&gt; 'KASKO', 'title' =&gt; '5 iemesli, kāpēc vērts iegādāties KASKO', 'desc' =&gt; 'Daudzi autovadītāji uzskata, ka KASKO ir lieka izdevumu pozīcija. Šajā rakstā skaidrojam, kad un kāpēc tā var atmaksāties vairākkārt.', ], [ 'img' =&gt; 'https://images.unsplash.com/photo-1585776245991-cf89dd7fc73a?w=600&amp;h=380&amp;fit=crop', 'alt' =&gt; 'Avārija uz ceļa — kā rīkoties', 'date' =&gt; '2025-04-28', 'tag' =&gt; 'Padomi', 'title' =&gt; 'Ko darīt pēc ceļu satiksmes negadījuma?', 'desc' =&gt; 'Soli pa solim: pareiza rīcība negadījuma gadījumā, lai nodrošinātu ātrāku un pilnīgāku atlīdzību no apdrošināšanas sabiedrības.', ], ]; ?&gt;
     <div class="row g-4 mt-2">
      <!--?php foreach ($posts as $pi =-->
      $post): ?&gt;
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="&lt;?php echo $pi * 80; ?&gt;">
       <article class="blog-card card h-100 d-flex flex-column">
        <div class="ratio ratio-16x9">
         <img src="&lt;?php echo $post['img']; ?&gt;" alt="&lt;?php echo htmlspecialchars($post['alt']); ?&gt;" width="600" height="380" loading="lazy" class="img-fluid">
        </div>
        <div class="card-body d-flex flex-column">
         <div class="blog-meta">
          <span class="blog-tag"><!--?php echo htmlspecialchars($post['tag']); ?--></span> <time class="blog-date" datetime="&lt;?php echo $post['date']; ?&gt;"> <!--?php echo date('d.m.Y', strtotime($post['date'])); ?--> </time>
         </div>
         <h3 class="blog-title"><!--?php echo htmlspecialchars($post['title']); ?--></h3>
         <p class="blog-desc flex-grow-1"><!--?php echo htmlspecialchars($post['desc']); ?--></p>
         <a href="/#blog" class="btn btn-outline-gunmetal btn-sm mt-auto">Lasīt vairāk</a>
        </div>
       </article>
      </div>
      <!--?php endforeach; ?-->
     </div>
     <div class="text-center mt-5" data-aos="fade-up">
      <a href="/#blog" class="btn btn-fuchsia">Skatīt visus rakstus</a>
     </div>
    </div>
   </section>
   <!-- ===== MOBILE APP PROMO ===== -->
   <section class="py-4 py-md-5 section-app" id="app" aria-labelledby="app-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="row align-items-center g-5">
      <div class="col-12 col-md-6 order-2 order-md-1" data-aos="fade-right">
       <p class="section-eyebrow">Mobilā aplikācija</p>
       <h2 id="app-heading">Pārvaldiet apdrošināšanu no viedtālruņa</h2>
       <p class="section-lead">Lejupielādējiet AutoDrošs aplikāciju un pārvaldiet visas polises, pieteiciet bojājumus un sazinieties ar ekspertiem — vienā vietā.</p>
       <ul class="app-features" role="list">
        <li class="app-feature" role="listitem"><span class="app-feature__icon" aria-hidden="true"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
           <polyline points="20 6 9 17 4 12" />
          </svg> 
         </span> Polises digitālā formātā vienmēr pie rokas</li>
        <li class="app-feature" role="listitem"><span class="app-feature__icon" aria-hidden="true"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
           <polyline points="20 6 9 17 4 12" />
          </svg> 
         </span> Bojājumu pieteikums ar fotogrāfijām</li>
        <li class="app-feature" role="listitem"><span class="app-feature__icon" aria-hidden="true"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
           <polyline points="20 6 9 17 4 12" />
          </svg> 
         </span> Tiešsaistes tērzēšana ar konsultantiem</li>
        <li class="app-feature" role="listitem"><span class="app-feature__icon" aria-hidden="true"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
           <polyline points="20 6 9 17 4 12" />
          </svg> 
         </span> Paziņojumi par polises termiņiem</li>
       </ul>
       <div class="app-store-btns">
        <a href="/#app" class="app-store-btn" aria-label="Lejupielādēt App Store"> 
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
          <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
         </svg> App Store 
        </a> <a href="/#app" class="app-store-btn" aria-label="Lejupielādēt Google Play"> 
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
          <path d="M3.18 23.76c.34.19.74.2 1.1.04L14.84 12 4.28.2C3.92.04 3.52.05 3.18.24 2.48.63 2 1.44 2 2.36v19.28c0 .92.48 1.73 1.18 2.12zM16.98 13.68L6.26 23.17l9.03-5.18 1.69-4.31zM20.85 10.71L18.1 9.17l-1.95 2.83L18 14.83l2.85-1.63c.74-.43 1.15-1.16 1.15-1.95 0-.8-.41-1.54-1.15-1.54zM6.26.83l10.72 9.49-1.7 2.46-9.02-5.18L6.26.83z" />
         </svg> Google Play 
        </a>
       </div>
      </div>
      <div class="col-12 col-md-6 order-1 order-md-2" data-aos="fade-left">
       <div class="app-mockup-wrap">
        <div class="ratio ratio-3x4">
         <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&amp;h=800&amp;fit=crop" alt="AutoDrošs mobilā aplikācija viedtālrunī" width="600" height="800" loading="lazy" class="img-fluid app-mockup-img">
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- ===== QUICK LINKS ===== -->
   <section class="py-4 py-md-5 section-quick-links" id="quick-links" aria-labelledby="quick-links-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <h2 id="quick-links-heading" class="visually-hidden">Ātrās saites</h2>
     <div class="row g-3 justify-content-center">
      <!--?php
                        $quick_links = [
                            ['href' =-->
      '/#quote', 'label' =&gt; 'Aprēķināt OCTA cenu', 'icon' =&gt; '
      <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
       '], ['href' =&gt; '/#services', 'label' =&gt; 'KASKO apdrošināšana', 'icon' =&gt; '
       <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z">
        '], ['href' =&gt; '/#faq', 'label' =&gt; 'Biežāk uzdotie jautājumi', 'icon' =&gt; '
        <circle cx="12" cy="12" r="10">
         <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3">
          <line x1="12" y1="17" x2="12.01" y2="17">
           '], ['href' =&gt; '/#contact', 'label' =&gt; 'Sazināties ar mums', 'icon' =&gt; '
           <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.65 3.44 2 2 0 0 1 3.62 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.81a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.73 16.92z">
            '], ['href' =&gt; '/#blog', 'label' =&gt; 'Padomi un jaunumi', 'icon' =&gt; '
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
             <polyline points="14 2 14 8 20 8">
              <line x1="16" y1="13" x2="8" y2="13">
               <line x1="16" y1="17" x2="8" y2="17">
                <polyline points="10 9 9 9 8 9">
                 '], ['href' =&gt; '/#cases', 'label' =&gt; 'Gadījumu izpēte', 'icon' =&gt; '
                 <rect x="2" y="3" width="20" height="14" rx="2">
                  <line x1="8" y1="21" x2="16" y2="21">
                   <line x1="12" y1="17" x2="12" y2="21">
                    '], ]; ?&gt; <!--?php foreach ($quick_links as $qi =-->
                     $ql): ?&gt;
                    <div class="col-6 col-sm-4 col-md-2" data-aos="zoom-in" data-aos-delay="&lt;?php echo $qi * 60; ?&gt;">
                     <a href="&lt;?php echo $ql['href']; ?&gt;" class="quick-link-item"> 
                      <div class="quick-link-icon" aria-hidden="true">
                       <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <!--?php echo $ql['icon']; ?-->
                       </svg>
                      </div> 
                      <span class="quick-link-label"><!--?php echo htmlspecialchars($ql['label']); ?--></span> 
                     </a>
                    </div>
                    <!--?php endforeach; ?-->
                   </line>
                  </line>
                 </rect>
                </polyline>
               </line>
              </line>
             </polyline>
            </path>
           </path>
          </line>
         </path>
        </circle>
       </path>
      </path>
     </div>
    </div>
   </section>
   <!-- ===== CONTACT SECTION ===== -->
   <section class="py-4 py-md-5 section-contact" id="contact" aria-labelledby="contact-heading" style="scroll-margin-top: var(--nav-h);">
    <div class="container">
     <div class="section-header text-center" data-aos="fade-up">
      <p class="section-eyebrow">Sazināties</p>
      <h2 id="contact-heading">Esam šeit, lai palīdzētu</h2>
      <p class="section-lead">Jautājumi? Sazinieties ar mūsu komandu darba dienās 8:00–20:00.</p>
     </div>
     <div class="row g-4 mt-2 justify-content-center">
      <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="0">
       <div class="contact-card text-center">
        <div class="contact-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.65 3.44 2 2 0 0 1 3.62 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.81a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.73 16.92z" />
         </svg>
        </div>
        <h3 class="contact-title">Tālrunis</h3>
        <a href="tel:+371 6 6490484" class="contact-value">+371 6 6490484</a>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="80">
       <div class="contact-card text-center">
        <div class="contact-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /><polyline points="22,6 12,13 2,6" />
         </svg>
        </div>
        <h3 class="contact-title">E-pasts</h3>
        <a href="mailto:&lt;?php echo $support_email; ?&gt;" class="contact-value"><!--?php echo $support_email; ?--></a>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="160">
       <div class="contact-card text-center">
        <div class="contact-icon" aria-hidden="true">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" />
         </svg>
        </div>
        <h3 class="contact-title">Adrese</h3>
        <address class="contact-value">Skanste City, Skanstes iela 50, Floor 9, Office 302, LV-1013 Rīga</address>
       </div>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- ===== FOOTER ===== -->
  <!-- ===== COOKIE CONSENT BANNER ===== -->
  <div class="cookie-banner" id="cookieBanner" role="dialog" aria-modal="false" aria-labelledby="cookie-heading" aria-describedby="cookie-desc" aria-live="polite">
   <div class="cookie-banner__content">
    <div class="cookie-banner__text">
     <h2 id="cookie-heading" class="cookie-banner__title">Mēs izmantojam sīkdatnes</h2>
     <p id="cookie-desc" class="cookie-banner__desc">Šī tīmekļa vietne izmanto sīkdatnes, lai uzlabotu lietošanas pieredzi un analizētu apmeklētāju uzvedību. Sīkāka informācija pieejama <a href="/privatuma-politika" class="link-fuchsia">Privātuma politikā</a>.</p>
    </div>
    <div class="cookie-banner__actions">
     <button type="button" class="btn btn-outline-gunmetal btn-sm" id="cookieDecline">Noraidīt</button>
     <button type="button" class="btn btn-fuchsia btn-sm" id="cookieAccept">Piekrist visām</button>
    </div>
   </div>
  </div>
  <!-- ===== SCRIPTS ===== -->
  <footer class="dr-footer">
  <div class="dr-footer-inner">
    <div class="dr-footer-brand">
      <div class="dr-footer-logo-text">domain</div>
      <p class="dr-footer-disclaimer">"domain" ir neatkarīgs pakalpojums. Visa informācija šajā vietnē domain.com ir paredzēta tikai vispārīgiem informatīviem nolūkiem un nav uzskatāma par juridisku, finanšu vai jebkāda cita veida profesionālu konsultāciju.</p>
    </div>
    <div class="dr-footer-grid">
      <nav class="dr-footer-nav" aria-label="Galvenā navigācija">
        <h2 class="dr-footer-heading">Navigācija</h2>
        <ul class="dr-footer-list">
          <li class="dr-footer-item"><a href="./index.php" class="dr-footer-link">Home</a></li>
        </ul>
      </nav>
      <nav class="dr-footer-legal" aria-label="Juridiskā informācija">
        <h2 class="dr-footer-heading">Juridiskā informācija</h2>
        <ul class="dr-footer-list dr-footer-list-empty">
        </ul>
      </nav>
      <div class="dr-footer-contact">
        <h2 class="dr-footer-heading">Kontakti</h2>
        <ul class="dr-footer-list">
          <li class="dr-footer-item"><span class="dr-footer-contact-label">Adrese:</span> <span class="dr-footer-contact-value">Skanste City, Skanstes iela 50, Floor 9, Office 302, LV-1013 Rīga</span></li>
          <li class="dr-footer-item"><span class="dr-footer-contact-label">Tālrunis:</span> <a href="tel:+371 6 6490484" class="dr-footer-link">+371 6 6490484</a></li>
          <li class="dr-footer-item"><span class="dr-footer-contact-label">E-pasts:</span> <a href="mailto:partners@domain.com" class="dr-footer-link">partners@domain.com</a></li>
        </ul>
      </div>
    </div>
    <div class="dr-footer-bottom">
      <p class="dr-footer-meta"><span class="dr-year"></span> © domain. All rights reserved.</p>
    </div>
  </div>
</footer>
  
   
  

<script src="script.js" defer></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
if (typeof AOS !== "undefined" && !window.__AOS_INITIALIZED__) {
  AOS.init({ once: true, duration: 700, easing: "ease-out-cubic" });
  window.__AOS_INITIALIZED__ = true;
}
</script>
<script src="./header-footer.js"></script>
</body>
</html>