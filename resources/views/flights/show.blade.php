@extends('layout')
@section('content')

    <!-- Header -->
    <header id="header">
        <h1><a href="/">Flight Tracker</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <section class="container">
            <header class="major">
                <h2>WJA452</h2>
                <span class="byline">{{ $flight->dep_icao }} - {{ $flight->arr_icao }}</span>
            </header>
            <div class="row">

                <!-- Content -->
                <div class="6u">
                    <section>
                        <ul class="style">
                            <li>
                                <span class="fa fa-wrench"></span>
                                <h3>Departure Information</h3>
                                <p>Departure Airport: {{ $flight->dep_icao }}</p>
                                <p>Date: {{ $flight->dep_date }}</p>
                                <p>Time: {{ $flight->dep_time }}</p>
                            </li>
                            <li>
                                <span class="fa fa-cloud"></span>
                                <h3>Arrival Information</h3>
                                <p>Arrival Airport: {{ $flight->arr_icao }}</p>
                                <p>Date: {{ $flight->arr_date }}</p>
                                <p>Time: {{ $flight->arr_time }}</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="6u">
                    <section>
                        <ul class="style">
                            <li>
                                <span class="fa fa-cogs"></span>
                                <h3>Aircraft Information</h3>
                                <p>Aircraft: {{ $flight->aircraft_typ }}</p>
                                <p>Aircraft Registration: {{ $flight->aircraft_reg }}</p>
                                <p>Route: {{ $flight->route }}</p>
                            </li>
                            <li>
                                <span class="fa fa-leaf"></span>
                                <h3>Aliquam luctus</h3>
                                <span>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas
                                    condimentum enim tincidunt risus accumsan.</span>
                            </li>
                        </ul>
                    </section>
                </div>

            </div>
        </section>
    </div>
    </section>
    </div>

    <div id="main" class="wrapper style1">
        <section class="container">
            <div class="row">

                <div class="row">
                    <section class="container">
                        <div class="12u">
                            <section>
                                <ul class="style">
                                    <li><a href="/flightlog/{{ $flight->id }}/edit" class="button big">Edit Entry</a></li>
                                    <li><a href="flightlog/{{ $flight->id }}" class="button big" onclick="
                																			var result = confirm('Are you sure you want to delete this flight?');
                																			if(result){
                																				event.preventDefault();
                																				document.getElementById('delete-form').submit();
                																			}">Delete</a></li>
                                    <form method="POST" id="delete-form"
                                        action="{{ route('flights.destroy', [$flight->id]) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </ul>
                            </section>
                        </div>
                </div>
        </section>
    </div>


@endsection
