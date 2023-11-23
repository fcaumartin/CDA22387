import { useState } from "react";

function App() {

  const [compteur, setCompteur] = useState(0);

  const handleClick = (event) => {
    let tmp = compteur
    tmp++
    setCompteur(tmp)
  }


  return (
    <div >
      <button onClick={handleClick}>Compteur = {compteur}</button>
    </div>
  );
}

export default App;
