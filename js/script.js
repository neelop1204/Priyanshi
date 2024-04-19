function submitForm() {
    // Get form data
    const form = document.querySelector('#responseForm');  // Select the form
    const formData = new FormData(form);

    // Make fetch request
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("Thank You Priyanshi!!");
        } else {
            console.error('Error:', data.message);
        }
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
