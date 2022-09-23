<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center text-green-600 p-6 bg-white border-b border-gray-200">
                    Você está logado!
                </div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex justify-center items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ route('cidade.index') }}"
                                    class="hover:underline text-gray-900 dark:text-white">
                                    Cadastrar Cidade
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex justify-center items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ route('bairro.index') }}" class="hover:underline text-gray-900 dark:text-white">
                                    Cadastrar Bairro
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
</x-app-layout>
