<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Personal access token') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __($token) }}
                            </p>
                        </header>
                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                        <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Create new order') }}
                            </h2>
                        </header>
                    </section>
                    <pre>
curl {{env('APP_URL')}}/api/orders \
-X POST \
-H "Content-Type: application/json" \
-H "Authorization: Bearer {{__($token)}}" \
-d '{"type_id": 1, "partnership_id": 1, "description": "order description 01", "date": "2024-08-21", "address": "order address 01", "amount": 9}'
</pre>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                        <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Assign worker to order') }}
                            </h2>
                        </header>
                    </section>
                    <pre>
curl http://localhost:8000/api/orders/assign \
-X POST \
-H "Content-Type: application/json" \
-H "Authorization: Bearer {{__($token)}}" \
-d '{"order_id":9, "worker_id":9}'
</pre>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
