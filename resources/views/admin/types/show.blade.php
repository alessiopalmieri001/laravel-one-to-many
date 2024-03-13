@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
<section id="admin-show">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="my-card">
                <div class="my-card-body">
                    <h1 class="text-center mb-5">
                        {{ $type->title }}
                    </h1>

                    <p class="mb-3">
                        {{ $type->content }}
                    </p>

                    <div>
                        Creato il: 
                        <span class="text-success">
                            {{ $type->created_at->format('d/m/Y') }}
                        </span>
                        <br>
                        Alle: 
                        <span>
                            {{ $type->created_at->format('H:i')  }}
                        </span>
                    </div>

                    @if ($type['updated_at'] != $type['created_at'])
                        <div>
                            Modificato il: 
                            <span>
                                {{ $type->updated_at->format('d/m/Y') }}
                            </span>
                            <br>
                            Alle: 
                            <span>
                                {{ $type->updated_at->format('H:i')  }}
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection