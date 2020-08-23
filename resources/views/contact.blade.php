@extends('layouts.tailwind-layout')

@section('content')
<div class="md:w-9/12 mx-auto">
    <p class="mb-4 tracking-wide text-gray-700 text-sm font-bold">Looking forward to hearing from you.</p>
    <form class="w-full md:w-2/3 " action="/contact" method="POST">
        <div id="o"></div>
        @csrf
        <input type="hidden" name="recaptcha" id="recaptcha">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Your name please?
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white"
                     type="text" name="name" oninput="removeError(event)"  value="{{ old('name') }}" id="ooo">
                    @error('name')
                     <p class="text-red-500 text-xs italic" >{{$message}}</p> @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Your email
                </label>
                <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500
            @error('email') border-red-500 @enderror " type="text" name="email" value="{{ old('email') }}" oninput="removeError(event)">
            @error('email') <p class="text-red-500 text-xs italic">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Write your message
                </label>
                <textarea class="resize border w-full rounded focus:outline-none focus:shadow-outline bg-gray-200 @error('message') border-red-500 @enderror " rows="5" id="ta"
                    name="message" oninput="removeError(event)"> {{ old('message') }}</textarea>
                    @error('message') <p class="text-red-500 text-xs italic">{{$message}}</p> @enderror
                    {{-- <p class="text-gray-600 text-xs italic">Looking forward to hearing from you</p> --}}
                </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Send Message
                </button>
            </div>
        </div>

    </form>
</div>


    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
        
        function removeError(event) {
                event.target.classList.remove("border-red-500");
                event.target.nextSibling.remove();
        }

        //  document.addEventListener('DOMContentLoaded',function(){
        //     document.getElementById('o').innerHTML = Math.round();
        //     let p = document.getElementById('ooo');
        //     console.log('asas',p.clientWidth);

        //     document.getElementById('ta').setAttribute('cols',Math.round(p.clientWidth/3) );
          
        // });

        grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'})
             .then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         
         });
    </script>

@endsection