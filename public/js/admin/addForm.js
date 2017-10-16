var room = 1;
function add_form() {
    room++;
    var objTo = document.getElementById('question_answer_area');
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="label">Room ' + room +':</div><div class="content"><span>Width: <input type="text" style="width:48px;" /><small>(ft)</small> X</span><span>Length: <input type="text" style="width:48px;" namae="length[]" value="" /><small>(ft)</small></span></div>';
    
    
	objTo.appendChild(divtest);


}
/*console.log('Hi');

	$(document).ready(function(){
    $("#question_answer_add_button").click(function(){
        $("question_answer_area").append("<b>Prepended text</b>. ");
    });
    $("#btn2").click(function(){
        $("ol").append("<li>Prepended item</li>");
    });
});
*/