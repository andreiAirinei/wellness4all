$(document).ready(function() {
  $('#modal-login').modal();
  $('#modal-bookings').modal();
  $('#modal-bookings').modal({
    dismissible: false
  });
  $('#modal-exercise1').modal();
  $('#modal-exercise1').modal({
    dismissible: false
  });
  $('#modal-exercise2').modal();
  $('#modal-exercise2').modal({
    dismissible: false
  });
  $('#modal-exercise3').modal();
  $('#modal-exercise3').modal({
    dismissible: false
  });
  $('#modal-exercise4').modal();
  $('#modal-exercise4').modal({
    dismissible: false
  });
  $('#modal-exercise5').modal();
  $('#modal-exercise5').modal({
    dismissible: false
  });
  $('#modal-exercise6').modal();
  $('#modal-exercise6').modal({
    dismissible: false
  });
  $('#modal-register').modal();
  $('#modal-register').modal({
    dismissible: false
  });

  $('.datepicker').datepicker({
    container: 'body'
  });

  $('#logoutBtn').on('click', function() {
    jQuery.ajax({
      url: 'http://localhost/wellness4all/php/logout.php',
      success: function(response) {
        console.log('Logged out!');
      }
    });
  });
});

// Smooth Scrolling
$('#navbar a, .read-more').on('click', function(event) {
  if (this.hash !== '') {
    event.preventDefault();

    const hash = this.hash;

    $('html, body').animate(
      {
        scrollTop: $(hash).offset().top - 100
      },
      300
    );
  }
});
