// Variable "clients" comes from PHP

window.addEventListener(
    'load',
    function () {
        console.log(clients);
        const clientsTbody = document.getElementById('clients-tbody');
        clients.forEach(client => {
            const row = document.createElement('tr');

            for (const clientColumn in client) {
                const column = document.createElement('td');
                column.textContent = client[clientColumn];

                row.append(column);
            }

            const actionsColumn = document.createElement('td');
            actionsColumn.className = 'd-flex align-items-center justify-content-around gap-1';

            const editButton = document.createElement('a');
            editButton.textContent = 'Edit';
            editButton.href = '#';
            editButton.className = 'btn btn-outline-primary btn-sm';

            const deleteButton = document.createElement('a');
            deleteButton.textContent = 'Delete';
            deleteButton.href = '#';
            deleteButton.className = 'btn btn-outline-danger btn-sm';

            actionsColumn.append(
                editButton,
                deleteButton
            );
            row.append(actionsColumn);
            clientsTbody.append(row);
        });
    }
);