$(document).ready(function () {
    $.ajax({
        url: '/get-employees',
        type: 'GET',
        success: function (response) {
            $('#employeeId').empty();

            // Iterate over the data and append options
            response.data.forEach(function (item) {
                $('#employeeId').append('<option value="' + item.ID + '">' + item.Name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});