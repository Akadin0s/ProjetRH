document.addEventListener('DOMContentLoaded', function () {
    const headers = document.querySelectorAll('#data th');
    const checkboxes = document.querySelectorAll('.headerCheckbox');
    const table = document.getElementById('data');
    const dwbutton = document.getElementById('downbutton');
    const btnsearch = document.getElementById('btsearch');
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
            dwbutton.hidden = false;
        } else {
            table.classList.add('hidden');
            dwbutton.hidden = true;
        }
    }

    // Function to show a specific column
    function showColumn(index) {
        const rows = document.querySelectorAll('#data tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('th, td');
            cells[index].classList.remove('hidden');
        });
    }

    // Function to hide a specific column
    function hideColumn(index) {
        const rows = document.querySelectorAll('#data tr');
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



    btnsearch.addEventListener('click', function () {

        // Declare variables
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("data");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
            tr[i].classList.add('hidden'); // Hide the row initially

            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {

                    txtValue = td[j].textContent || td[j].innerText;

                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        console.log(txtValue);
                        tr[i].classList.remove('hidden'); // Show the row if match is found
                        console.log(tr[i]);
                        break; // Exit the loop if a match is found in a cell
                    }

                }
            }
            if(tr[i].classList.contains('hidden')){
                for (j = 0; j < td.length; j++){
                    td[j].classList.add('hidden'); 
                }
            }
        }
    });


        dwbutton.addEventListener('click', function () {

            var table1 = table;
            var table2excel = new Table2Excel();
            if (table1) {                
                table2excel.export(table1);
                console.log(table1);
            } else {
                console.error('Table not found!');
            }
        });
        

    });







/*
function createVisibleTable() {
    const cloneTable = table.cloneNode(true);
    const cloneHeaders = cloneTable.querySelectorAll('th');
    const cloneRows = cloneTable.querySelectorAll('tr');

    headers.forEach((header, index) => {
        if (header.classList.contains('hidden')) {
            cloneHeaders[index].remove();
            cloneRows.forEach(row => {
                const cells = row.querySelectorAll('th, td');
                if (cells[index]) {
                    cells[index].remove();
                }
            });
        }
    });

    return cloneTable;
}
*/


