import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import GoogleLogin from 'react-google-login';

class App extends Component {

  constructor(){
    super();
    this.login = this.login.bind(this);
    this.getValue = this.getValue.bind(this);
  }



  login(){
  }


  getValue(elm){
    console.log(elm.target.value);
    this.setState({first_name: elm.target.value})
  }

  render() {
    return (
      <div className="App">
          <form>
            <input type= "text" name ="first_name" onChange={this.getValue(elm)}*//>
            <button type="submit">Ingresar</button>
          </form>
      </div>
    );
  }
}

export default App;
