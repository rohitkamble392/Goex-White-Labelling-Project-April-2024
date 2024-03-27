$(document).ready(function () {
    $.ajax({
        url: '/get-company',
        type: 'GET',
        success: function (response) {
            $('#companyId').empty();

            console.log(response);
            // Iterate over the data and append options
            response.data.forEach(function (item) {
                $('#companyId').append('<option value="' + item.User_id + '">' + item.Com_Name + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});