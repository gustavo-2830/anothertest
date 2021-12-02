@extends('_layouts.master')

@section('body')
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')

  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          cyan: colors.cyan,
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <!-- Split brand panel -->
        <div class="relative bg-white">
            <div class="absolute inset-0" aria-hidden="true">
                <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-r from-cyan-600 to-green-400"></div>
            </div>
            <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-2 lg:px-8">
                <div class="bg-white py-16 px-4 sm:py-24 sm:px-6 lg:px-0 lg:pr-8">
                    <div class="max-w-lg mx-auto lg:mx-0">
                        <h2 class="text-base font-semibold tracking-wide text-cyan-600 uppercase">
                            Full-featured
                        </h2>
                        <p class="mt-2 text-2xl font-extrabold text-gray-900 sm:text-3xl">Everything you need to talk with your customers</p>
                        <dl class="mt-12 space-y-10">
                            <div class="relative">
                                <dt>
                                    <div class="absolute h-12 w-12 bg-gradient-to-r from-cyan-600 to-green-400 rounded-md flex items-center justify-center">
                                        <!-- Heroicon name: outline/view-list -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">List view</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Nunc a, lacinia sed risus neque, arcu, rhoncus. Id mauris justo facilisis aliquam platea vestibulum condimentum morbi.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute h-12 w-12 bg-gradient-to-r from-cyan-600 to-green-400 rounded-md flex items-center justify-center">
                                        <!-- Heroicon name: outline/view-boards -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Boards</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Purus lobortis volutpat posuere id integer nunc tellus. Non mauris malesuada feugiat massa mi pellentesque cum est. Pharetra a varius urna rhoncus, tempor rutrum.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute h-12 w-12 bg-gradient-to-r from-cyan-600 to-green-400 rounded-md flex items-center justify-center">
                                        <!-- Heroicon name: outline/calendar -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Calendar</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Purus lobortis volutpat posuere id integer nunc tellus. Non mauris malesuada feugiat massa mi pellentesque cum est. Pharetra a varius urna rhoncus, tempor rutrum.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute h-12 w-12 bg-gradient-to-r from-cyan-600 to-green-400 rounded-md flex items-center justify-center">
                                        <!-- Heroicon name: outline/users -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Teams</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Tincidunt sollicitudin interdum nunc sit risus at bibendum vitae. Urna, quam ut sit justo non, consectetur et varius.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-cyan-600 to-green-400 py-16 px-4 sm:py-24 sm:px-6 lg:bg-none lg:flex lg:items-center lg:justify-end lg:px-0 lg:pl-8">
                    <div class="max-w-lg mx-auto w-full space-y-8 lg:mx-0">
                        <div>
                            <h2 class="sr-only">Price</h2>
                            <p class="relative grid grid-cols-2">
              <span class="flex flex-col text-center">
                <span class="text-5xl font-extrabold text-white tracking-tight">$99</span>
                <span class="mt-2 text-base font-medium text-cyan-100">Setup fee</span>
                <span class="sr-only">plus</span>
              </span>
                                <span class="pointer-events-none absolute h-12 w-full flex items-center justify-center" aria-hidden="true">
                <!-- Heroicon name: outline/plus -->
                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
              </span>
                                <span>
                <span class="flex flex-col text-center">
                  <span class="text-5xl font-extrabold text-white tracking-tight">$4</span>
                  <span class="mt-2 text-base font-medium text-cyan-100">Per month</span>
                </span>
              </span>
                            </p>
                        </div>
                        <ul role="list" class="rounded overflow-hidden grid gap-px sm:grid-cols-2">
                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">Unlimited projects</span>
                            </li>

                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">No per user fees</span>
                            </li>

                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">Unlimited storage</span>
                            </li>

                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">24/7 support</span>
                            </li>

                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">Cancel any time</span>
                            </li>

                            <li class="bg-cyan-700 bg-opacity-50 py-4 px-4 flex items-center text-base text-white">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3">14 days free</span>
                            </li>
                        </ul>
                        <a href="#" class="w-full bg-white border border-transparent rounded-md py-4 px-8 flex items-center justify-center text-lg leading-6 font-medium text-cyan-700 hover:bg-cyan-50 md:px-10">
                            Get started today
                        </a>
                        <a href="#" class="block text-center text-base font-medium text-cyan-100 hover:text-white">
                            Try Workflow Lite for free
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo cloud -->
        <div class="bg-cyan-100 bg-opacity-25">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <h2 class="max-w-md mx-auto text-3xl font-extrabold text-cyan-900 text-center lg:max-w-xl lg:text-left">
                        The world's most innovative companies use Workflow
                    </h2>
                    <div class="mt-8 flow-root lg:mt-0 self-center">
                        <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                            <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                                <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-cyan-900.svg" alt="Workcation">
                            </div>

                            <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                                <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-cyan-900.svg" alt="Tuple">
                            </div>

                            <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                                <img class="h-12" src="https://tailwindui.com/img/logos/level-logo-cyan-900.svg" alt="Level">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center">
                Frequently asked questions
            </h2>
            <div class="mt-12">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What&#039;s the best thing about Switzerland?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            How do you make holy water?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why do you never see elephants hiding in trees?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What do you call someone with no body and no nose?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why can&#039;t you hear a pterodactyl go to the bathroom?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why did the invisible man turn down the job offer?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            He couldn&#039;t see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- CTA section -->
        <div class="bg-gradient-to-r from-cyan-600 to-green-400">
            <div class="max-w-2xl mx-auto py-16 px-4 text-center sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Boost your productivity.</span>
                    <span class="block text-cyan-900">Start using Workflow today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-cyan-100">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                <a href="#" class="mt-8 w-full bg-cyan-50 border border-transparent rounded-md py-3 px-5 inline-flex items-center justify-center text-base font-medium text-cyan-700 hover:bg-cyan-100 sm:w-auto">
                    Sign up for free
                </a>
            </div>
        </div>

        <!-- Footer 4-column with newsletter and localization dark -->
        <footer class="bg-gray-900">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="sr-only">Footer</h2>
                <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Solutions
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Marketing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Analytics
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Commerce
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Insights
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Support
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Pricing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Documentation
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Guides
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            API Status
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Company
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            About
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Blog
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Jobs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Press
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Partners
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Legal
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Claim
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Privacy
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-gray-300 hover:text-white">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 xl:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Language &amp; Currency
                        </h3>
                        <form class="mt-4 space-y-4 sm:max-w-xs">
                            <fieldset class="w-full">
                                <label for="language" class="sr-only">Language</label>
                                <div class="relative">
                                    <select id="language" name="language" class="block w-full bg-none bg-gray-800 border border-transparent text-base text-white focus:ring-white focus:border-white sm:text-sm rounded-md">
                                        <option selected>English</option>
                                        <option>French</option>
                                        <option>German</option>
                                        <option>Japanese</option>
                                        <option>Spanish</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                        <!-- Heroicon name: solid/chevron-down -->
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="w-full">
                                <label for="currency" class="sr-only">Currency</label>
                                <div class="mt-1.5 relative">
                                    <select id="currency" name="currency" class="block w-full bg-none bg-gray-800 border border-transparent text-base text-white focus:ring-white focus:border-white sm:text-sm rounded-md">
                                        <option>ARS</option>
                                        <option selected>AUD</option>
                                        <option>CAD</option>
                                        <option>CHF</option>
                                        <option>EUR</option>
                                        <option>GBP</option>
                                        <option>JPY</option>
                                        <option>USD</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                        <!-- Heroicon name: solid/chevron-down -->
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-700 pt-8 space-y-4 lg:space-y-0 lg:flex lg:items-center lg:justify-between xl:mt-0">
                    <div class="space-y-2">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Subscribe to our newsletter
                        </h3>
                        <p class="text-base text-gray-300">
                            The latest news, articles, and resources, sent to your inbox weekly.
                        </p>
                    </div>
                    <form class="sm:flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input type="email" name="email-address" id="email-address" autocomplete="email" required class="min-w-0 w-full bg-white border border-transparent py-2 px-4 placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white focus:border-white focus:placeholder-gray-400 sm:max-w-xs rounded-md" placeholder="Enter your email">
                        <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button type="submit" class="w-full bg-gray-700 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 md:order-2">
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Dribbble</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                        &copy; 2020 Workflow, Inc. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>

@endsection
