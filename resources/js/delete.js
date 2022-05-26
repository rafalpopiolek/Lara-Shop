$(function () {
    $('.delete').click(function () {
        Swal.fire({
            title: 'Czy napewno chcesz usunąć?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak',
            cancelButtonText: 'Nie'
        })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: deleteUrl + $(this).data("id")
                    })
                        .done(function (data) {
                            window.location.reload();
                        })
                        .fail(function (data) {
                            Swal.fire('Błąd', data.responseJSON.message, data.responseJSON.status);
                        })
                }
            })
    })
})
