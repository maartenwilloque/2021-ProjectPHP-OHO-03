require('./bootstrap');

// Make 'MyExpenseTM' accessible inside the HTML pages
import MyExpenseTM from "./MyExpenseTM";
window.MyExpenseTM = MyExpenseTM;
// Run the hello() function
MyExpenseTM.hello();
