document.addEventListener('DOMContentLoaded', function () {
    const headers = document.querySelectorAll('#etat_civil th');
    const checkboxes = document.querySelectorAll('.headerCheckbox');
    const table = document.getElementById('etat_civil');
    const searcher = document.getElementById('searcher');
    let sortOrder = 'asc';
    let sortedColumnIndex = null;
    // Function to update the selected headers based on the checked checkboxes
    function updateSelectedHeaders() {
        let atLeastOneChecked = false;

        headers.forEach((header, index) => {
            const headerText = header.textContent.trim();
            const matchingCheckbox = Array.from(checkboxes).find(checkbox => checkbox.value === headerText);

            if (matchingCheckbox && matchingCheckbox.checked) {
                header.classList.add('selected');
                showColumn(index);
                atLeastOneChecked = true;
            } else {
                header.classList.remove('selected');
                hideColumn(index);
            }
        });

        // Show the table if at least one checkbox is checked
        if (atLeastOneChecked) {
            table.classList.remove('hidden');
            searcher.classList.remove('hidden');
        } else {
            table.classList.add('hidden');
            searcher.classList.add('hidden');
        }
    }

    // Function to show a specific column
    function showColumn(index) {
        const rows = document.querySelectorAll('#etat_civil tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('th, td');
            cells[index].classList.remove('hidden');
        });
    }

    // Function to hide a specific column
    function hideColumn(index) {
        const rows = document.querySelectorAll('#etat_civil tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('th, td');
            cells[index].classList.add('hidden');
        });
    }

           // Function to sort table rows
    function sortTable(columnIndex) {
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));

        rows.sort((a, b) => {
            const cellA = a.querySelectorAll('td')[columnIndex].textContent;
            const cellB = b.querySelectorAll('td')[columnIndex].textContent;
            return sortOrder === 'asc' ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
        });

        // Append sorted rows to tbody
        rows.forEach(row => tbody.appendChild(row));

        // Toggle sort order for next click
        sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
    }

    // Add click event listeners to headers for sorting
    headers.forEach((header, index) => {
        header.addEventListener('click', () => sortTable(index));
    });

    // Add event listeners to checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectedHeaders);
    });

    // Initialize the selection based on the default state of the checkboxes
    updateSelectedHeaders();
});
