@extends('layouts.tailwind')

@section('title', 'TimeTracker')

@section('content')

    @php
        $sections = ['Today', 'This Week'];
        $items =[
            'johntheeatherman.com',
            'johnclendvoy.ca',
            'TimeTracker.dev',
            'Testing.dev'
        ];
    @endphp

    <body class="bg-grey-light h-screen">

        <div class="flex bg-white p-4 shadow-md justify-between items-center">
                <div class="">
                    <a href="/"><h1 class="text-green"><i class="fa fa-clock-o"></i> TimeTracker</h1></a>
                </div>

                <div class="">
                    <a><i class="fa fa-bars"></i></a>
                </div>
        </div>

        <div class="container flex">

            <div class="w-1/4 my-6 mr-3">
                <div class="bg-white rounded-r-lg shadow-md">


                    <div class="rounded-tr-lg">
                        <a class="left-sidebar-link rounded-tr-lg" href="">Today</a>
                        <a class="left-sidebar-link" href="">This Week</a>
                        <a class="left-sidebar-link" href="">This Month</a>
                        <a class="left-sidebar-link" href="">Archive</a>
                    </div>

                    <div class="text-right p-2">
                        <a href="" class="text-green-dark text-sm"><i class="fa fa-plus"></i> Add Section</a>
                    </div>
                </div>
            </div>

            <div class="w-3/4 my-6 ml-3">


                @foreach($sections as $section)

                    <h2 class="font-thin">{{$section}}</h2>

                    @foreach($items as $item)
                        <div class="bg-white p-4 my-4 sm:flex sm:flex-col md:flex-row sm:justify-start md:justify-between rounded-l-lg shadow-md">

                            <div class="">
                                <div>
                                    <h3 class="text-grey-darkest text-lg">{{ $item }}</h3>
                                </div>
                                <div class="mt-1">
                                    <p class="text-sm text-green-dark">John &middot; {{Carbon\Carbon::now()->diffForHumans()}} </p>
                                </div>
                            </div>


                            <div class="flex justify-center items-center mt-4 md:mt-0">
                                <a class="action-button hover:bg-green-light hover:text-green-darker" href=""><i class="fa fa-pause"></i></a>

                                <a class="action-button hover:bg-purple-lighter hover:text-purple-dark" href=""><i class="fa fa-gear"></i></a>
                                <a class="action-button hover:bg-red-lighter hover:text-red-dark" href=""><i class="fa fa-trash"></i></a>
                                <a class="action-button hover:bg-orange-lighter hover:text-orange-dark" href=""><i class="fa fa-archive"></i></a>
                            </div>

                        </div>
                    @endforeach

                @endforeach


            </div>

        </div>

    </body>
</html>

@stop