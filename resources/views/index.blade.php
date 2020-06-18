@extends('layouts.tailwind-layout')
@section('stylesection')
<style>
    .isNotVisible {
        display: none
    }
    .resume {
        max-width: 50px;
    }
    .designResume{
        height: 50px;
        width: 300px;
        color: rgb(147, 153, 167);
        box-shadow: rgba(109, 117, 141, 0.2) 0px 12px 48px;
        border-radius: 8px;
        overflow: hidden;
        outline: none;
        padding:4px;
    }
</style>
@endsection
@section('content')
<div class="container mx-auto  md:w-6/12">

<div class="tracking-tight">
    <div class="mb-8">
        <div class="relative pb-2/3 mr-2 mb-4 md:mb-0">
            <img class="absolute h-60 md:h-full w-full object-cover" src="{{url("img/2.jpg")}}">
        </div>
        <p class="italic py-2">When last you see the sky and enjoy the rain </p>
    </div>
        <div class="mb-8 text-xl">
            <p class="mb-3">  <span class="font-semibold"> Hello 👋,</span> I am glad that you are visiting my web address.
            </p>
    <p class="mb-3">I am Amar, a software developer from India.
        I have a keen interest in developing real things in web.
       <br> These days I am using Laravel and Vue Js for crafting things that you may like to use.
    </p>
    <p class="mb-3">  Currently I am employeed at Innoventes Technology and working at Kuvera.in as a developer consultant .</p>
        <div onmouseover="thisIsResume(event,this)"  class="resume">Resume
            <div class="designResume isNotVisible" onmouseout="hideIt(event)" onfocusout="hideIt(event)">
                PDF/HTML
            </div>
        </div>
    </div>

</div>
<script>
    var x;
    function thisIsResume(event,that) {
        x = event;
        console.log('event',event.target.tagName, that)
        console.log(x);
        event.target.lastElementChild.removeAttribute('class','isNotVisible');
        event.target.lastElementChild.setAttribute('class','designResume');

    };

    function hideIt(event) {
        console.log('mouseOut',event)
        event.target.setAttribute('class','isNotVisible');
    }
</script>
</div>
@endsection