@extends('layouts.app')

@section('page-title', 'edit type')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>
                        modifica type
                    </h1>

                    <form action="{{ route('admin.types.update',['type' => $type->slug])  }}" method="POST">
                        
                        @method('PUT')

                        @csrf

                        <label for="title" class="form-label">Nome type</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il nome del nuovo type"
                            maxlength="1024" value="{{$type->title, old('title') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="content" class="form-label">Descrizione</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Inserisci la descrizione del type"
                            maxlength="1024" value="{{$type->content, old('content') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <div>
                            <button type="submit" class="btn btn-success w-100">
                                + Aggiorna
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection