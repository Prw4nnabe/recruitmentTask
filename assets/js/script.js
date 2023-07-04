function removeUser(userId) {
  fetch(`partials/removeUser.php?id=${userId}`, {
    method: 'POST',
  })
    .then((response) => {
      if (response.ok) {
        // reload
        window.location.reload();
      } else {
        console.error('Error while deleting a user');
      }
    })
    .catch((error) => {
      console.error('Error:', error.message);
    });
}
