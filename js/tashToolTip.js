document.addEventListener("DOMContentLoaded", function() {
    const taskDates = document.querySelectorAll('.task-date');

    taskDates.forEach(function(date) {
        date.addEventListener('click', function() {
            const tasks = date.dataset.tasks.split(',');
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = 'Tasks: ' + tasks.join(', ');
            date.appendChild(tooltip);

            // Remove the tooltip after a delay
            setTimeout(function() {
                date.removeChild(tooltip);
            }, 3000); // Adjust the delay as needed
        });
    });
});
