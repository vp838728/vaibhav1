$(document).ready(function() {
    $('#booking-type').change(function() {
        var bookingType = $(this).val();

        if (bookingType === 'half-day') {
            $('#slot-label').show();
            $('#slot').show();
        } else {
            $('#slot-label').hide();
            $('#slot').hide();
        }
    });

    $('#submit-button').click(function() {
        var bookingType = $('#booking-type').val();
        var checkinDate = $('#checkin-date').val();
        var checkoutDate = $('#checkout-date').val();

        var slot = $('#slot').val();

        // Perform client-side validation
        if (!checkinDate) {
            alert('Please select a check-in date.');
            return;
        }
        if (!checkoutDate) {
            alert('Please select a check-out date.');
            return;
        }
        if (bookingType === 'half-day' && !slot) {
            alert('Please select a slot.');
            return;
        }

        // Create booking object
        var booking = {
            bookingType: bookingType,
            checkinDate: checkinDate,
            checkoutDate: checkoutDate,

            slot: slot
        };

        // Send booking data to the server
        $.ajax({
            url: 'process_booking.php',
            type: 'POST',
            data: booking,
            success: function(response) {
                if (response === 'success') {
                    alert('Room booked successfully!');
                } else {
                    alert('Failed to book the room. Please try again.');
                }
            },
            error: function() {
                alert('An error occurred. Please try again later.');
            }
        });
    });
});
