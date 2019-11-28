
var loadImage = function(event) {
    var output = document.getElementById('profile');
    output.src = URL.createObjectURL(event.target.files[0]);
};