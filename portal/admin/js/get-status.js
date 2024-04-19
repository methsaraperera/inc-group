document.addEventListener('DOMContentLoaded', function () {
    // Fetch data from PHP file
    fetch('php/fetch_data.php')
        .then(response => response.json())
        .then(data => {
            // Use fetched data to populate Chart.js
            var ctx = document.getElementById('pendingRequestsChart').getContext('2d');
            var pendingRequestsChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['Approved', 'In Review', 'Completed', 'Rejected'],
                    datasets: [{
                        label: 'Requests',
                        data: [data.approved, data.in_review, data.completed, data.rejected], // Include the data for 'Rejected'
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)', // Red for approved
                            'rgba(255, 205, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 99, 132, 0.5)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgb(255, 205, 86)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1,
                        barThickness: 20 // Adjust this value to decrease the bar height
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{}],
                        yAxes: [{}]
                    },
                    legend: {
                        display: false // Hide the legend
                    }
                }
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});
