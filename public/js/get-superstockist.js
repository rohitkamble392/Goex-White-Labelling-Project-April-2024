  $(document).ready(function() {
            $.ajax({
                url: '/get-superstockist',
                type: 'GET',
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