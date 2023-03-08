import logo from './logo.svg';
import './App.css';
import { useEffect, useState } from 'react';

function App() {

  const [Item, setItem] = useState([]);
  useEffect( ()=>{
    fetch("http://127.0.0.1/react-php/api/api.php")
    .then((response) => response.json())
    .then((data) => console.log(data));
  });

  return (
    <div className="App">
      <p>HH</p>
    </div>
  );
}

export default App;
