@extends('layouts.app')
@section('meta')
@endsection

@section('style-include')
    <style>

    </style>
@endsection

@section('main-content')
    <script>
        document.querySelector('.blur').addEventListener('click', function() {
            var image = document.querySelector('.blur');
            if (image.classList.contains('click-blur')) {
                image.classList.remove('click-blur');
            } else {
                image.classList.add('click-blur');
            }
        });
    </script>
@endsection
