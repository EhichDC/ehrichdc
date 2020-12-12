@extends('layouts.home')

@section('head')

@stop



@section('content')

    <main id="page" class="home">
        <div class="row">
            <div class="small-12 columns">
                <article>
                    <header class="entry-header">
                        <div class="row">
                            <div class="small-12 columns">
                                <h1>Legen Sie den neuen EDC Kunden an.</h1>
                            </div>
                        </div>
                    </header>
                    <div class="entry-content">
                        <p class="centered">
                            <div class="row">
                                <div class="large-6 large-centered columns">
                                    {{ Form::open(array('route' => 'lab.store', 'method' => 'POST')) }}
                                    @if (count($errors) > 0)
                                        <div class="alert callout" data-closable>
                                            <h5>Fehler:</h5>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button class="close-button" aria-label="Dismiss alert" type="button"
                                                    data-close>
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                        @endif
                        {{ csrf_field() }}
                        <p>
                            {{ Form::label('labemail', 'E-Mail Adresse:') }}
                            {{ Form::email('lab[user][email]', null, ['required']) }}
                        </p>

                        <p>
                            {{ Form::label('password', 'Passwort:') }}
                            {{ Form::password('lab[user][password]' , null, ['required']) }}
                            {{ Form::label('check', 'Passwort wiederholen:') }}
                            {{ Form::password('lab[user][password_confirmation]', null, ['required']) }}
                        </p>
                        <p>
                            {{ Form::label('labname', 'Name des Labors:')}}
                            {{ Form::text('lab[lab][name]', null, ['required'])}}
                        </p>
                        <p>
                            {{ Form::label('ansprechpartner', 'Name des Laborschefs')}}
                            {{ Form::text('lab[lab][labmeta][contact_person]', null, ['required'])}}
                        </p>

                        <p>
                            {{ Form::button('EDC Kunde anlegen', ['type' => 'submit', 'class' => 'button']) }}
                        </p>
                        {{ Form::close() }}
                    </div>
            </div>
        </div>
        </article>
        </div>
        </div>
    </main>
@stop