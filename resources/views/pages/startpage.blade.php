@extends('layouts.home')

@section('head')

@stop


@section('content')
    @if(Session::has('nocontact'))
        {{ Session::forget('nocontact') }}
    @endif

    <main id="page" class="home">
        <div class="row">
            <div class="small-12 columns">
                <article>
                    <header class="entry-header">
                        <div class="row">
                            <div class="small-12 columns">
                                <h1>{!! $heading !!}</h1>
                            </div>
                        </div>
                    </header>
                    <div class="entry-content">


                    <!--section class="videos section">
						<div class="row">
							<div class="small-12 columns">
								<h2 class="centered">Lassen Sie sich Ihre Möglichkeiten zeigen</h2>
							</div>
						</div>
						<div class="row medium-up-2">

							<div class="column">
						            <div class="down box vbox">
							        <p><strong>Brücke aus Vollkeramik:</strong></p>
						            </div>
							    <div class="box1 vbox" style="border-radius: 0px 0px 10px 10px;">
							        <div class="videoWrapper wideScreen">
								    <div class="videoPadding">

								    <script src="//fast.wistia.com/embed/medias/h54vl1zbji.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_h54vl1zbji popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>


								    </div>
						                </div>
							    </div>
							</div>

							<div class="column">
						            <div class="down box vbox">
							        <p><strong>Prothese hält besser mit Druckknöpfen:</strong></p>
						            </div>
							    <div class="box1 vbox" style="border-radius: 0px 0px 10px 10px;">
							        <div class="videoWrapper wideScreen">
							            <div class="videoPadding">

							            <script src="//fast.wistia.com/embed/medias/vvjex772rw.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_vvjex772rw popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>

								    </div>
						                </div>
							    </div>
							</div>

							<div class="column">
						            <div class="down box vbox">
							        <p><strong>Implantat Oberer Schneidezahn:</strong></p>
						            </div>
							    <div class="box1 vbox" style="border-radius: 0px 0px 10px 10px;">
							        <div class="videoWrapper wideScreen">
							            <div class="videoPadding">


							            <script src="//fast.wistia.com/embed/medias/6picq81hza.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_6picq81hza popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
								    </div>
						                </div>
							    </div>
							</div>

							<div class="column">
						            <div class="down box vbox">
							        <p><strong>Teleskop Prothese im Unterkiefer:</strong></p>
						            </div>
							    <div class="box1 vbox" style="border-radius: 0px 0px 10px 10px;">
							        <div class="videoWrapper wideScreen">
							            <div class="videoPadding">



							            <script src="//fast.wistia.com/embed/medias/ycz6wutj8a.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_ycz6wutj8a popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>

								    </div>
						                </div>
							    </div>
							</div>
						</div>
					</section-->

                    <!--

                        <section class="idea section">
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="row">
                                        <div class="medium-8 medium-push-4 columns">
                                            <h2>
                                                Funktion und Ästhetik<br/>bestimmen die Qualität Ihrer Zähne
                                                <small>Das Padento-Prinzip</small>
                                            </h2>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento1.svg"
                                                                     alt="Was ist Padento"/></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3>Die Idee</h3>
                                            <p>Den bestmöglichen Zahnersatz erhalten Sie nur, wenn ein guter Zahnarzt
                                                und ein gutes Dentallabor zusammenarbeiten. Zahntechniker erkennen
                                                anhand der Abdrücke die Qualität eines Zahnarztes sofort.
                                                Zahntechnikermeister informieren Sie zum Thema Zahnersatz nach
                                                zahnärztlichen Vorgaben und laden Sie ein in Ihr Dentallabor vor Ort.
                                                Das ist ein Erlebnis! Die vielen neuen Techniken kann ein Zahnarzt
                                                alleine gar nicht mehr alle zeigen.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento2.svg"
                                                                     alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3>Zahnersatz zum Anfassen</h3>
                                            <p>Damit Sie dieses komplexe Thema im wahrsten Sinne des Wortes „begreifen“
                                                können, vereinbaren Sie jetzt einen Termin in einem Padento Dentallabor
                                                in Ihrer Nähe. Danach können Sie bessere Entscheidungen treffen.
                                                Schließlich wird Ihr Zahnersatz vom Zahntechniker und nicht vom Zahnarzt
                                                hergestellt. Deshalb sollten Sie sich aus 2 Perspektiven beraten lassen:
                                                Vom Zahnarzt <u>und</u> vom Zahntechniker.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento3.svg"
                                                                     alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3>Sie haben die Wahl</h3>
                                            <p>Sie haben die freie Zahnarztwahl und was viele nicht wissen: Sie können
                                                sich sogar Ihr Dentallabor aussuchen. Lassen Sie sich vom Spezialisten
                                                über alle technischen Details zu Implantaten, Prothesen und anderen
                                                Möglichkeiten des Zahnersatzes umfassend informieren. Die meisten
                                                Menschen gehen nach einer Beratung im Labor zusätzlich zu einem
                                                Padento-Zahnarzt, um sich noch eine 2. Zahnarzt-Meinung zu holen. Sicher
                                                ist sicher! Dort finden Sie einen sehr guten Behandler vor.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/preis.svg" alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3>Finanzieren Sie Ihre Neuen Zähne</h3>
                                            <p>Es ist heutzutage völlig normal, schöne und wertvolle Dinge zu
                                                finanzieren. Nicht jeder hat ein paar tausend Euro so einfach übrig. Sie
                                                können bei uns ganz einfach und bequem Ihren Eigenanteil finanzieren.
                                                Bonität vorausgesetzt. Freuen Sie sich auf Ihre schönen und neuen Zähne.
                                                Natürlich nur made in Germany.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        -->

                    <!--
                        <section class="about section">
                            <div class="row">
                                <div class="medium-9 medium-push-2 columns">
                                    <h3>Wer steht hinter Padento?</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-2 columns">
                                    <div class="row">
                                        <div class="small-6 medium-12 columns">
                                            <p><img src="<?php URL::to('/') ?>img/RainerEhrich.jpg"/>
                                        </div>
                                        <div class="small-6 medium-12 columns">
                                            <p><img src="<?php URL::to('/') ?>img/MarinaEhrich.jpg"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="medium-10 columns">
                                    <p><strong>Rainer Ehrich</strong>, Erfinder der TEK-1 Prothese und ehemaliger
                                        Laborbesitzer hat die
                                        Idee von Padento gehabt, mit dem Wunsch eine bessere Beratungssituation für
                                        Menschen zu schaffen, die aktuell oder in naher Zukunft neue Zähne bekommen.

                                    <p>Seine Frau <strong>Marina Ehrich</strong> ist die „gute Seele“ von Padento und
                                        hat immer ein
                                        offenes Ohr für die Belange zu diesem wichtigen Thema Zahnersatz. „Sie trägt Ihr
                                        Herz an der richtigen Stelle“, hören wir oft von unseren Kunden.

                                    <p>Da Rainer Ehrich die Dentalbranche so gut wie kaum ein anderer kennt, sieht er
                                        immer wieder, wie Menschen beim Thema Zahnersatz überfordert sind. Der Zahnarzt
                                        als Mediziner kann die mittlerweile so vielfältigen Möglichkeiten neuer Zähne
                                        einem Laien allein gar nicht nahebringen und die komplexen und mittlerweile
                                        häufig auch kombinierbaren Behandlungsmethoden vom Zahnimplantat bis zur Teil-
                                        oder Vollprothese ausführlich erläutern.

                                    <p><strong>So ist die Idee von Padento entstanden, dass Menschen sich wie bei einem
                                            Optiker
                                            über Brillen, sich jetzt auch bei Zahntechnikern über Zahnersatz informieren
                                            können.</strong>
                                </div>
                            </div>
                        </section>
                        -->


                        <!--section class="process section">
                            <div class="row">
                                <div class="small-12 columns">
                                    <h2>Teilzahlung, Beratung vom Zahntechnikermeister, 2. Zahnarztmeinung, Made in Germany</h2>
                                    <p class="lead">Die <strong class="blue">bestmögliche Entscheidungshilfe</strong> für Ihre neuen Zähne:</p>
                                    <div class="row">
                                        <div class="medium-6 columns">
                                            <h3><img src="/img/liste.svg" /> Ablauf</h3>
                                            <ul>
                                                <li><span class="blue">01</span> Füllen Sie das <strong>Formular</strong> aus und tragen Sie Ihre Daten dort ein.
                                                <li><span class="blue">02</span> Sie werden von uns telefonisch kontaktiert, um einen <strong>Termin</strong> zu machen.
                                                <li><span class="blue">03</span> Sie gehen <strong>zusammen mit dem Zahntechniker zu einem ausgewählten Zahnarzt</strong>, von dem sich auch der Zahntechniker behandeln lassen würde.
                                                <li><span class="blue">04</span> Ein ausgewählter Zahnarzt ist nicht teurer als andere Zahnärzte. <strong>Er ist einfach nur sehr gut.</strong>
                                                <li><span class="blue">05</span> Sie bekommen zusätzlich eine <strong>zweite Meinung vom Zahnarzt</strong>, die bei den vielen Möglichkeiten heutzutage absolut wichtig ist.
                                                <li><span class="blue">06</span> Der Zahntechniker lernt Sie als <strong>Mensch</strong> persönlich kennen und sieht nicht nur das Gips-Modell.
                                                <li><span class="blue">07</span> Dadurch werden Ihre neuen Zähne <strong>viel besser zu Ihnen passen</strong>.
                                                <li><span class="blue">05</span> Bei <strong>Angstpatienten</strong> werden spezielle Zahnärzte ausgesucht, die sich damit auskennen.
                                            </ul>
                                        </div>
                                        <div class="medium-6 columns">
                                            <h3><img src="/img/stern.svg" /> Ihre Vorteile</h3>
                                            <ul>
                                                <li><span class="blue">01</span> Der Zahntechniker lernt Sie als Mensch persönlich kennen und sieht nicht nur das Gips-Modell.
                                                <li><span class="blue">02</span> Sie lernen im Dentallabor mehrere zahntechnische Möglichkeiten kennen
                                                <li><span class="blue">03</span> Sie können im Dentallabor die Höhe einer Teilzahlung sofort abfragen
                                                <li><span class="blue">04</span> Sie können beim Zahnarzt Ihre neuen Zähne machen lassen
                                                <li><span class="blue">Oder:</span> Sie können zu einem Zahnarzt des Dentallabors gehen, um sich eine 2. Zahnarzt-Meinung zu holen
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section-->


                        <section class="idea section">
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="row">
                                        <div class="medium-12 columns">
                                            <h1 style="padding-bottom: 25px; padding-top: 25px; font-weight:bold; text-align: center;">
                                                Vier wichtige Gründe, warum Sie sich für Padento entscheiden sollten…
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento1.svg"
                                                                     alt="Was ist Padento?"/></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3 style="font-weight: bold;">1. Warum sollten Sie Ihren Zahntechniker kennenlernen?</h3>
                                            <p>Den bestmöglichen Zahnersatz erhalten Sie, wenn ein <strong>guter Zahnarzt</strong> und ein <strong>gutes Dentallabor</strong> zusammenarbeiten. Aber wie bekommen Sie das heraus? Die in Deutschland <strong>einmalige Idee</strong> <strong>von Padento</strong> geht einen völlig neuen Weg: Denn&nbsp;<strong>nur Zahntechniker wissen</strong>, welcher Zahnarzt wirklich gut ist. Der Zahntechniker vor Ort wird Sie zahntechnisch beraten und Sie zu einem richtig guten Zahnarzt begleiten, der genau zu Ihnen passt.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento2.svg"
                                                                     alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3 style="font-weight:bold;">2. Welcher Zahnersatz passt genau zu Ihnen?</h3>
                                            <p>Um eine gute und <strong>richtige Entscheidung</strong> zu treffen, sollten Sie <strong>all Ihre Möglichkeiten</strong> kennenlernen und "begreifen". Damit Sie dieses komplexe Thema Zahnersatz wirklich verstehen können, vereinbaren Sie noch heute einen Termin in einem Padento Dentallabor direkt in Ihrer Nähe. Danach können Sie eine viel bessere Entscheidungen treffen. Schließlich gibt es extrem viele Varianten vom Material und der Technik. Deshalb sollten Sie sich IMMER aus zwei Perspektiven beraten lassen: Vom Zahnarzt <strong>und vom Zahntechniker.</strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/WasistPadento3.svg"
                                                                     alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3 style="font-weight:bold;">3. Warum ist eine zweite Meinung so wichtig?</h3>
                                            <p>Ihrer Zähne - Ihre Entscheidung! Sie haben Alles in Ihrer Hand. Sie können sich nicht nur Ihren Zahnarzt aussuchen. Sie haben sogar die freie Wahl, wer Ihren Zahnersatz herstellt. <strong>Holen Sie sich deshalb nicht nur eine zweite Meinung von einem guten Zahnarzt</strong>. Sondern informieren Sie sich zudem auch in einem Dentallabor in Ihrer Nähe beim Zahntechniker. <strong>Sicher ist sicher!</strong> Denn Ihre neuen Zähne sollen lange halten, fest sitzen wie die Eigenen und Ihnen ein schönes Lebensgefühl zurückgeben.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 columns">
                                            <p class="centered"><img src="{{ URL::to('/') }}/img/preis.svg" alt=""></p>
                                        </div>
                                        <div class="medium-8 columns">
                                            <h3 style="font-weight:bold;">4. Wie kann Ratenzahlung Ihnen helfen?</h3>
                                            @if ($lang  == 'de')
                                            <p style="text-align: left;">Es ist heutzutage völlig normal, schöne und wertvolle Dinge zu finanzieren. Nicht jeder hat ein paar tausend Euro so einfach übrig. Sie können bei uns ganz einfach und <strong>bequem Ihren Eigenanteil finanzieren</strong> lassen! Viele Menschen schieben das Thema Zahngesundheit zu sehr auf die lange Bankmoder machen beim Zahnersatz nur "Stückwerk", weil die meisten das Geld einfach nicht haben. Das ist völlig normal. Ihre Sicherheit besteht darin, dass Sie diese <strong>Finanzierung</strong> ausschliesslich für hochwertigen Zahnersatz zu <strong>100% Made in Germany</strong> bekommen.&nbsp;&nbsp;Somit sind Sie auf der absolut sicheren Seite, dass Ihr Geld gut angelegt ist.</p>
                                            @endif
                                            @if ($lang  == 'at')
                                            <p style="text-align: left;">Es ist heutzutage völlig normal, schöne und wertvolle Dinge zu finanzieren. Nicht jeder hat ein paar tausend Euro so einfach übrig. Sie können bei uns ganz einfach und <strong>bequem Ihren Eigenanteil finanzieren</strong> lassen! Viele Menschen schieben das Thema Zahngesundheit zu sehr auf die lange Bankmoder machen beim Zahnersatz nur "Stückwerk", weil die meisten das Geld einfach nicht haben. Das ist völlig normal. Ihre Sicherheit besteht darin, dass Sie diese <strong>Finanzierung</strong> ausschliesslich für hochwertigen Zahnersatz zu <strong>100% Made in Austria</strong> bekommen.&nbsp;&nbsp;Somit sind Sie auf der absolut sicheren Seite, dass Ihr Geld gut angelegt ist.</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="margin-top: 36px;">
                                      <h3 style="text-align: center;"><span style="color: #00aff5;">Wie Sie jetzt am besten vorgehen:</span></h3>
                                      <div class="steps" style="text-align: left; margin-top: 12px; padding: 12px;">
                                        <p style="text-align: left;"><img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 1:</strong> Füllen Sie das <strong>Formular</strong> aus und bestätigen Sie die Mail, die Sie kurz darauf von uns bekommen.<br>
                                        </p>
                                          <p>
                                            <img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 2:</strong> Wir rufen Sie an wegen eines <strong>Termins bei einem Zahntechniker</strong> in einem Dentallabor vor Ort.<br>
                                          </p>
                                          <p>
                                            <img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 3:</strong> Im Dentallabor können Sie <strong>Zahnersatz wirklich "begreifen"</strong> - im wahrsten Sinne des Wortes.<br>
                                          </p>
                                          <p>
                                            <img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 4:</strong> Sie bekommen eine <strong>zweite Meinung</strong> von einem sehr guten Zahnarzt.<br>
                                          </p>
                                          <p>
                                            <img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 5:</strong> Sie <strong>wählen Ihren neuen Zahnersat</strong>z zusammen mit dem Zahntechniker und Zahnarzt aus.<br>
                                          </p>
                                          <p class="" style="text-align: left;">
                                            <img class="check" src="/images/check-solid.svg" width="30" /> <strong>Schritt 6:</strong> Sie bestimmen nun Ihre <strong>Raten und Ihre Laufzeit der Finanzierung</strong>.
                                          </p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="cta-row section">

                            <h1 style="padding-top:25px; font-weight:bold;text-align:center;">
                                Entscheiden Sie sich für den Padento-Weg (!)
                            </h1>

                            <p style="text-align:center;">
                            <h3 class="blue"
                                style="font-weight:bold;margin-top: 15px; margin-bottom: 15px; text-align:center;">
                                Sichern Sie sich Ihre <u>kostenfreie</u> Beratung im Dentallabor!
                            </h3>
                            </p>

                            <div style="width: 80%;margin: auto; margin-top:20px !important; margin-bottom: 20px !important; background-color:#f8f8f7; padding:15px; text-align:center; border-radius:15px;">
                                <span class="blue" style="font-weight:bold; text-align:center;">
                                    ⓘ Dieses Angebot ist sehr begehrt, weil es ein komplett neuer Weg ist. Reagieren Sie also schnell und nehmen Sie noch heute Kontakt mit Ihrem Zahntechniker auf.
                                </span>
                            </div>

                            <div class="row">
                              <div class="medium-5 columns" style="float: right;">
                                @include('common.patient-form', ['lang' => $lang,'formName' => 'form2', 'formData'=> $formData])
                              </div>
                                <div class="medium-7 columns">
                                    <div class="padento-box">
                                        <div class="padento-box-head">
                                            <p>Nehmen Sie <strong class="blue">unbedingt</strong> Ihre Chance wahr und
                                                holen Sie sich eine professionelle
                                                <strong class="blue">2.Meinung</strong> beim Zahntechniker und
                                                vielleicht auch bei einem unabhängigen Zahnarzt,
                                                damit Sie wirklich <strong class="blue">mitreden</strong> können.</p>
                                        </div>
                                        <div class="padento-box-content">
                                            <div class="flex-video widescreen">
                                                <iframe src="//fast.wistia.net/embed/iframe/k41j7v41lk?videoFoam=true"
                                                        allowtransparency="true" frameborder="0" scrolling="no"
                                                        class="wistia_embed" name="wistia_embed" allowfullscreen
                                                        mozallowfullscreen webkitallowfullscreen oallowfullscreen
                                                        msallowfullscreen width="720" height="405"></iframe>
                                                <script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="padento-box">
                                        <div class="padento-box-head">
                                            <p>Zahnersatz ist oft eine unvorhergesehene, finanzielle Belastung. <strong>Sie wissen nicht wie Sie Ihren Zahnersatz finanzieren sollen?</strong> Wir bieten Ihnen die Lösung:</p>
                                        </div>
                                        <div class="padento-box-content">

                                        </div>
                                    </div-->
                                </div>
                            </div>
                        </section>

                        <section class="testimonials section">
                          <div class="row">
                            <div class="small-12 columns">

                              <h1 class="centered" style="padding-top: 25px; font-weight:bold;">Was glückliche
                                Patienten über Padento sagen...</h1>

                                <p style="text-align:center;">
                                  Was uns täglich antreibt und bis in die Haarspitzen motiviert sind
                                  <strong class="blue">die ganzen Erfolgsgeschichten von all den glücklichen
                                    Menschen</strong>, denen
                                    wir mit Padento bereits helfen konnten. Lesen Sie selbst und lassen auch Sie
                                    sich inspirieren:
                                  </p>

                                  <div class="row small-up-1 medium-up-2" data-equalizer="c7up3k-equalizer"
                                  data-equalize-on="medium" data-equalize-by-row="true" data-resize="y9y11w-eq"
                                  data-mutate="1zhyd6-eq" data-events="mutate">
                                  <div class="column">
                                    <div class="padento-box" data-equalizer-watch="" style="height: 366px;">
                                      <div class="padento-box-content">
                                        <div class="box-wrap">
                                          <blockquote>
                                            <p style="padding-bottom:100px;">

                                              <!--
                                              Zu meiner Zahnärztin gehe ich schon seit über 30 Jahren.
                                              Sie sagt es wäre bei mir halt so, das alle paar Jahre
                                              ein Zahn fällt und die Prothese dann erweitert wird.
                                              Damit müsste ich leben. Nur ist das mittlerweile
                                              unerträglich. Ich bin froh bei Ihnen im Labor zu sitzen
                                              und die tollen Möglichkeiten für Zahnersatz zu sehen und
                                              sehr verständlich erklärt zu bekommen. Alle meine Fragen
                                              wurden zu meiner vollsten Zufriedenheit beantwortet.
                                              Vielen Dank, Herr Broich an Sie und die
                                              Zahnarztempfehlung.
                                              <cite>Petra W. aus Köln</cite>
                                            -->

                                            Zum Padento-Labor kam ich nach einer Odyssey an
                                            negativen Erfahrungen.
                                            Mir wurden endlich alle Fragen zu meinen Wünschen
                                            verständlich beantwortet.
                                            Das fertiggestellte Ergebnis und der Verlauf der
                                            Behandlung hat mir gezeigt,
                                            dass ich genau den richtigen Weg gewählt habe.

                                          </p>
                                          <div class="float-right" style="margin-top: -60px;">
                                            <img style="border-radius: 50px; height: 100px;width: 100px;"
                                            src="https://padento.de/wissen/c/uploads/2017/09/personaa04.jpg?1505909100622">
                                          </div>

                                          <cite>Carmen Wißmann aus Osnabrück</cite>


                                        </blockquote>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="column">
                                  <div class="padento-box" data-equalizer-watch="" style="height: 366px;">
                                    <div class="padento-box-content">
                                      <div class="box-wrap">
                                        <blockquote>
                                          <p style="padding-bottom: 75px;">
                                            <!--Ich war schon bei mehreren Zahnärzten und jeder
                                            hatte mir etwas anderes empfohlen. Das ist ja auch in
                                            anderen Branchen nichts Ungewöhnliches und auch gar
                                            nicht schlecht. Jeder hat eben seine eigenen
                                            Vorstellungen von den unterschiedlichen Techniken. Aber
                                            ich wollte mir selbst mein eigenes Bild machen und so
                                            bin ich einfach in eines dieser Dentallabore gegangen,
                                            die sich in dieser Aktion für Transparenz bereit erklärt
                                            haben. Ich kann das wirklich jedem raten, das zu tun.
                                            <cite>Bernd T. aus Nürnberg</cite>
                                          -->

                                          Ich weiß nicht wie weit ich OHNE - das an die Hand
                                          nehmen - von PADENTO gekommen wäre.
                                          Vermutlich gleich nach dem Start mit Motorschäden wieder
                                          zurück in die Box.
                                          Mehr als zurecht ist PADENTO mit dem Change Award
                                          ausgezeichnet worden für die beste Idee im Jahr 2015.
                                          Dazu natürlich ein kräftiges Händeschütteln, Applaus mit
                                          Tusch der Werkskapelle!
                                        </p>
                                        <div class="float-right" style="margin-top: -60px;">
                                          <img style="border-radius: 50px; height: 100px;width: 100px;"
                                          src="https://padento.de/wissen/c/uploads/2017/09/persona022.jpg?1505909100622">
                                        </div>
                                        <cite>Gerd Frassa aus Hessen</cite>
                                      </blockquote>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="column">
                                <div class="padento-box" data-equalizer-watch="" style="height: 313px;">
                                  <div class="padento-box-content">
                                    <div class="box-wrap">
                                      <blockquote>
                                        <p style="padding-bottom:50px;">
                                          <!--Ich habe bei meinem Zahnarzt gar keine
                                          Möglichkeiten gezeigt bekommen. Meine Brücke hatte eine
                                          silberne Krone, die ich niemals haben wollte. Meine
                                          Freundin dagegen wurde von ihrem Zahnarzt sehr gut
                                          beraten. Es scheint wirklich Unterschiede in den
                                          einzelnen Praxen zu geben. So habe ich mich einfach
                                          sicherer gefühlt nach dem Besuch in einem Dentallabor in
                                          meiner Nähe.
                                          <cite>Silke F. aus Wuppertal</cite>
                                        -->

                                        Dank Padento konnte ich endlich eine richtige
                                        Entscheidung treffen. Vorher waren es für mich
                                        sogenannte böhmische Dörfer, wenn es um Zahnersatz
                                        anging.
                                        Nach dem Besuch im Dentallabor wusste ich genau, was ich
                                        wollte.
                                        Ich habe jetzt die Lösung gefunden, die zu mir passt.

                                      </p>
                                      <div class="float-right" style="margin-top: -60px;">
                                        <img style="border-radius: 50px; height: 100px;"
                                        src="https://padento.de/wissen/c/uploads/2017/09/persona02.jpg?1505909100622">
                                      </div>
                                      <cite>Katrin Erichsen aus Berlin</cite>

                                    </blockquote>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="column">
                              <div class="padento-box" data-equalizer-watch="" style="height: 313px;">
                                <div class="padento-box-content">
                                  <div class="box-wrap">
                                    <blockquote>
                                      <p style="padding-bottom:95px;">

                                        <!--Der Chef des Dentallabors hat sich echt viel Zeit
                                        genommen, mir alle Möglichkeiten der verschiedenen
                                        Materialien zu zeigen. Die Vielfalt ist so riesig, da
                                        war es für mich schon wichtig über die Vor- und
                                        Nachteile genauestens zu informieren.
                                        <cite>Birgit D. aus Hannover</cite>
                                      -->
                                      Schöne und gesunde Zähne gehören für mich einfach zu
                                      einem guten Lebensgefühl dazu.
                                      Es gibt heute so viele Möglichkeiten beim Zahnersatz und
                                      da hat mir das Team von
                                      PADENTO bei meiner Entscheidung geholfen.
                                    </p>
                                    <div class="float-right">
                                      <img style="margin-top: -50px; border-radius: 50px; height: 100px;"
                                      src="https://padento.de/wissen/c/uploads/2017/09/gerd_fresa.jpg?1505909100622">
                                    </div>
                                    <cite>Uwe Breuer aus Hamburg</cite>
                                  </blockquote>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>


                        <!--section class="process section">
                            <div class="row">
                                <div class="small-12 columns">
                                    <h2>Teilzahlung, Beratung vom Zahntechnikermeister, 2. Zahnarztmeinung, Made in Germany</h2>
                                    <p class="lead">Die <strong class="blue">bestmögliche Entscheidungshilfe</strong> für Ihre neuen Zähne:</p>
                                    <div class="row">
                                        <div class="medium-6 columns">
                                            <h3><img src="/img/liste.svg" /> Ablauf</h3>
                                            <ul>
                                                <li><span class="blue">01</span> Füllen Sie das <strong>Formular</strong> aus und tragen Sie Ihre Daten dort ein.
                                                <li><span class="blue">02</span> Sie werden von uns telefonisch kontaktiert, um einen <strong>Termin</strong> zu machen.
                                                <li><span class="blue">03</span> Sie gehen <strong>zusammen mit dem Zahntechniker zu einem ausgewählten Zahnarzt</strong>, von dem sich auch der Zahntechniker behandeln lassen würde.
                                                <li><span class="blue">04</span> Ein ausgewählter Zahnarzt ist nicht teurer als andere Zahnärzte. <strong>Er ist einfach nur sehr gut.</strong>
                                                <li><span class="blue">05</span> Sie bekommen zusätzlich eine <strong>zweite Meinung vom Zahnarzt</strong>, die bei den vielen Möglichkeiten heutzutage absolut wichtig ist.
                                                <li><span class="blue">06</span> Der Zahntechniker lernt Sie als <strong>Mensch</strong> persönlich kennen und sieht nicht nur das Gips-Modell.
                                                <li><span class="blue">07</span> Dadurch werden Ihre neuen Zähne <strong>viel besser zu Ihnen passen</strong>.
                                                <li><span class="blue">05</span> Bei <strong>Angstpatienten</strong> werden spezielle Zahnärzte ausgesucht, die sich damit auskennen.
                                            </ul>
                                        </div>
                                        <div class="medium-6 columns">
                                            <h3><img src="/img/stern.svg" /> Ihre Vorteile</h3>
                                            <ul>
                                                <li><span class="blue">01</span> Der Zahntechniker lernt Sie als Mensch persönlich kennen und sieht nicht nur das Gips-Modell.
                                                <li><span class="blue">02</span> Sie lernen im Dentallabor mehrere zahntechnische Möglichkeiten kennen
                                                <li><span class="blue">03</span> Sie können im Dentallabor die Höhe einer Teilzahlung sofort abfragen
                                                <li><span class="blue">04</span> Sie können beim Zahnarzt Ihre neuen Zähne machen lassen
                                                <li><span class="blue">Oder:</span> Sie können zu einem Zahnarzt des Dentallabors gehen, um sich eine 2. Zahnarzt-Meinung zu holen
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section-->


                        <section class="snd-opinion section">
                            <div class="row">
                                <div class="small-12 medium-12 columns">

                                    <h1 style="padding-top:25px; text-align: center; font-weight:bold;">Padento ist ein
                                        echtes Familienunternehmen
                                    </h1>

                                    <p style="text-align:center; padding-bottom: 10px;">
                                        <strong>Seit April 2014 ist Padento online</strong> und wir haben bis heute
                                        bundesweit viele
                                        <strong>ausgewählte Dentallabore</strong> als Partner gewinnen können. Die
                                        Begeisterung
                                        ist wirklich groß. Padento konnte bereits in den ersten Jahren sehr <strong>viele
                                            Menschen sehr glücklich machen</strong>. Mittlerweile haben sich mehr als
                                        25.000
                                        Patienten bei Padento gemeldet. Unser Team wächst und wir entwickeln
                                        uns jeden Tag weiter. Wir sind <strong>kein Call-Center</strong>, sondern ein
                                        rein geführter
                                        Familienbetrieb.
                                    </p>
                                </div>

                                <div class="small-12 medium-12 columns">
                                    <p style="text-align:center;">
                                        <img style="box-shadow: #d6ede7 0px 0px 18px 5px; border-radius: 30px;"
                                             src="https://padento.de/wissen/c/uploads/2017/09/padentofamily-new-start-page.jpg"/>
                                    </p>
                                </div>
                            </div>
                        </section>

                        <!--
                                                <section class="snd-opinion section">
                                                    <div class="row">
                                                        <div class="small-12 columns">

                                                            <p>
                                                                Jeder Mensch hat <strong>das Recht</strong>, sich bei neuen Zähnen <strong>voll
                                                                    und ganz zu informieren</strong>.
                                                                <br>Die meisten Menschen sind bei Themen wie Implantaten, Prothesen oder anderen
                                                                Möglichkeiten des Zahnersatzes völlig überfordert, weil sie es schwer begreifen
                                                                können.<br> Sie können natürlich Ihrem Zahnarzt blind vertrauen.<br>
                                                                Es gibt hier aber <strong>große Unterschiede in der Qualität der
                                                                    Beratung</strong>. Viele
                                                                verlassen die Praxis mit einem Heil-und Kostenplan und haben nicht wirklich
                                                                verstanden, was sie genau bekommen.
                                                            </p>

                                                            <p><strong>Nehmen Sie jetzt Ihre Chance wahr</strong> und holen Sie sich <strong>eine
                                                                    professionelle 2.
                                                                    Meinung</strong> beim Zahntechniker und einem auserwählten anderen Zahnarzt,
                                                                damit Sie
                                                                mitreden können und bestens beraten wurden. Mehr geht nicht!</p>

                                                            <p>Erfahren Sie auch auf unserem Zahninfo-Blog mehr über Ihre Möglichkeiten des
                                                                Zahnersatzes. Hier beantworten wir Fragen, die immer wieder an uns herangetragen
                                                                werden, wie etwa: Welche Vor- und Nachteile haben herausnehmbarer und fester
                                                                Zahnersatz? Was kostet ein Zahnimplantat? Was tun, wenn die Prothese nicht
                                                                richtig passt? Oder Kann ich Implantate oder anderen Zahnersatz auch
                                                                finanzieren?</p>
                                                        </div>
                                                    </div>
                                                </section>


                                                -->
                    </div>
                </article>
            </div>
        </div>
    </main>

    @if(isset($note))
        <script>
            alert("{{$note}}");
        </script>
    @endif
@stop

@section('foot')
    <script>
    $(document).ready(function () {
      // Replace all SVG images with inline SVG
      $('img.check').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = $(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr('xmlns:a');

          // Replace image with new SVG
          $img.replaceWith($svg);

        }, 'xml');
      });
    });
    </script>
    <script>
        $(document).ready(function () {
            $('.padento-form').submit(function (e) {
                $('.submit-button').attr('disabled', 'disabled');
            });
        });
    </script>

    @if (!$errors->form1->isEmpty())
        <script>
            $(document).ready(function () {
                $('html, body').animate({
                    scrollTop: $("#form1").offset().top
                }, 2000);
            });
        </script>
    @endif

    @if (!$errors->form2->isEmpty())
        <script>
            $(document).ready(function () {
                $('html, body').animate({
                    scrollTop: $("#form2").offset().top
                }, 2000);
            });
        </script>
    @endif
@endsection
