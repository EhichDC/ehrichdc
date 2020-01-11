@extends('layouts.home')

@section('head')

@stop

@section('content')
    <main id="page">
        <div class="row">
            <div class="medium-10 column small-centered">
                @if(isset($request))
                    <h1 class="centered">Vielen Dank! </h1>
                    <p> Wir haben Ihren Wunschtermin erhalten und werden uns in den kommenden Tagen in der von Ihnen
                        angegeben Zeit von {{$request->from}} bis {{$request->till}}
                        @if ($request->weekend_from != '' && $request->weekend_till != '')
                            oder am Samstag zwischen {{$request->weekend_from}} und {{$request->weekend_till}}
                        @endif
                        telefonisch bei Ihnen zur Abstimmung eines Besuchstermines für ein ausführliches, kostenloses
                        Beratungsgespräch im Dentallabor melden.
                    </p>
                @else
                    <h1 class="centered">Vielen Dank für Ihr Vertrauen!<br />Sie haben alles richtig gemacht!</h1><br>
                    <div class="row">
                        <div class="colum">
                            <div class="lab-box">
                                <div class="container-fluid">
                                    <div class="lab-box-header">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="your-lab">
                        <div class="row">
                            <div class="medium-8 columns">
                                <h3 class="centered" style="color: black"><b>So geht es jetzt weiter:</b></h3>
                                <br>
                                <p class="lab-box-content" style="text-align: center">
                                    Es ist für Sie nur noch <b>ein kleiner Schritt zu ihren schönen und neuen Zähnen:</b><br>Rufen Sie <u>jetzt</u> in Ihrem Dentallabor an und vereinbaren Sie einen <u>kostenlosen Beratungstermin</u>: <a href="tel:{{ $lab->labmeta->tel }}">{{ $lab->labmeta->tel }}</a><br>
                                    <br>Denn wenn Sie einen neunen Zahnersatz benötigen gehen Sie mit Padento den besten und sichersten Weg, den es gibt
                                </p>
                                <br>
                                <br>
                                <p style="text-align: center">Ihr Ansprechpartner heißt <b>{{ $kontaktperson }}</b> und freut sich auf Sie!


                                    @if (session('patientConfirmed'))
                                        <!-- section class="besttime">
                                            <div class="row">
                                                <div class="medium-12 large-12 large-centered columns">
                                                    <h5><strong>Wann können wir Sie am besten erreichen?</strong></h5>
                                                    {{ Form::open(array('url' => '/wann', 'method' => 'POST', 'files' => true)) }}
                                                    {{ Form::hidden('patient_id',session('patientConfirmed')->id) }}
                                                    {{ Form::hidden('lab_id',$lab->id) }}

                                                    <div class="row">
                                                        <div class="medium-6 columns">
                                                            {{ Form::label('from','Erreichbar werktags von:') }}
                                                            {{ Form::select('from', array(
                                                                '' => '-- Auswählen --',
                                                                '08:00 Uhr' => '08:00 Uhr',
                                                                '09:00 Uhr' => '09:00 Uhr',
                                                                '10:00 Uhr' => '10:00 Uhr',
                                                                '11:00 Uhr' => '11:00 Uhr',
                                                                '12:00 Uhr' => '12:00 Uhr',
                                                                '13:00 Uhr' => '13:00 Uhr',
                                                                '14:00 Uhr' => '14:00 Uhr',
                                                                '15:00 Uhr' => '15:00 Uhr',
                                                                '16:00 Uhr' => '16:00 Uhr',
                                                                '17:00 Uhr' => '17:00 Uhr',
                                                                '18:00 Uhr' => '18:00 Uhr',
                                                                '19:00 Uhr' => '19:00 Uhr',
                                                            ), null) }}
                                                        </div>
                                                        <div class="medium-6 columns">
                                                            {{ Form::label('till','bis:') }}
                                                            {{ Form::select('till', array(
                                                                '' => '-- Auswählen --',
                                                                '09:00 Uhr' => '09:00 Uhr',
                                                                '10:00 Uhr' => '10:00 Uhr',
                                                                '11:00 Uhr' => '11:00 Uhr',
                                                                '12:00 Uhr' => '12:00 Uhr',
                                                                '13:00 Uhr' => '13:00 Uhr',
                                                                '14:00 Uhr' => '14:00 Uhr',
                                                                '15:00 Uhr' => '15:00 Uhr',
                                                                '16:00 Uhr' => '16:00 Uhr',
                                                                '17:00 Uhr' => '17:00 Uhr',
                                                                '18:00 Uhr' => '18:00 Uhr',
                                                                '19:00 Uhr' => '19:00 Uhr',
                                                                '20:00 Uhr' => '20:00 Uhr',
                                                            ), null) }}
                                                        </div>
                                                    </div>

                                                    <div id="weekendTimes" style="display: none">
                                                        <div class="row">
                                                            <div class="medium-6 columns">
                                                                {{ Form::label('weekend_from','von:') }}
                                                                {{ Form::select('weekend_from', array(
                                                                    '' => '-- Auswählen --',
                                                                    '08:00 Uhr' => '08:00 Uhr',
                                                                    '09:00 Uhr' => '09:00 Uhr',
                                                                    '10:00 Uhr' => '10:00 Uhr',
                                                                    '11:00 Uhr' => '11:00 Uhr',
                                                                    '12:00 Uhr' => '12:00 Uhr',
                                                                    '13:00 Uhr' => '13:00 Uhr',
                                                                    '14:00 Uhr' => '14:00 Uhr',
                                                                    '15:00 Uhr' => '15:00 Uhr',
                                                                    '16:00 Uhr' => '16:00 Uhr',
                                                                    '17:00 Uhr' => '17:00 Uhr',
                                                                    '18:00 Uhr' => '18:00 Uhr',
                                                                    '19:00 Uhr' => '19:00 Uhr',
                                                                ), null, []) }}
                                                            </div>
                                                            <div class="medium-6 columns">
                                                                {{ Form::label('weekend_till','bis:') }}
                                                                {{ Form::select('weekend_till', array(
                                                                    '' => '-- Auswählen --',
                                                                    '09:00 Uhr' => '09:00 Uhr',
                                                                    '10:00 Uhr' => '10:00 Uhr',
                                                                    '11:00 Uhr' => '11:00 Uhr',
                                                                    '12:00 Uhr' => '12:00 Uhr',
                                                                    '13:00 Uhr' => '13:00 Uhr',
                                                                    '14:00 Uhr' => '14:00 Uhr',
                                                                    '15:00 Uhr' => '15:00 Uhr',
                                                                    '16:00 Uhr' => '16:00 Uhr',
                                                                    '17:00 Uhr' => '17:00 Uhr',
                                                                    '18:00 Uhr' => '18:00 Uhr',
                                                                    '19:00 Uhr' => '19:00 Uhr',
                                                                    '20:00 Uhr' => '20:00 Uhr',
                                                                ), null, []) }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{--                                                    @include('partials.attachments_form')--}}
                                                    {{ Form::submit('Formular abschicken',array('class' => 'button primary', 'style' => 'margin-top:1.4em;color: white;')) }}
                                                    {{ Form::close() }}
                                                </div>
                                            </div>
                                        </section -->
                                @endif

                            </div>
                            <div class="medium-4 columns">
                                <div class="callout">
                                    <div class="row">
                                        <div class="medium-12 columns">
                                            <p class="centered"><img src="/{{ $image }}"/>
                                        </div>
                                        <div class="medium-12 columns">

                                            <p class="centered"><img src="/img/kontaktfotos/foto{{ $id }}_neu.jpg"/>


                                            <p><strong>Ihr Ansprechpartner:</strong>
                                                <br>{{ $kontaktperson }}
                                                <br>Dentallabor aus {{ $stadt }}
                                                <br>Telefon: {{ $labtel }}
                                                <br><br><a class="button secondary" href="/labor/{{ $labor }}">Mein
                                                    Dentallabor ansehen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
        </div>

    </main>


@endsection

@section('foot')
    <script>
        $(document).ready(function () {
            $('#onWeekend').change(function () {
                if (this.checked)
                    $('#weekendTimes').fadeIn('slow');
                else
                    $('#weekendTimes').fadeOut('slow');
            });
        });
    </script>
    {{--
    <!-- Google Analytics -->
    <script>
     ga('send', 'event', 'Kontakt', 'bestätigt', '{{ Users::find($lab->account_id)->realname }}');
    </script>
    <!-- End Google Analytics -->
    --}}

@stop
