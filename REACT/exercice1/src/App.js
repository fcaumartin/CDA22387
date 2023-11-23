import { useState } from "react";

function App() {

  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");

  const handleChangeNom = (event) => {
    setNom(event.target.value);
  }

  const handleChangePrenom = (event) => {
    setPrenom(event.target.value);
  }

  return (
    <div >
      <input value={nom} onChange={handleChangeNom}/>
      <input value={prenom} onChange={handleChangePrenom}/>
      <hr/>
      <span>{prenom} {nom}</span>
    </div>
  );
}

export default App;
