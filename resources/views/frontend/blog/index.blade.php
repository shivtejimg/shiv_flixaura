@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- 1st section  -->
<div class="relative">
  <div class="h-[calc(100vh_-_10px)] relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
    <img alt="" class="h-full w-full object-cover overflow-hidden object-top" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1610173827002-62c0f1f05d04%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=2048&q=75" style="color: transparent;">
  </div>
  <div class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
    <div class="w-full">
      <div class="text-6xl md:text-[100px] font-bold !leading-[130%] tracking-[2rem] md:tracking-[5rem] text-center uppercase">Blog</div>
    </div>
  </div>
</div>


<!-- 2nd section  -->


<div class="max-w-7xl mx-auto px-6 lg:px-8 py-7 sm:pt-20">
  <div class="grid sm:grid-cols-2 sm:items-center gap-8">
    <div class="sm:order-2">
      <div class="relative pt-[50%] sm:pt-[100%] rounded-lg">
        <img alt="Blog Image" loading="lazy" width="1920" height="1000" decoding="async" data-nimg="1" class="size-full absolute top-0 start-0 object-cover object-top rounded-lg" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1555447405-057915b40299%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=3840&q=75" style="color: transparent;">
      </div>
    </div>
    <div class="sm:order-1">
      <p class="mb-5 inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800">Business insight</p>
      <h2 class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-gray-800">
        <a class="hover:text-amber-500 focus:outline-none focus:text-amber-500" href="#">7 Tips for Hiring a Good Wedding Photographer</a>
      </h2>
      <div class="mt-6 sm:mt-10 flex items-center">
        <div class="shrink-0">
          <img alt="Blog Image" loading="lazy" width="600" height="600" decoding="async" data-nimg="1" class="size-10 sm:h-14 sm:w-14 rounded-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1669837401587-f9a4cfe3126e%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dfacearea%26facepad%3D2%26w%3D320%26h%3D320%26q%3D80&w=1200&q=75" style="color: transparent;">
        </div>
        <div class="ms-3 sm:ms-4">
          <p class="sm:mb-1 font-semibold text-gray-800">Louise Donadieu</p>
          <p class="text-xs text-gray-500">Strategic Marketing Consultant</p>
        </div>
      </div>
      <div class="mt-5">
        <a class="inline-flex items-center gap-x-1.5 text-amber-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">Read more<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6">

            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- 2nd section end  -->

<!-- 3rd section  -->


<section class="max-w-7xl mx-auto px-6 lg:px-8 sm:py-10 sm:pt-20 ">
  <div class="uppercase text-5xl  max-sm:text-start relative  text-balance flex sm:items-center sm:justify-center  w-full font-bold text-slate-800 sm:pb-14  mx-auto">Blogs<div class="absolute sm:-top-7 sm:-top-4 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent xl:text-[120px] sm:text-[90px] text-[40px] font-light">Latest Blogs</div>
  </div>
  <div class="sm:py-12 py-10 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1641279676778-3c94588147fd%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">eYoga</h3>
        <p class="mt-1 text-gray-600">A revamped and dynamic approach to yoga analytics</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Discovery</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Guidelines</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Yoga</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1587271636175-90d58cdad458%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Nike React</h3>
        <p class="mt-1 text-gray-600">Rewriting sports playbook for billions of athletes</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Strategy</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Visual Identity</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1587271449604-04bb40332709%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Day Spa</h3>
        <p class="mt-1 text-gray-600">Designing a new cocktail can</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Strategy</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Visual Identity</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1505932794465-147d1f1b2c97%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Diamond Dynamics</h3>
        <p class="mt-1 text-gray-600">From cutting-edge equipment to stylish apparel</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Sports Gear</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Equipment</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Discovery</span>
        </div>
      </div>
    </a>
  </div>
</section>

<!-- 3rd section end  -->



@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush