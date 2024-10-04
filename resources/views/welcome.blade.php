<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welkom bij Epic-Sprint</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Tailwind CSS styles */
            body { font-family: 'Figtree', sans-serif; }
        </style>
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white">
                    Welkom bij de Scrum-webapplicatie
                </h1>

                <div class="mt-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-200">
                        <h2 class="text-2xl font-semibold">Introductie van Scrum en het Project</h2>
                        <p class="mt-4">
                            Scrum is een Agile-ontwikkelmethode die zich richt op iteratieve ontwikkeling en samenwerking. Het helpt teams effectief te werken en projecten succesvol af te ronden.
                        </p>

                        <h3 class="mt-6 text-xl font-semibold">Sprints</h3>
                        <p class="mt-2">
                            Een Sprint is een korte periode (meestal 2-4 weken) waarin het team een set van taken afwerkt. Dit helpt om het project in beheersbare stukken op te delen en voortgang te meten.
                        </p>

                        <h3 class="mt-6 text-xl font-semibold">Rollen</h3>
                        <ul class="list-disc list-inside mt-2">
                            <li><strong>Product Owner:</strong> Beheert de Product Backlog en prioriteert taken.</li>
                            <li><strong>Scrum Master:</strong> Faciliteert het Scrum-proces en helpt het team effectief te werken.</li>
                            <li><strong>Teamleden:</strong> Voeren taken uit en werken aan de doelen van de Sprint.</li>
                        </ul>

                        <h3 class="mt-6 text-xl font-semibold">Artefacten</h3>
                        <ul class="list-disc list-inside mt-2">
                            <li><strong>Product Backlog:</strong> Lijst van alle taken voor het project.</li>
                            <li><strong>Sprint Backlog:</strong> Lijst van taken voor de huidige Sprint.</li>
                            <li><strong>Definition of Done:</strong> Criteria die bepalen wanneer een taak voltooid is.</li>
                        </ul>

                        <h2 class="mt-6 text-2xl font-semibold">Aan de slag</h2>
                        <p class="mt-4">
                            Om te beginnen met onze Scrum-webapplicatie, kunt u deelnemen aan een Sprint, taken toewijzen of oppakken, en de voortgang van het project volgen.
                        </p>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
