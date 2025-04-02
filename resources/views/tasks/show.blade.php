<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionnaire de Tâches</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.5.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">
    @php
        $tasks = [
            ['titre' => 'Apprendre Laravel', 'description' => 'Suivre le cours en ligne de Laravel', 'statut' => false],
            ['titre' => 'Créer une API REST', 'description' => 'Développer une API pour l\'application mobile', 'statut' => true],
            ['titre' => 'Configurer la base de données', 'description' => 'Mettre en place les migrations et les seeders', 'statut' => false],
            ['titre' => 'Déployer l\'application', 'description' => 'Mettre en ligne l\'application sur le serveur', 'statut' => true],
        ];
    @endphp
    
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Gestionnaire de Tâches</h1>
        </div>
        
        <div class="bg-white shadow rounded p-6">
            @if(count($tasks) == 0)
                <p class="text-center text-gray-500">Aucune tâche à faire pour le moment.</p>
            @else
                <p class="text-lg font-medium mb-4">Liste des tâches à faire :</p>
                <ul class="space-y-3">
                    @foreach($tasks as $task)
                        @switch($task['statut'])
                            @case(true)
                                <li class="p-3 rounded bg-green-100 border-l-4 border-green-500 flex justify-between items-center">
                                @break
                            @case(false)
                                <li class="p-3 rounded bg-red-100 border-l-4 border-red-500 flex justify-between items-center">
                                @break
                        @endswitch
                            <div>
                                <h3 class="font-semibold">{{ $task['titre'] }}</h3>
                                <p class="text-sm text-gray-600">{{ $task['description'] }}</p>
                            </div>
                            <div>
                                @if($task['statut'])
                                    <i class="fas fa-check-circle text-green-500 text-xl"></i>
                                @else
                                    <i class="fas fa-times-circle text-red-500 text-xl"></i>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>