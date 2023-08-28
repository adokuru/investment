<x-app-layout>
    <x-slot name="header">
        {{ $user->name }}
    </x-slot>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST"
        class="space-y-8 w-full divide-y divide-gray-200">
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Personal Information
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4 mt-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input type="text" disabled value="{{ $user->name }}" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>


                    <div class="sm:col-span-4 mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email" disabled value="{{ $user->email }}" name="email" type="email"
                                autocomplete="email"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4 mt-4">
                        <label for="state" class="block text-sm font-medium text-gray-700">
                            Earnings
                        </label>
                        <div class="mt-1">
                            <input type="text" value="{{ $user->earnings }}" name="earnings" id="earnings"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 mt-6">
            <div class="flex justify-end  mt-6">
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
