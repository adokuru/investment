<x-app-layout>
    <x-slot name="header">
        {{ __('Testimonials') }}
    </x-slot>

    <a href="{{ route('admin.testimonials.create') }}"
        class="px-4 py-2 my-4 font-bold text-white bg-green-500 rounded hover:bg-green-700">Add Testimonial</a>


    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow mt-4">

        @yield('message')

        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Name
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        image
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        description
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Featured Testimonial
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testionmals as $user)
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->description }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->featured }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <a href="{{ route('admin.users.show', $user->id) }}"
                                class="px-2 text-indigo-600  hover:text-black">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="px-2 text-indigo-600  hover:text-black">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $testionmals->links() }}
        </div>
    </div>

</x-app-layout>
