<x-staff-layout>
    <!-- Content Area -->
    <div class="content" id="report">
        <h2>Monthly Report</h2>
        <div class="chart-container">
            <canvas id="clientsChart"></canvas>
            <canvas id="servicesChart"></canvas>
            <canvas id="grossIncomeChart"></canvas>
            <canvas id="incomeChart"></canvas>
        </div>
    </div>

    <script>
        function generateChart(id, labels, data) {
            new Chart(document.getElementById(id), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50']
                    }]
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            generateChart("clientsChart", ["New", "Returning"], [60, 40]);
            generateChart("servicesChart", ["Massage", "Facial", "Other"], [50, 30, 20]);
            generateChart("grossIncomeChart", ["Total Income"], [5000]);
            generateChart("incomeChart", ["Service Revenue", "Tips"], [4500, 500]);
        });
    </script>
</x-staff-layout>