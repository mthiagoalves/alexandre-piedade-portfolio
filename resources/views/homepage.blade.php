@extends('layouts.app')
@section('meta')
@endsection

@section('style-include')
    <style>
        .text-left-after-banner {
            font-size: 2.375rem;
            line-height: 3.135rem;
        }

        .text-right-after-banner {
            font-size: 1.5rem;
            line-height: 1.758rem;
        }
    </style>
@endsection

@section('main-content')
    <div class="container p-0 mt-5" style="height: 100vh">
        <div class="row justify-content-between m-0">
            <div class="col-8">
                <p class="text-left-after-banner">
                    Passionate UI/UX and Graphic Designer, committed to improving user experiences and eager to merge
                    graphic and product design skills for a dynamic career.
                </p>
            </div>
            <div class="col-3">
                <p class="text-right-after-banner">
                    Creative problem solver who crafts intuitive designs, bringing together form and function to elevate
                    user interactions and leave a lasting impression.
                </p>
            </div>
        </div>
    </div>

<div class="container-fluid offset-1 p-0 my-5">
    @include('components.slide-projects')
</div>
@endsection
