document.addEventListener("DOMContentLoaded", function() {
    let profileModal = document.getElementById("profileModal");
    let profileForm = document.getElementById("profileForm");

    profileModal.addEventListener("hidden.bs.modal", function() {
        profileForm.reset();
    });
});
document.addEventListener("DOMContentLoaded", function() {
    let supplierModal = document.getElementById("supplierModal");
    let supplierForm = document.getElementById("supplierForm");

    supplierModal.addEventListener("hidden.bs.modal", function() {
        supplierForm.reset();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Get all edit buttons
    const editButtons = document.querySelectorAll('.edit-btn');

    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Extract data from data attributes
            const supplierId = this.getAttribute('data-supplier-id');
            const supplierName = this.getAttribute('data-supplier-name');
            const supplierLocation = this.getAttribute('data-supplier-location');
            const supplierContact = this.getAttribute('data-supplier-contact');

            // Populate your form fields or modal with the data
            document.querySelector('#edit-supplier-id').value = supplierId;
            document.querySelector('#edit-supplier-name').value = supplierName;
            document.querySelector('#edit-supplier-location').value = supplierLocation;
            document.querySelector('#edit-supplier-contact').value = supplierContact;

            openEditModal();
        });
    });
});

function openEditModal() {
    document.querySelector('#editModal').classList.remove('hidden');
}

function closeEditModal() {
    document.querySelector('#editModal').classList.add('hidden');
}

function resetModal() {
    // Reset the form inside the modal
    const modalForm = document.getElementById('modalForm');
    if (modalForm) {
        modalForm.reset();
    }
}
