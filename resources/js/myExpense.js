let MyExpense = (function () {

    function hello() {
        console.log('MyExpense JavaScript works! 🙂');
    }

    return {
        hello: hello    // publicly available as: VinylShop.hello()
    };

})();

export default MyExpense;
