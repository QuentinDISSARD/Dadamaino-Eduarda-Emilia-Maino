<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>001_DADAMAINO_MONOGRAPHY_INT</title>

  <!-- mes styles  -->
  <link rel="stylesheet" href="style/reset.css">
  <link rel="stylesheet" href="style/printit.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,100,400;1,85.5,800&display=swap" rel="stylesheet">

  <!-- le style de l’interface paged.js  -->
  <link rel="stylesheet" href="style/interface.css">

  <!-- le script paged js -->
  <script src="js/paged.polyfill.js"></script>

  <!-- reload in place -->
  <script src="js/paged.reload-in-place.js"></script>

  <script>
    if(!navigator.userAgent.includes("Chrome")){
      var message = ":-( Only Chrome/Chromium browsers can properly print out this document"
      result = window.confirm(message);
      if(result){
        alert('Sorry…')
      } else {
        alert('Really sorry…')
      }
    }
  </script>
  <script src="minimasonry/build/minimasonry.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const pages = document.querySelectorAll('.pagedjs_page.left');
      pages.forEach((page, index) => {
          if (index === 2 || index === 4) { // Supposons que la 3e et 5e page de gauche soient spéciales
              page.querySelector('.pagedjs_margin-bottom-left').style.display = 'none';
              page.querySelector('.pagedjs_margin-bottom-left-corner').style.display = 'none';
          }
      });
  });
  </script>
  <script>
  // external js: masonry.pkgd.js, imagesloaded.pkgd.js

  // init Masonry
  var grid = document.querySelector('.grid');

  var msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  imagesLoaded( grid ).on( 'progress', function() {
    // layout Masonry after each image loads
    msnry.layout();
  });
  </script>
  
