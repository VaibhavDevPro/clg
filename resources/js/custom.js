import $ from 'jquery';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'; // Optional: import Bootstrap CSS

// Ensure jQuery is available globally if necessary
window.$ = $;
window.jQuery = $;


const flatpickr = require("flatpickr");

// es modules are recommended, if available, especially for typescript
import flatpickr from "flatpickr";

// Initialize Flatpickr on elements with the class 'datepicker'
flatpickr('.datepicker', {
    dateFormat: "Y-m-d", // Optional: set the date format to Year-Month-Day
    altInput: true,      // Optional: to display a more human-friendly date
    altFormat: "F j, Y", // Optional: sets display format for altInput
});