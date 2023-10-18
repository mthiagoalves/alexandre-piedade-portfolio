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

        @media(max-width: 756px) {
            .container-text-in-mobile{
                position: relative;
                height: 220px;
            }
            .text-left-after-banner {
                font-size: 1.5rem;
                line-height: 1.758rem;
                text-align: justify;
                text-align-last: left;
            }

            .text-right-after-banner {
                text-align: justify;
                text-align-last: right;
            }

            .div-text-left-in-mobile {
                position: absolute;
                top: 0;
                left: 0;
                transition: all 0.5s ease 0s;
            }

            .div-text-right-in-mobile {
                position: absolute;
                top: 0;
                left: 100vw;
                transition: all 0.5s ease 0s;
            }

            .text-in-mobile {
                display: flex;
            }

            .arrows {
                margin: auto;
            }

            .arrows i {
                color: #212529;
            }
        }
    </style>
@endsection

@section('main-content')
    <div class="container p-0 my-5 container-text-in-mobile">
        <div class="row justify-content-between m-0">
            <div class="col-sm-8 col-12 div-text-left-in-mobile">
                <div class="text-in-mobile">
                    <div class="col-11 p-2 col-sm-12 p-sm-0">
                        <p class="text-left-after-banner">
                            Passionate UI/UX and Graphic Designer, committed to improving user experiences and eager to
                            merge
                            graphic and product design skills for a dynamic career.
                        </p>
                    </div>
                    <div class="col-1 p-2 d-block d-sm-none arrows">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-12 div-text-right-in-mobile">
                <div class="text-in-mobile">
                    <div class="col-1 p-2 d-block d-sm-none arrows">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="col-11 p-2 col-sm-12 p-sm-0">
                        <p class="text-right-after-banner">
                            Creative problem solver who crafts intuitive designs, bringing together form and function to
                            elevate
                            user interactions and leave a lasting impression.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid offset-sm-1 p-sm-0 my-5">
        @include('components.slide-projects')
    </div>

    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
