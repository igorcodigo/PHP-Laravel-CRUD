<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Editar Tarefa</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')
            <div class="flex items-center border-b border-teal-500 py-2 mb-4">
                <input type="text" name="name" value="{{ $task->name }}"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                       required>
            </div>
            <div class="flex justify-between">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">
                    Atualizar
                </button>
                <a href="{{ route('tasks.index') }}"
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Voltar à Lista de Tarefas
                </a>
            </div>
        </form>
    </div>
</body>
</html>
