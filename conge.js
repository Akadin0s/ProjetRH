



// Add the dates that are considered as days off
const daysOff = [
    "2024-01-01", // Example date format (YYYY-MM-DD)
    "2024-01-11",
    "2024-01-14",
    "2024-03-12",
    "2024-04-10",
    "2024-04-11",
    "2024-05-01",
    "2024-06-17",
    "2024-06-18",
    "2024-07-07",
    "2024-07-30",
    "2024-08-14",
    "2024-08-20",
    "2024-08-21",
    "2024-09-16",
    "2024-09-17",
    "2024-11-06",
    "2024-11-18",
    "2025-01-01", 
    "2025-01-11",
    "2025-01-14",
    "2025-03-01",
    "2025-03-31",
    "2025-04-01",
    "2025-05-01",
    "2025-06-06",
    "2025-06-07",
    "2025-07-27",
    "2025-07-30",
    "2025-08-14",
    "2025-08-20",
    "2025-08-21",
    "2025-09-05",
    "2025-09-06",
    "2025-11-06",
    "2025-11-18",
];

function isDayOff(date) {
    return daysOff.includes(date);
}

function calculateEndDate(startDate, daysRequested) {
    let daysCounted = 0;
    let currentDate = new Date(startDate);

    while (daysCounted < daysRequested) {
        const formattedDate = currentDate.toISOString().split('T')[0];
        if (!isDayOff(formattedDate)) {
            daysCounted++;
        }
        currentDate.setDate(currentDate.getDate() + 1);
    }

    return currentDate;
}

function updateLeaveCalculation() {
    const startDate = new Date(document.getElementById("startDate").value);
    const daysRequested = parseInt(document.getElementById("daysRequested").value);
    const remainingDaysElement = document.getElementById("remainingDays");
    const endDateElement = document.getElementById("endDate");
    const pprcode = document.getElementById("ppr");

    if (isNaN(startDate) || isNaN(daysRequested) || daysRequested <= 0) {
        remainingDaysElement.textContent = "Please enter a valid start date and a positive number of leave days.";
        endDateElement.value = "";
        return;
    }

    const endDate = calculateEndDate(startDate, daysRequested);

    if (daysRequested > pprcode) {
        remainingDaysElement.value = "Exceeded leave days";
        endDateElement.value = "";
    } else {
        const remainingDays = pprcode - daysRequested;
        remainingDaysElement.value = remainingDays;
        endDateElement.value = endDate.toISOString().split('T')[0];
    }
}


