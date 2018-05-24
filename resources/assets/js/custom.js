$(".addbasket-btn-val").on("click", function() {
  var $button = $(this);
  var oldValue = $(".addbasket-input").val();
  if ($button.text() == "+") {
	  var newVal = parseFloat(oldValue) + 1;
	} else {
   // Don't allow decrementing below zero
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 0;
    }
  }

  $(".addbasket-input").val(newVal);

});