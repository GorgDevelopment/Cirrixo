<footer class="footer mt-auto py-12">
    <div class="container px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo and Company Info -->
            <div class="md:col-span-1">
                <a href="{{ route('home') }}" class="footer-brand" wire:navigate>
                    @if(config('settings.logo'))
                        <img src="{{ Storage::url(config('settings.logo')) }}" alt="{{ config('app.name') }}" class="footer-logo">
                    @else
                        <svg class="footer-logo" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 5L5 15V35L25 45L45 35V15L25 5Z" stroke="currentColor" stroke-width="2" fill="var(--primary-color)"/>
                            <path d="M25 5V25M25 25V45M25 25L45 15M25 25L5 35" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    @endif
                    <span>{{ config('app.name') }}</span>
                </a>
                <p class="mt-4 text-muted">
                    {{ config('app.name') }} provides simple and efficient hosting solutions for businesses of all sizes.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="footer-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.162 5.65593C21.3986 5.99362 20.589 6.2154 19.76 6.31393C20.6337 5.79136 21.2877 4.96894 21.6 3.99993C20.78 4.48793 19.881 4.82993 18.944 5.01493C18.3146 4.34151 17.4804 3.89489 16.5709 3.74451C15.6615 3.59413 14.7279 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0771 6.14972C11.6978 6.98983 11.6067 7.93171 11.818 8.82893C10.1551 8.74558 8.52863 8.31345 7.04358 7.56059C5.55854 6.80773 4.24842 5.75098 3.198 4.45893C2.82629 5.09738 2.63095 5.82315 2.632 6.56193C2.632 8.01193 3.37 9.29293 4.492 10.0429C3.82801 10.022 3.17863 9.84271 2.598 9.51993V9.57193C2.5985 10.5376 2.93267 11.4735 3.54414 12.221C4.15562 12.9684 5.00678 13.4814 5.953 13.6729C5.33661 13.84 4.69031 13.8646 4.063 13.7449C4.33011 14.5762 4.8503 15.3031 5.55089 15.824C6.25147 16.345 7.09741 16.6337 7.97 16.6499C7.10249 17.3313 6.10923 17.8349 5.04693 18.1321C3.98464 18.4293 2.87418 18.5142 1.779 18.3819C3.69075 19.6114 5.91615 20.264 8.189 20.2619C15.882 20.2619 20.089 13.8889 20.089 8.36193C20.089 8.18193 20.084 7.99993 20.076 7.82193C20.8949 7.2301 21.6016 6.49695 22.163 5.65693L22.162 5.65593Z"/>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.5701C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"/>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2ZM7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Products Links -->
            <div class="md:col-span-1">
                <h3 class="footer-heading">Products</h3>
                <ul class="mt-4 space-y-3">
                    @php
                        $productLinks = [
                            ['name' => 'Web Hosting', 'route' => 'home'],
                            ['name' => 'Cloud Servers', 'route' => 'home'],
                            ['name' => 'Dedicated Servers', 'route' => 'home'],
                            ['name' => 'Domain Names', 'route' => 'home'],
                            ['name' => 'SSL Certificates', 'route' => 'home'],
                        ];
                    @endphp
                    
                    @foreach($productLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="footer-link">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Company Links -->
            <div class="md:col-span-1">
                <h3 class="footer-heading">Company</h3>
                <ul class="mt-4 space-y-3">
                    @php
                        $companyLinks = [
                            ['name' => 'About Us', 'route' => 'home'],
                            ['name' => 'Blog', 'route' => 'home'],
                            ['name' => 'Careers', 'route' => 'home'],
                            ['name' => 'Contact Us', 'route' => 'home'],
                            ['name' => 'Newsroom', 'route' => 'home'],
                        ];
                    @endphp
                    
                    @foreach($companyLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="footer-link">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Legal Links -->
            <div class="md:col-span-1">
                <h3 class="footer-heading">Legal</h3>
                <ul class="mt-4 space-y-3">
                    @php
                        $legalLinks = [
                            ['name' => 'Privacy Policy', 'route' => 'home'],
                            ['name' => 'Terms of Service', 'route' => 'home'],
                            ['name' => 'Cookie Policy', 'route' => 'home'],
                            ['name' => 'DMCA Policy', 'route' => 'home'],
                            ['name' => 'Refund Policy', 'route' => 'home'],
                        ];
                    @endphp
                    
                    @foreach($legalLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="footer-link">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-border-color">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-muted">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </p>
                <p class="text-sm text-muted mt-4 md:mt-0">
                    Powered by <a href="https://paymenter.org" target="_blank" class="text-primary hover:text-primary-hover transition">Paymenter</a>
                </p>
            </div>
        </div>
    </div>
</footer> 