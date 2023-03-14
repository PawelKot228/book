
    <ul class="flex flex-col py-4">

        @foreach($navigation as $label => $details)
            @php
                $url = $details['url'] ?? '#';
                $iconName = $details['icon']['name'] ?? 'collection';
                $iconType = $details['icon']['type'] ?? 'outline';
            @endphp

            <li>
                <a href="{{ $url }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in
                    duration-200 text-stone-800 hover:text-stone-800"
                >
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                        <box-icon name="{{ $iconName }}" type="{{ $iconType }}"/>
                    </span>

                    <span class="text-sm font-medium">{{ __("admin.nav.$label") }}</span>
                </a>
            </li>

        @endforeach
    </ul>
