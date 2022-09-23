<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Cidade
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('status'))
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center text-green-600 p-6 bg-white border-b border-gray-200">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- component -->
            <div class='flex items-center justify-center'>
                <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                    <div class='max-w-md mx-auto space-y-6'>
                        <form action="/cidade" method="POST">
                            @csrf
                            <h2 class="text-2xl font-bold ">Cadastre uma nova cidade!</h2>
                            <hr class="my-6">
                            <label class="uppercase text-sm font-bold opacity-70">Nome da Cidade</label>
                            <input name="nome_cidade" type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">

                            <label class="uppercase text-sm font-bold opacity-70">Estado da Cidade</label>
                            <input name="estado" type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">

                            <label class="uppercase text-sm font-bold opacity-70">Data de Fundação</label>
                            <input name="data_fundacao" type="date" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">

                            <input type="submit"
                                class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>