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
                    <h1 class="centered">Vielen Dank für Ihre Bestätigung! </h1>
                    <section class="your-lab">
                        <div class="row">
                            <div class="medium-8 columns">

                                <p>Ihr Ansprechpartner <strong>{{ $kontaktperson }}</strong> wird sich schnellstmöglich
                                    telefonisch bei Ihnen zur Abstimmung eines Wunsch-Termines für ein ausführliches,
                                    kostenloses Beratungsgespräch im Dentallabor melden.


                                    @if (session('patientConfirmed'))
                                        <section class="besttime">
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

                                                    <label>
                                                        <input type="checkbox" name="onWeekend" id="onWeekend"
                                                               value="1">
                                                        <strong>Sind Sie Samstags zu erreichen?</strong>
                                                    </label>

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
                                        </section>
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
