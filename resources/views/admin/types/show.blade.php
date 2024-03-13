@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
<section id="show-type-guest">
    <div class="container">

        <h1>
            {{$type->name}}
        </h1>

        <div class="row justify-content-center">
            @foreach ($projects as $project)
            
            <div class="col-3">
                <div class="my-card">
                    <h3>
                        {{ $project->title }}
                    </h3>

                    <p>
                        {{ $project->content }}
                    </p>

                    @if ($project->type != null)
                        <a href="{{ route('types.show', ['type'=>$project->type->slug]) }}">
                            {{ $project->type->name }}
                        </a>
                    @else
                        -
                    @endif
                    
                    <div>
                        <a href="{{ route('projects.show', ['project' => $project->slug]) }}" class="show-button">
                            Mostra
                        </a>
                    </div>

                </div>
            </div>
            
            @endforeach
        </div>
        
        
    </div>
</section>
@endsection