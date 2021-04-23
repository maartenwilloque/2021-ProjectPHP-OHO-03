let MyExpenseTM = (function () {

    function hello() {
        console.log('The MyExpenseTMJavaScript works! 🙂');
    }

    return {
        hello: hello    // publicly available as: VinylShop.hello()
    };
})();

export default MyExpenseTM;
