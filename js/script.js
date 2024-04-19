fetch('https://neelop1204.github.io/Priyanshi/submit.php', {
    method: 'POST',
    body: formData
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        alert('Thank You Priyanshi!!');
        window.location.href = 'thankyou.html';
    } else {
        alert('Error: ' + data.message);
    }
})
.catch(error => {
    console.error('Error:', error);
});