</head>
<body>

    <!--  COUV  -->
    <section class="cover-1">
      <br>
      <h1>Dadamaino<br>Eduarda Emilia Maino</h1>
      <h2>
        Texts by Bernard Blistène<br>
        Avant-propos by Flaminio Gualdoni
      </h2>
      <img class="couv" src="import/1_volumi/V21.2.png" alt="Couverture du livre">
      <p id="booktitle">Dadamaino</p>
    </section>


    <section class="empty"></section>

    <!--  TITLE  -->
    <section class="titre">
      Dadamaino<br>Eduarda Emilia Maino<br><br>Texts by Bernard Blistène<br>Avant-propos by Flaminio Gualdoni<br><br><img class="logo" src="import/logo.svg">
    </section>

    <section class="empty"></section>

    <!-- FAUX-TITRE -->
    <section class="faux_titre">
      <p>Dadamaino</p>
    </section>





    <!--  TABLE OF CONTENTS  -->
    <section class="sommaire">
      <p>Table of contents</p>
      <br>
      <div class="entry">
        <span class="page">7</span>
        <span class="title">Avant-propos, Flaminio Gualdoni, Director of the Dadamaino Archive in Milan</span>
      </div>
      <br>
      <div class="entry">
        <span class="page">11</span>
        <span class="title">volumi</span>
      </div>
      <div class="entry">
        <span class="page">23</span>
        <span class="title">volumi a moduli sfasati</span>
      </div>
      <div class="entry">
        <span class="page">31</span>
        <span class="title">ricerca del colore</span>
      </div>
      <div class="entry">
        <span class="page">43</span>
        <span class="title">oggetti ottico-dinamici</span>
      </div>
      <div class="entry">
        <span class="page">51</span>
        <span class="title">inconscio razionale</span>
      </div>
      <div class="entry">
        <span class="page">59</span>
        <span class="title">rilievi</span>
      </div>
      <div class="entry">
        <span class="page">71</span>
        <span class="title">cromorilievi</span>
      </div>
      <div class="entry">
        <span class="page">77</span>
        <span class="title">alfabeto della mente</span>
      </div>
      <div class="entry">
        <span class="page">85</span>
        <span class="title">costellazioni</span>
      </div>
      <br>
      <div class="entry">
        <span class="page">95</span>
        <span class="title">Solo exhibitions and collections</span>
      </div>
      <div class="entry">
        <span class="page">97</span>
        <span class="title">Selected catalogues</span>
      </div>
    </section>





    <!-- AVANT-PROPOS -->
    <section class="intro">
      <p class="avant_propos">Avant-propos</p><br>
        <p class="text_avant_propos">
          Eduarda Emilia Maino (2 October 1930 – 13 April 2004), known as Dadamaino, was an Italian visualartist and painter. She was a member of the Milanese avant-garde of the 1960s. Eduarda Emilia Maino, nicknamed "Dada" for Eduarda, was born in Milan, Italy. Dadamaino first completed a medical degree before taking up art at the end of the 1950s. She frequented a group of young artists who followed Lucio Fontana and the spatialism movement. Members of the group included&#8239;: Piero Manzoni, Gianni Colombo, Enrico Castellani and Agostino Bonalumi. In 1958, Dadamaino produced a series of works called Volumi, which were exhibited in her first solo show at the Galleria dei Bossi in Milan the same year.<sup>1</sup> Shortly after, Dadamaino joined Azimuth, a group funded by Piero Manzoni, and the Germany-based Group Zero, a movement forged in the late 1950s by the German artists Otto Piene and Heinz Mack, that fostered artistic discovery by promoting a new environment unconstrained by past artistic traditions. The "zero" in the name was not intended to have the negative connotations of nihilism or abjection but instead highlighted the group’s affinities with Minimalism and Italian Arte Povera in calling for simple forms and colors and expressions of light and using everyday materials. Lucio Fontana, Yves Klein, Hans Haacke, and Piero Manzoni were all notable members.<br><br>

          The following years brought important experiments, among them the occupation with color grading and interferences between 1966 and 1968. Dadamaino intensively examined the effects of spectral colors to which she added black, white and brown in order to interrelate them. In 1967, at the peak of this development, she made her well known ricerca del colore, an "exploration of the color". In squared plates Dadamaino analyzes the reciprocal effect of color and form, by grading each color in light and dark shades and contrasting it in lamellar stripes, she creates motion in the observer’s eye. These were works of special aesthetic and one of her most important period of creation.<sup>2</sup><br><br>

          Dadamaino counted Lucio Fontana and Yves Klein as major influences. Dadamaino’s friend, the artist Piero Manzoni, commented on her artistic aims in the catalogue accompanying a solo exhibition of her work in Padua in 1961, saying that she had overcome the "problem of painting" and that other parameters informed her work. She believed her works were the flags of a new world; they did not just "say something different", they also said something new. Ten years earlier, Eduarda Emilia Maino (who became Dadamaino following an error in the catalogue for an exhibition in the Netherlands in 1961) began working as a self-taught painter. Her encounter with the work of Lucio Fontana, the father of Spatialism, led her towards a form of art that she conceived as a radical plunge into space and other possible dimensions. In the city of Milan, which had connections with the Paris art scene and was open to cultural exchanges with the Netherlands, Germany, and Denmark, artists began to look at hitherto unknown formal solutions and experimental techniques.<br><br>

          Dadamaino’s series "Volumi" [Volumes], dating from the late 1950s, are monochrome canvases punctured by elliptical holes, a form of conceptual exploration into the depth of the canvas. Her "Volumi a moduli sfasati" [Volumes with out-of-phase modules] feature thin overlapping plates of Rhodoid plastic, with each layer slightly shifted to produce a dynamic optical effect. Combining her studies of perception with her interest in geometry – following directly in the footsteps of the Paduan Group N and the Düsseldorf Group Zero – Dadamaino attracted the notice of the European art world with her "Oggetti ottico-dinamici" [Optical-dynamic objects] and "Oggetti visivi instabili" [Unstable visual objects], which were shown at the Musée des Arts Décoratifs in Paris in its 1964 exhibition of new international visual trends entitled Nouvelle Tendance&#8239;: Propositions visuelles du mouvement international. In these works, she placed small aluminium plates, arranged according to size and based on precise mathematical calculations, onto nylon wires to create the optical effect of circular shapes. She explained that the resulting square and rectangular surfaces take on the appearance of semi-spheres with an elusive dynamic, adding that although static, the object appears to be in a constant state of motion and transformation.<br><br>
        </p>

        <p class="text_avant_propos_2">
          After experimenting with aluminium, plastic, and Plexiglas, she went on to produce series such as "Ricerca del colore" (Research into colours), a chromatic combination of different colours of the spectrum based on a predetermined number of variations, and "Fluorescenti" [Fluorescents], created by sticking fluorescent strips onto a monochrome base, so that they took shape through the vibrations of the plastic and the effects of ultraviolet rays. She described the result as "lumino-kinetic". She remains unforgettable for her obstinate and tireless exploration of the surface as a threshold, something that is crossed, while also opening up all sorts of possibilities. This is demonstrated in series such as "Inconscio razionale" [Rational unconscious] and "Alfabeto della mente" [Alphabet of the mind], in which calligraphic signs record oscillations of thought, brain patterns, pulses, and falls. The result is works that are both rigorous and lyrical. Dadamaino, real name Eduarda Emilia Maino, in the context of her intense creative research has crossed many different artistic movements starting from those born in Europe at the end of the 40s. She participates in the birth of the first Spatialist Manifesto written by Lucio Fontana in 1948, and of the Gruppo N in Italy, participates in the Gruppo Zéro in Germany and Equipo 57 in Spain up to the Gruppo di Ricerca dell’Arte Visuale (G.R.A.V.) in France and finally is part of the Nuova Tendenza in Zagreb.<br><br>

          Dadamaino works with the circle of artists such as Piero Manzoni and Lucio Fontana and at the end of the 50s approaches Spatialism with forms and surfaces full of analytical reflections. "Volumi" is the series of works with models structured towards infinity. The optical vibrations that Dadamaino obtains with the creation of these latter – phased modules – give rise to other research on the vibration of color.<br><br>

          This Parisian exhibition features the artist’s imaginary alphabets; with "Alfabeto della mente" (Alphabet of the mind) the series of "Scritture simboliche" (Sign Writings) begins, the creations that allow us to visualize – as if they were pages of newspapers, of a daily newspaper – the vicissitudes of life, of History, that of the Seventies and Eighties entitled "I fatti della Vita" (The facts of Life) presented at the Venice Biennale of the same period. The pulse of the world, a spatial ensemble that will evolve into the series of "Constellations", the chrome reliefs on canvas and paper that recall star clusters. The Eighties are also characterized by the reappearance of color in Dadamaino, replacing black and white. The canvases of this period come to life in signs/drawings that aggregate and disintegrate at the same time. Year after year the artist draws on plastic, countless and endless writings with a constant, lively and vibrant sign.<br><br>

          We must not seek the intelligence of the effect. What we should appreciate, rather, is the slow and meticulous flow of time, that becomes rhythm, the time of the reading but above all of the creation, which has wholly absorbed the sentient and thinking presence of the author. It is therefore a matter of an analytical, an apparently neutral, attitude, which is nevertheless charged with a subjective plenitude that is the antithesis of the possible anonymity at that time preached by many. The identity of artist does not designate the work, it is the work as such, the silent and not wholly readable adventure of its manifesting itself to existence.<br><br>Flaminio Gualdoni
        <br>
        <br>
            <span class="retrait_1"><sup>1</sup> Bernard Blistène and Flaminio Gualdoni, Dadamaino, Forma Edition, 2000, p21.<br><br></span>
            <span class="retrait_2"><sup>2</sup> "Ricerca del colore 1967-68". Archivio Dadamaino.</span>
    </section>
      
    <section class="full_image_dadamaino">
      <img src="import/dadamaino/dadamaino_6.png">
    </section> 





    <!--  VOLUMI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/1_volumi.jpg">
    </section>

    <section class="section4">
      <div class="titres_chapitres">volumni</div><br>
          <p>Radical and arid, the Volumi are Dadamaino’s first remarkable works. Produced between 1958 and 1960, at the time when Fontana published his last spatialist manifesto in 1958, his pieces, paradoxically so named – because the void takes precedence over the full – are monochrome canvases, white or black, pierced with circular holes of varying width. The perforation is made with scissors, sometimes approximately, often revealing the drawing prior to the cutting. These works express the artist’s desire to achieve a zero degree of painting. An attraction to the quest for emptiness and the question of non-being can be discerned. Certainly in reaction to the primacy of informal art and lyrical abstraction, the artist then intends to discard "canvases, brushes, spatula strokes and colours". In these works, the wall, visible in transparency, is more important than the surface. During her first exhibition at the Azimut gallery in 1959, Il Corriere Lombardo ran an ironic headline&#8239;: "Even women make holes in paintings." Dadamaino’s practice follows in the footsteps of Fontana’s perforations and lacerations, and her art also owes much to Piero Manzoni’s achromes. Highly inspired by the work of her elders, she explains&#8239;: "I have always abhorred matter and sought immateriality. If Fontana had not perforated the canvas, I would probably never have dared to do it." Feminist and committed, the artist thus belongs to a family of creators who have favoured emptiness in sculpture (Alexander Archipenko, Pablo Gargallo, Berto Lardera) and questioned the medium in painting (Lucio Fontana, Alberto Burri and Salvatore Scarpitta).</p><br><br>
          <figcaption class="image_caption"><span class="italic">Volume</span>, 1959, acrylic on canvas <br>with cut-out, 70 x 50 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">volumi</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V1.png" alt="Image 1">
              </div>
                <figcaption class="legendes">vol.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V2.png" alt="Image 2">
              </div>
                <figcaption class="legendes">vol.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V3.png" alt="Image 3">
              </div>
                <figcaption class="legendes">vol.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V4.png" alt="Image 4">
              </div>
                <figcaption class="legendes">vol.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V5.png" alt="Image 5">
              </div>
                <figcaption class="legendes">vol.5</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V6.png" alt="Image 6">
              </div>
                <figcaption class="legendes">vol.6</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V7.png" alt="Image 7">
              </div>
                <figcaption class="legendes">vol.7</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V8.png" alt="Image 8">
              </div>
                <figcaption class="legendes">vol.8</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/1_volumi/V9.png" alt="Image 8">
              </div>
                <figcaption class="legendes">vol.9</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">vol.1</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 100 x 80 cm</li>
        <li class="images_index"><span class="number">vol.2</span>1960, <span class="italic">Volume,</span> oil on canvas, courtesy Galleria Tornabuoni Art</li>
        <li class="images_index"><span class="number">vol.3</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 70 x 50 cm</li>
        <li class="images_index"><span class="number">vol.4</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 100 x 80 cm</li>
        <li class="images_index"><span class="number">vol.5</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 40 x 30 cm</li>
        <li class="images_index"><span class="number">vol.6</span>1958, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 88 x 68 cm</li>
        <li class="images_index"><span class="number">vol.7</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 100 x 70 cm</li>
        <li class="images_index"><span class="number">vol.8</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 70 x 50 cm</li>
        <li class="images_index"><span class="number">vol.9</span>1959, <span class="italic">Volume,</span> acrylic on canvas with cut-out, 89 x 32 cm</li>
      </ul>
    </section>





    <!--  VOLUMI A MODULI SFASATI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/2_volumi_a_moduli_sfasati.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">volumi a moduli sfasati</div><br>
          <p>In general, in a white, indefinite field, a point identifies a space. If there is a point, where before it was empty, now we have a reference to return to with our gaze. A point is the minimum unit of space. The point is also the smallest particle of the traced sign. The smallest writing and the smallest drawing. When we see the point in a work of art we therefore know that the currents of space and language enter from that tiny hole. With these simple warnings, when we look at Dadamaino’s work we know that it deals with space, or language, or both. The work in the Museum’s collections is from 1960, a period in which the artist frequented Manzoni, Castellani and all that movement of great speculation around the themes of space, time, the renewal of codes and the role of art. It is about two sheets of plastic perforated and superimposed with a slight slippage so that the holes of one and the other sheet do not correspond precisely. There is no paint, nor color, nor varnish that can give different intensities to the surfaces; however, the painting appears veiled with different shades and if we observe it for a few moments we notice some shadows. Thus, this regular and rhythmic sequence of points does not appear to us as ordered and rational but rather as soft and suffused. This effect is given by the overlapping holes which, the more they coincide, the larger they are, allowing the dark depth behind to peek out. In this way the artist makes space-depth an element that composes the work. The artist delivers to apparently inert means the ability to create a perceptible event, a chiaroscuro created by space, staged with very few elements. These vibrations, obtained by minimal traces, by ordered repetitions or by flows of signs, made through holes or with clouds of mordant traces, in the form of a diary or thrown onto a sheet of ink, will be, in the years to follow, the inexhaustible alphabet of all of Dadamaino’s research.</p><br><br>
          <figcaption class="image_caption"><span class="italic">Volume a moduli sfasati,</span> 1960, <br>perforated plastic sheets, 150 x 110 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">volumi a moduli sfasati</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">

          <section class="all_elements">
            <div class="all_elements">
              <div class="grid-item">
                <img src="import/2_volumi_a_moduli_sfasati/7a.png" alt="Image 1">
              </div>
                <figcaption class="legendes">vms.1</figcaption>
            </div>
          </section>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/2_volumi_a_moduli_sfasati/7b.png" alt="Image 2">
              </div>
                <figcaption class="legendes">vms.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/2_volumi_a_moduli_sfasati/7e.png" alt="Image 5">
              </div>
                <figcaption class="legendes">vms.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/2_volumi_a_moduli_sfasati/7f.png" alt="Image 6">
              </div>
                 <figcaption class="legendes">vms.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/2_volumi_a_moduli_sfasati/7d.png" alt="Image 4">
              </div>
                <figcaption class="legendes">vms.5</figcaption>
            </div>
        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">vms.1</span>1959-62, <span class="italic">Volume a moduli sfasati,</span> black perforated plastic sheets on frame, 60 x 40 cm</li>
        <li class="images_index"><span class="number">vms.2</span>1959-62, <span class="italic">Volume a moduli sfasati,</span> perforated plastic sheets on double frame, 70 x 50 cm</li>
        <li class="images_index"><span class="number">vms.3</span>1960, <span class="italic">Volume a moduli sfasati,</span> perforated plastic sheets mounted on canvas, 50 x 50 cm</li>
        <li class="images_index"><span class="number">vms.4</span>1960, <span class="italic">Volume a moduli sfasati,</span> perforated plastic sheets, 50 x 50 cm</li>
        <li class="images_index"><span class="number">vms.5</span>1960, <span class="italic">Volume a moduli sfasati,</span> perforated plastic sheets on double frame, 35 x 30 cm</li>
      </ul>
    </section>





    <!--  RICERCA DEL COLORE  -->

    <section class="full_image_center">
      <img src="import/_cover_images/3_ricerca_del_colore.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">ricerca del colore</div><br>
          <p>Dadamaino’s work thrives on her scientific sensitivity and her taste for mathematics, enabling her to develop analytical reflections and structural models to infinity, nourishing her research until the end. Ricerca del colore belongs to a group of serial studies of the colour spectrum that were created between 1966 and 1970, while she was teaching Design in Switzerland. The title is poetically ambiguous, because it can be translated as "exploring colour" as well as "searching for colour". The artist explains&#8239;: "Considering chromatic arrangements that are essentially the product of a combination of intuition and taste, I have found it useful to conduct a research on colours in order to verify the real relationship between them. I have therefore used the seven colours of the spectrum, identifying their average chromatic value, plus white, black and brown. Ten multiplied by ten. Then I have graded each from maximum to minimum against the background of the basic colour, with forty variants as visible average. The result is, therefore, a hundred panels measuring 20x20 cm, with 4000 shades. Each panel is divided into two parts, with eighty spaces alternated by the background colour and the one that is analysed, so that it is possible to verify the chromatic value of each nuance." Observing these works therefore means placing oneself in front of plays of light, a slow fading, and fainting of the gradations that then reappear and reassert themselves strongly. Even where it is brighter (in reds, and greens), the color seems soaked in air, made of glass&#8239;: its impetuousness, subjected to the strict discipline of measurement, is attenuated. And so this syllabary of the gaze in which letter after letter, line after line we learn to see, as we learn to read; this abstract mosaic of painted notes manages to dematerialize the color. The color then becomes a number, a rhythmic principle. It becomes a philosophy of light, and at the same time, a philosophy of transparency.</p><br><br>
          <figcaption class="image_caption"><span class="italic">Dinamica cromatica dal rosso vermiglione <br>al giallo arancio,</span> 1974, tempera <br>on canvasboard, 20 x 20 cm

            <div class="chapter">
              <p id="chaptertitle">ricerca del colore</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">

          <section class="all_elements">
            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.1.png" alt="Image 1">
              </div>
                <figcaption class="legendes">rdc.1</figcaption>
            </div>
          </section>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.2.png" alt="Image 1">
              </div>
                <figcaption class="legendes">rdc.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.3.png" alt="Image 1">
              </div>
                <figcaption class="legendes">rdc.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.4.png" alt="Image 1">
              </div>
                <figcaption class="legendes">rdc.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.5.png" alt="Image 1">
              </div>
                <figcaption class="legendes">rdc.5</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.6.png" alt="Image 1">
              </div>
                 <figcaption class="legendes">rdc.6</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.7.png" alt="Image 1">
              </div>
                 <figcaption class="legendes">rdc.7</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.8.png" alt="Image 1">
              </div>
                 <figcaption class="legendes">rdc.8</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/3_ricerca_del_colore/12.10.png" alt="Image 1">
              </div>
                 <figcaption class="legendes">rdc.9</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">rdc.1</span>1966-68, <span class="italic">Ricerca del colore,</span> rosso su celeste, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.2</span>1966-68, <span class="italic">Ricerca del colore,</span> viola su celeste, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.3</span>1966-68, <span class="italic">Ricerca del colore,</span> azzurro su arancio, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.4</span>1966-68, <span class="italic">Ricerca del colore,</span> giallo su arancio, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.5</span>1966-68, <span class="italic">Ricerca del colore,</span> giallo su rosso, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.6</span>1966-68, <span class="italic">Ricerca del colore,</span> nero su arancio, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.7</span>1966-68, <span class="italic">Ricerca del colore,</span> maronne su azzurro, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.8</span>1966-68, <span class="italic">Ricerca del colore,</span> giallo su azzurro, tempera on paper, 20 x 20 cm</li>
        <li class="images_index"><span class="number">rdc.9</span>1966-68, <span class="italic">Ricerca del colore,</span> nero su azzurro, tempera on paper, 20 x 20 cm</li>
      </ul>
    </section>





    <!--    OGGETTI OTTICO-DINAMICI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/4_oggetti_ottico_dinamici.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">oggetti ottico-dinamici</div><br>
          <p>Dadamaino attracted the notice of the European art world with her "Oggetti ottico-dinamici" [Optical-dynamic objects] and "Oggetti visivi instabili" [Unstable visual objects], which were shown at the Musée des Arts Décoratifs in Paris in its 1964 exhibition of new international visual trends entitled Nouvelle Tendance&#8239;: Propositions visuelles du mouvement international. In these works, she placed small aluminium plates, arranged according to size and based on precise mathematical calculations, onto nylon wires to create the optical effect of circular shapes. She explained that the resulting square and rectangular surfaces take on the appearance of semi-spheres with an elusive dynamic,s adding that although static, the object appears to be in a constant state of motion and transformation.</p><br><br>
          <figcaption class="image_caption"><span class="italic">Subject Optical Dynamic no. 1,</span> 1963, wood, machined aluminum and nylon, 96 x 96 cm. <br>Museo del Novecento, Milan, Italy

            <div class="chapter">
              <p id="chaptertitle">oggetti ottico-dinamici</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">

          <section class="all_elements">

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/4_oggetti_ottico_dinamici/1.2.png" alt="Image 2">
              </div>
                <figcaption class="legendes">ood.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/4_oggetti_ottico_dinamici/1.3.png" alt="Image 3">
              </div>
                <figcaption class="legendes">ood.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/4_oggetti_ottico_dinamici/1.4.png" alt="Image 4">
              </div>
                <figcaption class="legendes">ood.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/4_oggetti_ottico_dinamici/1.5.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ood.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/4_oggetti_ottico_dinamici/1.6.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ood.5</figcaption>
            </div>
        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">odd.1</span>1963-64, <span class="italic">Negative Dynamic Optical Object progr. 3,</span> aluminum, nylon thread and wood.</li>
        <li class="images_index"><span class="number">odd.2</span>1962-64, <span class="italic">Oggetti ottico dinamic,</span> aluminum applied on plywood, 58 x 58 cm</li>
        <li class="images_index"><span class="number">odd.3</span>1961-64, <span class="italic">Oggetto ottico dinamico,</span> aluminum applied on plywood, 100 x 100 cm</li>
        <li class="images_index"><span class="number">odd.4</span>1964-65, <span class="italic">Disegno ottico-dinamico-indeterminato progr. 5,</span> ink on card, 38 x 38 cm</li>
        <li class="images_index"><span class="number">odd.5</span>1964-65, <span class="italic">Oggetto ottico dinamico,</span> aluminum applied on plywood, 40 × 40 cm</li>
      </ul>
    </section>





    <!--    INCONSCIO RAZIONALE  -->

    <section class="full_image_center">
      <img src="import/_cover_images/5_inconscio_razionale.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">inconscio razionale</div><br>
          <p>Works on paper or on monochrome black or white canvases, marked by a grid of disconnected vertical and horizontal ink or tempera strokes, with empty spaces between them. They were exhibited for the first time at Studio V in Vigevano in 1975 and more fully at the Arte Struktura gallery in 1976. Dadamaino explains&#8239;: "After having cut the canvases to the point of leaving almost only the frame (1958) I began to rationalize my work, creating an order, which was also inherent to the works themselves. But always, having found a method, I have dissected and broken it down to verify more open possibilities that have led me to new research."</p><br><br>
          <figcaption class="image_caption"><span class="italic">L’inconscio razionale (negativo)</span>, 1975,<br> acrylic on canvas, 100 x 100 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">inconscio razionale</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">


            <div class="all_elements">
              <div class="grid-item">
                <img src="import/5_inconscio_razionale/6c.png" alt="Image 3">
              </div>
                <figcaption class="legendes">irz.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/5_inconscio_razionale/6d.png" alt="Image 4">
              </div>
                <figcaption class="legendes">irz.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/5_inconscio_razionale/6e.png" alt="Image 5">
              </div>
                <figcaption class="legendes">irz.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/5_inconscio_razionale/6f.png" alt="Image 5">
              </div>
                <figcaption class="legendes">irz.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/5_inconscio_razionale/6h.png" alt="Image 5">
              </div>
                <figcaption class="legendes">irz.5</figcaption>
            </div>
        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">irz.1</span>1975, <span class="italic">Inconscio razionale,</span> tempera on cardboard, 70.5 x 49.5 cm</li>
        <li class="images_index"><span class="number">irz.2</span>1975, <span class="italic">Inconscio razionale,</span> lithograph, ed. 5/100. 69 x 50 cm</li>
        <li class="images_index"><span class="number">irz.3</span>1975, <span class="italic">Inconscio razionale,</span> tempera on cardboard, 41 x 33 cm</li>
        <li class="images_index"><span class="number">irz.4</span>1975, <span class="italic">Inconscio razionale,</span> tempera on cardboard laid on panel, 50 x 50 cm</li>
        <li class="images_index"><span class="number">irz.5</span><span class="white">1975,</span> <span class="italic">Inconscio razionale,</span> acrylic on canvas, 39 x 46 cm</li>
      </ul>
    </section>





    <!--    RILIEVI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/6_rilievi.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">rilievi</div><br>
          <p>In 1961, Dadamaino revealed Volumi a moduli sfasati with phase-shifted modules&#8239;: sheets of rhodoid punched by hand and then superimposed to obtain a "phase shift of the weave, the alternation of the rhythm". In the same year, she presented Rilievi - first plexiglas tablets, then also sheets of rhodoid or cardboard - cut into countless strips, with identical scalar dimensions. Materials, receptive to light, which, depending on the spectator’s movement, create light and shade interplays and optical suggestions of movement.</p><br><br>
          <figcaption class="image_caption"><span class="italic">Senza titolo (Rilievo)</span>, 1965, <br>extroflection on cardboard, 36 x 36 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">rilievi</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">


            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/16.png" alt="Image 3">
              </div>
                <figcaption class="legendes">ril.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/15.png" alt="Image 2">
              </div>
                <figcaption class="legendes">ril.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/17.png" alt="Image 4">
              </div>
                <figcaption class="legendes">ril.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/18.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/19.1.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.5</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/19.3.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.6</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/20.1.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.7</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/20.2.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.8</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/6_rilievi/19.2.png" alt="Image 5">
              </div>
                <figcaption class="legendes">ril.9</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">ril.1</span>1962, <span class="italic">Rilievo,</span> extroflection on cardboard, 40 x 55 cm</li>
        <li class="images_index"><span class="number">ril.2</span>1961, <span class="italic">Senza titolo (Rilievo),</span> extroflection on cardboard, 18 x 36 cm</li>
        <li class="images_index"><span class="number">ril.3</span>1960-74, <span class="italic">Senza titolo (Rilievo),</span> extroflection on cardboard, 50 x 50 cm</li>
        <li class="images_index"><span class="number">ril.4</span>1960-74, <span class="italic">Senza titolo (Rilievo),</span> extroflection on cardboard, 50 x 40 cm</li>
        <li class="images_index"><span class="number">ril.5</span>1960-74, <span class="italic">Senza titolo</span> extroflection on cardboard, 50 x 50 cm</li>
        <li class="images_index"><span class="number">ril.6</span>1960-74, <span class="italic">Surveys,</span> cardboard carved in relief, 50 x 50 cm</li>
        <li class="images_index"><span class="number">ril.7</span>1964, <span class="italic">Rilievo,</span> extroflection on cardboard, 61 x 43 x 5 cm</li>
        <li class="images_index"><span class="number">ril.8</span>1964, <span class="italic">Rilievo,</span> extroflection on cardboard, 61 x 43 x 5 cm</li>
        <li class="images_index"><span class="number">ril.9</span><span class="white">1964,</span> <span class="italic">Senza titolo (Rilievo),</span> perforated papier, 68 x 68 cm</li>
      </ul>
    </section>





    <!--    CROMORILIEVI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/7_cromorilievi.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">cromorilievi</div><br>
          <p></p><br><br>
          <figcaption class="image_caption"><span class="italic">Cromorilievo</span>, 1974, painted wood, 100 x 100 cm. courtesy Galleria Tornabuoni ArtSenza titolo (Rilievo)</figcaption>

            <div class="chapter">
              <p id="chaptertitle">cromorilievi</p>
            </div>

    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">


            <div class="all_elements">
              <div class="grid-item">
                <img src="import/7_cromorilievi/13.1.png" alt="Image 3">
              </div>
                <figcaption class="legendes">crl.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/7_cromorilievi/13.2.png" alt="Image 2">
              </div>
                <figcaption class="legendes">crl.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/7_cromorilievi/13.3.png" alt="Image 4">
              </div>
                <figcaption class="legendes">crl.3</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">crl.1</span>1973-74, <span class="italic">Rilievo,</span> painted wooden dowels on board, 100 x 100 cm</li>
        <li class="images_index"><span class="number">crl.2</span>1973-74, <span class="italic">Rilievo,</span> painted wooden dowels on board, 100 x 100 cm</li>
        <li class="images_index"><span class="number">crl.3</span>1973-74, <span class="italic">Cromorilievo,</span> painted wooden dowels on board, 100 x 100 cm</li>
      </ul>
    </section>





    <!--    ALPHABETO DELLA MENTE  -->

    <section class="full_image_center">
      <img src="import/_cover_images/8_alfabeto_della_mente.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">alfabeto della mente</div><br>
          <p>In 1976, Dadamaino conceived the Alphabet of the mind, which arises from the modular, freehand repetition of a single ink sign, a single letter invented in memory of the Palestinian genocide in Tall El Zaatar in 1976. Vertical and horizontal signs alternate in an obsessive way, defining an invented language, a sort of illegible and personal alphabet. Canvases and sheets are invaded by these graphemes, seamlessly. Neither Visual nor Concrete Poetry is the subject of the works Alphabets of the Mind, but moreover a conceptual research to be placed at the limit of demarcation between writing drawings and drawing writings. As the French linguist Roland Barthes stated&#8239;: "writing does not need to be legible to be fully writing". Furthermore, between the 60s and 70s, many artists on the international scene made declarations and gave life to proclamations, strongly marked by ideological and even more often political affiliations. The protest becomes open, shouted. An attitude that is most often easy, declared, fashionable. The works here go against the grain of all this and certainly not out of prejudice. We are faced with works, made with traditional techniques, mostly paper, in which there is a profound social, historical and above all linguistic awareness. Thus nothing is casual or ephemeral and every signifier manages to take on its own, most often unconventional, meaning. The obsessive dictations of Dadamaino in the Alphabets of the Mind and in the more recent Sein und Zeit, artificial writing recovers a purely plastic dimension.</p><br><br>
          <figcaption class="image_caption"><span class="italic">Alfabeto della mente, Lettera 15</span>, 1981, <br>ink on canvas, 47.5 x 38 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">alfabeto della mente</p>
            </div>
    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">


            <div class="all_elements">
              <div class="grid-item">
                <img class="auto" src="import/8_alfabeto_della_mente/12.12.png" alt="Image 3">
              </div>
                <figcaption class="legendes">adm.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img class="auto" src="import/8_alfabeto_della_mente/12.13.png" alt="Image 2">
              </div>
                <figcaption class="legendes">adm.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/8_alfabeto_della_mente/12.6.png" alt="Image 4">
              </div>
                <figcaption class="legendes">adm.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/8_alfabeto_della_mente/12.7.png" alt="Image 5">
              </div>
                <figcaption class="legendes">adm.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/8_alfabeto_della_mente/12.9.png" alt="Image 5">
              </div>
                <figcaption class="legendes">adm.5</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">adm.1</span>1979, <span class="italic">Lettera 12 dell’alfabeto della mente,</span> ink on paper, 70 x 20.5 cm</li>
        <li class="images_index"><span class="number">adm.2</span>1978, <span class="italic">Lettera 2 dell’alfabeto della mente,</span> graphite and ink on paper, 41 x 30 cm</li>
        <li class="images_index"><span class="number">adm.3</span>1978, <span class="italic">Lettera 11, 1980,</span> ink on paper, 72.5 x 50 cm</li>
        <li class="images_index"><span class="number">adm.4</span>1980, <span class="italic">Lettera 13 dell’alfabeto della mente,</span> ink on paper, 17.8 x 11.8 cm</li>
        <li class="images_index"><span class="number">adm.5</span>1980, <span class="italic">Lettera 11,</span> ink on paper, 73 x 50 cm</li>
      </ul>
    </section>





    <!--    COSTELLAZIONI  -->

    <section class="full_image_center">
      <img src="import/_cover_images/9_costellazioni.jpg" alt="Image 7">
    </section>

    <section class="section4">
      <div class="titres_chapitres">costellazioni</div><br>
          <p>In 1981, she inaugurated an important solo exhibition at the Walter Storms Galerie in Villingen where, in addition to the Alphabet of the mind and The facts of life, she exhibited Constellations for the first time. In this work, graphic signs become ever smaller, losing all reference to a hypothetical mental alphabet while thickening or dispersing, simulating molecular motions and stellar galaxies. The colour reappears in these works albeit used in a monochromatic way on every single sheet. The Constellations were exhibited for the first time in Italy in August 1982, at the Butti Museum in Viggiù in a solo exhibition curated by Flaminio Gualdoni. "Once again, the play is driven by the sense of practice that Dadamaino always conveys&#8239;: no preordained line of development of the procedure, neutrality with respect to the complex making of the work and yet, at the same time, clear, rigorous scrutiny of what happens on the surface&#8239;: a creative intensity that fills these works with the splendid tension that is their own."</p><br><br>
          <figcaption class="image_caption"><span class="italic">Costellazione,</span> 1986, ink on paper, 16 x 17 cm</figcaption>

            <div class="chapter">
              <p id="chaptertitle">costellazioni</p>
            </div>
    </section>

    <div class="page_left_page">
        <div id="galerie" class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true" }' role="main">

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/24.png" alt="Image 4">
              </div>
                <figcaption class="legendes">cos.1</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/22.png" alt="Image 5">
              </div>
                <figcaption class="legendes">cos.2</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/21.png" alt="Image 3">
              </div>
                <figcaption class="legendes">cos.3</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/25.png" alt="Image 2">
              </div>
                <figcaption class="legendes">cos.4</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/28.png" alt="Image 5">
              </div>
                <figcaption class="legendes">cos.5</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/29.png" alt="Image 5">
              </div>
                <figcaption class="legendes">cos.6</figcaption>
            </div>

            <div class="all_elements">
              <div class="grid-item">
                <img src="import/9_costellazioni/26.png" alt="Image 5">
              </div>
                <figcaption class="legendes">cos.7</figcaption>
            </div>

        </div>
    </div>

    <section class="index">
      <ul>
        <li class="images_index"><span class="number">cos.1</span>1986, <span class="italic">Costellazioni,</span> ink on paper, 32.5 x 50 cm</li>
        <li class="images_index"><span class="number">cos.2</span>1999, <span class="italic">Dadamaino,</span> ink on glossy paper 570 x 122 cm</li>
        <li class="images_index"><span class="number">cos.3</span>1989, <span class="italic">Passo dopo passo,</span> mordant on polyester, 137.5 x 116 cm</li>
        <li class="images_index"><span class="number">cos.4</span>1994, <span class="italic">La malattia,</span> ink on paper, 50 x 70 cm</li>
        <li class="images_index"><span class="number">cos.5</span>1984, <span class="italic">Costellazione,</span> ink on canvas, 44 x 64 cm</li>
        <li class="images_index"><span class="number">cos.6</span>1998, <span class="italic">Sein und Zeit,</span> ink on polyester, 109.8 x 63.8 cm</li>
        <li class="images_index"><span class="number">cos.7</span>1998, <span class="italic">Sein und Zelt,</span> ink on paper, 100 x 61 cm</li>
      </ul>
    </section>

    <section class="empty"></section>



    <!--  INDEX  -->

    <section class="exhibitions">
      <div class="titres_chapitres">Exhibitions</div><br>
      <p>Dadamaino had two solo shows at the Venice Biennale in 1980 and in 1990.
      </p><br>
        <ul>
          <li><span class="date">1958</span>Galleria dei Bossi, Milan, Italy</li>
          <li><span class="date">1959</span>Galleria del Prisma, Milan, Italy</li>
          <li><span class="date">1961</span>Galleria Montenapoleone, Milan, Italy</li>
          <li><span class="date">1961</span>Galleria N, Padova, Italy</li>
          <li><span class="date">1962</span>Galerie Senatore, Stuttgart, Germany</li>
          <li><span class="date">1962</span>Nul group exhibition, Stedelijk Museum, Amsterdam, Netherlands</li>
          <li><span class="date">1970</span>Galleria Diagramma, Milan, Italy</li>
          <li><span class="date">1971</span>White Gallery, Lausanne, Switzerland</li>
          <li><span class="date">1971</span>Galleria Barozzi, Venice, Italy</li>
          <li><span class="date">1973</span>Galleria Cappelletta, Osnago, Italy</li>
          <li><span class="date">1973</span>Galerie Ubu, Karlsruhe, Germany</li>
          <li><span class="date">1973</span>Galleria Santelmo, Salò, Italy</li>
          <li><span class="date">1973</span>Galleria del Cavallino, Venice, Italy</li>
          <li><span class="date">1974</span>Galleria Il Nome, Vigevano, Italy</li>
          <li><span class="date">1974</span>Galleria Uxa, Novara, Italy</li>
          <li><span class="date">1974</span>Galleria Serreratti, Como, Italy</li>
          <li><span class="date">1983</span>Retrospective, Padiglione d’Arte Contemporanea, Milan, Italy</li>
          <li><span class="date">2000</span>Retrospective, Bochum museum, Bochum, Germany</li>
          <li><span class="date">2011</span>"Volumes 1958-60", The Major Gallery, London, United Kingdom</li>
          <li><span class="date">2013</span>Dadamaino, Le Consortium, Dijon, France</li>
          <li><span class="date">2013</span>Dadamaino, Tornabuoni art, Paris, France</li>
        </ul><br>
      <div class="titres_chapitres">Collections</div><br>
        <p>Dadamaino’s works can be seen in collections such as&#8239;:</p><br>
        <ul class="left-marge">
          <li><span class="invisible"></span>GAM, Turin</li>
          <li><span class="invisible"></span>MART, Rovereto</li>
          <li><span class="invisible"></span>Museo del Novecento, Milan</li>
          <li><span class="invisible"></span>Museion, Bolzano</li>
          <li><span class="invisible"></span>Musée de Grenoble, Grenoble</li>
          <li><span class="invisible"></span>Centre Pompidou, Paris</li>
          <li><span class="invisible"></span>Hilti Art Foundation, Liechtenstein</li>
          <li><span class="invisible"></span>Tate Modern, London</li>
          <li><span class="invisible"></span>Philadelphia Museum of Art, Philadelphia</li>
          <li><span class="invisible"></span>Guggenheim, Venice</li>
          <li><span class="invisible"></span>Kunstmuseum Reutlingen / konkret, Reutlingen</li>
        </ul><br>
    </section>

    <section>
      <figcaption class="legendes-exhibitions">art.1-3</figcaption>
      <div class="all_elements_exhibitions">
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_arte_cinetica/p1.png" alt="Image 1">
        </div>
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_arte_cinetica/p16.png" alt="Image 2">
        </div>
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_arte_cinetica/p19.png" alt="Image 3">
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section>
      <figcaption class="legendes-exhibitions">pun.1-4</figcaption>
      <div class="all_elements_exhibitions">
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_il_punto/pun3.png" alt="Image 1">
        </div>
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_il_punto/pun4.png" alt="Image 2">
        </div>
      </div>
      <div class="all_elements_exhibitions">
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_il_punto/pun5.png" alt="Image 1">
        </div>
        <div class="grid-item-exhibitions">
          <img src="import/catalogue_il_punto/pun6.png" alt="Image 2">
        </div>
      </div>
    </section>


    <section class="exhibitions">
      <div class="titres_chapitres">Exhibitions catalogues</div><br>
      <p class="catalogues">"Arte Cinetica", exhibition at the Palazzo Costanzi, Trieste, Italy, July – August 1965 Published by the Azienda autonoma di soggiorno e turismo du Trieste in collaboration with the Circo della Cultura e delle Arte, Trieste</p><br>
      <p class="catalogues">"Anceschi, M. Apollonio, Biasi, Bonalumi, Boriani, Colombo, Costa, Dadamaino, De Vecchi, Getulio, Gruppo Mid, Landi, Marandini, Mari, Massironi, Scheggi, Varisco", exhibition at the galleria d’arte moderno Il Punto, Turin, Italy, 7-29 September 1965 Published by the galleria d’arte moderno Il Punto, Turin</p>
    </section>

    <section class="empty"></section>




    <!--  COLOPHON  -->

