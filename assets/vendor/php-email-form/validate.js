document.querySelectorAll('.php-email-form').forEach(form => {
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const thisForm = this;
    const action = thisForm.getAttribute('action');
    const formData = new FormData(thisForm);

    if (!action) {
      displayMessage(thisForm, 'The form action is not set.', 'error');
      return;
    }

    // Display loading message
    thisForm.querySelector('.loading').style.display = 'block';
    thisForm.querySelector('.error-message').style.display = 'none';
    thisForm.querySelector('.sent-message').style.display = 'none';

    fetch(action, {
      method: 'POST',
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        thisForm.querySelector('.loading').style.display = 'none';
        if (data.status === 'success') {
          displayMessage(thisForm, data.message, 'success');
          thisForm.reset();
        } else {
          displayMessage(thisForm, data.message, 'error');
        }
      })
      .catch(error => {
        thisForm.querySelector('.loading').style.display = 'none';
        displayMessage(thisForm, `An error occurred: ${error.message}`, 'error');
      });
  });
});

function displayMessage(form, message, type) {
  const errorMessage = form.querySelector('.error-message');
  const successMessage = form.querySelector('.sent-message');
  if (type === 'error') {
    errorMessage.textContent = message;
    errorMessage.style.display = 'block';
    successMessage.style.display = 'none';
  } else if (type === 'success') {
    successMessage.textContent = message;
    successMessage.style.display = 'block';
    errorMessage.style.display = 'none';
  }
}
