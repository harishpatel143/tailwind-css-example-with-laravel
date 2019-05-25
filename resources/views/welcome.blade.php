<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css">

</head>
<body class="font-sans leading-normal antialiased">
<div class="min-h-screen bg-cover bg-center" style="background-image: url('/img/ocean.jpg');">
    <div class="max-w-5xl mx-auto px-6">
        <nav class="flex justify-between items-center py-5 border-b border-white-20">
            <div class="flex items-center">
                <img class="h-10 w-10" src="/img/gatsby.svg"/>
                <a href="" class="ml-6 text-white font-bold ">Flights</a>
                <a href="" class="ml-6 text-white font-bold ">Hotels</a>
                <a href="" class="ml-6 text-white font-bold ">Cars</a>
                <a href="" class="ml-6 text-white font-bold ">Vacations</a>
                <a href="" class="ml-6 text-white font-bold ">Deals</a>
            </div>
            <div>
                <a href="" class="text-white font-bold ">Trips</a>
                <a href="" class="ml-6 text-white border border-white px-4 py-2 rounded font-bold ">Sign in</a>
            </div>
        </nav>

        <div class="text-center pt-12 pb-16">
            <h1 class="leading-tight text-5xl text-white">Where will you be flying?</h1>
            <p class="text-3xl  text-white">Travel the world at prices you wouldn't believe.</p>
        </div>

        <form action="#" method="POST" class="max-w-3xl mx-auto lg:max-w-fullw-full sm: rounded-lg overflow-hidden text-gray-800">
            <div class="bg-white px-8 py-6">
                <div class="flex">
                    <label>
                        <input type="radio" name="trip_type" value="round_trip">
                        <span class="ml-6">Round Trip</span>
                    </label>
                    <label class="ml-6">
                        <input type="radio" name="trip_type" value="one_way">
                        <span class="ml-6">One Way</span>
                    </label>
                    <label class="ml-6">
                        <input type="radio" name="trip_type" value="multi_city">
                        <span class="ml-6">Multi City</span>
                    </label>
                </div>
                <div class="flex flex-wrap -mx-2 mt-4">
                    <label class="w-full sm:w-1/2 lg:w-1/4 px-2">
                        <span class="font-semibold text-sm">Origin City</span>
                        <input class="form-input" value="Torento, EU">
                    </label>
                    <label class="w-full mt-4 sm:w-1/2 sm:mt-0 lg:w-1/4 px-2">
                        <span class="font-semibold text-sm">Destination</span>
                        <input class="form-input" value="California">
                    </label>
                    <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                        <span class="fontw-1/2 lg:-semibold text-sm">Depart / Return</span>
                        <input class="form-input" value="Sun 14/4 - Thu 18/4">
                    </label>
                    <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                        <span class="font-semibold text-sm">Travellers</span>
                        <input class="form-input" value="1 Adult">
                    </label>
                </div>
            </div>

            <div class="bg-gray-100 px-8 py-3 flex items-center justify-between">
                <div class="flex">
                    <label class="">
                        <input class="px-5 py-3" type="checkbox" name="add_hotel" value="true">
                        <span class="ml-2">Add Hotel</span>
                    </label>
                    <label class="ml-8">
                        <input class="ml-1 px-5 py-3" type="checkbox" name="add_car" value="true">
                        <span class="ml-2">Add Car</span>
                    </label>
                </div>
                <div>
                    <button type="submit" class="leading-tight hover:bg-yellow-300 bg-yellow-400 text-yellow-900 font-bold rounded px-5 py-3">Search Flights</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
