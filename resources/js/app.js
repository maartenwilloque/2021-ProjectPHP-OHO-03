require('./bootstrap');


// Make 'myExpense' accessible inside the HTML pages
import myExpense from "./myExpense";
window.myExpense = myExpense;
// Run the hello() function
myExpense.hello();
