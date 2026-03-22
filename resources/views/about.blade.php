<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head', ['title' => 'Institute'])
</head>

<body
  class="h-screen flex flex-col bg-cover bg-center bg-no-repeat overflow-hidden font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
  style="
      background-image: url(&quot;{{ asset('img/cts/bg.png') }}&quot;);
      background-size: 100% 200%;
    ">
  <x-nav />

  <main class="flex-1 overflow-y-auto transition-all duration-700 starting:opacity-0 starting:translate-y-5 min-h-0">
    <!-- Historical Legacy Section -->
    <section class="py-20 relative overflow-hidden border-b border-white/10">
      <!-- Background with Overlay -->
      <div class="absolute inset-0 z-0 bg-fixed bg-cover bg-center" style="
            background-image: url(&quot;{{ asset('img/cts/gallery/social-event.jpg') }}&quot;);
          "></div>
      <div class="absolute inset-0 z-10 bg-linear-to-b from-black/80 via-black/90 to-black/95 backdrop-blur-[2px]">
      </div>

      <div class="container mx-auto px-4 max-w-4xl text-center relative z-20">
        <h2
          class="text-4xl md:text-5xl font-bold text-rose-500 italic mb-10 drop-shadow-2xl transition-all duration-700 starting:opacity-0 starting:translate-y-5">
          Our Historical <span class="text-white">Legacy</span>
        </h2>

        <div
          class="space-y-8 text-xl md:text-2xl leading-relaxed text-gray-300 transition-all duration-700 starting:opacity-0 starting:translate-y-5"
          style="animation-delay: 0.2s">
          <p class="drop-shadow-md">
            <span class="text-rose-500 font-extrabold">{{ config('app.institute.name') }}</span>
            is one of the most prestigious and oldest technical institutions
            in West Bengal. Established in
            <span class="text-white font-bold underline decoration-primary/50 underline-offset-4">1927</span>, before
            India's independence, it began with need-based technical
            courses under the Board of Apprentice Training.
          </p>
          <p class="drop-shadow-md">
            Over the years, it transitioned into a Government-sponsored
            institution offering Diploma courses in Mechanical and Electrical
            Engineering. Today, it stands as a
            <span class="text-rose-500 font-extrabold italic">heritage symbol</span>
            of educational excellence and industrial progress.
          </p>
        </div>

        <div
          class="mt-16 opacity-40 grayscale hover:grayscale-0 transition-all duration-700 starting:opacity-0 starting:translate-y-5 scale-110"
          style="animation-delay: 0.4s">
          <img src="{{ asset('img/cts/logo.png') }}" alt="CTS Heritage Logo" class="w-32 h-32 mx-auto" />
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery"
      class="py-16 bg-slate-200/50 in-[.dark]:bg-slate-900/50 in-[.dark]:border-slate-700/50 backdrop-blur-sm transition-all duration-700 starting:opacity-0 starting:translate-y-5"
      style="animation-delay: 0.6s">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-center text-red-500 mb-12 drop-shadow-md outline-hidden">
          Institutional
          <span
            class="text-slate-900 in-[.dark]:text-white italic underline decoration-rose-500 decoration-4 underline-offset-8 transition-all hover:underline-offset-4">Gallery</span>
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px]">
          <!-- Main Large Image -->
          <div
            class="col-span-2 row-span-2 group relative overflow-hidden rounded-2xl border-2 border-white/10 shadow-lg">
            <img src="{{ asset('img/cts/gallery/cultural.png') }}" alt="Student Life Collage"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
            <div
              class="absolute inset-0 bg-linear-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <p class="text-white font-semibold text-lg">
                Student Life & Culture
              </p>
            </div>
          </div>

          <!-- Event 1 -->
          <div
            class="col-span-2 row-span-1 group relative overflow-hidden rounded-2xl border-2 border-white/10 shadow-lg">
            <img src="{{ asset('img/cts/gallery/ex-tech-edu.png') }}" alt="Prize Distribution"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
              <span class="text-white font-medium border-b-2 border-rose-500 pb-1">Excellence in Technical
                Education</span>
            </div>
          </div>

          <!-- Event 3 -->
          <div
            class="col-span-1 row-span-1 group relative overflow-hidden rounded-2xl border-2 border-white/10 shadow-lg">
            <img src="{{ asset('img/cts/gallery/social-event.jpg') }}" alt="Annual Social Event"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
          </div>

          <!-- CTS Campus -->
          <div
            class="col-span-1 row-span-2 group relative overflow-hidden rounded-2xl border-2 border-white/10 shadow-lg">
            <img src="{{ asset('img/cts/bg.png') }}" alt="Campus View"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
            <div
              class="absolute inset-0 bg-rose-500/20 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
              <p class="text-white font-bold text-xl drop-shadow-lg">
                Our Campus
              </p>
            </div>
          </div>

          <!-- Extra grid filler for balanced look -->
          <div
            class="col-span-1 row-span-1 group relative overflow-hidden rounded-2xl border-2 border-white/10 shadow-lg grayscale hover:grayscale-0 transition-all">
            <img src="{{ asset('img/cts/gallery/social.jpg') }}" alt="Moment"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact"
      class="py-16 bg-slate-100/50 in-[.dark]:bg-slate-900/40 backdrop-blur-md border-t border-slate-200 in-[.dark]:border-white/10 transition-all duration-700 starting:opacity-0 starting:translate-y-5"
      style="animation-delay: 0.8s">
      <div class="container mx-auto px-4 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Left: Map -->
          <div
            class="w-full h-100 rounded-2xl overflow-hidden border-2 border-slate-200 in-[.dark]:border-white/10 shadow-2xl group">
            <iframe
              src="{{ config('app.institute.map_url') }}"
              width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!-- Right: Contact Details -->
          <div class="flex flex-col gap-8">
            <div>
              <h2 class="text-4xl font-bold text-red-500 mb-4">
                Contact <span class="text-slate-900 in-[.dark]:text-white italic">Details</span>
              </h2>
              <div class="w-20 h-1.5 bg-rose-500 rounded-full"></div>
            </div>

            <div class="space-y-6">
              <!-- Address -->
              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white in-[.dark]:bg-white/5 border border-slate-200 in-[.dark]:border-white/10 hover:border-rose-500/50 shadow-sm in-[.dark]:shadow-none transition-all group/card">
                <div
                  class="w-14 h-14 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 group-hover/card:bg-red-500/30 transition-colors">
                  <x-icon name="map-pin" class="text-red-500 w-6 h-6" />
                </div>
                <div>
                  <h3 class="font-bold text-xl text-slate-900 in-[.dark]:text-white mb-1">
                    Our Location
                  </h3>
                  <p class="text-slate-600 in-[.dark]:text-white/80 leading-relaxed text-lg">
                    {{ config('app.institute.address') }}
                  </p>
                </div>
              </div>

              <!-- Phone -->
              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white in-[.dark]:bg-white/5 border border-slate-200 in-[.dark]:border-white/10 hover:border-rose-500/50 shadow-sm in-[.dark]:shadow-none transition-all group/card">
                <div
                  class="w-14 h-14 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 group-hover/card:bg-red-500/30 transition-colors">
                  <x-icon name="phone" class="text-red-500 w-6 h-6" />
                </div>
                <div>
                  <h3 class="font-bold text-xl text-slate-900 in-[.dark]:text-white mb-1">Call Us</h3>
                  <p class="text-slate-900 in-[.dark]:text-white text-2xl font-semibold tracking-wide">
                    {{ config('app.institute.phone') }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <x-footer />

</body>

</html>