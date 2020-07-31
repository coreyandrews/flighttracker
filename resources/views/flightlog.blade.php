@extends('layout')

@section('content')

    <!-- Header -->
    <header id="header">
        <h1><a href="/">Flight Tracker</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Wrapper -->
    <section id="wrapper">
        <header>
            <div class="inner">
                <h2>Flight Book</h2>
                <p>A list of every flight flown</p>
            </div>
        </header>

        <!-- Content -->
        <div class="wrapper">
            <div class="inner">

                <section>
                    <h3 class="major">flight log book</h3>
                    <div class="table-wrapper">
                        
                        <table>
                            <thead>
                                <tr>
                                    <th>FLIGHT</th>
                                    <th>DATE</th>
                                    <th>FROM</th>
                                    <th>TO</th>
                                    <th>AIRCRAFT</th>
                                    <th>FLIGHT TIME</th>
                                    <th>ALT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($flights as $flight)
                                    <tr>
                                        <td><a href="/flightlog/{{ $flight->id }}">{{ $flight->aircraft_reg }}</a></td>
                                        <td>{{ $flight->dep_date }}</td>
                                        <td>{{ $flight->dep_icao }}</td>
                                        <td>{{ $flight->arr_icao }}</td>
                                        <td>{{ $flight->aircraft_typ }}</td>
                                        <td>{{ $flight->altitude }}</td>
                                        <td>{{ $flight->altitude }}</td>
                                        <td><a href="/flightlog/{{ $flight->id }}/edit">Modify</a></td>
                                        <td><a href="flightlog/{{ $flight->id }}"
                                                onclick="var result = confirm('Are you sure you want to delete this flight?'); 
                                                if(result){ 
                                                event.preventDefault(); 
                                                document.getElementById('delete-form').submit();}">Delete</a>
                                        <form class="logbook" method="POST" id="delete-form"
                                            action="{{ route('flights.destroy', [$flight->id]) }}"> @csrf <input
                                                type="hidden" name="_method" value="DELETE">
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
    </section>

    </div>
    </div>

    </section>



@endsection
