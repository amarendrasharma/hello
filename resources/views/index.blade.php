@extends('layouts.tailwind-layout')

@section('content')
<div class="container mx-auto  md:w-9/12">
    <div class="tracking-tight md:flex md:flex-col-reverse">
        <div class="mb-8">
            <div class="relative pb-2/3 mr-2 mb-4 md:mb-0">
                <img class="absolute h-60 md:h-full w-full object-cover rounded" src="{{url("img/2.jpg")}}">
            </div>
            <p class="italic pt-3">When did you see the sky and enjoyed the rain last time ? </p>
        </div>
        <div class="mb-8">
            <p class="mb-3"> <span class="font-semibold"> Hello 👋,</span> I am glad that you are here, at my web
                address.
            </p>
            <p class="mb-3">I am Amar, a software developer from India.
                I have a keen interest in developing real things in web.
                <br> These days I am using <a href="https://laravel.com/"
                    class="font-semibold text-blue-600">Laravel</a> and
                <a href="https://vuejs.org" class="font-semibold text-blue-600">Vue.js</a> for crafting things that
                you may like to use.
            </p>
            <p class="mb-3"> Currently I am employeed at <a href="https://www.innoventestech.com"
                    class="text-blue-600 font-semibold">Innoventes
                    Technologies</a> and working at <a href="https://kuvera.in"
                    class="text-blue-600 font-semibold">Kuvera</a>
                as a
                developer
                consultant .</p>

        </div>
    </div>

</div>

@endsection