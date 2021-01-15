jQuery(function(){
   jQuery('.clearBtn').click();
});



//Code to,on page load, automatically move the cursor at after the last character in textarea
var val = $("#code").val();
$('textarea').focus().val("").val(val);




//Jquery-Ajax Function to send code editor data to controller/write.php file and if file is sent successfully, reload the output section of the Coditor
$('.executeBtn').click(function () {
  var code = $("#code").val();
  $.ajax({
    url: 'controller/write.php',
    type: 'POST',
    data: {
        codes: code
    },
    success: function(msg) {
      $("#output").load(location.href + " #output");
    }               
  });
  
});

//Jquery-Ajax Function to send code editor data to controller/write.php file and if file is sent successfully, reload the output section of the Coditor
$('.clearBtn').click(function () {
  $.ajax({
    url: 'controller/write.php',
    type: 'POST',
    data: {
        clear: 1
  },
    success: function(msg) {
      $("#output").load(location.href + " #output");
      console.log(msg);
    }               
  });
  
});




//Function to toggle between dark and light mode
function toggleMode(){
  $('.editor').toggleClass("lightTheme darkTheme");
  $('#code').toggleClass("lightTheme darkTheme");
  $('.wrapper').toggleClass("lightThemeWrapper darkThemeWrapper");
}

//Function to toggle orientation of editor and output
function toggleOrientation(){
  $('.editor').toggleClass("topThemeEditor sideThemeEditor");
  $('#output').toggleClass("topThemeOutput sideThemeOutput");
}

//Auto change orientation to topTheme when screen width is below 650px
$( window ).resize(function() {  
  if($(document).width() < 650){
    if($('.editor').hasClass('sideThemeEditor')){
      toggleOrientation();
    }
  }
});
//Auto change orientation to topTheme on page load when screen width is below 650px
if($(document).width() < 650){
  if($('.editor').hasClass('sideThemeEditor')){
    toggleOrientation();
  }
}


//Increase Font
function increaseFont(){
  var fontSize = $("#code").css('font-size').replace("px", "");
  fontSize = Math.ceil(fontSize) + 2;
  
  $("#code").css('font-size', fontSize);
}


//Decrease Font
function decreaseFont(){
  var fontSize = $("#code").css('font-size').replace("px", "");
  fontSize = Math.ceil(fontSize) - 2;
  
  $("#code").css('font-size', fontSize);
}


//Change text color in editor
$("#colorPicker").change(function(){
  $("#code").css("color", $("#colorPicker").val());
});