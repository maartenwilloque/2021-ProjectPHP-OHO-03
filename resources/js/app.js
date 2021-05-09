require('./bootstrap');


// Make 'myExpense' accessible inside the HTML pages
import myExpense from "./myExpense";

window.myExpense = myExpense;
// Run the hello() function
myExpense.hello();

$(function () {
    $('nav i.fas').addClass('fa-fw mr-1');
});

$(function () {
    $('[required]').each(function () {
    });

    $('nav i.fas').addClass('fa-fw mr-1');

    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        html: true,
    }).on('click', '[data-toggle="tooltip"]', function () {
        // hide tooltip when you click on it
        $(this).tooltip('hide');
    });
});

