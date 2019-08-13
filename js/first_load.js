function disableBookings(loged) {
  if (loged === 0) {
    const plusBtn = document.querySelectorAll('.activity-plus-btn');
    plusBtn.forEach(function(btn) {
      btn.setAttribute('href', '#modal-login');
    });
  }
}
