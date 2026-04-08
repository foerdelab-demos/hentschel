<?php
require_once __DIR__ . '/data/services.php';
include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
?>

<main id="main-content">

    <!-- ============================================================
         HERO
    ============================================================ -->
    <section class="hero" id="hero" aria-labelledby="hero-headline">
        <div class="hero__inner container">
            <div class="hero__content">
                <p class="hero__eyebrow reveal">Familienbetrieb seit 1936</p>
                <h1 class="hero__headline reveal reveal--delay-1" id="hero-headline">
                    Handwerk,<br>
                    <em>das bleibt.</em>
                </h1>
                <p class="hero__body reveal reveal--delay-2">
                    Marmorieren, Vergoldung, Fassmalerei und klassische Malerarbeiten –<br>
                    seit Generationen in Owschlag, im Herzen Schleswig-Holsteins.
                </p>
                <a href="#kontakt" class="btn btn--primary reveal reveal--delay-3">Projekt anfragen</a>
            </div>
        </div>
        <div class="hero__figure" aria-hidden="true">
            <div class="hero__image-placeholder"></div>
        </div>
    </section>

    <!-- ============================================================
         ÜBER UNS
    ============================================================ -->
    <section class="about" id="ueber-uns" aria-labelledby="about-headline">
        <div class="about__inner container">
            <div class="about__header reveal">
                <span class="section-label">Über uns</span>
                <h2 class="about__headline" id="about-headline">
                    Ein Betrieb. Eine Familie.<br>
                    <em>Neun Jahrzehnte.</em>
                </h2>
            </div>

            <div class="about__body">
                <div class="about__text reveal reveal--delay-1">
                    <p class="lead">
                        Seit dem Jahre 1936 befindet sich die Traditions-Malerei Hentschel in Familienhand.
                    </p>
                    <p>
                        Mitten im Herzen Schleswig-Holsteins – in Owschlag – ist unser Betrieb zu Hause. Neben der klassischen Malerei legen wir Wert auf die Herstellung vieler weiterer Maleroberflächen: Marmorierungen, Illusionsmalerei und Glättetechniken gehören ebenso zu unserem Handwerk wie die Patinierung von Möbeln, Vergoldung und Fassmalerei.
                    </p>
                    <p>
                        Unser breitgefächertes Angebot lässt Ihren Vorstellungen und Wünschen stets den größtmöglichen Spielraum. Wir freuen uns auf das Gespräch mit Ihnen.
                    </p>
                </div>

                <div class="about__figures reveal reveal--delay-2" aria-hidden="true">
                    <div class="about__figure-block">
                        <div class="about__image-placeholder"></div>
                    </div>
                    <div class="about__stat-block">
                        <p class="about__stat-number">1936</p>
                        <p class="about__stat-label">Gründungsjahr</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         LEISTUNGEN
    ============================================================ -->
    <section class="services" id="leistungen" aria-labelledby="services-headline">
        <div class="services__inner container">
            <div class="services__header reveal">
                <span class="section-label">Leistungen</span>
                <h2 class="services__headline" id="services-headline">
                    Das Handwerk<br>
                    <em>in seiner ganzen Breite</em>
                </h2>
            </div>

            <div class="services__grid">
                <?php foreach ($services as $index => $service): ?>
                <article class="service-card reveal" id="<?= htmlspecialchars($service['id']) ?>">
                    <div class="service-card__image-wrap" aria-hidden="true">
                        <div class="service-card__image-placeholder"></div>
                    </div>
                    <div class="service-card__body">
                        <span class="service-card__index"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></span>
                        <h3 class="service-card__title"><?= htmlspecialchars($service['title']) ?></h3>
                        <p class="service-card__tagline"><?= htmlspecialchars($service['tagline']) ?></p>
                        <p class="service-card__description"><?= htmlspecialchars($service['description']) ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================================
         WERTE
    ============================================================ -->
    <section class="values" id="werte" aria-labelledby="values-headline">
        <div class="values__inner container">
            <div class="values__header reveal">
                <span class="section-label">Arbeitsweise</span>
                <h2 class="values__headline" id="values-headline">
                    Präzision,<br>
                    <em>Erfahrung und Vertrauen</em>
                </h2>
            </div>

            <div class="values__grid">
                <div class="value-item reveal">
                    <h3 class="value-item__title">Tradition</h3>
                    <p class="value-item__text">Über mehrere Generationen weitergegeben – das Wissen um Techniken, Materialien und Oberflächen, das nur durch echte Handwerksarbeit entsteht.</p>
                </div>
                <div class="value-item reveal reveal--delay-1">
                    <h3 class="value-item__title">Präzision</h3>
                    <p class="value-item__text">Jede Oberfläche wird mit Sorgfalt vorbereitet, jeder Auftrag mit handwerklicher Genauigkeit ausgeführt. Qualität entsteht nicht durch Schnelligkeit, sondern durch Aufmerksamkeit.</p>
                </div>
                <div class="value-item reveal reveal--delay-2">
                    <h3 class="value-item__title">Individualität</h3>
                    <p class="value-item__text">Kein Projekt gleicht dem anderen. Wir entwickeln gemeinsam mit Ihnen Lösungen, die Ihren Vorstellungen entsprechen – von der ersten Beratung bis zur vollendeten Oberfläche.</p>
                </div>
                <div class="value-item reveal reveal--delay-3">
                    <h3 class="value-item__title">Persönlichkeit</h3>
                    <p class="value-item__text">Als Familienbetrieb stehen wir jederzeit persönlich für Sie bereit. Wir nehmen uns Zeit für Ihre Anfragen und begleiten Sie durch den gesamten Prozess.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         GALERIE
    ============================================================ -->
    <section class="gallery" id="galerie" aria-labelledby="gallery-headline">
        <div class="gallery__inner container">
            <div class="gallery__header reveal">
                <span class="section-label">Arbeiten</span>
                <h2 class="gallery__headline" id="gallery-headline">
                    Einblick in<br>
                    <em>unsere Arbeit</em>
                </h2>
                <p class="gallery__intro">Eine Auswahl aus unserem Repertoire – Oberflächen, die erzählen.</p>
            </div>

            <div class="gallery__grid" role="list">
                <?php
                $gallery_items = [
                    ['label' => 'Marmorierung',        'aspect' => 'landscape'],
                    ['label' => 'Vergoldung Detail',   'aspect' => 'portrait'],
                    ['label' => 'Glättetechnik',       'aspect' => 'portrait'],
                    ['label' => 'Fassmalerei',         'aspect' => 'landscape'],
                    ['label' => 'Illusionsmalerei',    'aspect' => 'landscape'],
                    ['label' => 'Patinierung',         'aspect' => 'portrait'],
                ];
                foreach ($gallery_items as $i => $item):
                ?>
                <figure class="gallery__item gallery__item--<?= $item['aspect'] ?> reveal" role="listitem" aria-label="<?= htmlspecialchars($item['label']) ?>">
                    <div class="gallery__placeholder" data-index="<?= $i + 1 ?>"></div>
                    <figcaption class="gallery__caption"><?= htmlspecialchars($item['label']) ?></figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================================
         KONTAKT
    ============================================================ -->
    <section class="contact" id="kontakt" aria-labelledby="contact-headline">
        <div class="contact__inner container">
            <div class="contact__header reveal">
                <span class="section-label">Kontakt</span>
                <h2 class="contact__headline" id="contact-headline">
                    Lassen Sie uns<br>
                    <em>gemeinsam sprechen</em>
                </h2>
            </div>

            <div class="contact__body">
                <div class="contact__info reveal reveal--delay-1">
                    <p class="contact__intro">
                        Wir freuen uns auf Ihre Anfrage. Schildern Sie uns Ihr Projekt – wir melden uns persönlich und zeitnah bei Ihnen.
                    </p>
                    <address class="contact__address">
                        <dl class="contact__details">
                            <div class="contact__detail-row">
                                <dt>Anschrift</dt>
                                <dd>
                                    Hentschel Malerei<br>
                                    Straße und Hausnummer<br>
                                    24811 Owschlag<br>
                                    Schleswig-Holstein
                                </dd>
                            </div>
                            <div class="contact__detail-row">
                                <dt>Telefon</dt>
                                <dd><a href="tel:+49XXXXXXXXX">Telefonnummer eintragen</a></dd>
                            </div>
                            <div class="contact__detail-row">
                                <dt>E-Mail</dt>
                                <dd><a href="mailto:info@hentschel-malerei.de">E-Mail-Adresse eintragen</a></dd>
                            </div>
                        </dl>
                    </address>
                </div>

                <div class="contact__form-wrap reveal reveal--delay-2">
                    <form class="contact-form" id="contact-form" method="post" action="#kontakt" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name" class="form-label">Name <span aria-hidden="true">*</span></label>
                                <input
                                    type="text"
                                    id="contact-name"
                                    name="name"
                                    class="form-input"
                                    required
                                    autocomplete="name"
                                    aria-required="true"
                                >
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="form-label">E-Mail <span aria-hidden="true">*</span></label>
                                <input
                                    type="email"
                                    id="contact-email"
                                    name="email"
                                    class="form-input"
                                    required
                                    autocomplete="email"
                                    aria-required="true"
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-phone" class="form-label">Telefon</label>
                            <input
                                type="tel"
                                id="contact-phone"
                                name="phone"
                                class="form-input"
                                autocomplete="tel"
                            >
                        </div>
                        <div class="form-group">
                            <label for="contact-subject" class="form-label">Betreff</label>
                            <select id="contact-subject" name="subject" class="form-select">
                                <option value="" disabled selected>Leistung wählen</option>
                                <?php foreach ($services as $service): ?>
                                <option value="<?= htmlspecialchars($service['id']) ?>"><?= htmlspecialchars($service['title']) ?></option>
                                <?php endforeach; ?>
                                <option value="allgemein">Allgemeine Anfrage</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message" class="form-label">Nachricht <span aria-hidden="true">*</span></label>
                            <textarea
                                id="contact-message"
                                name="message"
                                class="form-textarea"
                                rows="5"
                                required
                                aria-required="true"
                            ></textarea>
                        </div>
                        <div class="form-group form-group--submit">
                            <button type="submit" class="btn btn--primary">Anfrage senden</button>
                            <p class="form-note">Mit dem Absenden stimmen Sie unserer <a href="datenschutz">Datenschutzerklärung</a> zu.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
