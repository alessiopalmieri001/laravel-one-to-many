@extends('layouts.app')

@section('page-title', 'Tutti i type')

@section('main-content')
<section id="index-types-guest">
    <div class="container">
        <div class="row">
            @foreach ($types as $singleType)
                <div class="col-3">
                    <a href="{{ route('admin.types.show', ['type'=>$singleType->slug]) }}">
                        <div class="tecnology">
                            <h3>
                                {{$singleType->title}}
                            </h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection