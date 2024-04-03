let currentYear, currentMonth;

function initCalendar() {
    const today = new Date();
    currentYear = today.getFullYear();
    currentMonth = today.getMonth() + 1;
    updateCalendar();
}

function updateCalendar() {
    document.getElementById("current-month-year").textContent = `${currentMonth}/${currentYear}`;
    generateCalendar(currentYear, currentMonth);
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 1) {
        currentMonth = 12;
        currentYear--;
    }
    updateCalendar();
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 12) {
        currentMonth = 1;
        currentYear++;
    }
    updateCalendar();
}

function generateCalendar(year, month) {
    // Code for generating calendar
}
