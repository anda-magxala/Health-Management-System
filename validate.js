function validateForm() {
    const contact = document.querySelector('input[name="contact"]').value;
    if (contact.length < 10) {
        alert("Contact must be at least 10 digits.");
        return false;
    }
    return true;
}
