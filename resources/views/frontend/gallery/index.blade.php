@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- {/* hero section start */} -->
    <div class="relative">
        <div
            class="h-[calc(100vh_-_10px)] relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
            <img  src="https://weddingimage.betterhalf.ai/watermark_assets/ideabook/D7282A78-86A6-4F24-9A9B-0D952B07975E.jpeg"
            alt="" class="h-full w-full object-cover overflow-hidden object-cover" />
        </div>
        <div
            class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
            <div class="w-full">
                <div
                    class="text-3xl md:text-6xl xl:text-[100px] font-bold !leading-[130%] tracking-[1rem] md:tracking-[2rem] xl:tracking-[5rem] text-center uppercase">
                    Gallery
                </div>
            </div>
        </div>
    </div>
    <!-- {/* hero section ends */} -->


    <!-- 3rd section  -->
<section class="max-sm:px-6 py-10 mt-10">
	<div class="mx-auto max-w-7xl sm:pb-10 pb-5">
  <div class="sm:text-5xl text-4xl relative  text-balance flex items-center justify-center  w-full font-bold text-slate-800 sm:pb-14 pb-5 mx-auto">
    Explore Our Visual Collection
    <div class="absolute sm:-top-7 -top-3 max-sm:left-0 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">Gallery</div>
    </div>
	</div>

	<!-- Fancybox Integration -->
	<div id="gallery-wrapper" class="grid md:grid-cols-4 grid-cols-2">
		<div>
			<a data-fancybox="gallery1" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery2.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery1" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery1" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery1" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery1" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
			</div>
		</div>

		<div>
			<a data-fancybox="gallery2" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery3.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery2" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery2" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery2" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery2" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery3" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery4.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery3" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery3" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery3" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery3" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery4" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery5.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery4" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery4" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery4" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery4" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery5" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery6.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery5" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery5" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery5" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery5" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery6" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery7.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery6" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}"></a>
				<a data-fancybox="gallery6" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}"></a>
				<a data-fancybox="gallery6" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}"></a>
				<a data-fancybox="gallery6" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery7" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery8.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery7" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}"></a>
				<a data-fancybox="gallery7" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}"></a>
				<a data-fancybox="gallery7" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}"></a>
				<a data-fancybox="gallery7" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery8" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery2.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery8" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery8" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery8" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
				<a data-fancybox="gallery8" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery9" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery3.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery9" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery9" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery9" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
				<a data-fancybox="gallery9" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery10" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery4.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery10" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery10" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery10" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
				<a data-fancybox="gallery10" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery11" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery5.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery11" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery11" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery11" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
				<a data-fancybox="gallery11" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}"></a>
			</div>
		</div>
		<div>
			<a data-fancybox="gallery12" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery6.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
			<div class="hidden">
				<a data-fancybox="gallery12" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery12" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery12" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
				<a data-fancybox="gallery12" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}"></a>
			</div>
		</div>


		<!-- Add similar sections for other gallery images -->

	</div>

	<div class="mx-auto max-w-7xl lg:px-8 px-6 flex items-center justify-center">
		<button class="flex justify-between text-slate-950 items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 sm:text-lg text-base">
			<span class="group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-slate-950"></span>
			<span class="group-hover/btn:-translate-x-7 duration-300"> Visit Gallery</span>
		</button>
	</div>
</section>
<!-- 3rd section end -->


<section class="h-full lg:py-20 py-12 bg-fixed bg-no-repeat bg-cover bg-center bg-[url('{{asset('/public/tailwind_frontend/contactform.webp')}}')]">
	<div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl ">


		<div class="max-w-5xl max-sm:px-4 mx-auto">

			<div class="sm:mt-6 overflow-hidden bg-white/20 shadow-xl rounded-xl">
				<div class="p-6 sm:p-12">
					<div class="text-white text-center text-[45px] sm:text-[70px] leading-[100%] font-normal [font-family:'Dancing_Script',cursive] pb-5">
						Book Now
					</div>
					<div class=" text-sm md:text-base leading-7 text-white/80 text-balance text-center ">Planning your wedding or an event? Fill out the booking form, and we'll get in touch with you shortly.
						If it's urgent, call us at +91-98870 34345.</div>

					<form action="#" method="POST" class="sm:mt-14 mt-10">
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
							<div>
								<label for="" class="text-base font-medium text-white"> Your name </label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Enter your full name" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> Email address </label>
								<div class="mt-2.5 relative">
									<input type="email" name="" id="" placeholder="Enter your email" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> Phone number </label>
								<div class="mt-2.5 relative">
									<input type="tel" name="" id="" placeholder="Phone Number" class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div>
								<label for="" class="text-base font-medium text-white"> City</label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Type here..." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>
							<div>
								<label for="" class="text-base font-medium text-white"> Service </label>
								<div class="mt-2.5 relative">
									<select id="countries" class="block w-full px-4 sm:py-3 py-2 text-gray-500 placeholder:text-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900">
										<option selected>Select a Service</option>
										<option value="Wedding">Wedding</option>
										<option value="Pre-Wedding">Pre-Wedding</option>
										<option value="Both">Both</option>
									</select>
								</div>
							</div>
							<div>
								<label for="" class="text-base font-medium text-white"> Budget </label>
								<div class="mt-2.5 relative">
									<input type="text" name="" id="" placeholder="Type here..." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md focus:outline-none focus:border-slate-900 caret-slate-900" />
								</div>
							</div>

							<div class="sm:col-span-2">
								<label for="" class="text-base font-medium text-white"> Message </label>
								<div class="mt-2.5 relative">
									<textarea name="" id="" placeholder="Type Here ...." class="block w-full px-4 sm:py-3 py-2 text-black placeholder-gray-500 transition-all duration-200 bg-white/80 border border-gray-200 rounded-md resize-y focus:outline-none focus:border-slate-900 caret-slate-900" rows="4"></textarea>
								</div>
							</div>

							<div class="sm:col-span-2 text-center">
								<button type="submit" class="inline-flex items-center justify-center w-auto px-4 py-2 mt-2 text-base font-semibold text-white transition-all duration-200 bg-slate-900 border border-transparent rounded-md focus:outline-none hover:bg-slate-800 focus:bg-slate-800">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush