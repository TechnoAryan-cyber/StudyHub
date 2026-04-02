// Function to validate the feedback form
function validateForm() {
    let name = document.getElementById('name').value;
    let message = document.getElementById('message').value;

    if (name.trim() === "") {
        alert("Please enter your name.");
        return false;
    }

    if (message.trim() === "") {
        alert("Please enter your feedback message.");
        return false;
    }

    return true;
}

// Optional: Quiz interaction enhancement if needed in future
document.addEventListener('DOMContentLoaded', () => {
    console.log("StudyHub Portal Loaded Successfully!");
});
