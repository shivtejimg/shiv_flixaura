@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')


<!-- 1st section  -->


<div class="relative">
  <div class="h-[calc(100vh_-_10px)] relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/50 via-slate-900/50 to-slate-900">
  <img alt="" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1" class="h-full w-full object-cover overflow-hidden object-top"  src="https://like-flix-aura.vercel.app/_next/image?url=%2Fimg%2Fcontact-us.jpg&w=2048&q=75" style="color: transparent;">
</div>
<div class="absolute top-1/2  -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
  <div class="w-full">
  <div class="text-4xl xl:text-[100px] font-bold !leading-[130%] tracking-[1rem] xl:tracking-[5rem] text-center uppercase">Contact Us</div>
</div>
</div>
</div>

<!-- 1 section end  -->

 <!-- 2nd section  -->
  <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl"><div class="text-5xl relative  text-balance flex items-center justify-center  w-full font-bold text-slate-800 sm:pb-14 mx-auto">Get in Touch with Us<div class="absolute -top-7 max-sm:left-0 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">Contact us</div></div><div class="max-w-5xl max-sm:px-4 mx-auto mt-12 sm:mt-16"><div class="grid grid-cols-1 gap-6 text-center md:px-0 md:grid-cols-3"><div class="overflow-hidden bg-white rounded-xl"><div class="p-6"><svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg><p class="mt-6 text-lg font-medium text-gray-900">+1-316-555-0116</p><p class="mt-1 text-lg font-medium text-gray-900">+1-446-526-0117</p></div></div><div class="overflow-hidden bg-white rounded-xl"><div class="p-6"><svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg><p class="mt-6 text-lg font-medium text-gray-900">contact@example.com</p><p class="mt-1 text-lg font-medium text-gray-900">hr@example.com</p></div></div><div class="overflow-hidden bg-white rounded-xl"><div class="p-6"><svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><p class="mt-6 text-lg font-medium leading-relaxed text-gray-900">8502 Preston Rd. Ingle, Maine 98380, USA</p></div></div></div><div class="mt-6 overflow-hidden bg-white rounded-xl"><div class="p-6 sm:p-12"><h3 class="sm:text-3xl text-2xl font-semibold text-center text-gray-900">Send us a message</h3><form action="#" method="POST" class="sm:mt-14 mt-10"><div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4"><div><label for="" class="text-base font-medium text-gray-900"> Your name </label><div class="mt-2.5 relative"><input id="" placeholder="Enter your full name" class="block w-full px-4 sm:py-4 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" type="text" name=""></div></div><div><label for="" class="text-base font-medium text-gray-900"> Email address </label><div class="mt-2.5 relative"><input id="" placeholder="Enter your email" class="block w-full px-4 sm:py-4 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" type="email" name=""></div></div><div><label for="" class="text-base font-medium text-gray-900"> Phone number </label><div class="mt-2.5 relative"><input id="" placeholder="Phone Number" class="block w-full px-4 sm:py-4 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" type="tel" name=""></div></div><div><label for="" class="text-base font-medium text-gray-900"> Subject</label><div class="mt-2.5 relative"><input id="" placeholder="Type here..." class="block w-full px-4 sm:py-4 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" type="text" name=""></div></div><div class="sm:col-span-2"><label for="" class="text-base font-medium text-gray-900"> Message </label><div class="mt-2.5 relative"><textarea name="" id="" placeholder="Type Here ...." class="block w-full px-4 sm:py-4 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-slate-900 caret-slate-900" rows="4"></textarea></div></div><div class="sm:col-span-2"><button type="submit" class="inline-flex items-center justify-center w-auto px-4 py-2 mt-2 text-base font-semibold text-white transition-all duration-200 bg-slate-900 border border-transparent rounded-md focus:outline-none hover:bg-slate-800 focus:bg-slate-800">Get in Touch</button></div></div></form></div></div></div></div></section>

 <!-- 2nd section end  -->





@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush