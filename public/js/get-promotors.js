$(document).ready(function () {
    $.ajax({
        url: '/get-promoter',
        type: 'GET',
        success: function (response) {
            $('#promoterId').empty();

            console.log(response);
            // Iterate over the data and append options
            response.data.forEach(function (item) {
                $('#promoterId').append('<option value="' + item.ID + '">' + item.ContactPer_Name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});