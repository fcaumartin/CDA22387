import axios from "axios";
import { useEffect, useState } from "react";

function App() {

  const [liste, setListe] = useState([]);

  const loadData = () => {
    axios.get("http://127.0.0.1:8000/api/clients",
      {
        headers: {
          Accept: "application/json"
        }
      }
    ).then(
      (reponse) => {
        console.log("les données sont servies...")
        console.log(reponse.data)
        setListe(reponse.data);
      }
    )
  }

  useEffect(()=>{
    console.log("Chargement du composant...");

    loadData();

  },[])

  const handleClick = () => {
    axios.post("http://127.0.0.1:8000/api/clients", {nom:"111", prenom:"222"}).then((data)=>{
      console.log(data);

        loadData();
    });
  }

  return (
    <div >
      App test
      <button onClick={handleClick}>Ajouter</button>
      <hr />
      {
        liste.map((client, index)=>(
          <div key={index}>
            {client.nom} {client.prenom}
          </div>
        ))
      }
    </div>
  );
}

export default App;
