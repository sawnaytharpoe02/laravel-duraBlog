<x-layout>
  <section class="py-10 px-4 lg:py-20 lg:px-44">
    <!-- .breadcrumb-sec -->
    <div class="breadcrumb-sec flex-col-center mb-10 lg:mb-32 gap-2">
      <h3 class="text-5xl font-semibold text-darkSteelBlue">Contact</h3>
      <div class="breadcrumb mt-4">
        <ol class="flex">
          <li class="text-gray-400"><a href="/" class="flex-row-center hover:text-lightBlue">HOME <i
                class="bx bxs-chevron-right"></i></a></li>
          <li class="text-gray-400 flex-row-center">CONTACT <i class="bx bxs-chevron-right"></i></li>
        </ol>
      </div>
    </div>

    <div class="address-sec grid grid-cols-1 lg:grid-cols-4 space-y-16 lg:space-y-0">
      <div data-aos="fade-up">
        <div class="flex-col-center gap-6">
          <div class="w-16 h-16 rounded-full bg-thickBlue grid place-items-center">
            <i class="bx bxs-location-plus text-white text-2xl"></i>
          </div>
          <div class="flex-col-center text-base text-darkSteelBlue leading-relaxed">
            <p><span class="text-black">Address:</span> 198 West 21th</p>
            <p>Street, Suite 721 New</p>
            <p>York NY 10016</p>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <div class="flex-col-center gap-6">
          <div class="w-16 h-16 rounded-full bg-thickBlue grid place-items-center">
            <i class="bx bxs-phone text-white text-2xl"></i>
          </div>
          <div class="flex-col-center text-base text-thickBlue leading-relaxed">
            <p><span class="text-black">Phone:</span> + 1235 2355 98</p>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-delay="500">
        <div class="flex-col-center gap-6">
          <div class="w-16 h-16 rounded-full bg-thickBlue grid place-items-center">
            <i class="bx bxl-telegram text-white text-2xl"></i>
          </div>
          <div class="flex-col-center text-base text-thickBlue leading-relaxed">
            <p><span class="text-black">Email:</span> duralumin@gmail.com</p>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-delay="700">
        <div class="flex-col-center gap-6">
          <div class="w-16 h-16 rounded-full bg-thickBlue grid place-items-center">
            <i class="bx bx-world text-white text-2xl"></i>
          </div>
          <div class="flex-col-center text-base text-thickBlue leading-relaxed">
            <p><span class="text-black">Website:</span> duralumin.com</p>
          </div>
        </div>
      </div>
    </div>
    <!-- .address-sec -->
    <div class="flex flex-col lg:flex-row shadow-lg mt-16">
      <div class="basis-7/12">
        <form action="#" method="post" class="py-12 px-10">
          <h3 class="text-3xl text-darkSteelBlue mb-8">Contact Us</h3>
          <div class="contact-form-gps grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="contact-form-gp">
              <label for="fullName" class="text-thickBlue text-sm font-semibold">FULL NAME</label>
              <input type="text" id="fullName" class="py-2 text-sm tracking-wide" placeholder="Name">
            </div>
            <div class="contact-form-gp">
              <label for="email" class="text-thickBlue text-sm font-semibold">EMAIL ADDRESS</label>
              <input type="email" id="email" class="py-2 text-sm tracking-wide" placeholder="Email">
            </div>
            <div class="contact-form-gp lg:col-span-2">
              <label for="subject" class="text-thickBlue text-sm font-semibold">SUBJECT</label>
              <input type="text" id="subject" class="py-2 text-sm tracking-wide" placeholder="Subject">
            </div>
            <div class="contact-form-gp lg:col-span-2">
              <label for="message" class="text-thickBlue text-sm font-semibold">MESSAGE</label>
              <textarea name="" id="message" class="py-2 text-sm tracking-wide" cols="30" rows="4"
                placeholder="Message"></textarea>
            </div>
          </div>
          <!-- .contact-form-gps -->
          <button type="submit" class="bg-thickBlue py-2 px-4 mt-5 text-white text-sm rounded">SEND MESSAGE</button>
        </form>
      </div>
      <div class="basis-5/12">
        <iframe class="w-full h-96 lg:h-full"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105729.65085404017!2d-118.46176658649387!3d34.09381883255515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2smm!4v1676723174540!5m2!1sen!2smm"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <!-- contact sec -->
  </section>
</x-layout>