  $(document).ready(function() {
            $.ajax({
                url: '/get-superstockistbyid',
                type: 'GET',
                data:'',
                success: function(response) {
                    $('#superStockistId').empty();

                            // Iterate over the data and append options
                            response.data.forEach(function(item) {
                                $('#superStockistId').append('<option value="' + item.ID + '">' + item.Name + '</option>');
                            });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });