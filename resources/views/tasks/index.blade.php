<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Lista de Tarefas</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="flex items-center border-b border-teal-500 py-2">
                <input type="text" name="name" placeholder="Nova Tarefa"
                       class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                       required>
                <button type="submit"
                        class="flex-shrink-0 bg-green-500 hover:bg-green-600 text-black text-sm border-4 border-green-500 hover:border-green-600 py-1 px-2 rounded">
                    Adicionar
                </button>
            </div>
        </form>

        <ul class="list-disc pl-5">
            @foreach ($tasks as $task)
                <li class="mb-2 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="mr-3">{{ $task->name }}</span>
                        <span class="text-sm text-gray-600">{{ $task->completed ? 'Concluída' : 'Pendente' }}</span>
                    </div>
                    <div>
                        <a href="{{ route('tasks.edit', $task) }}"
                           class="inline-block bg-blue-500 hover:bg-blue-700 text-white text-sm py-1 px-2 rounded mr-2">
                            Editar
                        </a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-block bg-red-500 hover:bg-red-700 text-white text-sm py-1 px-2 rounded">
                                Deletar
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
