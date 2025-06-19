document.getElementById('ticketForm').addEventListener('submit', function (e) {
    const source = document.getElementById('source').value;
    const destination = document.getElementById('destination').value;
    if (source === destination) {
        alert('Source and destination cannot be the same.');
        e.preventDefault();
    }
});
