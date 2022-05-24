@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Bienvenido estimado usuario') }}</div>

                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <img src="https://www.gifsanimados.org/data/media/56/computadora-y-ordenador-imagen-animada-0178.gif" width="300" height="300">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
