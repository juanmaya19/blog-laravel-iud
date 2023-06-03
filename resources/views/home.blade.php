@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">Posts</div>
                                <div class="card-body">
                                    <a href="{{ route('posts.index') }}" class="btn btn-primary btn-block">Ver Posts</a>
                                    <a href="{{ route('posts.create') }}" class="btn btn-secondary btn-block">Crear Post</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">Categorías</div>
                                <div class="card-body">                               
                                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block">Ver Categorias</a>
                                    <a href="{{ route('categories.create') }}" class="btn btn-secondary btn-block">Crear Categoria</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
@endsection
