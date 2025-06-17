document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const id = this.getAttribute('data-id');
            const form = document.getElementById(`deleteForm-${id}`);

            Swal.fire({
                title: '', // Tidak ada judul
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
                background: '#6c7b95', // Warna abu-abu
                buttonsStyling: false, // Menonaktifkan styling default tombol
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit form jika pengguna memilih OK
                }
            });
        });
    });
});


