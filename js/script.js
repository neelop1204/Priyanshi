function submitForm(event) {
    event.preventDefault();  // Prevent default form submission

    // Get form data
    const form = document.querySelector('#responseForm');  // Select the form
    console.log(form);  // Log the form to check if it's selected correctly
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
