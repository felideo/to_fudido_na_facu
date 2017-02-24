$(document).ready(function() {
	// alert(1);
});

String.prototype.replace_all = function(search, replacement){
    var target = this;
    return target.split(search).join(replacement);
}