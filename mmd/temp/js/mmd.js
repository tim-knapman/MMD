$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
	});
});

$.fn.animateBG = function(x, y, speed, callback) {
    var pos = this.css('background-position').split(' ');
    this.x = pos[0] ? +pos[0].replace(/\D/g,'') : 0,
    this.y = pos[1] ? +pos[1].replace(/\D/g,'') : 0,
    $.Animation( this, {
        x: y,
        y: x
    }, { 
        duration: speed
    }).progress(function(e) {
        this.css('background-position', e.tweens[0].now+'px '+e.tweens[1].now+'px');
    }).done(callback);
    return this;
};

(function recursive() {
    $('#client').animateBG(100, 0, 1000, function() {
        this.animateBG(0, 0, 1000, recursive);
    });
}())

$('#process').responsiveTabs({
    startCollapsed: 'accordion'
});