@extends('layouts.tailwind')

@section('title', 'TimeTracker')

@section('content')

    @php
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
                        <a class="left-sidebar-link rounded-tr-lg" href=""><i class="fa fa-clock-o"></i> Today</a>
                        <a class="left-sidebar-link" href=""><i class="fa fa-clock-o"></i> This Week</a>
                        <a class="left-sidebar-link" href=""><i class="fa fa-clock-o"></i> This Month</a>
                        <a class="left-sidebar-link" href=""><i class="fa fa-archive"></i> Archive</a>
                    </div>

                    <div class="text-right p-2">
                        <a href="" class="text-green-dark text-sm"><i class="fa fa-plus"></i> Add Section</a>
                    </div>
                </div>
            </div>

            <div class="w-3/4 my-6 ml-3">

                <h2 class="font-thin">Today</h2>
                @foreach($items as $item)
                    <div class="bg-white p-4 my-4 flex justify-between rounded-l-lg shadow-md">

                        <div class="">
                            <div>
                                <h3 class="text-grey-darkest text-lg">{{ $item }}</h3>
                            </div>
                            <div class="mt-1">
                                <p class="text-sm text-green-dark">John &middot; {{Carbon\Carbon::now()->diffForHumans()}} </p>
                            </div>
                        </div>


                        <div class="flex justify-center items-center">
                            <a class="action-button bg-green-light text-green-darker " href=""><i class="fa fa-play-circle"></i></a>
                            <a class="action-button bg-red-light text-red-darker" href=""><i class="fa fa-pause"></i></a>

                            <a class="action-button hover:bg-purple-lighter hover:text-purple-dark" href=""><i class="fa fa-gear"></i></a>
                            <a class="action-button" href=""><i class="fa fa-trash"></i></a>
                            <a class="action-button" href=""><i class="fa fa-archive"></i></a>
                        </div>

                    </div>
                @endforeach

                <h2 class="font-thin">This Week</h2>

                @foreach($items as $item)
                    <div class="bg-white p-4 my-4 flex justify-between rounded-l-lg shadow-md">

                        <div class="">
                            <div>
                                <h3 class="text-grey-darkest text-lg">{{ $item }}</h3>
                            </div>
                            <div class="mt-1">
                                <p class="text-sm text-green-dark">John &middot; {{Carbon\Carbon::now()->diffForHumans()}} </p>
                            </div>
                        </div>


                        <div class="flex justify-center items-center">
                            <a class="action-button bg-green-light text-green-darker " href=""><i class="fa fa-play-circle"></i></a>
                            <a class="action-button bg-red-light text-red-darker" href=""><i class="fa fa-pause"></i></a>

                            <a class="action-button hover:bg-purple-lighter hover:text-purple-dark" href=""><i class="fa fa-gear"></i></a>
                            <a class="action-button" href=""><i class="fa fa-trash"></i></a>
                            <a class="action-button" href=""><i class="fa fa-archive"></i></a>
                        </div>

                    </div>
                @endforeach

                <h2 class="font-thin">This Month</h2>
                <h2 class="font-thin">Archive</h2>

            </div>

        </div>

    </body>
</html>

@stop