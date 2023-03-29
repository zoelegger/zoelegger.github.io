const form = document.querySelector('form');

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  const formData = new FormData(event.target);
  const response = await fetch('https://ejemplo.com/procesar-formulario', {
    method: 'POST',
    body: formData,
  });
  const result = await response.text();
  alert(result);
});
