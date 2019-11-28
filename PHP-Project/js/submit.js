var fakeSubmit = function (event) {
    var output = document.getElementById('fakesubmit');
    output.submit();
    return false;
    // prevent the default anchor behaviour
    event.preventDefault();
}