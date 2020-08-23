@extends('layouts.tailwind-layout')

@section('content')
<div class="md:w-9/12 mx-auto">
  <a href="amarendra_resume.pdf" class="hidden md:block text-blue-600 font-semibold">👉 You can download my resume 📄
  </a>
  <div class="container">
    <div class="mb-1 md:flex md:justify-between">
      <div class="w-full md:w-9/12">
        <p class="font-bold text-3xl">Amarendra Sharma</p>
      </div>
      <div class="w-full md:w-3/12">
        <div>
          <p class="mb-1 h5">s.amarendra1995@gmail.com</p>
          <p class="mb-1 h5">+91 9613-408-174</p>
        </div>
      </div>
    </div>
    <div class="mt-3 mb-6">
      <div class="border-b-2 border-gray-600">
        <h4 class="font-bold">Objective</h4>
      </div>
      <div class="mt-2">
        <strong>Willing</strong> to associate with a vibrant organization which would provide me a platform to
        utilize my skills and knowledge for the upliftment of the organization.
      </div>
    </div>
    <div class="mb-3 mx-auto">
      <div class="md:flex md:justify-between">
        <div class="w-full md:w-6/12 mb-6">
          <div class="border-b-2 border-gray-600">
            <h4 class="font-bold">Experience</h4>
          </div>
          <div class="mt-3">
            <p class="text-red-700 font-bold">Innoventes Technology - <span class="text-gray-800">Software
                Engineer, work at
                <a href="https://kuvera.in/">Kuvera.in</a> (consultant)</span>
            </p>
            <p class="font-bold text-gray-600">March 2020 - July 2020, Bengaluru </p>
            <ul class="list-disc list-outside px-4 py-2">
              <li class="mb-2">Working on the redesigning of Mutual Fund section</li>
              <li class="mb-2">Developed scalable components: Fund comparison, listing and displaying funds
                according to the specs, revamp sip and lumpsum investment widget</li>
              <li class="mb-2">Developed every feature or component for all devices considering reusability and
                responsiveness
              </li>
              <li class="mb-2">Use State management(vuex) for all data source to achieve the single source of truth
              </li>
            </ul>
          </div>

          <div class="mt-3">
            <p class="text-red-700 font-bold">Sumato Globaltech - <span class="text-gray-800">Web
                Developer</span></p>
            <p class="font-bold text-gray-600">Jul 2018 - March 2020, Guwahati </p>
            <ul class="list-disc list-outside px-4 py-2">
              <li class="mb-2">Experienced in working with Laravel & Vue Js , Bootstrap, Tailwind CSS</li>
              <li class="mb-2">Design SPA (Single Page Application) and writing API and documenting as well </li>
              <li class="mb-2">Planning strategies and execution of back-end and front-end development.</li>
            </ul>
          </div>

          <div class="mt-3 ">
            <p class="text-red-700 font-bold">Techvariable - <span class="text-gray-800">Programmer
                Analyst</span></p>
            <p class="font-bold text-gray-600">June 2017 - June 2018, Guwahati </p>
            <ul class="list-disc list-outside px-4 py-2">
              <li class="mb-2">Engaged in a development of a PLM software with Angular JS 1.2.x framework </li>
              <li class="mb-2">Writing custom components,directives </li>
              <li class="mb-2">Application Developemt with Laravel</li>
              <li class="mb-2">Experienced with team work </li>
            </ul>
          </div>
        </div>

        <div class="w-full md:w-4/12">
          <div class="mb-6">
            <div class="border-b-2 border-gray-600">
              <h4 class="font-bold">Education</h4>
            </div>
            <div class="mt-2 pb-3">
              <p class="text-red-700 font-bold">GIMT,Guwahati</p>
              <p class="font-bold text-gray-600 mb-0">2013 -2017</p>
              <p>B.Tech in Computer Science & Engineering</p>
            </div>

            <div class="mt-2 pb-3">
              <p class="text-red-700 font-bold">Mangaldai Govt. Higher Secondary School</p>
              <p class="font-bold text-gray-600 mb-0">2011-2013</p>
              <p>Secondary Education</p>

            </div>
            <div class="mt-2 pb-3">
              <p class="text-red-700 font-bold">Mazbat Jatiya Vidyalaya</p>
              <p class="font-bold text-gray-600 mb-0">1999-2011</p>
              <p>Matriculation</p>
            </div>
          </div>
          <div class="mb-6">
            <div class="border-b-2 border-gray-600">
              <h4 class="font-bold">Skill</h4>
            </div>
            <div class="mt-2 pb-3">
              <p class="font-bold text-gray-600">Technical</p>
              <p class="font-weight-normal mb-0 ">Laravel and Vue Js</p>
              <p class="font-weight-normal mb-0 ">Bootstrap, Tailwind CSS</p>
              <p class="font-weight-normal mb-0 ">Design API and SPA</p>
            </div>
            <div class="mt-2 pb-3">
              <p class="font-bold text-gray-600">Collaboration </p>
              <p class="font-weight-normal mb-0 ">Initiator </p>
              <p class="font-weight-normal mb-0 ">Team player, Friendly</p>
              <p class="font-weight-normal mb-0 "></p>
            </div>

            <div class="mt-2 pb-3">
              <p class="font-bold text-gray-600">Tools </p>
              <p class="font-weight-normal mb-0 ">Git, VS Code </p>
              <p class="font-weight-normal mb-0 ">Linux, Slack</p>
              <p class="font-weight-normal mb-0 ">Trello </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="md:hidden sticky w-full z-10 flex justify-end bottom-0  pb-20">
    <a class="py-2 px-3 bg-blue-800 bg-opacity-50 text-white font-bold rounded-lg"
      href="amarendra_resume.pdf">Download</a>
  </div>
</div>

@endsection