document.addEventListener("DOMContentLoaded", function () {
    let profileModal = document.getElementById("profileModal");
    profileModal.addEventListener("hidden.bs.modal", function () {
        document.getElementById("profileForm").reset(); // Reset form fields
    });
});
