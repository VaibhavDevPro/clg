// Initialize Flatpickr on elements with the class 'datepicker'
flatpickr('.datepicker', {
    dateFormat: "Y-m-d", // Optional: set the date format to Year-Month-Day
    altInput: true,      // Optional: to display a more human-friendly date
    altFormat: "F j, Y", // Optional: sets display format for altInput
});

flatpickr('.from-today', {
        minDate: "today",
        maxDate: new Date().fp_incr(30) // 14 days from now
});

$(function() {
    $('.select2-people').select2({
        placeholder: "Select number of people",
        allowClear: true,
        minimumResultsForSearch: Infinity
    });
});