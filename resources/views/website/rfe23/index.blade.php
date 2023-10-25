@extends('website/rfe23/template')
@section('content')


<section class="w-full mt-16 relative bg-white">
    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
        <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

            <h1 class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
            font-bold text-gray-900"><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 via-blue-500 to-red-500">RFO
                    CALI</span> {{__('the 2nd event more waiting of the year')}}
            </h1>
            <p class="mt-8 text-gray-700">
                {{__("The Alfonso Bonilla Aragón International Airport (previously called Palmaseca International
                Airport)
                (IATA: CLO, ICAO: SKCL) located in the Palmaseca district of the municipality of Palmira, Valle del
                Cauca, Colombia, serves the city of Cali. It was inaugurated in 1971. Currently, it is the third airport
                in Colombia in passenger movement, after El Dorado International Airport in the city of Bogotá, José
                María Córdova International Airport in Medellín.")}}
            </p>
        </div>
        <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
            <img src="{{asset('assets/img/SKCL.jpg')}}" alt="Hero image" width="2350" height="2359"
                class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
        </div>
    </div>
</section>

@endsection
