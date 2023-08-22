<header>
    <nav class="fixed top-0 z-50 w-full bg-gray-800">
        <div class="h-16 flex end items-center w-full px-4 md:px-8 lg:px-16 border-b border-gray-600 md:border-none"> 
          <x-dropdown align="right">
              <x-slot name="trigger">
                  <button type="button" class="inline-flex items-center justify-center rounded-full bg-gray-700 text-gray-400 hover:text-white">
                      <svg class="h-6 w-6 mx-2" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                          <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                          <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>

                      <div class="h-9 w-9 rounded-full bg-gray-600 flex items-center justify-center">
                          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                          <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                          @else
                          <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center text-white text-sm font-semibold uppercase">{{ Auth::user()->name[0] }}</span>
                          @endif
                      </div>
                  </button>
              </x-slot>

              <x-slot name="content">
                  <div class="divide-y divide-gray-200 px-2">
                      <div class="px-2 py-3">
                          <div class="flex justify-start items-center gap-2">
                              <div>
                                  @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                  @else
                                    <span class="h-10 w-10 rounded-full bg-gray-500 flex items-center justify-center text-white text-lg font-semibold uppercase">{{ Auth::user()->name[0] }}</span>
                                  @endif
                              </div>
                              <div class="flex justify-between items-center gap-8">
                                  <div class="flex flex-col justify-center">
                                      <span class="text-gray-700 font-semibold capitalize">{{ Auth::user()->name }}</span>
                                      <span class="text-gray-500 text-xs">{{ Auth::user()->email }}</span>
                                  </div>
                                  @if (Auth::user()->email_verified_at != null)
                                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">
                                        {{ __('Verified') }}
                                    </span>
                                  @endif
                              </div>
                          </div>
                      </div>
                      <div class="py-2">
                          <a href="{{ route('profile.show') }}" class="flex items-center gap-2 text-gray-700 hover:bg-gray-100 rounded-md p-2 text-sm">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                  </svg>
                              </span>
                              {{ __('Profile') }}
                          </a>

                          <a href="{{ route('profile.show') }}" class="flex items-center gap-2 text-gray-700 hover:bg-gray-100 rounded-md p-2 text-sm">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                                  </svg>
                              </span>
                              {{ __('Language') }}
                          </a>

                          <a href="#" class="flex items-center gap-2 text-gray-700 hover:bg-gray-100 rounded-md p-2 text-sm">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>
                              </span>
                              {{ __('navigation.settings') }}
                          </a>                          
                      </div>
                      <div class="py-2">
                          <form method="POST" action="{{ route('logout') }}" x-data>
                              @csrf
                              <button type="submit" class="flex items-center gap-2 w-full text-gray-700 hover:bg-gray-100 hover:text-red-500 rounded-md p-2 text-sm">
                                  <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                      </svg>
                                  </span>
                                  {{ __('navigation.signout') }}
                              </button>
                          </form>
                      </div>
                  </div>
              </x-slot>
          </x-dropdown>
        </div>
    </nav>
</header>
