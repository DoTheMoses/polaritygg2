function remove_hash_on_top(ev){
  if(window.pageYOffset==0)
  history.pushState("", document.title, window.location.pathname + window.location.search);
}
window.onscroll=remove_hash_on_top;

var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var my_offset;

if (w > 767) {
  my_offset = 76.281;
} else {
  my_offset = 97.656;
}

$(document).ready(function(){
    $("#nav").affix({
        offset: { 
            top: my_offset
        }
    });
});

 $(document).ready(function() {
  var s = $("#nav");
  var pos = s.position();                    
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    if (windowpos >= pos.top) {
        s.addClass("stick");
    } else {
        s.removeClass("stick"); 
    }
  });
});