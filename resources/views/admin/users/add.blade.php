<x-app-layout>
    <x-slot name="header">
        {{ __('Wallets') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

        @yield('message')

        <form action="{{ route('profile.wallets') }}" method="GET"
            class="flex flex-col gap-3 px-5 py-4 bg-white border-b border-gray-200 sm:flex-row sm:items-end">
            <div class="flex-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Search by email</label>
                <input id="email" name="email" type="text" value="{{ request('email') }}"
                    placeholder="user@example.com"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div class="flex gap-2">
                <button type="submit"
                    class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                    Search
                </button>
                <a href="{{ route('profile.wallets') }}"
                    class="px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
                    Reset
                </a>
            </div>
        </form>

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
                        Earnings
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Wallet
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Add Funds
                    </th>
                    <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Add Pending Funds
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
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->earnings }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            @foreach ($user->wallet as $item)
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $item->walletType->name . ' - ' . $item->amount }} / ${{ $item->usd_balance }}
                                </p>
                                <br />
                            @endforeach
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            @if ($user->wallet->isNotEmpty())
                                <a href="{{ route('admin.wallet.update', $user->id) }}"
                                    class="px-2 text-indigo-600  hover:text-black">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            @endif
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            @if ($user->wallet->isNotEmpty())
                                <a href="{{ route('admin.wallet.pending.update', $user->id) }}"
                                    class="px-2 text-indigo-600  hover:text-black">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            @endif
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
