function submitForm() {
    var formData = new FormData(document.querySelector('form'));

    fetch('https://neelop1204.github.io/Priyanshi/submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        // Handle success
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error
    });
}
