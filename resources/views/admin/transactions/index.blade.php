<x-app-layout>
    <x-slot name="header">
        {{ __('Transactions') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">


        @yield('message')
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Name
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Email
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Amount
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Type
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Currency
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Date
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Status
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->user->name }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->user->email }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->amount }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->transaction_type }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->currency }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->created_at }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->status == 0 ? 'Pending' : ($transaction->status == 1 ? 'Success' : 'Failed') }}</p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <a href="{{ route('users.transactions.detail', $transaction->id) }}" class="px-2 text-indigo-600  hover:text-black">
                                <i class="fas fa-eye"></i>
                            </a>
                            @if ($transaction->status != 1)
                                <a href="{{ route('users.approve-transactions', $transaction->id) }}" class="px-2 text-indigo-600  hover:text-black">
                                    <i class="fa-solid fa-check"></i>
                                </a>
                            @endif
                            @if ($transaction->status != 2 && $transaction->status != 1)
                                <a href="{{ route('users.reject-transactions', $transaction->id) }}" class="px-2 text-indigo-600 hover:text-black">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $transactions->links() }}
        </div>
    </div>

</x-app-layout>
