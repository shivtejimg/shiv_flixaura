@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- 1st section  -->
<div class="relative">
  <div
    class="h-[calc(100vh_-_10px)] relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/40 via-slate-900/40 to-slate-900">
    <Image width={1920} height={700}
      src="https://taleweaverweddings.in/wp-content/uploads/2024/09/NVV09007-scaled.jpg"
      alt=""
      class="h-full w-full object-cover overflow-hidden object-top" />
  </div>
  <div
    class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
    <div class="w-full">
      <div
        class="text-5xl md:text-[100px] font-bold !leading-[130%] tracking-[2rem] md:tracking-[5rem] text-center uppercase">
        ABOUT US
      </div>
    </div>
  </div>
</div>

<!-- 1nd section end  -->

<!-- 2nd section  -->


<section class="lg:py-20 md:py-16 max-sm:pt-16 max-sm:pb-10 relative overflow-hidden">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full relative z-10">

    <div class="grid grid-cols-12 items-center sm:gap-y-10 gap-y-5 lg:gap-8 group">
      <div data-aos="fade-right" data-aos-duration="1000" class="col-span-12 lg:col-span-6 ">
        <div class="size-full relative flex items-center justify-center group">
          <div class=" h-full w-[70%]">
            <Image width={500} height={500} class="aspect-[1/1]  object-cover rounded-3xl" src="{{asset('/public/tailwind_frontend/about-us.jpeg')}}" alt="" />
          </div>

          <div class=" absolute sm:-top-7 -top-3  z-[3] w-[40%] right-0 sm:group-hover:right-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] pointer-events-none rounded-3xl object-cover" src="{{asset('/public/tailwind_frontend/about-us2.jpeg')}}" alt="" />
          </div>
          <div class=" absolute -bottom-5 pointer-events-none z-[3] w-[40%] left-0 sm:group-hover:left-[58%]  duration-300 ">
            <Image width={500} height={500} class="aspect-[1/.8] rounded-3xl object-top" src="{{asset('/public/tailwind_frontend/about-us3.webp')}}" alt="" />
          </div>
        </div>
      </div>
      <div data-aos="fade-left" class="col-span-12 lg:col-span-6 ">
        <div class="size-full">
          <div class="sm:text-5xl text-3xl relative  text-balance  w-full font-bold text-slate-800 lg:pb-14 max-lg:mt-20">
            Welcome to FLIXAURA Wedding Photography !
            <div class="absolute sm:-top-7 -top-3 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">AboutUs</div>
          </div>

          <div data-aos="zoom-out-up" class="sm:text-base text-sm mt-4 text-slate-600 text-balance ">
            Welcome to FLIXAURA <strong>Wedding Photography</strong> , We specialize in capturing the magic, emotion, and unforgettable moments of your big day. With a passion for capturing genuine moments and heartfelt emotions, we create timeless images that reflect the unique beauty of each couple's love story. Our services offer high-quality <strong>wedding videography and photography</strong> , with options for both candid and traditional styles. We also provide <strong>wedding videography packages</strong> to suit your needs, whether it’s pre wedding shoot, cinematic video shoot, or full-day wedding coverage. Let us help you preserve cherished memories for generations to come.

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2nd end  -->
<!-- 3rd section -->

<div class="max-w-7xl mx-auto px-6 lg:px-8 md:py-20 py-10">
  <div class="grid md:grid-cols-2  items-center md:gap-10 gap-5">
    <div class="">
      <div class="sm:text-5xl text-4xl relative  text-balance  w-full font-bold text-slate-800 md:pb-14 mb-8">
        VISION
        <div class="absolute sm:-top-7 -top-3 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">OUR</div>
      </div>

      <p
        class="sm:text-base text-sm mt-4 text-slate-600 text-balance text-ellipsis line-clamp4">
        A wedding is such a special and intimate celebration, turning fleeting moments into timeless memories. We believe that every love story is unique, and our goal is to document yours in a way that reflects the emotions, joy, and beauty of the day.With a blend of artistic creativity and technical precision, we ensure that each moment is captured with care, leaving you with a collection of timeless memories to relive and share for generations to come. We aim to deliver <strong>wedding photographs</strong> that you’ll treasure for a lifetime. Our vision is to provide you with an unforgettable experience, where every smile, every tear, and every cherished moment is preserved in stunning imagery that allows you to relive your special day forever.
      </p>
      <button class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 sn:text-base text-sm">
        <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-slate-950'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Explore
          Wedding Films</span>
      </button>
    </div>
    <div
      class="w-full  aspect-[1/.6] border-2 border-gray-200 shadow-2xl rounded-lg overflow overflow-hidden shadow-black/50 relative after:rotate-180 after:-z-10 after:absolute after:w-full after:h-1/2 after:shadow-xl after:bg-white after:inset-0 :size-full :object-cover object-top">
      <img width={700} height={550}
        src="https://image.wedmegood.com/resized/1900X/uploads/city_bg_image/1/delhi_bg.jpeg"
        alt="`" />
    </div>
  </div>
  <div class="grid md:grid-cols-2  mt-20 items-center md:gap-10 gap-5">
    <div class='md:order-2'>
      <div class="sm:text-5xl text-4xl relative  text-balance  w-full font-bold text-slate-800 md:pb-14 mb-8">
        MISSION
        <div class="absolute sm:-top-7 -top-3 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">OUR</div>
      </div>
      <p
        class="sm:text-base text-sm mt-4 text-slate-600 text-balance text-ellipsis line-clamp4">

        Our mission is to provide <strong>wedding photography</strong> that captures the unique essence of each couple’s love story. We are dedicated to delivering stunning, high-quality images that reflect their unique personalities and the emotions of their special day. With a focus on creativity and storytelling, we strive to create a relaxed and enjoyable experience for our clients. We are dedicated to provide candid and <strong>cinematic photography</strong> that you can cherish for generations, ensuring that every smile, tear, and joyous moment is preserved in time.
      </p>
      <button class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 sm:text-base text-sm">
        <span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-slate-950'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> Explore
          Wedding Films</span>
      </button>
    </div>
    <div
      class="w-full aspect-[1/.6] md:order-1 border-2 border-gray-200 shadow-2xl rounded-lg overflow overflow-hidden shadow-black/50 relative after:rotate-180 after:-z-10 after:absolute after:w-full after:h-1/2 after:shadow-xl after:bg-white after:inset-0  :size-full :object-cover">
      <img class="size-full"
        src="https://image.wedmegood.com/resized/1000X/uploads/member/967708/1614746342_BHU52052.jpg?crop=0,50,2048,1152
                " alt="`" />
    </div>

  </div>
</div>
<!-- 3rd section end  -->


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