<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var ctx = document.getElementById("mybarChart").getContext("2d");

            var mybarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3'],
                datasets: [{
                label: 'Candidate A Votes',
                backgroundColor: "#000080",
                data: [90,0,0]
                }, {
                label: 'Candidate B Votes2',
                backgroundColor: "#d3d3d3",
                data: [0,70,0]
                }, {
                label: 'Candidate C  Votes3',
                backgroundColor: "#add8e6",
                data: [0,0,45]
                }]
            },

            options: {
                legend: {
                display: true,
                position: 'top',
                labels: {
                    fontColor: "#000080",
                }
                },
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true
                    }
                }]
                }
            }
            });     
        });
    </script>
</x-app-layout>
