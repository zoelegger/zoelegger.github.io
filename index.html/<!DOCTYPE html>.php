<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario de registro</title>
  <style>
    /* Estilos CSS para el formulario */
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    label, input {
      margin: 5px;
    }
    button {
      margin: 10px;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="root"></div>
  
  <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/babel-standalone@7.14.6/babel.min.js"></script>
  
  <script type="text/babel">
    // Componente de formulario
    class Formulario extends React.Component {
      constructor(props) {
        super(props);
        this.state = {
          nombre: '',
          email: '',
          mensaje: ''
        };
      }
      
      // Manejadores de eventos para actualizar el estado del componente
      handleNombreChange = event => {
        this.setState({ nombre: event.target.value });
      }
      
      handleEmailChange = event => {
        this.setState({ email: event.target.value });
      }
      
      handleMensajeChange = event => {
        this.setState({ mensaje: event.target.value });
      }
      
      handleSubmit = event => {
        event.preventDefault();
        // Aquí podrías guardar los datos en una base de datos o hacer algo con ellos
        console.log('Nombre: ', this.state.nombre);
        console.log('Email: ', this.state.email);
        console.log('Mensaje: ', this.state.mensaje);
        // Reiniciamos el estado del componente
        this.setState({ nombre: '', email: '', mensaje: '' });
      }
      
      // Renderizamos el formulario
      render() {
        return (
          <form onSubmit={this.handleSubmit}>
            <label>
              Nombre:
              <input type="text" value={this.state.nombre} onChange={this.handleNombreChange} />
            </label>
            <label>
              Email:
              <input type="email" value={this.state.email} onChange={this.handleEmailChange} />
            </label>
            <label>
              Mensaje:
              <textarea value={this.state.mensaje} onChange={this.handleMensajeChange} />
            </label>
            <button type="submit">Enviar</button>
          </form>
        );
      }
    }
    
    // Renderizamos el componente en el elemento con ID "root"
    ReactDOM.render(<Formulario />, document.getElementById('root'));
  </script>
</body>
</html>
