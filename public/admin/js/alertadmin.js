document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-delete');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const form = this.closest('.delete-form');

            Swal.fire({
                title: '',
                html: `
                    <div class="text-center">
                        <i class="fas fa-bell fa-3x text-white mb-3"></i>
                        <p class="h5 text-white">Apakah yakin ingin menghapus data?</p>
                    </div>
                `,
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel',
                customClass: {
                    popup: 'custom-swal-popup',
                    confirmButton: 'custom-confirm-button',
                    cancelButton: 'custom-cancel-button',
                },
                background: '#6c7b95',
                buttonsStyling: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});