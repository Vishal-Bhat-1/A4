document.getElementById('triage-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const patientName = document.getElementById('patient-name').value;
    const severity = document.getElementById('severity').value;
    addPatient(patientName, severity);
});

function addPatient(name, severity) {
    const patientList = document.getElementById('patient-list');
    const patientItem = document.createElement('div');
    patientItem.textContent = `Name: ${name}, Severity: ${severity}`;
    patientList.appendChild(patientItem);
}
