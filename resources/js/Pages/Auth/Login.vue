<template>
  <!-- <div class="p-6 bg-indigo-darker min-h-screen flex justify-center items-center">
    <form class="w-full max-w-sm" @submit.prevent="submit">
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Email
          </label>
        </div>
        <div class="md:w-2/3">
          <input v-model="form.email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Email">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
            Password
          </label>
        </div>
        <div class="md:w-2/3">
          <input v-model="form.password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="password" placeholder="******************">
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
            Sign Up
          </button>
        </div>
      </div>
    </form>
  </div> -->
  <div class="relative min-h-screen overflow-hidden bg-gray-800"> 
    <div class="hidden lg:block absolute scroll-bg" style="height:400%;width:400%;top:-25%;left:-100%;background-size:800px auto;background-image:url(https://www.tailwindui.com/components.4b326ba8.png);"></div> 
      <div class="relative min-h-screen lg:min-w-3xl xl:min-w-4xl lg:flex lg:items-center lg:justify-center lg:w-3/5 lg:py-20 lg:pl-8 lg:pr-8 bg-no-repeat bg-white" style="background-size:100% auto;background-position:-5px -5px;"> 
      <div class="lg:pb-16"> 
        <div class="px-6 pt-16 pb-12 md:max-w-3xl md:mx-auto lg:max-w-full lg:pt-0"> 
          <img class="h-10 lg:h-12" src="@/../assets/logo.svg" alt="Tailwind UI"> 
          <div class="mt-8 lg:mt-16"> 
            <h1 class="mt-2 text-4xl leading-tight xl:text-4xl font-bold font-display text-gray-800">Sign in for inspiration.</h1> 
          </div> 
          <div class="mt-10">
            <!-- <form id="form" action="https://ck-proxy.adamwathan.now.sh/api/subscribers" data-form-id="1074308" data-api-key="0maQ6AJcKCKVQnJlq7gL1w" method="POST" class="relative mt-5 lg:pb-12">
              <div class="">
                <input type="email" required="required" placeholder="Enter your email" class="block sm:max-w-xs w-full px-5 py-3 text-lg leading-snug appearance-none bg-white rounded-lg focus:outline-none focus:shadow-outline">
                <input type="email" required="required" placeholder="Enter your email" class="block sm:max-w-xs w-full px-5 py-3 text-lg leading-snug appearance-none bg-white rounded-lg focus:outline-none focus:shadow-outline">
                <button class="mt-4 relative h-12 sm:mt-0 sm:h-auto sm:ml-4 block w-full sm:w-auto px-6 py-3 font-semibold leading-snug bg-gray-700 text-white uppercase tracking-wide rounded-lg shadow-md focus:outline-none focus:shadow-outline hover:bg-gray-600">
                  <span class="">Subscribe</span>
                  <span class="v-cloak:hidden absolute inset-0 flex items-center justify-center pointer-events-none opacity-0">
                    <svg viewBox="0 0 24 24" class="h-8 w-8 spin">
                      <path fill="currentColor" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0-2a7 7 0 110-14 7 7 0 010 14z" class="text-gray-600"></path>
                      <path fill="currentColor" d="M12 3a9 9 0 010 18v-2a7 7 0 000-14V3z" class="text-gray-400"></path>
                    </svg>
                  </span>
                </button>
              </div>
            </form> -->
            <form class="w-full max-w-sm" @submit.prevent="submit">
      <div class="md:flex md:items-center mb-6">
        <div class="w-full">
          <input v-model="form.email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500" id="inline-full-name" type="text" placeholder="Email">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="w-full">
          <input v-model="form.password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500" id="inline-username" type="password" placeholder="******************">
        </div>
      </div>
      <div class="md:flex md:items-end">
        <div class="w-full">
          <button class="shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none font-bold py-2 px-10 rounded" type="submit">
            Sign in
          </button>
        </div>
      </div>
    </form>
          </div>
        </div>
        <div class="relative h-64 overflow-hidden lg:hidden">
          <div class="absolute scroll-bg" style="height:400%;width:400%;top:-100%;left:-100%;background-size:400px auto;background-image:url(https://www.tailwindui.com/components.4b326ba8.png);"></div> 
        </div>
        <!-- <div class="px-6 py-8 md:max-w-3xl md:mx-auto lg:max-w-full lg:py-0">
          <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider">A project by</p>
          <div class="mt-4 sm:flex">
            <a href="https://twitter.com/adamwathan" class="flex items-center no-underline">
              <div class="flex-shrink-0">
                <img class="h-12 w-12 rounded-full border-2 border-white" src="https://www.tailwindui.com/adam.87c84df4.jpg" alt="">
              </div>
              <div class="ml-3">
                <p class="font-semibold text-white leading-tight">Adam Wathan</p>
                <p class="text-sm text-gray-500 leading-tight">Creator of Tailwind CSS</p>
              </div>
            </a>
            <a href="https://twitter.com/steveschoger" class="mt-6 sm:mt-0 sm:ml-12 flex items-center no-underline">
              <div class="flex-shrink-0">
                <img class="h-12 w-12 rounded-full border-2 border-white" src="https://www.tailwindui.com/steve.d85280f0.jpg" alt="">
              </div>
              <div class="ml-3">
                <p class="font-semibold text-white leading-tight">Steve Schoger</p>
                <p class="text-sm text-gray-500 leading-tight">Author of Refactoring UI</p>
              </div>
            </a>
          </div>
        </div> -->
      </div>
    </div>
</div>
</template>

<script>
export default {
  props: {
    errors: Object,
  },
  data() {
    return {
      sending: false,
      form: {
        email: null,
        password: null,
        remember: null,
      },
    }
  },
  mounted() {
    document.title = 'Sign In | UI Hub'
  },
  methods: {
    submit() {
      this.sending = true
      this.$inertia.post(route('login.attempt'), {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember,
      }).then(() => this.sending = false)
    },
  },
}
</script>