var room = 1;
function add_form() {
    room++;
    var objTo = document.getElementById('question_answer_area');
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="label">Room ' + room +':</div><div class="content"><span>Width: <input type="text" style="width:48px;" /><small>(ft)</small> X</span><span>Length: <input type="text" style="width:48px;" namae="length[]" value="" /><small>(ft)</small></span></div>';
	objTo.appendChild(divtest);
}

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
/*function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
*/