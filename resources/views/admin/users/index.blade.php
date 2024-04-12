<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

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
                        Email
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Password
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Earnings
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->new_password }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->earnings }}</p>
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
                            <a href="{{ route('admin.users.delete', $user->id) }}"
                                class="px-2 text-indigo-600  hover:text-black">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $users->links() }}
        </div>
    </div>

</x-app-layout>
