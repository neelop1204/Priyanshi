function submitForm() {
    // Get form data
    const form = document.getElementById('responseForm');  // Select the form by ID
    const formData = new FormData(form);

    // Make fetch request
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Should print "Thank You Priyanshi!!" if successful
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
