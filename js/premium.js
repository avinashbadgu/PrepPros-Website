$(function() {
    $('#paymentForm').submit(function(e) {
        e.preventDefault();
        // Your payment processing logic goes here
        // For demonstration purposes, let's assume the payment is successful
        // Show SweetAlert on successful payment
        swal("Payment Successful!", "Your payment has been successfully processed.", "success").then((value) => {
            if (value) {
                // Send AJAX request to update user status
                $.ajax({
                    url: 'user_update.php', // URL of your server-side script
                    method: 'POST',
                    data: { userId: <?php echo $userId; ?> }, // Pass user ID to the server
                    dataType: 'json',
                    success: function(response) {
                        if(response.success) {
                            // User status updated successfully
                            // You can redirect to a thank you page or perform any other action
                            console.log('User status updated successfully');
                        } else {
                            // Error updating user status
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX error
                        console.error(error);
                    }
                });
            }
        });
    });
});
