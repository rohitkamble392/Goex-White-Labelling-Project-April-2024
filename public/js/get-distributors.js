$(document).ready(function () {
    $.ajax({
        url: '/get-distributor',
        type: 'GET',
        success: function (response) {
            $('#distributorId').empty();

            // Iterate over the data and append options
            response.data.forEach(function (item) {
                $('#distributorId').append('<option value="' + item.ID + '">' + item.Name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});