<section class="colophon">
  <p>
    This catalogue is published on the occasion of the Parisian exhibition at Tornabuoni Art and is accompanied by texts from Flaminio Gualdoni, Director of the Dadamaino Archive in Milan, and Bernard Blistène, international art historian, curator, and director of the Centre Pompidou in Paris from 2013-2021.
  </p><br>
  <p>© il punto, 2024</p>

  <!-- Contenu en dehors des colonnes -->
  <div class="colophon-intro">
    <h3>Graphic & Editorial Design</h3>
    <p>Quentin DISSARD</p>
  </div>

  <!-- Contenu principal en colonnes -->
  <div class="colophon-details">
    <div class="colophon-section left">
      <h3>Typographic Composition</h3>
      <p>
        The text is composed with an open-source font 'Monaspace Xenon' found on Gitlab and designed <br>by Idan Gazit.
      </p>

      <h3>Format</h3>
      <p>
        The final format of the work has been determined following my digital research, offering the best quality for visuals.
      </p>

      <h3>Layout</h3>
      <p>
        The book was entirely composed without using any proprietary licenses, such as Adobe's. Only open-source technologies were used, including HTML, CSS, and Paged.js.
      </p>
    </div>

    <div class="colophon-section right">
      <h3>Paper</h3>
      <p>
        The cover was printed on Environment Concrete 270g/m² paper, while the interior pages were printed on Munken Print Cream 90g/m² paper, valued for its beautiful texture and its naturally soft yellow tone, which is less harsh on the eyes.
      </p>

      <h3>Printing</h3>
      <p>
        Printed in 2025 at the Polygraph presses,<br> 155 Avenue Roger Salengro, 92370 Chaville.
      </p>
    </div>
  </div>
</section>





    <!--  4EME DE COUV  -->

    <section class="cover-4">
      <p>Dadamaino (born Eduarda Emilia Maino), a self-taught artist and a member of the Milanese avant-garde, had an incredibly rich and eclectic career. In the late 1950s, she received attention for her series of black-and-white canvases, what she called "Volumes," that featured large punctured holes, much like Lucio Fontana’s "Buchi" ("Hole") paintings. At this time, she was a member of Piero Manzoni’s Azimuth Gallery in Milan, which was connected with Germany’s Group Zero, the Dutch Group Nul, and Group Motus in France, though she later went on to join the Nouvelle Tendence movement whose members included Getulio Alviani, Bruno Munari, and Jesus Rafael Soto. In the 1970s, Dadamaino explored Op Art in a series of psychedelic optical paintings, and in the 1980s she developed original alphabet-like signs that she repeated obsessively in small, text-like formats on canvas. One of Italy’s most progressive artists, Dadamaino was twice included in the Venice Biennale.</p>
      <img id="code" src="import/code.svg">
    </section>

</body>
</html>