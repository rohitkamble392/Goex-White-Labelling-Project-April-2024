$(document).ready(function () {
    $.ajax({
        url: '/get-retailer',
        type: 'GET',
        success: function (response) {
            $('#retailerId').empty();

            console.log(response);
            // Iterate over the data and append options
            response.data.forEach(function (item) {
                $('#retailerId').append('<option value="' + item.ID + '">' + item.ContactPer_Name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});