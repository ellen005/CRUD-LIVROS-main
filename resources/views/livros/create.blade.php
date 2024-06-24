<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Criar Novo Livro') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('livros.store') }}" enctype="multipart/form-data" class="grid gap-6 md:grid-cols-2">
                @csrf

                <div>
                    <label for="autor"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
                    <input type="text" id="autor" name="autor"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite o nome do autor">
                </div>

                <div>
                    <label for="titulo"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                    <input type="text" id="titulo" name="titulo"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite um Título">
                </div>

                <div>
                    <label for="subtitulo"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtitulo</label>
                    <input type="text" id="subtitulo" name="subtitulo"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite um Subtitulo">
                </div>

                <div>
                    <label for="edicao"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edição</label>
                    <input type="text" id="edicao" name="edicao"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite a Edição">
                </div>
                <div>
                    <label for="editora"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Editora</label>
                    <input type="text" id="editora" name="editora"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite a Editora">
                </div>

                <div>
                    <label for="anoPublicado"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano Publicado</label>
                    <input type="text" id="anoPublicado" name="anoPublicado"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Digite o ano Publicado"">
                </div>

                <div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cadastrar livro</button>
                </div>

            </form>
            <a href="/livros" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voltar</a>
        </div>
    </div>
</x-app-layout>
