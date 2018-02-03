$(document).ready(function() {

  $("body").hide();
  $("body").fadeIn(1000);

  $("#viewform").click(function(){
    $("#form").slideToggle();
    $("#table").slideUp();
    $("#success").hide();
  });

  $("#viewtable").click(function(){
    $("#table").slideToggle();
    $("#form").slideUp();
  });

  $("#success").hide();

  $("#restaurantform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "submit.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("#form").hide();
        $("#success").slideDown();
      },
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }

    });

    resetForm();

  });

  function resetForm() {
    document.getElementById("restaurantform").reset();
  };

});
