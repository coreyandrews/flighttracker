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
                    <h3 class="major">Create a flight entry</h3>
                    <div class="table-wrapper">


                        <!-- FORM -->
                        <form method="POST" action="/flightlog">
                            @csrf
                            <div class="row gtr-uniform">

                                <div class="col-4 col-12-small">
                                    <label class="label" for="dep_icao">Departure Airport</label>

                                    <div class="control">
                                        <input class="input" type="text" name="dep_icao" id="titledep_icao">
                                    </div>
                                </div>

                                <div class="col-4 col-12-small">
                                    <label class="label" for="dep_date">Departure Date</label>

                                    <div class="control">
                                        <input class="input" type="date" name="dep_date" id="dep_date">
                                    </div>
                                </div>

                                <div class="col-4 col-12-small">
                                    <label class="label" for="dep_time">Departure Time</label>

                                    <div class="control">
                                        <input class="input" type="time" name="dep_time" id="dep_time">
                                    </div>
                                </div>

                                <div class="col-4 col-12-small">
                                    <label class="label" for="arr_icao">Arrival Airport</label>

                                    <div class="control">
                                        <input class="input" type="text" name="arr_icao" id="arr_icao">
                                    </div>
                                </div>

                                <div class="col-4 col-12-small">
                                    <label class="label" for="arr_date">Arrival Date</label>

                                    <div class="control">
                                        <input class="input" type="date" name="arr_date" id="arr_date">
                                    </div>
                                </div>

                                <div class="col-4 col-12-small">
                                    <label class="label" for="arr_time">Arrival Time</label>

                                    <div class="control">
                                        <input class="input" type="time" name="arr_time" id="arr_time">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="label" for="route">route</label>

                                    <div class="control">
                                        <input class="input" type="text" name="route" id="route">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="label" for="altitude">Altitude</label>

                                    <div class="control">
                                        <input class="input" type="text" name="altitude" id="altitude">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="label" for="aircraft_typ">Aircraft Type</label>

                                    <div class="control">
                                        <input class="input" type="text" name="aircraft_typ" id="aircraft_typ">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="label" for="aircraft_reg">Aircraft Registration</label>

                                    <div class="control">
                                        <input class="input" type="text" name="aircraft_reg" id="aircraft_reg">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="label" for="img_path">Image</label>

                                    <div class="control">
                                        <input class="input" type="text" name="img_path" id="img_path">
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="primary" type="submit">Submit flight</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
        @endsection
