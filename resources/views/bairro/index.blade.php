<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Bairro
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
                        <form action="/bairro" method="POST">
                            @csrf
                            <h2 class="text-2xl font-bold ">Cadastre um novo Bairro!</h2>
                            <hr class="my-6">

                            <label class="uppercase text-sm font-bold opacity-70">Nome do Bairro</label>
                            <input name="nome_bairro" type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">

                            <label class="uppercase text-sm font-bold opacity-70">Cidade onde o bairro está</label>
                            <select name="cidade_id"
                                class="w-full p-3 mt-2 mb-4 bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                @foreach ($cidades as $cidade)
                                <option value={{ $cidade->id }}>{{ $cidade->nome_cidade }}</option>
                                @endforeach
                            </select>

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